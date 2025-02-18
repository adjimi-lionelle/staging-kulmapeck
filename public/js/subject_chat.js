class SubjectChatManager {
    constructor(websocketUrl, subjectId, token) {
        this.messageInput = document.getElementById('message-input');
        this.sendButton = document.getElementById('send-button');
        this.chatMessages = document.getElementById('chat-messages');
        this.subjects = document.querySelectorAll('.subject');
        
        this.setupWebSocket(websocketUrl, subjectId, token);
        this.setupEventListeners();
        this.setupSubjectSwitching();
    }

    setupWebSocket(url, subjectId, token) {
        this.socket = new WebSocket(`${url}?token=${token}&subject_id=${subjectId}`);
        
        this.socket.onopen = () => {
            console.log('Connected to chat server');
            this.sendButton.disabled = false;
        };

        this.socket.onmessage = (event) => {
            const data = JSON.parse(event.data);
            this.handleMessage(data);
        };

        this.socket.onclose = () => {
            console.log('Disconnected from chat server');
            this.sendButton.disabled = true;
            // Attempt to reconnect after 5 seconds
            setTimeout(() => this.setupWebSocket(url, subjectId, token), 5000);
        };
    }

    setupEventListeners() {
        // Send message on button click
        this.sendButton.addEventListener('click', () => this.sendMessage());

        // Send message on Enter (but new line on Shift+Enter)
        this.messageInput.addEventListener('keypress', (e) => {
            if (e.key === 'Enter' && !e.shiftKey) {
                e.preventDefault();
                this.sendMessage();
            }
        });

        // Auto-resize textarea
        this.messageInput.addEventListener('input', () => {
            this.messageInput.style.height = 'auto';
            this.messageInput.style.height = this.messageInput.scrollHeight + 'px';
        });
    }

    setupSubjectSwitching() {
        this.subjects.forEach(subject => {
            subject.addEventListener('click', () => {
                const subjectId = subject.dataset.subjectId;
                window.location.href = `/student/chat/subject/${subjectId}`;
            });
        });
    }

    sendMessage() {
        const content = this.messageInput.value.trim();
        if (!content) return;

        const message = {
            type: 'message',
            content: content
        };

        this.socket.send(JSON.stringify(message));
        this.messageInput.value = '';
        this.messageInput.style.height = 'auto';
    }

    handleMessage(data) {
        const messageDiv = document.createElement('div');
        messageDiv.className = `message ${data.isFromAI ? 'received' : 'sent'}`;
        
        const time = new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
        
        messageDiv.innerHTML = `
            <div class="message-content">
                <p>${this.escapeHtml(data.content)}</p>
                <span class="time">${time}</span>
            </div>
        `;

        this.chatMessages.appendChild(messageDiv);
        this.scrollToBottom();
    }

    scrollToBottom() {
        this.chatMessages.scrollTop = this.chatMessages.scrollHeight;
    }

    escapeHtml(unsafe) {
        return unsafe
            .replace(/&/g, "&amp;")
            .replace(/</g, "&lt;")
            .replace(/>/g, "&gt;")
            .replace(/"/g, "&quot;")
            .replace(/'/g, "&#039;");
    }
}

// Initialize chat when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    const chat = new SubjectChatManager(WEBSOCKET_URL, SUBJECT_ID, STUDENT_TOKEN);
});
