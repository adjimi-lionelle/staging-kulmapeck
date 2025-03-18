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
        console.log("DEBUG: Setting up mobile view, current width:", window.innerWidth);
        
        const mobileBackButton = document.querySelector('.mobile-back-button');
        
        if (mobileBackButton) {
            mobileBackButton.addEventListener('click', function() {
                chatContainer.classList.remove('chat-active');
            });
            
            // Make sure we don't override the translated text from the template
            // The text is already set with {% trans %}BACKTOSUBJECT_KEY{% endtrans %} in the template
        }
        
        // Update mobile view state on resize
        window.addEventListener('resize', function() {
            const newIsMobileView = window.innerWidth <= 768;
            
            if (newIsMobileView !== isMobileView) {
                isMobileView = newIsMobileView;
                console.log("DEBUG: View changed to:", isMobileView ? "mobile" : "desktop");
                
                // Reset UI if switching to desktop from mobile
                if (!isMobileView && chatContainer.classList.contains('chat-active')) {
                    chatContainer.classList.remove('chat-active');
                }
            }
        });
    }
    
    /**
     * Setup all event listeners
     */
    function setupEventListeners() {
        // Send message button
        if (sendButton) {
            sendButton.addEventListener('click', sendMessage);
        }
        
        // Enter key to send message
        if (messageInput) {
            messageInput.addEventListener('keypress', function(e) {
                if (e.key === 'Enter' && !e.shiftKey) {
                    e.preventDefault();
                    sendMessage();
                }
            });
        }
        
        // Subject search
        if (subjectSearch) {
            subjectSearch.addEventListener('input', function() {
                filterSubjects(this.value.trim().toLowerCase());
            });
        }
    }
    
    /**
     * Load subjects from API
     */
    function loadSubjects() {
        console.log("DEBUG: Loading subjects from API...");
        
        fetch("/api/chat/subjectChats", {
            method: "GET",
            headers: { "Content-Type": "application/json" },
            credentials: "include",
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            console.log("DEBUG: Subjects data received", data);
            renderSubjects(data);
        })
        .catch(error => {
            console.error("DEBUG ERROR: Error loading subjects", error);
            showError('Could not load subjects. Please try again later.');
        });
    }
    
    /**
     * Render subjects in sidebar
     */
    function renderSubjects(subjects) {
        console.log("DEBUG: renderSubjects() called with", subjects);
        
        if (!Array.isArray(subjects)) {
            console.error("DEBUG: Subjects data is not an array", subjects);
            return;
        }
        
        subjectList.innerHTML = "";
        
        subjects.forEach((subject) => {
            const chatItem = document.createElement("div");
            chatItem.className = "chat-item";
            chatItem.dataset.subjectId = subject.id;
            
            chatItem.innerHTML = `
                <div class="chat-item-avatar">
                    <div class="avatar-placeholder rounded-circle">${subject.name.charAt(0).toUpperCase()}</div>
                </div>
                <div class="chat-item-info">
                    <div class="chat-item-name">${subject.name}</div>
                    <div class="chat-item-preview">${subject.lastMessage || "Start chatting..."}</div>
                </div>
            `;
            
            chatItem.addEventListener("click", () => {
                document.querySelectorAll(".chat-item").forEach(item => item.classList.remove("active"));
                chatItem.classList.add("active");
                selectSubject(subject.id);
            });
            
            subjectList.appendChild(chatItem);
        });
        
        // If no subjects, show empty state
        if (subjects.length === 0) {
            const emptyState = document.createElement('div');
            emptyState.className = 'empty-subjects text-center p-4';
            emptyState.innerHTML = `
                <i class="bi bi-book" style="font-size: 48px; color: #6c757d;"></i>
                <p class="mt-3 text-muted">No subjects available</p>
            `;
            subjectList.appendChild(emptyState);
        }
    }
    
    /**
     * Select a subject and connect to WebSocket
     */
    function selectSubject(subjectId) {
        console.log(`DEBUG: selectSubject() called with ID ${subjectId}`);
        
        if (!subjectId) {
            console.error("DEBUG: No subject ID provided!");
            return;
        }
        
        currentSubject = subjectId;
        
        // Update UI for mobile
        if (isMobileView) {
            chatContainer.classList.add('chat-active');
        }
        
        // Update chat header
        updateChatHeader(subjectId);
        
        // Get WebSocket token and connect
        getWebSocketToken(subjectId);
        
        // Show chat UI
        if (welcomeScreen) welcomeScreen.style.display = 'none';
        if (chatHeader) chatHeader.style.display = 'flex';
        if (chatMessages) chatMessages.style.display = 'block';
        if (chatInputContainer) chatInputContainer.style.display = 'flex';
        
        // Load messages
        loadMessages(subjectId);
    }
    
    /**
     * Get WebSocket token for a specific subject
     */
    function getWebSocketToken(subjectId) {
        console.log(`DEBUG: Getting WebSocket token for subject ${subjectId}`);
        
        fetch(`/websocket/token/${subjectId}`)
            .then(response => {
                if (!response.ok) {
                    return response.json().then(data => { 
                        throw new Error(data.error || "Unknown error"); 
                    });
                }
                return response.json();
            })
            .then(data => {
                console.log("DEBUG: WebSocket token received", data.token);
                connectWebSocket(subjectId, data.token);
            })
            .catch(error => {
                console.error('DEBUG: Error fetching WebSocket token:', error);
                showError('Could not connect to chat. Please try again later.');
            });
    }
    
    /**
     * Connect to WebSocket
     */
    function connectWebSocket(subjectId, token) {
        console.log(`DEBUG: Connecting to WebSocket for subject ${subjectId}`);
        
        if (!token) {
            console.error('DEBUG: No WebSocket token available');
            return;
        }
        
        // Close existing connection if any
        if (socket) {
            console.log("DEBUG: Closing existing WebSocket connection");
            socket.close();
            socket = null;
        }
        
        const protocol = window.location.protocol === 'https:' ? 'wss:' : 'ws:';
        const wsUrl = `${protocol}//127.0.0.1:9000/ws?token=${token}&subjectChat_id=${subjectId}`;
        
        console.log(`DEBUG: Opening WebSocket connection to ${wsUrl}`);
        socket = new WebSocket(wsUrl);
        
        socket.onopen = function() {
            console.log("DEBUG: WebSocket connected successfully");
            // Clear any connection errors
            const errorBanner = document.querySelector('.error-message');
            if (errorBanner) {
                errorBanner.remove();
            }
        };
        
        socket.onmessage = function(event) {
            console.log("DEBUG: WebSocket message received:", event.data);
            try {
                const data = JSON.parse(event.data);
                handleWebSocketMessage(data);
            } catch (e) {
                console.error("DEBUG: Error parsing WebSocket message:", e);
            }
        };
        
        socket.onerror = function(error) {
            console.error("DEBUG: WebSocket error:", error);
            showError('Connection error. Attempting to reconnect...');
            
            // Try to reconnect after a short delay
            setTimeout(() => {
                if (socket.readyState === WebSocket.CLOSED || socket.readyState === WebSocket.CLOSING) {
                    console.log("DEBUG: Attempting to reconnect WebSocket after error");
                    getWebSocketToken(subjectId)
                        .then(newToken => connectWebSocket(subjectId, newToken))
                        .catch(err => console.error("DEBUG: Failed to get new token for reconnection:", err));
                }
            }, 3000);
        };
        
        socket.onclose = function(event) {
            console.warn(`DEBUG: WebSocket connection closed with code ${event.code}`);
            
            // If the close wasn't initiated by our code (e.g., when switching chats)
            if (currentSubject === subjectId) {
                console.log("DEBUG: Unexpected connection close. Attempting to reconnect...");
                
                // Wait a bit before reconnecting to avoid rapid reconnection attempts
                setTimeout(() => {
                    if (currentSubject === subjectId) {
                        console.log("DEBUG: Attempting to reconnect WebSocket after close");
                        getWebSocketToken(subjectId)
                            .then(newToken => connectWebSocket(subjectId, newToken))
                            .catch(err => console.error("DEBUG: Failed to get new token for reconnection:", err));
                    }
                }, 5000);
            }
        };
    }
    
    /**
     * Handle WebSocket messages
     */
    function handleWebSocketMessage(data) {
        console.log('DEBUG: Handling WebSocket message:', data);
        
        if (data.type === 'history') {
            renderMessageHistory(data.messages);
        } else if (data.type === 'new_message' || data.type === 'message' || data.message) {
            console.log('DEBUG: Handling individual message:', data);
            
            // Extract message content based on different possible formats
            let messageContent, userId, timestamp, isFromAI, author;
            
            // Handle nested message structure (AI responses from server)
            if (data.type === 'new_message' && data.message && typeof data.message === 'object') {
                console.log('DEBUG: Processing message with nested format');
                messageContent = data.message.content;
                userId = data.message.sender_id;
                timestamp = data.message.createdAt;
                isFromAI = data.message.isFromAI === true;
                author = isFromAI ? 'AI Teacher' : (data.message.author || 'User');
            } else {
                // Handle flat message structure (regular messages)
                console.log('DEBUG: Processing message with flat format');
                messageContent = data.message || data.content;
                userId = data.user_id || data.userId;
                timestamp = data.timestamp;
                isFromAI = data.isFromAI === true;
                
                // Check if message is from current user
                const currentUserId = getCurrentUserId();
                const isCurrentUser = userId === currentUserId;
                
                author = isFromAI ? 'AI Teacher' : (data.author || (isCurrentUser ? 'You' : 'User'));
            }
            
            // Format timestamp
            const formattedTime = timestamp ? 
                new Date(timestamp).toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' }) : 
                new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
            
            console.log(`DEBUG: Processed message - Content: "${messageContent}", Author: ${author}, isFromAI: ${isFromAI}`);
            
            // If this is an AI response, remove the typing indicator
            if (isFromAI) {
                removeAITypingIndicator();
            }
            
            // Add message with appropriate styling
            if (messageContent) {
                addMessage(messageContent, author, author === 'You', formattedTime, isFromAI);
                
                // Update subject preview in sidebar
                if (data.subject_id || currentSubject) {
                    updateSubjectPreview(data.subject_id || currentSubject, messageContent);
                }
            } else {
                console.error('DEBUG: Message content is empty or undefined');
            }
        } else {
            console.warn('DEBUG: Unknown message format received:', data);
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
        
        fetch(`/chat/messages/${subjectId}`)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(messages => {
                console.log("DEBUG: Messages loaded:", messages);
                
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
                
                // Scroll to bottom
                scrollToBottom();
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
        console.log('DEBUG: Rendering message history:', messages);
        
        if (!Array.isArray(messages)) {
            console.error('DEBUG: Messages data is not an array', messages);
            return;
        }
        
        // Clear messages container first
        chatMessages.innerHTML = `
            <div class="message-wrapper">
                <div class="message-time">Today</div>
            </div>
        `;
        
        // Sort messages by timestamp if available
        const sortedMessages = [...messages].sort((a, b) => {
            const timeA = a.timestamp ? new Date(a.timestamp).getTime() : 0;
            const timeB = b.timestamp ? new Date(b.timestamp).getTime() : 0;
            return timeA - timeB;
        });
        
        // Add each message to the DOM
        sortedMessages.forEach(msg => {
            const currentUserId = getCurrentUserId();
            const isCurrentUser = msg.user_id === currentUserId || msg.userId === currentUserId;
            const isFromAI = msg.isFromAI || false;
            const author = isFromAI ? 'AI Teacher' : (msg.author || (isCurrentUser ? 'You' : 'User'));
            const time = msg.timestamp ? new Date(msg.timestamp).toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' }) : '';
            
            addMessage(msg.message || msg.content, author, isCurrentUser, time, isFromAI);
        });
        
        // Scroll to bottom
        scrollToBottom();
    }
    
    /**
     * Add a new message
     */
    function addMessage(content, author, isCurrentUser, timestamp, isFromAI = false) {
        if (!content) return;
        
        // Add message to DOM
        addMessageToDOM(content, author, isCurrentUser, timestamp, chatMessages, isFromAI);
        
        // Scroll to bottom
        scrollToBottom();
    }
    
    /**
     * Add message to DOM
     */
    function addMessageToDOM(content, author, isCurrentUser, time, container, isFromAI = false) {
        const messageElement = document.createElement('div');
        messageElement.className = `message ${isCurrentUser ? 'message-out' : 'message-in'}`;
        
        let authorDisplay = '';
        if (!isCurrentUser) {
            authorDisplay = `<div class="message-author">${author}</div>`;
        }
        
        messageElement.innerHTML = `
            ${authorDisplay}
            <div class="message-content">
                <div class="message-text">${content}</div>
                <div class="message-time">${time || ''}</div>
            </div>
        `;
        
        container.appendChild(messageElement);
    }
    
    /**
     * Update subject preview in sidebar
     */
    function updateSubjectPreview(subjectId, message) {
        if (!subjectId || !message) return;
        
        const subjectItem = document.querySelector(`.chat-item[data-subject-id="${subjectId}"]`);
        if (subjectItem) {
            const previewElement = subjectItem.querySelector('.chat-item-preview');
            if (previewElement) {
                previewElement.textContent = message;
            }
        }
    }
    
    /**
     * Update chat header with subject info
     */
    function updateChatHeader(subjectId) {
        if (!chatHeader || !subjectId) return;
        
        const subjectItem = document.querySelector(`.chat-item[data-subject-id="${subjectId}"]`);
        if (!subjectItem) return;
        
        const subjectName = subjectItem.querySelector('.chat-item-name')?.textContent || 'Subject Chat';
        
        // Get the translated back button text from the existing button
        const existingBackButton = document.querySelector('.mobile-back-button');
        const backButtonText = existingBackButton ? existingBackButton.textContent.trim() : '';
        
        chatHeader.innerHTML = `
            <div class="d-flex align-items-center">
                <button class="mobile-back-button btn btn-sm btn-icon me-2 d-md-none">
                    <i class="bi bi-arrow-left"></i> ${backButtonText}
                </button>
                <div class="chat-header-avatar">
                    <div class="avatar-placeholder rounded-circle">${subjectName.charAt(0).toUpperCase()}</div>
                </div>
                <div class="chat-header-info">
                    <div class="chat-header-name">${subjectName}</div>
                    <div class="chat-header-status">Subject Chat</div>
                </div>
            </div>
        `;
        
        // Re-attach mobile back button event
        const mobileBackButton = chatHeader.querySelector('.mobile-back-button');
        if (mobileBackButton) {
            mobileBackButton.addEventListener('click', function() {
                chatContainer.classList.remove('chat-active');
            });
        }
    }
    
    /**
     * Send message
     */
    function sendMessage() {
        if (!currentSubject) {
            console.error("DEBUG: No subject selected to send message");
            return;
        }
        
        const content = messageInput.value.trim();
        if (!content) return;
        
        console.log(`DEBUG: Sending message to subject ${currentSubject}: ${content}`);
        
        if (socket && socket.readyState === WebSocket.OPEN) {
            const message = {
                subject_id: currentSubject,
                message: content,
                timestamp: new Date().toISOString()
            };
            
            console.log("DEBUG: Sending WebSocket message:", message);
            socket.send(JSON.stringify(message));
            
            // Clear input
            messageInput.value = '';
            
            // Add message to UI immediately (optimistic UI)
            const time = new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
            addMessage(content, 'You', true, time);
            
            // Update subject preview
            updateSubjectPreview(currentSubject, content);
            
            // Show AI is typing indicator
            showAITypingIndicator();
        } else {
            console.error("DEBUG: WebSocket not available, attempting to reconnect");
            
            // Try to reconnect WebSocket
            getWebSocketToken(currentSubject)
                .then(token => {
                    connectWebSocket(currentSubject, token);
                    
                    // Give the socket a moment to connect before retrying
                    setTimeout(() => {
                        if (socket && socket.readyState === WebSocket.OPEN) {
                            console.log("DEBUG: WebSocket reconnected successfully, retrying send");
                            sendMessage();
                        } else {
                            console.error("DEBUG: WebSocket reconnection failed");
                            showError('Connection lost. Please refresh the page and try again.');
                        }
                    }, 1000);
                })
                .catch(error => {
                    console.error("DEBUG: Failed to get WebSocket token:", error);
                    showError('Connection lost. Please refresh the page and try again.');
                });
        }
    }
    
    /**
     * Show AI typing indicator
     */
    function showAITypingIndicator() {
        console.log("DEBUG: Showing AI typing indicator");
        
        // Remove any existing typing indicators
        removeAITypingIndicator();
        
        // Create typing indicator
        const typingIndicator = document.createElement('div');
        typingIndicator.className = 'message message-in';
        typingIndicator.id = 'ai-typing-indicator';
        typingIndicator.innerHTML = `
            <div class="message-author">AI Teacher</div>
            <div class="message-content">
                <div class="typing-indicator">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        `;
        
        // Add to chat
        chatMessages.appendChild(typingIndicator);
        
        // Scroll to bottom
        scrollToBottom();
        
        // Set timeout to remove typing indicator if no response received
        setTimeout(() => {
            if (document.getElementById('ai-typing-indicator')) {
                console.log("DEBUG: AI response timeout, removing typing indicator");
                removeAITypingIndicator();
            }
        }, 30000); // Remove after 30 seconds if no response
    }
    
    /**
     * Remove AI typing indicator
     */
    function removeAITypingIndicator() {
        const existingIndicator = document.getElementById('ai-typing-indicator');
        if (existingIndicator) {
            console.log("DEBUG: Removing existing typing indicator");
            existingIndicator.remove();
        }
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
        const subjects = document.querySelectorAll('.chat-item');
        
        subjects.forEach(subject => {
            const name = subject.querySelector('.chat-item-name').textContent.toLowerCase();
            const preview = subject.querySelector('.chat-item-preview').textContent.toLowerCase();
            
            if (name.includes(query) || preview.includes(query)) {
                subject.style.display = 'flex';
            } else {
                subject.style.display = 'none';
            }
        });
    }
    
    /**
     * Show error message
     */
    function showError(message) {
        console.error('DEBUG: Error:', message);
        
        // Create error toast
        const toast = document.createElement('div');
        toast.className = 'toast align-items-center text-white bg-danger border-0 position-fixed bottom-0 end-0 m-3';
        toast.setAttribute('role', 'alert');
        toast.setAttribute('aria-live', 'assertive');
        toast.setAttribute('aria-atomic', 'true');
        
        toast.innerHTML = `
            <div class="d-flex">
                <div class="toast-body">
                    <i class="bi bi-exclamation-circle me-2"></i> ${message}
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        `;
        
        document.body.appendChild(toast);
        
        // Show toast
        const bsToast = new bootstrap.Toast(toast);
        bsToast.show();
        
        // Remove toast after it's hidden
        toast.addEventListener('hidden.bs.toast', function() {
            document.body.removeChild(toast);
        });
    }
    
    /**
     * Setup theme detection
     */
    function setupThemeDetection() {
        const darkModeMediaQuery = window.matchMedia('(prefers-color-scheme: dark)');
        const htmlElement = document.documentElement;
        
        function updateTheme(isDark) {
            if (isDark) {
                htmlElement.setAttribute('data-bs-theme', 'dark');
            } else {
                htmlElement.setAttribute('data-bs-theme', 'light');
            }
        }
        
        // Initial setup
        updateTheme(darkModeMediaQuery.matches);
        
        // Listen for changes
        darkModeMediaQuery.addEventListener('change', e => updateTheme(e.matches));
    }
});
