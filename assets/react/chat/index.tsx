import React from 'react';
import { createRoot } from 'react-dom/client';
import { Chat } from './Chat';
import { Subject, Message } from './types';

document.addEventListener('DOMContentLoaded', () => {
    const container = document.getElementById('react-chat');
    if (!container) return;

    // Get data from data attributes
    const websocketUrl = container.dataset.websocketUrl;
    const token = container.dataset.token;
    const subjects = JSON.parse(container.dataset.subjects || '[]') as Subject[];
    const messages = JSON.parse(container.dataset.messages || '[]') as Message[];

    if (!websocketUrl || !token) {
        console.error('Missing required data attributes');
        return;
    }

    const root = createRoot(container);
    root.render(
        <Chat
            websocketUrl={websocketUrl}
            token={token}
            initialSubjects={subjects}
            initialMessages={messages}
        />
    );
});
