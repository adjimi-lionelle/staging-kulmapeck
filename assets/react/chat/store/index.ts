import create from 'zustand';
import { ChatState, Message, Subject } from '../types';

interface ChatStore extends ChatState {
    setMessages: (messages: Message[]) => void;
    addMessage: (message: Message) => void;
    setSubjects: (subjects: Subject[]) => void;
    setCurrentSubject: (subject: Subject | undefined) => void;
    setLoading: (isLoading: boolean) => void;
    setError: (error: string | undefined) => void;
}

export const useChatStore = create<ChatStore>((set) => ({
    messages: [],
    subjects: [],
    currentSubject: undefined,
    isLoading: false,
    error: undefined,

    setMessages: (messages) => set({ messages }),
    addMessage: (message) => set((state) => ({
        messages: [...state.messages, message]
    })),
    setSubjects: (subjects) => set({ subjects }),
    setCurrentSubject: (subject) => set({ currentSubject: subject }),
    setLoading: (isLoading) => set({ isLoading }),
    setError: (error) => set({ error })
}));
