import React, { useEffect, useRef } from 'react';
import { ChatMessage } from './ChatMessage';
import { useChatStore } from '../store';

export const ChatMessages: React.FC = () => {
    const { messages, currentSubject } = useChatStore();
    const messagesEndRef = useRef<HTMLDivElement>(null);

    const scrollToBottom = () => {
        messagesEndRef.current?.scrollIntoView({ behavior: 'smooth' });
    };

    useEffect(() => {
        scrollToBottom();
    }, [messages]);

    if (!currentSubject) {
        return (
            <div className="chat-messages">
                <div className="welcome-screen text-center">
                    <i className="bi bi-chat-dots-fill" style={{ fontSize: '64px', color: '#0d6efd' }}></i>
                    <h4 className="mt-4">Select a subject to start chatting</h4>
                    <p className="text-muted">Choose a subject from the sidebar to begin your conversation</p>
                </div>
            </div>
        );
    }

    const filteredMessages = messages.filter(
        message => message.subject.id === currentSubject.id
    );

    return (
        <div className="chat-messages" id="chat-messages">
            {filteredMessages.map(message => (
                <ChatMessage key={message.id} message={message} />
            ))}
            <div ref={messagesEndRef} />
        </div>
    );
};
