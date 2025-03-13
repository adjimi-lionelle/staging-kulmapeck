/**
 * Kulmapeck Chat System
 * Handles WebSocket connections and chat functionality
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
    
    // Chat State
    let currentSubject = null;
    let socket = null;
    let token = null;
    let typingTimeout = null;
    let lastTypingStatus = false;
    let isMobileView = window.innerWidth <= 768;
    
    // Initialize the chat system
    function initialize() {
        console.log('DEBUG: Initializing chat system...');
        
        // Check if required elements exist
        if (!subjectList) {
            console.error('DEBUG: Subject list element not found');
        }
        
        if (!chatMessages) {
            console.error('DEBUG: Chat messages element not found');
        }
        
        if (!messageInput) {
            console.error('DEBUG: Message input element not found');
        }
        
        if (!sendButton) {
            console.error('DEBUG: Send button element not found');
        }
        
        // Setup mobile view if needed
        setupMobileView();
        
        // Setup mobile back button
        const mobileBackButton = document.querySelector('.mobile-back-button');
        if (mobileBackButton) {
            mobileBackButton.addEventListener('click', function() {
                if (chatContainer) {
                    chatContainer.classList.remove('chat-active');
                }
            });
        }
        
        // Load subjects
        loadSubjects();
        
        // Setup event listeners
        if (messageInput) {
            messageInput.addEventListener('keypress', function(e) {
                if (e.key === 'Enter' && !e.shiftKey) {
                    e.preventDefault();
                    sendMessage();
                }
                
                // Send typing status
                handleTyping();
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
        
        // Handle window resize for mobile view
        window.addEventListener('resize', function() {
            const newIsMobileView = window.innerWidth <= 768;
            if (newIsMobileView !== isMobileView) {
                isMobileView = newIsMobileView;
                setupMobileView();
            }
        });
    }
    
    // Get current user ID from data attribute
    function getCurrentUserId() {
        const userIdElement = document.getElementById('current-user-id');
        if (userIdElement && userIdElement.dataset.userId) {
            return userIdElement.dataset.userId;
        }
        
        // Fallback: try to get from chat container
        if (chatContainer && chatContainer.dataset.userId) {
            return chatContainer.dataset.userId;
        }
        
        console.warn('DEBUG: Could not find current user ID');
        return null;
    }
    
    // Update subject preview in sidebar
    function updateSubjectPreview(subjectId, message) {
        const subjectItem = document.querySelector(`.chat-item[data-subject-id="${subjectId}"]`);
        if (subjectItem) {
            const previewElement = subjectItem.querySelector('.chat-item-preview');
            if (previewElement) {
                // Truncate message if too long
                const maxLength = 30;
                const preview = message.length > maxLength ? 
                    message.substring(0, maxLength) + '...' : 
                    message;
                
                previewElement.textContent = preview;
                
                // Update timestamp
                const timeElement = subjectItem.querySelector('.chat-item-time');
                if (timeElement) {
                    timeElement.textContent = 'Just now';
                }
                
                // Move subject to top of list if not already
                const parent = subjectItem.parentNode;
                if (parent && parent.firstChild !== subjectItem) {
                    parent.insertBefore(subjectItem, parent.firstChild);
                }
            }
        }
    }
    
    // Setup mobile view
    function setupMobileView() {
        if (chatContainer) {
            // We no longer need to add/remove the mobile-back-button dynamically
            // since it's now part of the HTML template
            
            // Update isMobileView based on current window width
            isMobileView = window.innerWidth <= 768;
            
            if (isMobileView) {
                // Add mobile-view class for any additional mobile styling
                chatContainer.classList.add('mobile-view');
                
                // If a subject is already selected, show the chat view
                if (currentSubject) {
                    chatContainer.classList.add('chat-active');
                }
            } else {
                // Remove mobile classes on desktop
                chatContainer.classList.remove('mobile-view');
                chatContainer.classList.remove('chat-active');
            }
            
            // Add window resize listener
            window.addEventListener('resize', function() {
                const wasInMobileView = isMobileView;
                isMobileView = window.innerWidth <= 768;
                
                // Only update if view type changed
                if (wasInMobileView !== isMobileView) {
                    setupMobileView();
                }
            });
        }
    }
    
    // Attach event listeners to pre-loaded subjects
    function attachSubjectEventListeners() {
        const subjects = document.querySelectorAll('.chat-item');
        if (subjects.length > 0) {
            subjects.forEach(subject => {
                subject.addEventListener('click', () => {
                    // Remove active class from all items
                    document.querySelectorAll('.chat-item').forEach(item => {
                        item.classList.remove('active');
                    });
                    
                    // Add active class to clicked item
                    subject.classList.add('active');
                    
                    // Select the subject
                    selectSubject(subject.dataset.subjectId);
                });
            });
            
            // Select the first subject by default
            const firstSubject = subjects[0];
            if (firstSubject) {
                selectSubject(firstSubject.dataset.subjectId);
            }
        }
    }
    
    // Get WebSocket token for a specific subject
    function getWebSocketToken(subjectId) {
        console.log(`DEBUG: getWebSocketToken() called for subject ${subjectId}`);
        
        if (!subjectId) {
            console.error('DEBUG: No subject ID provided');
            return;
        }
        
        console.log(`DEBUG: Fetching WebSocket token from /websocket/token/${subjectId}`);
        fetch(`/websocket/token/${subjectId}`)
            .then(response => {
                console.log('DEBUG: WebSocket token response received', {
                    status: response.status,
                    statusText: response.statusText
                });
                
                if (!response.ok) {
                    // Check if we need to redirect (for premium access)
                    if (response.status === 403) {
                        return response.text().then(text => {
                            console.log('DEBUG: 403 response text:', text);
                            try {
                                const data = JSON.parse(text);
                                console.log('DEBUG: 403 response data:', data);
                                if (data.redirect) {
                                    console.log(`DEBUG: Redirecting to /${data.redirect}`);
                                    window.location.href = `/${data.redirect}`;
                                    return null;
                                }
                                throw new Error(data.error || 'Access denied');
                            } catch (e) {
                                console.error('DEBUG: Error parsing 403 response:', e);
                                throw new Error('Access denied');
                            }
                        });
                    }
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                if (data) {
                    console.log('DEBUG: WebSocket token received', { token: data.token ? '***' : 'null' });
                    token = data.token;
                    connectWebSocket(subjectId);
                } else {
                    console.warn('DEBUG: No WebSocket token data received');
                }
            })
            .catch(error => {
                console.error('DEBUG: Error fetching WebSocket token:', error);
                showError('Could not connect to chat. Please try again later.');
            });
    }
    
    // Load subjects from API
    function loadSubjects() {
        console.log('DEBUG: loadSubjects() called');
        
        if (!subjectList) {
            console.error('DEBUG: Subject list element not found in DOM');
            return;
        }
        
        // Show loading state
        subjectList.innerHTML = `
            <div class="loading-state text-center p-4">
                <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">Loading subjects...</span>
                </div>
                <p class="mt-3 text-muted">Loading subjects...</p>
            </div>
        `;
        
        console.log('DEBUG: Fetching subjects from API endpoint: /subjectChats');
        fetch('/api/chat/subjectChats', {
                method: 'GET',
                headers: {
                    'Content-Type': 'application/json'
                },
                credentials: 'include' // ✅ S'assure que les cookies de session sont envoyés
            })
            .then(response => {
                console.log('DEBUG: API response received', {
                    status: response.status,
                    statusText: response.statusText,
                    headers: Object.fromEntries([...response.headers.entries()])
                });
                
                if (!response.ok) {
                    return response.text().then(text => {
                        console.error('DEBUG: API error response', { text });
                        try {
                            return JSON.parse(text); // Try to parse as JSON
                        } catch (e) {
                            throw new Error(`Server error: ${response.status} ${text}`);
                        }
                    });
                }
                return response.json();
            })
            .then(data => {
                console.log('DEBUG: Subjects data received', data);
                
                if (data.error) {
                    console.error('DEBUG: API returned error', data.error);
                    if (data.redirect) {
                        console.log('DEBUG: Redirecting to', data.redirect);
                        window.location.href = `/${data.redirect}`;
                        return;
                    }
                    throw new Error(data.error);
                }
                
                if (!Array.isArray(data)) {
                    console.error('DEBUG: API did not return an array', data);
                    throw new Error('Invalid data format received from server');
                }
                
                console.log(`DEBUG: Rendering ${data.length} subjects`);
                renderSubjects(data);
            })
            .catch(error => {
                console.error('DEBUG: Error loading subjects:', error);
                subjectList.innerHTML = `
                    <div class="error-state text-center p-4">
                        <i class="bi bi-exclamation-triangle" style="font-size: 48px; color: #dc3545;"></i>
                        <p class="mt-3 text-muted">Failed to load subjects</p>
                        <p class="text-danger">${error.message}</p>
                        <button class="btn btn-outline-primary mt-3" onclick="loadSubjects()">
                            <i class="bi bi-arrow-clockwise"></i> Try Again
                        </button>
                    </div>
                `;
            });
    }
    
    // Show error message
    function showError(message) {
        if (subjectList) {
            subjectList.innerHTML = `
                <div class="error-state text-center p-4">
                    <i class="bi bi-exclamation-triangle" style="font-size: 48px; color: #dc3545;"></i>
                    <p class="mt-3 text-muted">${message}</p>
                </div>
            `;
        }
    }
    
    // Render subjects in sidebar
    function renderSubjects(subjects) {
        console.log('DEBUG: renderSubjects() called with', subjects);
        
        if (!subjectList) {
            console.error('DEBUG: Subject list element not found in DOM');
            return;
        }
        
        if (!Array.isArray(subjects)) {
            console.error('DEBUG: subjects is not an array', subjects);
            subjects = [];
        }
        
        if (subjects.length === 0) {
            console.log('DEBUG: No subjects to render');
            subjectList.innerHTML = `
                <div class="empty-state text-center p-4">
                    <i class="bi bi-journal-x" style="font-size: 48px; color: #6c757d;"></i>
                    <p class="mt-3 text-muted">No subjects available</p>
                </div>
            `;
            return;
        }
        
        console.log(`DEBUG: Rendering ${subjects.length} subjects`);
        subjectList.innerHTML = '';
        
        subjects.forEach((subject, index) => {
            console.log(`DEBUG: Rendering subject #${index}`, subject);
            
            if (!subject || !subject.id || !subject.name) {
                console.error('DEBUG: Invalid subject data', subject);
                return;
            }
            
            const chatItem = document.createElement('div');
            chatItem.className = `chat-item${index === 0 ? ' active' : ''}`;
            chatItem.dataset.subjectId = subject.id;
            
            const firstLetter = subject.name.charAt(0).toUpperCase();
            const unreadBadge = subject.unreadCount > 0 
                ? `<div class="chat-item-badge">${subject.unreadCount}</div>` 
                : '';
            
            // Get last message or default text based on what's available
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
                console.log(`DEBUG: Subject clicked: ${subject.id} - ${subject.name}`);
                
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
        
        // Select the first subject by default
        if (subjects.length > 0) {
            console.log(`DEBUG: Auto-selecting first subject: ${subjects[0].id}`);
            selectSubject(subjects[0].id);
        }
    }
    
    // Select a subject and connect to WebSocket
    function selectSubject(subjectId) {
        console.log(`DEBUG: selectSubject() called with ID ${subjectId}`);
        
        if (!subjectId) {
            console.error('DEBUG: No subject ID provided');
            return;
        }
        
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
            console.log('DEBUG: Disconnecting from previous WebSocket');
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
        
        // Dispatch event that a subject was selected
        const event = new CustomEvent('subjectSelected', { detail: { subjectId } });
        document.dispatchEvent(event);
        
        // For mobile view, show chat content
        if (isMobileView && chatContainer) {
            chatContainer.classList.add('chat-active');
            chatContainer.classList.remove('mobile-back-button');
        }
    }
    
    // Load messages via REST API
    function loadMessages(subjectId) {
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
        document.getElementById('welcome-screen').style.display = 'none';
        chatHeader.style.display = 'flex';
        chatMessages.style.display = 'block';
        document.getElementById('chat-input-container').style.display = 'flex';
        
        fetch(`/chat/messages/${subjectId}`)
            .then(response => {
                if (!response.ok) {
                    if (response.status === 403) {
                        return response.json().then(data => {
                            if (data.redirect) {
                                window.location.href = `/${data.redirect}`;
                                return null;
                            }
                            throw new Error(data.error || 'Access denied');
                        });
                    }
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(messages => {
                if (messages) {
                    // Reset messages container
                    chatMessages.innerHTML = `
                        <div class="message-wrapper">
                            <div class="message-time">Today</div>
                        </div>
                    `;
                    
                    // Render messages
                    if (messages.length > 0) {
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
                }
            })
            .catch(error => {
                console.error('Error loading messages:', error);
                chatMessages.innerHTML = `
                    <div class="error-messages text-center p-4">
                        <i class="bi bi-exclamation-triangle" style="font-size: 48px; color: #dc3545;"></i>
                        <p class="mt-3 text-muted">Could not load messages. Please try again later.</p>
                    </div>
                `;
            });
    }
    
    // Update chat header with subject info
    function updateChatHeader(subjectId) {
        const subject = document.querySelector(`.chat-item[data-subject-id="${subjectId}"]`);
        if (!subject) return;
        
        const subjectName = subject.querySelector('.chat-item-name').textContent;
        const firstLetter = subjectName.charAt(0).toUpperCase();
        
        chatHeader.innerHTML = `
            <div class="chat-header-info">
                <div class="chat-header-avatar">
                    <div class="avatar-placeholder rounded-circle">${firstLetter}</div>
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
                    <i class="bi bi-telephone"></i>
                </button>
                <button type="button" class="btn btn-icon">
                    <i class="bi bi-camera-video"></i>
                </button>
                <button type="button" class="btn btn-icon">
                    <i class="bi bi-three-dots-vertical"></i>
                </button>
            </div>
        `;
    }
    
    // Connect to WebSocket
    function connectWebSocket(subjectId) {
        console.log(`DEBUG: Ouverture de la connexion WebSocket...`);
        
        if (!token) {
            console.error('DEBUG: No WebSocket token available');
            return;
        }
        
        // Disconnect from previous WebSocket if any
        if (socket) {
            console.log("DEBUG: Fermeture de l'ancienne connexion WebSocket...");
            socket.close();
            socket = null;
        }
        
        const protocol = window.location.protocol === 'https:' ? 'wss:' : 'ws:';
        const wsUrl = `${protocol}//127.0.0.1:9000/ws?token=${token}&subjectChat_id=${subjectId}`;
        
        console.log(`DEBUG: Connecting to WebSocket URL: ${wsUrl}`);
        socket = new WebSocket(wsUrl);
        
        socket.onopen = function() {
            console.log("WebSocket connecté avec succès !");
        };
        
        socket.onmessage = function(event) {
            console.log("Message WebSocket reçu :", event.data);
            try {
                const data = JSON.parse(event.data);
                handleWebSocketMessage(data);
            } catch (e) {
                console.error("Erreur lors du parsing du message WebSocket :", e);
            }
        };
        
        socket.onerror = function(error) {
            console.error("Erreur WebSocket :", error);
        };
        
        socket.onclose = function() {
            console.warn("Connexion WebSocket fermée !");
        };
    }
    
    // Handle WebSocket messages
    function handleWebSocketMessage(data) {
        console.log('DEBUG: Handling WebSocket message:', data);
        
        if (data.type === 'history') {
            console.log('DEBUG: Received message history');
            renderMessageHistory(data.messages);
        } else if (data.type === 'message' || data.message) {
            // If timestamp is provided, use it for message time display
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
        } else if (data.type === 'typing') {
            handleTypingIndicator(data.user, data.isTyping);
        }
    }
    
    // Render message history
    function renderMessageHistory(messages) {
        const messageWrapper = document.querySelector('.message-wrapper');
        if (!messageWrapper) return;
        
        // Get current user ID
        const currentUserId = getCurrentUserId();
        
        messages.forEach(msg => {
            // Check if this message is from the current user
            const isCurrentUser = msg.sender === parseInt(currentUserId);
            
            // Format the timestamp
            let timestamp = '8.Just now';
            // Handle both createdAt and createAt field names for compatibility
            const dateField = msg.createdAt || msg.createAt;
            if (dateField) {
                try {
                    const msgDate = new Date(dateField);
                    timestamp = msgDate.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
                } catch (e) {
                    console.error('Error parsing date:', e);
                }
            }
            
            // Add the message to the DOM
            addMessageToDOM(
                msg.content, 
                isCurrentUser ? 'You' : (msg.isFromAI ? 'AI Teacher' : 'User'), 
                isCurrentUser, 
                timestamp, 
                messageWrapper,
                msg.isFromAI || false
            );
        });
        
        scrollToBottom();
    }
    
    // Add a new message
    function addMessage(content, author, isCurrentUser, timestamp, isFromAI = false) {
        const messageWrapper = document.querySelector('.message-wrapper');
        if (!messageWrapper) return;
        
        const now = new Date();
        const timeString = timestamp || now.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
        
        addMessageToDOM(content, author, isCurrentUser, timeString, messageWrapper, isFromAI);
        scrollToBottom();
        
        // Update the preview in the sidebar
        updateSubjectPreview(currentSubject, content);
    }
    
    // Add message to DOM
    function addMessageToDOM(content, author, isCurrentUser, time, container, isFromAI = false) {
        const messageItem = document.createElement('div');
        messageItem.className = `message-item ${isCurrentUser ? 'sent' : 'received'} ${isFromAI ? 'ai-message' : ''}`;
        
        // Check if it's a message with attachment
        const hasAttachment = content.includes('project_brief.pdf') || content.includes('file');
        let attachmentHTML = '';
        
        if (hasAttachment) {
            attachmentHTML = `
                <div class="message-attachment">
                    <div class="attachment-icon">
                        <i class="bi bi-file-earmark-pdf"></i>
                    </div>
                    <div class="attachment-info">
                        <div class="attachment-name">project_brief.pdf</div>
                        <div class="attachment-size">2.4 MB</div>
                    </div>
                </div>
            `;
        }
        
        if (isCurrentUser) {
            messageItem.innerHTML = `
                <div class="message-content">
                    <div class="message-bubble">
                        <div class="message-text">${content}</div>
                        ${attachmentHTML}
                    </div>
                    <div class="message-info">
                        <span class="message-time">${time}</span>
                    </div>
                </div>
            `;
        } else {
            const firstLetter = author.charAt(0).toUpperCase();
            messageItem.innerHTML = `
                <div class="message-avatar">
                    <div class="avatar-placeholder rounded-circle">${firstLetter}</div>
                </div>
                <div class="message-content">
                    <div class="message-bubble">
                        <div class="message-text">${content}</div>
                        ${attachmentHTML}
                    </div>
                    <div class="message-info">
                        <span class="message-time">${time}</span>
                    </div>
                </div>
            `;
        }
        
        container.appendChild(messageItem);
    }
    
    // Update subject preview in sidebar
    function updateSubjectPreview(subjectId, message) {
        const subjectItem = document.querySelector(`.chat-item[data-subject-id="${subjectId}"]`);
        if (subjectItem) {
            const previewElement = subjectItem.querySelector('.chat-item-preview');
            if (previewElement) {
                // Truncate message if too long
                const maxLength = 30;
                const preview = message.length > maxLength ? 
                    message.substring(0, maxLength) + '...' : 
                    message;
                
                previewElement.textContent = preview;
                
                // Update timestamp
                const timeElement = subjectItem.querySelector('.chat-item-time');
                if (timeElement) {
                    timeElement.textContent = 'Just now';
                }
                
                // Move subject to top of list if not already
                const parent = subjectItem.parentNode;
                if (parent && parent.firstChild !== subjectItem) {
                    parent.insertBefore(subjectItem, parent.firstChild);
                }
            }
        }
    }
    
    // Handle typing indicator
    function handleTypingIndicator(user, isTyping) {
        // Implementation for typing indicator
    }
    
    // Send typing status
    function sendTypingStatus(isTyping) {
        if (!socket || socket.readyState !== WebSocket.OPEN || !currentSubject) return;
        
        if (lastTypingStatus === isTyping) return;
        lastTypingStatus = isTyping;
        
        socket.send(JSON.stringify({
            action: 'typing',
            group_id: currentSubject,
            isTyping: isTyping
        }));
    }
    
    // Send message
    function sendMessage() {
        if (!currentSubject) {
            console.error('DEBUG: No subject selected');
            return;
        }
        
        const content = messageInput.value.trim();
        if (!content) return;
        
        // Try WebSocket first
        if (socket && socket.readyState === WebSocket.OPEN) {
            console.log('DEBUG: Sending message via WebSocket');
            
            // Send message through WebSocket
            socket.send(JSON.stringify({
                subject_id: currentSubject,
                message: content,
                timestamp: new Date().toISOString()
            }));
            
            // Add message to UI
            addMessage(content, 'You', true);
            
            // Clear input
            messageInput.value = '';
            
            // Reset typing status
            sendTypingStatus(false);
        } else {
            console.log('DEBUG: WebSocket not available, using REST API');
            
            // Show sending indicator
            const tempId = 'msg-' + Date.now();
            const messageWrapper = document.querySelector('.message-wrapper');
            
            // Add temporary message with sending indicator
            const tempMsg = document.createElement('div');
            tempMsg.className = 'message-item sent';
            tempMsg.id = tempId;
            tempMsg.innerHTML = `
                <div class="message-content">
                    <div class="message-bubble">
                        <div class="message-text">${content}</div>
                    </div>
                    <div class="message-info">
                        <span class="message-time">
                            <i class="bi bi-clock" title="Sending..."></i>
                        </span>
                    </div>
                </div>
            `;
            messageWrapper.appendChild(tempMsg);
            scrollToBottom();
            
            // Fallback to REST API
            fetch('/chat/send', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    chat_id: currentSubject,
                    content: content
                })
            })
            .then(response => {
                if (!response.ok) {
                    if (response.status === 403) {
                        return response.json().then(data => {
                            if (data.redirect) {
                                window.location.href = `/${data.redirect}`;
                                return null;
                            }
                            throw new Error(data.error || 'Access denied');
                        });
                    }
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                if (data) {
                    // Remove temporary message
                    const tempMessage = document.getElementById(tempId);
                    if (tempMessage) {
                        tempMessage.remove();
                    }
                    
                    // Add confirmed message to UI
                    addMessage(content, 'You', true);
                    
                    // Clear input
                    messageInput.value = '';
                    
                    // Handle AI response if present
                    if (data.aiResponse) {
                        setTimeout(() => {
                            // Show typing indicator for AI
                            const typingIndicator = document.createElement('div');
                            typingIndicator.className = 'typing-indicator';
                            typingIndicator.innerHTML = '<span>AI is typing</span><span class="dot">.</span><span class="dot">.</span><span class="dot">.</span>';
                            messageWrapper.appendChild(typingIndicator);
                            scrollToBottom();
                            
                            // After a short delay, show the AI response
                            setTimeout(() => {
                                // Remove typing indicator
                                typingIndicator.remove();
                                
                                // Add AI message
                                addMessage(
                                    data.aiResponse.content,
                                    'AI Teacher',
                                    false,
                                    new Date(data.aiResponse.createdAt).toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' }),
                                    true // isFromAI
                                );
                            }, 1500); // Simulate typing time
                        }, 500); // Small delay before AI starts "typing"
                    }
                }
            })
            .catch(error => {
                console.error('DEBUG: Error sending message:', error);
                
                // Update temporary message to show error
                const tempMessage = document.getElementById(tempId);
                if (tempMessage) {
                    const timeElement = tempMessage.querySelector('.message-time');
                    if (timeElement) {
                        timeElement.innerHTML = `
                            <i class="bi bi-exclamation-triangle-fill text-danger" title="Failed to send"></i>
                        `;
                    }
                }
                
                showError('Failed to send message. Please try again.');
            });
        }
    }
    
    // Scroll chat to bottom
    function scrollToBottom() {
        if (chatMessages) {
            chatMessages.scrollTop = chatMessages.scrollHeight;
        }
    }
    
    // Search subjects
    function searchSubjects(query) {
        const items = document.querySelectorAll('.chat-item');
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
    
    // Event listeners
    if (subjectSearch) {
        subjectSearch.addEventListener('input', function() {
            searchSubjects(this.value);
        });
    }
    
    // Call initialize when the DOM is fully loaded
    initialize();
});
