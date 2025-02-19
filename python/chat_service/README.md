# Kulmapeck Chat Service

This is a FastAPI-based service that uses Langchain and OpenAI to provide AI-powered responses for the Kulmapeck student chat feature.

## Setup

1. Create a virtual environment:
```bash
python -m venv venv
```

2. Activate the virtual environment:
```bash
# Windows
venv\Scripts\activate

# Linux/Mac
source venv/bin/activate
```

3. Install dependencies:
```bash
pip install -r requirements.txt
```

4. Create a `.env` file with your OpenAI API key:
```
OPENAI_API_KEY=your_api_key_here
```

## Running the Service

Start the service with:
```bash
uvicorn main:app --reload
```

The service will be available at `http://localhost:8000`.

## API Endpoints

### POST /chat/{subject}
Send a message to get an AI response for a specific subject.

Request body:
```json
{
    "message": "Your question here",
    "student_id": 123,
    "class_name": "Terminal D",
    "specialization": "Science"
}
```

Response:
```json
{
    "success": true,
    "response": "AI response here"
}
```

## Features

- Subject-specific conversations with memory
- Context-aware responses based on student information
- CORS support for web integration
- Environment-based configuration
