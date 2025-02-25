class SubjectChatManager {
    constructor(websocketUrl, subjectId, token) {
        this.messageInput = document.getElementById('message-input');
        this.sendButton = document.getElementById('send-button');
        this.chatMessages = document.getElementById('chat-messages');
        this.subjects = document.querySelectorAll('.subject');
        
        this.messageQueue = [];
        this.isConnected = false;
        this.reconnectAttempts = 0;
        this.maxReconnectAttempts = 5;
        this.reconnectDelay = 5000;
        
        this.setupWebSocket(websocketUrl, subjectId, token);
        this.setupEventListeners();
        this.setupSubjectSwitching();
        this.setupSearchFilter();
    }

    setupWebSocket(url, subjectId, token) {
        try {
            this.socket = new WebSocket(`${url}?token=${token}&subject_id=${subjectId}`);
            
            this.socket.onopen = () => {
                console.log('Connected to chat server');
                this.isConnected = true;
                this.reconnectAttempts = 0;
                this.sendButton.disabled = false;
                this.updateConnectionStatus('connected');
                
                // Send any queued messages
                while (this.messageQueue.length > 0) {
                    const message = this.messageQueue.shift();
                    this.socket.send(JSON.stringify(message));
                }
            };

            this.socket.onmessage = (event) => {
                try {
                    const data = JSON.parse(event.data);
                    this.handleMessage(data);
                } catch (e) {
                    console.error('Error parsing message:', e);
                }
            };

            this.socket.onclose = () => {
                console.log('Disconnected from chat server');
                this.isConnected = false;
                this.sendButton.disabled = true;
                this.updateConnectionStatus('disconnected');
                this.attemptReconnect(url, subjectId, token);
            };

            this.socket.onerror = (error) => {
                console.error('WebSocket error:', error);
                this.updateConnectionStatus('error');
            };
        } catch (e) {
            console.error('Error setting up WebSocket:', e);
            this.updateConnectionStatus('error');
        }
    }

    attemptReconnect(url, subjectId, token) {
        if (this.reconnectAttempts < this.maxReconnectAttempts) {
            this.reconnectAttempts++;
            console.log(`Attempting to reconnect (${this.reconnectAttempts}/${this.maxReconnectAttempts})...`);
            setTimeout(() => this.setupWebSocket(url, subjectId, token), 
                     this.reconnectDelay * Math.pow(2, this.reconnectAttempts - 1));
        } else {
            console.error('Max reconnection attempts reached');
            this.showError('Connection lost. Please refresh the page.');
        }
    }

    updateConnectionStatus(status) {
        const statusClasses = {
            connected: 'text-success',
            disconnected: 'text-warning',
            error: 'text-danger'
        };
        
        const statusMessages = {
            connected: 'Connected',
            disconnected: 'Disconnected - Attempting to reconnect...',
            error: 'Connection error'
        };

        const statusElement = document.createElement('div');
        statusElement.className = `chat-status ${statusClasses[status]}`;
        statusElement.textContent = statusMessages[status];
        
        const existingStatus = document.querySelector('.chat-status');
        if (existingStatus) {
            existingStatus.remove();
        }
        
        this.chatMessages.parentNode.insertBefore(statusElement, this.chatMessages);
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
            this.messageInput.style.height = 
                Math.min(this.messageInput.scrollHeight, 150) + 'px';
        });

        // Handle paste events to clean up formatting
        this.messageInput.addEventListener('paste', (e) => {
            e.preventDefault();
            const text = (e.clipboardData || window.clipboardData).getData('text');
            document.execCommand('insertText', false, text);
        });
    }

    setupSearchFilter() {
        const searchInput = document.querySelector('.search-bar input');
        if (searchInput) {
            searchInput.addEventListener('input', (e) => {
                const query = e.target.value.toLowerCase();
                this.subjects.forEach(subject => {
                    const name = subject.querySelector('.subject-info h4').textContent.toLowerCase();
                    subject.style.display = name.includes(query) ? 'flex' : 'none';
                });
            });
        }
    }

    setupSubjectSwitching() {
        this.subjects.forEach(subject => {
            subject.addEventListener('click', () => {
                const subjectId = subject.dataset.subjectId;
                // Show loading state
                subject.classList.add('loading');
                window.location.href = `/chat/subject/${subjectId}`;
            });
        });
    }

    sendMessage() {
        const content = this.messageInput.value.trim();
        if (!content) return;

        const message = {
            type: 'message',
            content: content,
            timestamp: new Date().toISOString()
        };

        if (this.isConnected) {
            this.socket.send(JSON.stringify(message));
        } else {
            this.messageQueue.push(message);
            this.showError('Message will be sent when connection is restored');
        }

        // Optimistically show the message
        this.handleMessage({
            ...message,
            isFromAI: false
        });

        this.messageInput.value = '';
        this.messageInput.style.height = 'auto';
    }

    handleMessage(data) {
        const messageDiv = document.createElement('div');
        messageDiv.className = `message ${data.isFromAI ? 'received' : 'sent'}`;
        
        const time = new Date(data.timestamp || Date.now()).toLocaleTimeString([], { 
            hour: '2-digit', 
            minute: '2-digit' 
        });
        
        messageDiv.innerHTML = `
            <div class="message-content">
                <p>${this.escapeHtml(data.content)}</p>
                <span class="time">${time}</span>
            </div>
        `;

        this.chatMessages.appendChild(messageDiv);
        this.scrollToBottom();

        // If it's an AI message, play a subtle notification sound
        if (data.isFromAI) {
            this.playNotificationSound();
        }
    }

    scrollToBottom() {
        const lastMessage = this.chatMessages.lastElementChild;
        if (lastMessage) {
            lastMessage.scrollIntoView({ behavior: 'smooth' });
        }
    }

    showError(message) {
        const errorDiv = document.createElement('div');
        errorDiv.className = 'chat-error';
        errorDiv.textContent = message;
        
        this.chatMessages.appendChild(errorDiv);
        setTimeout(() => errorDiv.remove(), 5000);
    }

    playNotificationSound() {
        // Create a subtle "pop" sound using Web Audio API
        try {
            const audioContext = new (window.AudioContext || window.webkitAudioContext)();
            const oscillator = audioContext.createOscillator();
            const gainNode = audioContext.createGain();
            
            oscillator.connect(gainNode);
            gainNode.connect(audioContext.destination);
            
            oscillator.frequency.setValueAtTime(440, audioContext.currentTime);
            gainNode.gain.setValueAtTime(0.1, audioContext.currentTime);
            gainNode.gain.exponentialRampToValueAtTime(0.01, audioContext.currentTime + 0.1);
            
            oscillator.start(audioContext.currentTime);
            oscillator.stop(audioContext.currentTime + 0.1);
        } catch (e) {
            console.error('Error playing notification sound:', e);
        }
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
