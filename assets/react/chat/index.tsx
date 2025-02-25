import React from 'react';
import { createRoot } from 'react-dom/client';
import { Chat } from './Chat';
import { Subject, Message } from './types';
import './styles/chat.css';

console.log('Chat script loaded');

document.addEventListener('DOMContentLoaded', () => {
    console.log('DOM Content Loaded');
    
    const container = document.getElementById('react-chat');
    console.log('React container:', container);
    
    if (!container) {
        console.error('React container not found!');
        return;
    }

    // Get data from data attributes
    const websocketUrl = container.dataset.websocketUrl;
    const token = container.dataset.token;
    let subjects: Subject[] = [];
    let messages: Message[] = [];

    try {
        subjects = JSON.parse(container.dataset.subjects || '[]');
        messages = JSON.parse(container.dataset.messages || '[]');
    } catch (error) {
        console.error('Error parsing data attributes:', error);
        console.log('Raw subjects:', container.dataset.subjects);
        console.log('Raw messages:', container.dataset.messages);
    }

    console.log('Chat initialization data:', {
        websocketUrl,
        token,
        subjects,
        messages,
        containerDataset: container.dataset
    });

    if (!websocketUrl || !token) {
        console.error('Missing required data attributes:', { websocketUrl, token });
        return;
    }

    try {
        const root = createRoot(container);
        root.render(
            <React.StrictMode>
                <Chat
                    websocketUrl={websocketUrl}
                    token={token}
                    initialSubjects={subjects}
                    initialMessages={messages}
                />
            </React.StrictMode>
        );
        console.log('React component mounted successfully');
    } catch (error) {
        console.error('Error mounting React component:', error);
    }
});
