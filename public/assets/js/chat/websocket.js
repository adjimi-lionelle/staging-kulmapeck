class ForumWebSocket {
    constructor(forumId, options = {}) {
        this.forumId = forumId;
        this.options = {
            reconnectAttempts: 5,
            reconnectDelay: 3000,
            messageQueueSize: 100,
            ...options
        };

        this.messageQueue = [];
        this.connectionAttempts = 0;
        this.isConnecting = false;
        this.lastMessageId = null;
        this.typingTimeouts = new Map();

        // Initialize WebSocket
        this.connect();
    }

    connect() {
        if (this.isConnecting) return;
        this.isConnecting = true;

        const wsProtocol = window.location.protocol === 'https:' ? 'wss:' : 'ws:';
        const wsUrl = `${wsProtocol}//${window.location.host}/ws/chat/${this.forumId}`;
        
        this.socket = new WebSocket(wsUrl);
        this.setupListeners();
    }

    setupListeners() {
        this.socket.onopen = () => this.handleConnection();
        this.socket.onmessage = (event) => this.handleMessage(event);
        this.socket.onclose = () => this.handleDisconnection();
        this.socket.onerror = (error) => this.handleError(error);
    }

    handleConnection() {
        this.isConnecting = false;
        this.connectionAttempts = 0;
        console.log('Connected to chat server');

        // Request missed messages if we have a last message ID
        if (this.lastMessageId) {
            this.syncMissedMessages(this.lastMessageId);
        }

        // Dispatch connection event
        this.dispatchEvent('connected');
    }

    handleDisconnection() {
        this.isConnecting = false;
        console.log('Disconnected from chat server');

        // Attempt reconnection if within limits
        if (this.connectionAttempts < this.options.reconnectAttempts) {
            this.connectionAttempts++;
            setTimeout(() => this.connect(), this.options.reconnectDelay);
        }

        // Dispatch disconnection event
        this.dispatchEvent('disconnected');
    }

    handleMessage(event) {
        try {
            const data = JSON.parse(event.data);
            
            // Update last message ID for sync purposes
            if (data.messageId) {
                this.lastMessageId = data.messageId;
            }

            // Handle different message types
            switch(data.type) {
                case 'message':
                    this.handleChatMessage(data);
                    break;
                case 'typing':
                    this.handleTypingStatus(data);
                    break;
                case 'presence':
                    this.handlePresenceUpdate(data);
                    break;
                case 'sync':
                    this.handleSyncResponse(data);
                    break;
            }

            // Add to message queue if it's a chat message
            if (data.type === 'message') {
                this.addToMessageQueue(data);
            }
        } catch (error) {
            console.error('Error handling message:', error);
        }
    }

    handleError(error) {
        console.error('WebSocket error:', error);
        this.dispatchEvent('error', { error });
    }

    handleChatMessage(data) {
        this.dispatchEvent('message', data);
    }

    handleTypingStatus(data) {
        const { userId, isTyping } = data;
        
        // Clear existing timeout for this user
        if (this.typingTimeouts.has(userId)) {
            clearTimeout(this.typingTimeouts.get(userId));
        }

        if (isTyping) {
            // Set new timeout to clear typing status
            this.typingTimeouts.set(userId, setTimeout(() => {
                this.typingTimeouts.delete(userId);
                this.dispatchEvent('typing', { userId, isTyping: false });
            }, 3000));
        }

        this.dispatchEvent('typing', { userId, isTyping });
    }

    handlePresenceUpdate(data) {
        this.dispatchEvent('presence', data);
    }

    handleSyncResponse(data) {
        if (data.messages) {
            data.messages.forEach(message => {
                this.handleChatMessage(message);
            });
        }
    }

    // Message Queue Management
    addToMessageQueue(message) {
        this.messageQueue.push(message);
        if (this.messageQueue.length > this.options.messageQueueSize) {
            this.messageQueue.shift();
        }
    }

    // Message Sending
    sendMessage(content) {
        if (this.socket.readyState === WebSocket.OPEN) {
            this.socket.send(JSON.stringify({
                type: 'message',
                content,
                forumId: this.forumId,
                timestamp: new Date().toISOString()
            }));
            return true;
        }
        return false;
    }

    // Typing Status
    sendTypingStatus(isTyping) {
        if (this.socket.readyState === WebSocket.OPEN) {
            this.socket.send(JSON.stringify({
                type: 'typing',
                isTyping,
                forumId: this.forumId
            }));
        }
    }

    // Message Sync
    syncMissedMessages(lastMessageId) {
        if (this.socket.readyState === WebSocket.OPEN) {
            this.socket.send(JSON.stringify({
                type: 'sync',
                lastMessageId,
                forumId: this.forumId
            }));
        }
    }

    // Event Handling
    dispatchEvent(eventName, data = {}) {
        const event = new CustomEvent(`forum:${eventName}`, {
            detail: { ...data, forumId: this.forumId }
        });
        document.dispatchEvent(event);
    }

    // Cleanup
    disconnect() {
        if (this.socket) {
            this.socket.close();
        }
        this.typingTimeouts.forEach(timeout => clearTimeout(timeout));
        this.typingTimeouts.clear();
    }
}

// Export for use in other files
window.ForumWebSocket = ForumWebSocket;
