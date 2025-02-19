from fastapi import FastAPI, HTTPException
from fastapi.middleware.cors import CORSMiddleware
from pydantic import BaseModel
from typing import Optional
from langchain.chat_models import ChatOpenAI
from langchain.chains import ConversationChain
from langchain.memory import ConversationBufferMemory
from langchain.prompts import PromptTemplate
import os
from dotenv import load_dotenv

# Load environment variables
load_dotenv()

app = FastAPI()

# Configure CORS
app.add_middleware(
    CORSMiddleware,
    allow_origins=["*"],  # In production, replace with your domain
    allow_credentials=True,
    allow_methods=["*"],
    allow_headers=["*"],
)

# Initialize LangChain components
llm = ChatOpenAI(
    temperature=0.7,
    openai_api_key=os.getenv("OPENAI_API_KEY")
)

# Create a conversation memory for each subject
subject_memories = {}

class ChatRequest(BaseModel):
    message: str
    student_id: Optional[int] = None
    class_name: Optional[str] = None
    specialization: Optional[str] = None

def get_subject_memory(subject: str) -> ConversationBufferMemory:
    """Get or create a memory instance for a subject"""
    if subject not in subject_memories:
        subject_memories[subject] = ConversationBufferMemory()
    return subject_memories[subject]

def create_conversation(subject: str) -> ConversationChain:
    """Create a conversation chain for a subject"""
    memory = get_subject_memory(subject)
    
    template = """You are a knowledgeable teacher assistant helping students with their studies.
    Current subject: {subject}
    Previous conversation: {history}
    Student: {input}
    Assistant: Let me help you with {subject}. """
    
    prompt = PromptTemplate(
        input_variables=["history", "input", "subject"],
        template=template
    )
    
    return ConversationChain(
        llm=llm,
        memory=memory,
        prompt=prompt,
        verbose=True
    )

@app.post("/chat/{subject}")
async def chat(subject: str, request: ChatRequest):
    try:
        conversation = create_conversation(subject)
        
        # Include student context in the conversation
        context = f"[Student ID: {request.student_id}"
        if request.class_name:
            context += f", Class: {request.class_name}"
        if request.specialization:
            context += f", Specialization: {request.specialization}"
        context += "] "
        
        # Get AI response
        response = conversation.predict(
            subject=subject,
            input=context + request.message
        )
        
        return {
            "success": True,
            "response": response
        }
    except Exception as e:
        raise HTTPException(status_code=500, detail=str(e))

if __name__ == "__main__":
    import uvicorn
    uvicorn.run(app, host="0.0.0.0", port=8000)
