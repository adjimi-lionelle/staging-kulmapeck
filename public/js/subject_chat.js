/**
 * Subject Chat JavaScript
 * Handles WebSocket connections and chat functionality
 */
document.addEventListener('DOMContentLoaded', function() {
    // DOM Elements
    const chatContainer = document.getElementById('chat-container');
    const subjectList = document.getElementById('subject-list');
    const chatHeader = document.getElementById('chat-header');
    const welcomeScreen = document.getElementById('welcome-screen');
    const messageContainer = document.getElementById('message-container');
    const chatInputContainer = document.getElementById('chat-input-container');
    const messageInput = document.getElementById('message-input');
    const sendButton = document.getElementById('send-message');
    const subjectSearch = document.getElementById('subject-search');
    const typingIndicator = document.getElementById('typing-indicator');
    
    // Chat state
    let websocket = null;
    let currentSubjectId = null;
    let typingTimeout = null;
    let lastTypingStatus = false;
    
    // Setup modal if needed
    if (document.getElementById('setup-modal')) {
        const setupModal = new bootstrap.Modal(document.getElementById('setup-modal'));
        setupModal.show();
    }
    
    // Initialize WebSocket connection
    function initWebSocket() {
        const websocketUrl = chatContainer.dataset.websocketUrl;
        const token = chatContainer.dataset.token;
        
        if (!websocketUrl || !token) {
            console.error('Missing WebSocket URL or token');
            return;
        }
        
        websocket = new WebSocket(websocketUrl);
        
        websocket.onopen = function() {
            console.log('WebSocket connection established');
            // Authenticate with token
            sendWebSocketMessage({
                action: 'authenticate',
                token: token
            });
        };
        
        websocket.onmessage = function(event) {
            const data = JSON.parse(event.data);
            handleWebSocketMessage(data);
        };
        
        websocket.onclose = function() {
            console.log('WebSocket connection closed');
            // Try to reconnect after 5 seconds
            setTimeout(initWebSocket, 5000);
        };
        
        websocket.onerror = function(error) {
            console.error('WebSocket error:', error);
        };
    }
    
    // Send message through WebSocket
    function sendWebSocketMessage(message) {
        if (websocket && websocket.readyState === WebSocket.OPEN) {
            websocket.send(JSON.stringify(message));
        } else {
            console.error('WebSocket is not connected');
        }
    }
    
    // Handle incoming WebSocket messages
    function handleWebSocketMessage(data) {
        const event = data.event;
        const messageData = data.data;
        
        switch (event) {
            case 'message':
                if (messageData.subjectId === currentSubjectId) {
                    addMessageToChat(messageData);
                } else {
                    updateUnreadCount(messageData.subjectId);
                }
                break;
                
            case 'typing':
                if (messageData.subjectId === currentSubjectId && !messageData.isFromCurrentUser) {
                    showTypingIndicator(messageData.userName);
                }
                break;
                
            case 'userStatus':
                updateUserStatus(messageData);
                break;
                
            default:
                console.log('Unknown event:', event);
        }
    }
    
    // Add a message to the chat
    function addMessageToChat(message) {
        const messageElement = document.createElement('div');
        messageElement.classList.add('message');
        
        if (message.isFromCurrentUser) {
            messageElement.classList.add('message-outgoing');
        } else {
            messageElement.classList.add('message-incoming');
        }
        
        const messageContent = `
            <div class="message-avatar">
                ${message.userAvatar ? 
                    `<img src="${message.userAvatar}" alt="${message.userName}" class="rounded-circle">` : 
                    `<div class="avatar-placeholder rounded-circle bg-secondary text-white">
                        ${message.userName.charAt(0).toUpperCase()}
                    </div>`
                }
            </div>
            <div class="message-bubble">
                <div class="message-sender">${message.userName}</div>
                <div class="message-text">${message.content}</div>
                <div class="message-time">${formatTime(message.timestamp)}</div>
            </div>
        `;
        
        messageElement.innerHTML = messageContent;
        messageContainer.appendChild(messageElement);
        
        // Scroll to bottom
        messageContainer.scrollTop = messageContainer.scrollHeight;
        
        // Mark as read
        sendWebSocketMessage({
            action: 'read',
            messageIds: [message.id]
        });
    }
    
    // Show typing indicator
    function showTypingIndicator(userName) {
        const typingUser = typingIndicator.querySelector('.typing-user');
        typingUser.textContent = userName;
        typingIndicator.style.display = 'block';
        
        // Hide typing indicator after 3 seconds
        clearTimeout(typingTimeout);
        typingTimeout = setTimeout(() => {
            typingIndicator.style.display = 'none';
        }, 3000);
    }
    
    // Update unread count for a subject
    function updateUnreadCount(subjectId) {
        const subjectElement = subjectList.querySelector(`.chat-item[data-subject-id="${subjectId}"]`);
        if (!subjectElement) return;
        
        let badgeElement = subjectElement.querySelector('.chat-item-badge');
        
        if (!badgeElement) {
            badgeElement = document.createElement('div');
            badgeElement.classList.add('chat-item-badge');
            badgeElement.textContent = '1';
            subjectElement.appendChild(badgeElement);
        } else {
            const count = parseInt(badgeElement.textContent) + 1;
            badgeElement.textContent = count;
        }
    }
    
    // Update user status
    function updateUserStatus(statusData) {
        if (statusData.subjectId !== currentSubjectId) return;
        
        const statusElement = chatHeader.querySelector('.chat-header-status');
        const onlineCount = statusData.users.filter(user => user.status === 'online').length;
        
        if (onlineCount > 0) {
            statusElement.innerHTML = `
                <i class="bi bi-circle-fill text-success"></i>
                <span>${onlineCount} online</span>
            `;
        } else {
            statusElement.innerHTML = `
                <i class="bi bi-circle-fill text-secondary"></i>
                <span>No one online</span>
            `;
        }
    }
    
    // Load messages for a subject
    function loadMessages(subjectId) {
        // Clear existing messages
        messageContainer.innerHTML = '';
        
        // Show loading spinner
        messageContainer.innerHTML = `
            <div class="text-center p-4">
                <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        `;
        
        // Request messages from server
        sendWebSocketMessage({
            action: 'getMessages',
            subjectId: subjectId
        });
        
        // Update UI
        welcomeScreen.style.display = 'none';
        messageContainer.style.display = 'block';
        chatInputContainer.style.display = 'flex';
        
        // Update current subject
        currentSubjectId = subjectId;
        
        // Update header
        const subjectElement = subjectList.querySelector(`.chat-item[data-subject-id="${subjectId}"]`);
        if (subjectElement) {
            const subjectName = subjectElement.querySelector('.chat-item-name').textContent;
            const teacherName = subjectElement.querySelector('.chat-item-preview').textContent;
            
            chatHeader.querySelector('.chat-header-name').textContent = subjectName;
            
            // Remove unread badge
            const badge = subjectElement.querySelector('.chat-item-badge');
            if (badge) {
                badge.remove();
            }
            
            // Mark all messages as read
            sendWebSocketMessage({
                action: 'readAll',
                subjectId: subjectId
            });
        }
    }
    
    // Format timestamp
    function formatTime(timestamp) {
        const date = new Date(timestamp);
        return date.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
    }
    
    // Event Listeners
    
    // Subject selection
    if (subjectList) {
        const subjects = subjectList.querySelectorAll('.chat-item');
        subjects.forEach(subject => {
            subject.addEventListener('click', function() {
                const subjectId = this.dataset.subjectId;
                
                // Update active state
                subjects.forEach(s => s.classList.remove('active'));
                this.classList.add('active');
                
                // Load messages
                loadMessages(subjectId);
            });
        });
    }
    
    // Search functionality
    if (subjectSearch) {
        subjectSearch.addEventListener('input', function() {
            const query = this.value.toLowerCase();
            const subjects = subjectList.querySelectorAll('.chat-item');
            
            subjects.forEach(item => {
                const name = item.querySelector('.chat-item-name').textContent.toLowerCase();
                const teacher = item.querySelector('.chat-item-preview')?.textContent.toLowerCase() || '';
                const visible = name.includes(query) || teacher.includes(query);
                
                item.style.display = visible ? '' : 'none';
            });
        });
    }
    
    // Send message
    if (sendButton && messageInput) {
        sendButton.addEventListener('click', sendMessage);
        messageInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter' && !e.shiftKey) {
                e.preventDefault();
                sendMessage();
            }
        });
        
        function sendMessage() {
            const message = messageInput.value.trim();
            if (!message || !currentSubjectId) return;
            
            sendWebSocketMessage({
                action: 'message',
                subjectId: currentSubjectId,
                content: message,
                timestamp: new Date().toISOString()
            });
            
            messageInput.value = '';
        }
    }
    
    // Typing indicator
    if (messageInput) {
        messageInput.addEventListener('input', function() {
            if (!currentSubjectId) return;
            
            // Only send typing status if it changed
            const isTyping = messageInput.value.length > 0;
            if (isTyping !== lastTypingStatus) {
                lastTypingStatus = isTyping;
                
                sendWebSocketMessage({
                    action: 'typing',
                    subjectId: currentSubjectId,
                    isTyping: isTyping
                });
            }
        });
    }
    
    // Initialize WebSocket
    initWebSocket();
});
