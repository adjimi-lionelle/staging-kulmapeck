/**
 * Kulmapeck Chat System
 * Handles WebSocket connections and chat functionality
 */

document.addEventListener('DOMContentLoaded', function() {
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
    
    // Initialize the chat system
    function initialize() {
        // If subjects are not pre-loaded in the template, fetch them
        if (subjectList && subjectList.querySelector('.loading-state')) {
            loadSubjects();
        } else {
            // Subjects are already in the DOM, attach event listeners
            attachSubjectEventListeners();
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
        if (!subjectId) return;
        
        fetch(`/websocket/token/${subjectId}`)
            .then(response => {
                if (!response.ok) {
                    // Check if we need to redirect (for premium access)
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
                    token = data.token;
                    connectWebSocket(subjectId);
                }
            })
            .catch(error => {
                console.error('Error fetching WebSocket token:', error);
                showError('Could not connect to chat. Please try again later.');
            });
    }
    
    // Load subjects
    function loadSubjects() {
        console.log('Loading subjects...');
        fetch('/subjectChats')
            .then(response => {
                console.log('Response status:', response.status);
                console.log('Response headers:', [...response.headers.entries()]);
                
                if (!response.ok) {
                    // Check if we need to redirect (for premium access)
                    if (response.status === 403) {
                        return response.json().then(data => {
                            console.log('403 response data:', data);
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
            .then(subjects => {
                console.log('Subjects received:', subjects);
                if (subjects) {
                    renderSubjects(subjects);
                    if (subjects.length > 0) {
                        selectSubject(subjects[0].id);
                    }
                }
            })
            .catch(error => {
                console.error('Error loading subjects:', error);
                showError('Could not load subjects. Please try again later.');
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
        if (!subjectList) return;
        
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
            
            chatItem.innerHTML = `
                <div class="chat-item-avatar">
                    <div class="avatar-placeholder rounded-circle">${firstLetter}</div>
                </div>
                <div class="chat-item-info">
                    <div class="chat-item-name">${subject.name}</div>
                    <div class="chat-item-preview">${subject.lastMessage || 'Start chatting...'}</div>
                </div>
                <div class="chat-item-meta">
                    <div class="chat-item-time">12:30 PM</div>
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
    
    // Select a subject and connect to WebSocket
    function selectSubject(subjectId) {
        if (currentSubject === subjectId) return;
        
        currentSubject = subjectId;
        
        // Close existing socket if any
        if (socket && socket.readyState === WebSocket.OPEN) {
            socket.close();
        }
        
        // Update header with subject info
        updateChatHeader(subjectId);
        
        // Clear messages
        chatMessages.innerHTML = `
            <div class="message-wrapper">
                <div class="message-time">Today</div>
            </div>
        `;
        
        // Load messages via REST API first
        loadMessages(subjectId);
        
        // Get WebSocket token and connect
        getWebSocketToken(subjectId);
        
        // Dispatch event to notify that a subject has been selected
        document.dispatchEvent(new CustomEvent('subjectSelected', {
            detail: { subjectId: subjectId }
        }));
    }
    
    // Load messages via REST API
    function loadMessages(subjectId) {
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
            .then(data => {
                if (data && data.messages) {
                    renderMessageHistory(data.messages);
                }
            })
            .catch(error => {
                console.error('Error loading messages:', error);
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
        if (!token) {
            console.error('No WebSocket token available');
            return;
        }
        
        const protocol = window.location.protocol === 'https:' ? 'wss:' : 'ws:';
        const wsUrl = `${protocol}//${window.location.host}/ws?token=${token}&group_id=${subjectId}`;
        
        socket = new WebSocket(wsUrl);
        
        socket.onopen = function() {
            console.log('WebSocket connection established');
        };
        
        socket.onmessage = function(event) {
            const data = JSON.parse(event.data);
            handleWebSocketMessage(data);
        };
        
        socket.onclose = function() {
            console.log('WebSocket connection closed');
        };
        
        socket.onerror = function(error) {
            console.error('WebSocket error:', error);
        };
    }
    
    // Handle WebSocket messages
    function handleWebSocketMessage(data) {
        if (data.type === 'history') {
            renderMessageHistory(data.messages);
        } else if (data.message) {
            addMessage(data.message, data.author, false);
        } else if (data.type === 'typing') {
            handleTypingIndicator(data.user, data.isTyping);
        }
    }
    
    // Render message history
    function renderMessageHistory(messages) {
        const messageWrapper = document.querySelector('.message-wrapper');
        if (!messageWrapper) return;
        
        messages.forEach(msg => {
            const isCurrentUser = msg.sender && msg.sender.id === getCurrentUserId();
            addMessageToDOM(msg.content, msg.sender ? msg.sender.name : 'Unknown', isCurrentUser, msg.createdAt, messageWrapper);
        });
        
        scrollToBottom();
    }
    
    // Get current user ID from meta tag
    function getCurrentUserId() {
        const userIdMeta = document.querySelector('meta[name="user-id"]');
        return userIdMeta ? userIdMeta.getAttribute('content') : null;
    }
    
    // Add a new message
    function addMessage(content, author, isCurrentUser) {
        const messageWrapper = document.querySelector('.message-wrapper');
        if (!messageWrapper) return;
        
        const now = new Date();
        const timeString = now.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
        
        addMessageToDOM(content, author, isCurrentUser, timeString, messageWrapper);
        scrollToBottom();
        
        // Update the preview in the sidebar
        updateSubjectPreview(currentSubject, content);
    }
    
    // Add message to DOM
    function addMessageToDOM(content, author, isCurrentUser, time, container) {
        const messageItem = document.createElement('div');
        messageItem.className = `message-item ${isCurrentUser ? 'sent' : 'received'}`;
        
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
    function updateSubjectPreview(subjectId, lastMessage) {
        const subject = document.querySelector(`.chat-item[data-subject-id="${subjectId}"]`);
        if (!subject) return;
        
        const preview = subject.querySelector('.chat-item-preview');
        if (preview) {
            preview.textContent = lastMessage;
        }
        
        // Update time
        const timeElement = subject.querySelector('.chat-item-time');
        if (timeElement) {
            const now = new Date();
            timeElement.textContent = now.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
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
        if (!currentSubject) return;
        
        const content = messageInput.value.trim();
        if (!content) return;
        
        // Try WebSocket first
        if (socket && socket.readyState === WebSocket.OPEN) {
            // Send message through WebSocket
            socket.send(JSON.stringify({
                group_id: currentSubject,
                message: content
            }));
            
            // Add message to UI
            addMessage(content, 'You', true);
            
            // Clear input
            messageInput.value = '';
            
            // Reset typing status
            sendTypingStatus(false);
        } else {
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
                    // Add message to UI
                    addMessage(content, 'You', true);
                    
                    // Clear input
                    messageInput.value = '';
                }
            })
            .catch(error => {
                console.error('Error sending message:', error);
                alert('Failed to send message. Please try again.');
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
    if (sendButton) {
        sendButton.addEventListener('click', sendMessage);
    }
    
    if (messageInput) {
        messageInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter' && !e.shiftKey) {
                e.preventDefault();
                sendMessage();
            }
        });
        
        messageInput.addEventListener('input', function() {
            // Clear previous timeout
            if (typingTimeout) {
                clearTimeout(typingTimeout);
            }
            
            // Send typing status
            sendTypingStatus(true);
            
            // Set timeout to reset typing status
            typingTimeout = setTimeout(() => {
                sendTypingStatus(false);
            }, 3000);
        });
    }
    
    if (subjectSearch) {
        subjectSearch.addEventListener('input', function() {
            searchSubjects(this.value);
        });
    }
    
    // Initialize
    initialize();
});
