import React, { useEffect, useRef } from 'react';
import { ChatSidebar } from './components/ChatSidebar';
import { ChatHeader } from './components/ChatHeader';
import { ChatMessages } from './components/ChatMessages';
import { ChatInput } from './components/ChatInput';
import { useChatStore } from './store';
import { ChatWebSocket } from './services/websocket';
import { Subject, Message } from './types';

interface ChatProps {
    websocketUrl: string;
    token: string;
    initialSubjects: Subject[];
    initialMessages: Message[];
}

export const Chat: React.FC<ChatProps> = ({
    websocketUrl,
    token,
    initialSubjects,
    initialMessages
}) => {
    const {
        setSubjects,
        setMessages,
        setCurrentSubject,
        currentSubject,
        addMessage,
        setError
    } = useChatStore();

    const wsRef = useRef<ChatWebSocket | null>(null);

    useEffect(() => {
        setSubjects(initialSubjects);
        setMessages(initialMessages);
    }, []);

    useEffect(() => {
        wsRef.current = new ChatWebSocket(websocketUrl, token);

        wsRef.current.addMessageHandler((message) => {
            switch (message.type) {
                case 'message':
                    addMessage(message.payload);
                    break;
                case 'error':
                    setError(message.payload.message);
                    break;
            }
        });

        return () => {
            if (wsRef.current) {
                wsRef.current.close();
            }
        };
    }, [websocketUrl, token]);

    const handleSubjectSelect = (subject: Subject) => {
        setCurrentSubject(subject);
    };

    const handleSendMessage = (content: string) => {
        if (!currentSubject || !wsRef.current) return;

        // Optimistic update
        const tempMessage: Message = {
            id: Date.now(),
            content,
            fromStudent: true,
            createdAt: new Date().toISOString(),
            subject: currentSubject
        };
        addMessage(tempMessage);

        // Send via WebSocket
        wsRef.current.sendMessage('message', {
            content,
            subjectId: currentSubject.id
        });
    };

    return (
        <div className="card border-0 shadow-sm rounded-3 overflow-hidden">
            <div className="card-body p-0">
                <div className="chat-container">
                    <ChatSidebar onSubjectSelect={handleSubjectSelect} />
                    <div className="chat-content">
                        <ChatHeader subject={currentSubject} />
                        <ChatMessages />
                        <ChatInput onSendMessage={handleSendMessage} />
                    </div>
                </div>
            </div>
        </div>
    );
};
