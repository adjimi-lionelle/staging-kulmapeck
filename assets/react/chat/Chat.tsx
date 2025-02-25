import React, { useEffect, useRef, useState } from 'react';
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
    const [selectedSubject, setSelectedSubject] = useState<Subject | null>(null);
    const wsRef = useRef<WebSocket | null>(null);

    useEffect(() => {
        console.log('Chat component mounted with props:', {
            websocketUrl,
            token,
            subjectsCount: initialSubjects.length,
            messagesCount: initialMessages.length
        });

        // Initialize WebSocket connection
        const connectWebSocket = () => {
            if (wsRef.current?.readyState === WebSocket.OPEN) {
                console.log('WebSocket already connected');
                return;
            }

            // Add query parameters to WebSocket URL
            const wsUrlWithParams = new URL(websocketUrl);
            wsUrlWithParams.searchParams.append('token', token);
            if (selectedSubject) {
                wsUrlWithParams.searchParams.append('chat_id', selectedSubject.id.toString());
            }

            console.log('Connecting to WebSocket:', wsUrlWithParams.toString());
            const ws = new WebSocket(wsUrlWithParams.toString());

            ws.onopen = () => {
                console.log('WebSocket connection established');
                // Send authentication token
                ws.send(JSON.stringify({ 
                    type: 'auth', 
                    token,
                    chat_id: selectedSubject?.id
                }));
            };

            ws.onmessage = (event) => {
                console.log('WebSocket message received:', event.data);
                try {
                    const data = JSON.parse(event.data);
                    // Handle incoming messages
                } catch (error) {
                    console.error('Error parsing WebSocket message:', error);
                }
            };

            ws.onerror = (error) => {
                console.error('WebSocket error:', error);
            };

            ws.onclose = (event) => {
                console.log('WebSocket disconnected:', {
                    code: event.code,
                    reason: event.reason,
                    wasClean: event.wasClean
                });
                // Attempt to reconnect after a delay
                setTimeout(connectWebSocket, 3000);
            };

            wsRef.current = ws;
        };

        // Only connect if we have a selected subject
        if (selectedSubject) {
            connectWebSocket();
        }

        return () => {
            if (wsRef.current) {
                wsRef.current.close();
            }
        };
    }, [websocketUrl, token, selectedSubject]);

    const handleSubjectSelect = (subject: Subject) => {
        setSelectedSubject(subject);
        if (wsRef.current?.readyState === WebSocket.OPEN) {
            wsRef.current.send(JSON.stringify({
                type: 'join',
                chat_id: subject.id
            }));
        }
    };

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
                                    className={`list-group-item list-group-item-action ${selectedSubject?.id === subject.id ? 'active' : ''}`}
                                    onClick={() => handleSubjectSelect(subject)}
                                >
                                    <div className="d-flex align-items-center">
                                        {subject.icon && (
                                            <img 
                                                src={subject.icon} 
                                                alt={subject.name} 
                                                className="subject-icon me-2"
                                                style={{ width: '24px', height: '24px' }}
                                            />
                                        )}
                                        <div>
                                            <div className="fw-bold">{subject.name}</div>
                                            {subject.teacherName && (
                                                <small className="text-muted">{subject.teacherName}</small>
                                            )}
                                        </div>
                                    </div>
                                </button>
                            ))}
                        </div>
                    </div>
                </div>

                {/* Main Chat Area */}
                <div className="col-md-8 col-lg-9 chat-main">
                    <div className="chat-header">
                        <h4>{selectedSubject ? selectedSubject.name : 'Select a subject to start chatting'}</h4>
                    </div>
                    <div className="chat-messages">
                        {/* Messages will be displayed here */}
                    </div>
                    <div className="chat-input">
                        {/* Chat input will be here */}
                    </div>
                </div>
            </div>
        </div>
    );
};
