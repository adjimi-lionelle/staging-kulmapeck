import React, { useState, useRef, useEffect } from 'react';
import { useChatStore } from '../store';

interface ChatInputProps {
    onSendMessage: (content: string) => void;
}

export const ChatInput: React.FC<ChatInputProps> = ({ onSendMessage }) => {
    const [message, setMessage] = useState('');
    const textareaRef = useRef<HTMLTextAreaElement>(null);
    const { currentSubject } = useChatStore();

    const adjustTextareaHeight = () => {
        const textarea = textareaRef.current;
        if (textarea) {
            textarea.style.height = 'auto';
            textarea.style.height = `${textarea.scrollHeight}px`;
        }
    };

    useEffect(() => {
        adjustTextareaHeight();
    }, [message]);

    const handleSubmit = () => {
        const trimmedMessage = message.trim();
        if (trimmedMessage && currentSubject) {
            onSendMessage(trimmedMessage);
            setMessage('');
            if (textareaRef.current) {
                textareaRef.current.style.height = 'auto';
            }
        }
    };

    const handleKeyPress = (e: React.KeyboardEvent) => {
        if (e.key === 'Enter' && !e.shiftKey) {
            e.preventDefault();
            handleSubmit();
        }
    };

    if (!currentSubject) return null;

    return (
        <div className="chat-input border-top">
            <div className="chat-input-container">
                <button type="button" className="btn btn-light btn-sm rounded-circle">
                    <i className="bi bi-paperclip"></i>
                </button>
                <textarea
                    ref={textareaRef}
                    value={message}
                    onChange={(e) => setMessage(e.target.value)}
                    onKeyPress={handleKeyPress}
                    placeholder="Type a message..."
                    rows={1}
                    className="form-control"
                />
                <div className="chat-input-actions">
                    <button type="button" className="btn btn-light btn-sm rounded-circle">
                        <i className="bi bi-emoji-smile"></i>
                    </button>
                    <button
                        type="button"
                        className="btn btn-primary btn-sm rounded-circle"
                        onClick={handleSubmit}
                        disabled={!message.trim()}
                    >
                        <i className="bi bi-send-fill"></i>
                    </button>
                </div>
            </div>
        </div>
    );
};
