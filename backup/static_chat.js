/**
 * Kulmapeck Chat System - Static UI Demo
 * This is a simplified version without API calls and WebSocket logic
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
    const welcomeScreen = document.getElementById('welcome-screen');
    const chatFooter = document.getElementById('chat-footer');
    
    // Add click event listeners to chat items
    const chatItems = document.querySelectorAll('.chat-item');
    chatItems.forEach(item => {
        item.addEventListener('click', function() {
            // Remove active class from all items
            chatItems.forEach(i => i.classList.remove('active'));
            
            // Add active class to clicked item
            this.classList.add('active');
            
            // Get subject ID and name
            const subjectId = this.dataset.subjectId;
            const subjectName = this.querySelector('.chat-item-name').textContent;
            
            // Update chat header
            updateChatHeader(subjectName);
            
            // Hide welcome screen and show chat
            if (welcomeScreen) welcomeScreen.style.display = 'none';
            if (chatHeader) chatHeader.style.display = 'flex';
            if (chatMessages) chatMessages.style.display = 'block';
            if (chatFooter) chatFooter.style.display = 'flex';
        });
    });
    
    // Update chat header with subject name
    function updateChatHeader(subjectName) {
        if (!chatHeader) return;
        
        const nameElement = chatHeader.querySelector('.chat-header-name');
        const avatarElement = chatHeader.querySelector('.avatar-placeholder');
        
        if (nameElement) {
            nameElement.textContent = subjectName;
        }
        
        if (avatarElement) {
            avatarElement.textContent = subjectName.charAt(0).toUpperCase();
        }
    }
    
    // Add event listener for send button
    if (sendButton && messageInput) {
        sendButton.addEventListener('click', function() {
            const message = messageInput.value.trim();
            if (message) {
                // Add outgoing message to chat
                addMessage(message, 'You', true);
                
                // Clear input
                messageInput.value = '';
                
                // Simulate AI response after a delay
                setTimeout(() => {
                    const responses = [
                        "That's an interesting question. Let me explain...",
                        "Great point! Here's what you need to know...",
                        "I understand your concern. Let's break it down...",
                        "That's correct! You're making good progress."
                    ];
                    const randomResponse = responses[Math.floor(Math.random() * responses.length)];
                    addMessage(randomResponse, document.querySelector('.chat-header-name').textContent, false);
                }, 1000);
            }
        });
        
        // Add event listener for Enter key
        messageInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter' && !e.shiftKey) {
                e.preventDefault();
                sendButton.click();
            }
        });
    }
    
    // Add a message to the chat
    function addMessage(content, author, isCurrentUser) {
        if (!chatMessages) return;
        
        const messageWrapper = chatMessages.querySelector('.message-wrapper');
        if (!messageWrapper) return;
        
        const messageItem = document.createElement('div');
        messageItem.className = `message-item${isCurrentUser ? ' outgoing' : ''}`;
        
        const time = new Date().toLocaleTimeString([], {hour: '2-digit', minute:'2-digit'});
        
        if (!isCurrentUser) {
            const firstLetter = author.charAt(0).toUpperCase();
            messageItem.innerHTML = `
                <div class="message-avatar">
                    <div class="avatar-placeholder rounded-circle">${firstLetter}</div>
                </div>
                <div class="message-content">
                    <div class="message-bubble">
                        <div class="message-text">${content}</div>
                    </div>
                    <div class="message-info">
                        <div class="message-time">${time}</div>
                    </div>
                </div>
            `;
        } else {
            messageItem.innerHTML = `
                <div class="message-content">
                    <div class="message-bubble">
                        <div class="message-text">${content}</div>
                    </div>
                    <div class="message-info">
                        <div class="message-time">${time}</div>
                        <div class="message-status">
                            <i class="bi bi-check2-all"></i>
                        </div>
                    </div>
                </div>
            `;
        }
        
        messageWrapper.appendChild(messageItem);
        
        // Scroll to bottom
        chatMessages.scrollTop = chatMessages.scrollHeight;
    }
    
    // Search functionality
    if (subjectSearch) {
        subjectSearch.addEventListener('input', function() {
            const query = this.value.toLowerCase();
            
            chatItems.forEach(item => {
                const name = item.querySelector('.chat-item-name').textContent.toLowerCase();
                if (name.includes(query)) {
                    item.style.display = 'flex';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    }
});
