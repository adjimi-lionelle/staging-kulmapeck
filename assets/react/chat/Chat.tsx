import React, { useEffect, useRef } from 'react';
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
    useEffect(() => {
        console.log('Chat component mounted with props:', {
            websocketUrl,
            token,
            subjectsCount: initialSubjects.length,
            messagesCount: initialMessages.length
        });
    }, []);

    return (
        <div className="chat-container">
            <div className="row h-100">
                {/* Sidebar */}
                <div className="col-md-4 col-lg-3 chat-sidebar">
                    <div className="p-3">
                        <h5>Subjects</h5>
                        <div className="list-group">
                            {initialSubjects.map(subject => (
                                <button 
                                    key={subject.id}
                                    className="list-group-item list-group-item-action"
                                >
                                    {subject.matiere.name}
                                </button>
                            ))}
                        </div>
                    </div>
                </div>

                {/* Main Chat Area */}
                <div className="col-md-8 col-lg-9 chat-main">
                    <div className="chat-header">
                        <h4>Welcome to Chat</h4>
                    </div>
                    <div className="chat-messages">
                        {initialMessages.map((msg, index) => (
                            <div key={index} className="message">
                                {msg.content}
                            </div>
                        ))}
                    </div>
                    <div className="chat-input">
                        <div className="input-group">
                            <input 
                                type="text" 
                                className="form-control" 
                                placeholder="Type a message..."
                            />
                            <button className="btn btn-primary">
                                Send
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
};
