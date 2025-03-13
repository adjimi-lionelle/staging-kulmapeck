/**
 * Kulmapeck Subject Chat System
 * Handles WebSocket connections and chat functionality for subject-based chats
 */
console.log("DEBUG: Script subject_chat.js chargé !");

document.addEventListener('DOMContentLoaded', function() {
    console.log("DEBUG: DOMContentLoaded event fired, initializing chat");
    
    // DOM Elements
    const chatContainer = document.querySelector('.chat-app');
    const subjectList = document.getElementById('subject-list');
    const chatMessages = document.getElementById('chat-messages');
    const messageInput = document.getElementById('message-input');
    const sendButton = document.getElementById('send-message');
    const chatHeader = document.getElementById('chat-header');
    const subjectSearch = document.getElementById('subject-search');
    const welcomeScreen = document.getElementById('welcome-screen');
    const chatInputContainer = document.getElementById('chat-input-container');
    
    // Chat State
    let currentSubject = null;
    let socket = null;
    let token = null;
    let isMobileView = window.innerWidth <= 768;
    
    // Check if required elements exist
    if (!subjectList) {
        console.error('DEBUG: Subject list element not found in DOM');
        return;
    }
    
    // Setup mobile view
    setupMobileView();
    
    // Load subjects on startup
    loadSubjects();
    
    // Setup event listeners
    setupEventListeners();
    
    // Setup theme detection
    setupThemeDetection();
    
    /**
     * Get current user ID from data attribute
     */
    function getCurrentUserId() {
        const userIdElement = document.getElementById('current-user-id');
        return userIdElement ? userIdElement.dataset.userId : null;
    }
    
    /**
     * Setup mobile view based on screen size
     */
    function setupMobileView() {
        console.log(`DEBUG: Setting up mobile view (isMobile: ${isMobileView})`);
        
        const mobileBackButton = document.querySelector('.mobile-back-button');
        
        if (mobileBackButton) {
            mobileBackButton.addEventListener('click', function() {
                if (chatContainer) {
                    chatContainer.classList.remove('chat-active');
                }
            });
        }
        
        // Handle window resize for mobile view
        window.addEventListener('resize', function() {
            const newIsMobileView = window.innerWidth <= 768;
            if (newIsMobileView !== isMobileView) {
                isMobileView = newIsMobileView;
                console.log(`DEBUG: View changed to ${isMobileView ? 'mobile' : 'desktop'}`);
            }
        });
    }
    
    /**
     * Setup all event listeners
     */
    function setupEventListeners() {
        if (messageInput) {
            messageInput.addEventListener('keypress', function(e) {
                if (e.key === 'Enter' && !e.shiftKey) {
                    e.preventDefault();
                    sendMessage();
                }
            });
        }
        
        if (sendButton) {
            sendButton.addEventListener('click', sendMessage);
        }
        
        if (subjectSearch) {
            subjectSearch.addEventListener('input', function() {
                filterSubjects(this.value);
            });
        }
    }
    
    /**
     * Load subjects from API
     */
    function loadSubjects() {
        console.log('DEBUG: Loading subjects from API');
        
        // Show loading state
        subjectList.innerHTML = `
            <div class="loading-state text-center p-4">
                <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">Loading subjects...</span>
                </div>
                <p class="mt-3 text-muted">Loading subjects...</p>
            </div>
        `;
        
        fetch('/api/chat/subjectChats', {
            method: 'GET',
            headers: { 'Content-Type': 'application/json' },
            credentials: 'include'
        })
        .then(response => {
            if (!response.ok) {
                throw new Error(`Server error: ${response.status}`);
            }
            return response.json();
        })
        .then(data => {
            console.log('DEBUG: Subjects data received', data);
            
            if (!Array.isArray(data)) {
                throw new Error('Invalid data format received from server');
            }
            
            renderSubjects(data);
            
            // Select the first subject by default if available
            if (data.length > 0) {
                selectSubject(data[0].id);
            }
        })
        .catch(error => {
            console.error('DEBUG: Error loading subjects:', error);
            showError(`Failed to load subjects: ${error.message}`);
        });
    }
    
    /**
     * Render subjects in sidebar
     */
    function renderSubjects(subjects) {
        console.log(`DEBUG: Rendering ${subjects.length} subjects`);
        
        if (subjects.length === 0) {
            subjectList.innerHTML = `
                <div class="empty-state text-center p-4">
                    <i class="bi bi-journal-x" style="font-size: 48px; color: #6c757d;"></i>
                    <p class="mt-3 text-muted">No subjects available</p>
                </div>
            `;
            return;
        }
        
        subjectList.innerHTML = '';
        
        subjects.forEach((subject, index) => {
            const chatItem = document.createElement('div');
            chatItem.className = `chat-item${index === 0 ? ' active' : ''}`;
            chatItem.dataset.subjectId = subject.id;
            
            const firstLetter = subject.name.charAt(0).toUpperCase();
            const unreadBadge = subject.unreadCount > 0 
                ? `<div class="chat-item-badge">${subject.unreadCount}</div>` 
                : '';
            
            const previewText = subject.lastMessage || 'Start chatting...';
            
            chatItem.innerHTML = `
                <div class="chat-item-avatar">
                    <div class="avatar-placeholder rounded-circle">${firstLetter}</div>
                </div>
                <div class="chat-item-info">
                    <div class="chat-item-name">${subject.name}</div>
                    <div class="chat-item-preview">${previewText}</div>
                </div>
                <div class="chat-item-meta">
                    ${unreadBadge}
                </div>
            `;
            
            chatItem.addEventListener('click', () => {
                // Remove active class from all items
                document.querySelectorAll('.chat-item').forEach(item => {
                    item.classList.remove('active');
                });
                
                // Add active class to clicked item
                chatItem.classList.add('active');
                
                // Select the subject
                selectSubject(subject.id);
            });
            
            subjectList.appendChild(chatItem);
        });
    }
    
    /**
     * Select a subject and connect to WebSocket
     */
    function selectSubject(subjectId) {
        console.log(`DEBUG: Selecting subject ${subjectId}`);
        
        // Update UI for selected subject
        document.querySelectorAll('.chat-item').forEach(item => {
            if (item.dataset.subjectId === subjectId) {
                item.classList.add('active');
            } else {
                item.classList.remove('active');
            }
        });
        
        // Disconnect from previous WebSocket if any
        if (socket) {
            socket.close();
            socket = null;
        }
        
        // Update current subject
        currentSubject = subjectId;
        
        // Update chat header
        updateChatHeader(subjectId);
        
        // Load messages
        loadMessages(subjectId);
        
        // Get WebSocket token
        getWebSocketToken(subjectId);
        
        // For mobile view, show chat content
        if (isMobileView && chatContainer) {
            chatContainer.classList.add('chat-active');
        }
    }
    
    /**
     * Get WebSocket token for a specific subject
     */
    function getWebSocketToken(subjectId) {
        console.log(`DEBUG: Getting WebSocket token for subject ${subjectId}`);
        
        fetch(`/websocket/token/${subjectId}`)
            .then(response => response.json())
            .then(data => {
                if (data.token) {
                    token = data.token;
                    connectWebSocket(subjectId);
                } else {
                    console.warn('DEBUG: No WebSocket token received');
                }
            })
            .catch(error => {
                console.error('DEBUG: Error fetching WebSocket token:', error);
                showError('Could not connect to chat. Please try again later.');
            });
    }
    
    /**
     * Connect to WebSocket
     */
    function connectWebSocket(subjectId) {
        console.log(`DEBUG: Connecting to WebSocket for subject ${subjectId}`);
        
        if (!token) {
            console.error('DEBUG: No WebSocket token available');
            return;
        }
        
        const protocol = window.location.protocol === 'https:' ? 'wss:' : 'ws:';
        const wsUrl = `${protocol}//127.0.0.1:9000/ws?token=${token}&subjectChat_id=${subjectId}`;
        
        socket = new WebSocket(wsUrl);
        
        socket.onopen = function() {
            console.log("DEBUG: WebSocket connected successfully");
            
            // Request message history
            const historyRequest = {
                type: 'history_request',
                subject_id: subjectId
            };
            socket.send(JSON.stringify(historyRequest));
        };
        
        socket.onmessage = function(event) {
            try {
                const data = JSON.parse(event.data);
                handleWebSocketMessage(data);
            } catch (e) {
                console.error("DEBUG: Error parsing WebSocket message:", e);
            }
        };
        
        socket.onerror = function(error) {
            console.error("DEBUG: WebSocket error:", error);
        };
        
        socket.onclose = function() {
            console.warn("DEBUG: WebSocket connection closed");
        };
    }
    
    /**
     * Handle WebSocket messages
     */
    function handleWebSocketMessage(data) {
        console.log('DEBUG: Handling WebSocket message:', data);
        
        if (data.type === 'history') {
            renderMessageHistory(data.messages);
        } else if (data.type === 'message' || data.message) {
            // Get timestamp if provided
            const timestamp = data.timestamp ? new Date(data.timestamp).toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' }) : null;
            
            // Check if message is from current user
            const currentUserId = getCurrentUserId();
            const isCurrentUser = data.user_id === currentUserId || data.userId === currentUserId;
            
            // Check if message is from AI
            const isFromAI = data.isFromAI || false;
            const author = isFromAI ? 'AI Teacher' : (data.author || (isCurrentUser ? 'You' : 'User'));
            
            // Add message with appropriate styling
            addMessage(data.message || data.content, author, isCurrentUser, timestamp, isFromAI);
            
            // Update subject preview in sidebar
            if (data.subject_id) {
                updateSubjectPreview(data.subject_id, data.message || data.content);
            }
        }
    }
    
    /**
     * Load messages via REST API
     */
    function loadMessages(subjectId) {
        console.log(`DEBUG: Loading messages for subject ${subjectId}`);
        
        // Show loading indicator
        chatMessages.innerHTML = `
            <div class="loading-messages text-center p-4">
                <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">Loading messages...</span>
                </div>
                <p class="mt-3 text-muted">Loading messages...</p>
            </div>
        `;
        
        // Show chat UI
        if (welcomeScreen) welcomeScreen.style.display = 'none';
        if (chatHeader) chatHeader.style.display = 'flex';
        if (chatMessages) chatMessages.style.display = 'block';
        if (chatInputContainer) chatInputContainer.style.display = 'flex';
        
        fetch(`/chat/messages/${subjectId}`)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(messages => {
                // Reset messages container
                chatMessages.innerHTML = `
                    <div class="message-wrapper">
                        <div class="message-time">Today</div>
                    </div>
                `;
                
                // Render messages
                if (messages && messages.length > 0) {
                    renderMessageHistory(messages);
                } else {
                    // No messages yet
                    const emptyState = document.createElement('div');
                    emptyState.className = 'empty-messages text-center p-4';
                    emptyState.innerHTML = `
                        <i class="bi bi-chat" style="font-size: 48px; color: #6c757d;"></i>
                        <p class="mt-3 text-muted">No messages yet. Start the conversation!</p>
                    `;
                    chatMessages.appendChild(emptyState);
                }
            })
            .catch(error => {
                console.error('DEBUG: Error loading messages:', error);
                showError('Could not load messages. Please try again later.');
            });
    }
    
    /**
     * Render message history
     */
    function renderMessageHistory(messages) {
        console.log(`DEBUG: Rendering ${messages.length} messages`);
        
        const messageWrapper = document.querySelector('.message-wrapper');
        if (!messageWrapper) return;
        
        const currentUserId = getCurrentUserId();
        
        messages.forEach(msg => {
            // Check if this message is from the current user
            const isCurrentUser = msg.sender === parseInt(currentUserId);
            
            // Format the timestamp
            let timestamp = 'Just now';
            const dateField = msg.createdAt || msg.createAt;
            if (dateField) {
                try {
                    const msgDate = new Date(dateField);
                    timestamp = msgDate.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
                } catch (e) {
                    console.error('DEBUG: Error parsing date', e);
                }
            }
            
            // Check if message is from AI
            const isFromAI = msg.isFromAI || false;
            
            // Add message to DOM
            addMessage(msg.content || msg.message, msg.author || (isCurrentUser ? 'You' : 'User'), isCurrentUser, timestamp, isFromAI);
        });
        
        // Scroll to bottom after rendering messages
        scrollToBottom();
    }
    
    /**
     * Add a new message
     */
    function addMessage(content, author, isCurrentUser, timestamp, isFromAI = false) {
        const messageWrapper = document.querySelector('.message-wrapper');
        if (!messageWrapper) return;
        
        addMessageToDOM(content, author, isCurrentUser, timestamp || 'Just now', messageWrapper, isFromAI);
        scrollToBottom();
    }
    
    /**
     * Add message to DOM
     */
    function addMessageToDOM(content, author, isCurrentUser, time, container, isFromAI = false) {
        const messageDiv = document.createElement('div');
        messageDiv.className = `message ${isCurrentUser ? 'message-out' : 'message-in'} ${isFromAI ? 'ai-message' : ''}`;
        
        messageDiv.innerHTML = `
            <div class="message-avatar">
                <div class="avatar-placeholder rounded-circle">${author.charAt(0).toUpperCase()}</div>
            </div>
            <div class="message-content">
                <div class="message-bubble">
                    <div class="message-text">${content}</div>
                </div>
                <div class="message-info">
                    <span class="message-time">${time}</span>
                    <span class="message-author">${author}</span>
                </div>
            </div>
        `;
        
        container.appendChild(messageDiv);
    }
    
    /**
     * Update subject preview in sidebar
     */
    function updateSubjectPreview(subjectId, message) {
        const chatItem = document.querySelector(`.chat-item[data-subject-id="${subjectId}"]`);
        if (!chatItem) return;
        
        const previewElement = chatItem.querySelector('.chat-item-preview');
        if (previewElement) {
            previewElement.textContent = message;
        }
    }
    
    /**
     * Update chat header with subject info
     */
    function updateChatHeader(subjectId) {
        const chatItem = document.querySelector(`.chat-item[data-subject-id="${subjectId}"]`);
        if (!chatItem || !chatHeader) return;
        
        const subjectName = chatItem.querySelector('.chat-item-name').textContent;
        const avatarLetter = subjectName.charAt(0).toUpperCase();
        
        chatHeader.innerHTML = `
            <div class="chat-header-info">
                <div class="chat-header-avatar">
                    <div class="avatar-placeholder rounded-circle">${avatarLetter}</div>
                </div>
                <div class="chat-header-details">
                    <div class="chat-header-name">${subjectName}</div>
                    <div class="chat-header-status">
                        <span class="status-indicator online"></span>
                        <span>online</span>
                    </div>
                </div>
            </div>
            <div class="chat-header-actions">
                <button type="button" class="btn btn-icon">
                    <i class="bi bi-three-dots-vertical"></i>
                </button>
            </div>
        `;
    }
    
    /**
     * Send message
     */
    function sendMessage() {
        if (!messageInput || !currentSubject || !socket) return;
        
        const message = messageInput.value.trim();
        if (!message) return;
        
        console.log(`DEBUG: Sending message to subject ${currentSubject}: ${message}`);
        
        // Clear input
        messageInput.value = '';
        
        // Get current user ID
        const currentUserId = getCurrentUserId();
        
        // Create message object
        const messageData = {
            type: 'message',
            subject_id: currentSubject,
            message: message,
            user_id: currentUserId
        };
        
        // Send message via WebSocket
        socket.send(JSON.stringify(messageData));
        
        // Add message to chat (optimistic UI update)
        addMessage(message, 'You', true);
        
        // Update subject preview
        updateSubjectPreview(currentSubject, message);
    }
    
    /**
     * Scroll chat to bottom
     */
    function scrollToBottom() {
        if (chatMessages) {
            chatMessages.scrollTop = chatMessages.scrollHeight;
        }
    }
    
    /**
     * Filter subjects by search query
     */
    function filterSubjects(query) {
        const items = document.querySelectorAll('.chat-item');
        if (!items.length) return;
        
        query = query.toLowerCase();
        
        items.forEach(item => {
            const name = item.querySelector('.chat-item-name').textContent.toLowerCase();
            if (name.includes(query)) {
                item.style.display = '';
            } else {
                item.style.display = 'none';
            }
        });
    }
    
    /**
     * Show error message
     */
    function showError(message) {
        console.error(`DEBUG: Error: ${message}`);
        if (chatMessages) {
            chatMessages.innerHTML = `
                <div class="error-state text-center p-4">
                    <i class="bi bi-exclamation-triangle" style="font-size: 48px; color: #dc3545;"></i>
                    <p class="mt-3 text-muted">${message}</p>
                </div>
            `;
        }
    }
    
    /**
     * Setup theme detection
     */
    function setupThemeDetection() {
        // Theme detection code would go here
        console.log('DEBUG: Theme detection initialized');
    }
    
    /**
     * Scroll chat to bottom
     */
    function scrollToBottom() {
        if (chatMessages) {
            chatMessages.scrollTop = chatMessages.scrollHeight;
        }
    }
    
    /**
     * Filter subjects by search query
     */
    function filterSubjects(query) {
        const items = document.querySelectorAll('.chat-item');
        if (!items.length) return;
        
        query = query.toLowerCase();
        
        items.forEach(item => {
            const name = item.querySelector('.chat-item-name').textContent.toLowerCase();
            if (name.includes(query)) {
                item.style.display = '';
            } else {
                item.style.display = 'none';
            }
        });
    }
    
    /**
     * Show error message
     */
    function showError(message) {
        console.error(`DEBUG: Error: ${message}`);
        if (chatMessages) {
            chatMessages.innerHTML = `
                <div class="error-state text-center p-4">
                    <i class="bi bi-exclamation-triangle" style="font-size: 48px; color: #dc3545;"></i>
                    <p class="mt-3 text-muted">${message}</p>
                </div>
            `;
        }
    }
    
    /**
     * Setup theme detection
     */
    function setupThemeDetection() {
        // Theme detection code would go here
        console.log('DEBUG: Theme detection initialized');
    }
});
