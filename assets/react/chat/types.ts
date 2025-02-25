export interface Matiere {
    name: string;
    icon?: string;
}

export interface Subject {
    id: number;
    matiere: Matiere;
    teacherName?: string;
}

export interface Message {
    id: number;
    content: string;
    fromStudent: boolean;
    createdAt: string;
    subject: Subject;
}

export interface WebSocketMessage {
    type: 'message' | 'error';
    payload: any;
}
