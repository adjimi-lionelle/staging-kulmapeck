export interface User {
    id: number;
    name: string;
    avatar?: string;
    isPremium: boolean;
}

export interface Subject {
    id: number;
    name: string;
    icon?: string;
    teacherName: string;
    teacherAvatar?: string;
}

export interface Message {
    id: number;
    content: string;
    fromStudent: boolean;
    createdAt: string;
    subject: Subject;
}

export interface ChatState {
    messages: Message[];
    subjects: Subject[];
    currentSubject?: Subject;
    isLoading: boolean;
    error?: string;
}

export interface WebSocketMessage {
    type: 'message' | 'status' | 'error';
    payload: any;
}
