document.addEventListener("DOMContentLoaded", function () {
    initializeChat();
});

let socket = null;
let currentGroupId = null;
let typingTimeout = null;
let reconnectAttempts = 0;
const MAX_RECONNECT_ATTEMPTS = 5;
const RECONNECT_DELAY = 3000;

function initializeChat() {
    fetchGroups();
    setupEventListeners();
}

function fetchGroups() {
    const endpoint = document.body.dataset.chatType === 'student' ? '/student/chat/groups' : '/chat/groups';
    
    fetch(endpoint, {
        method: 'GET',
        headers: {
            'Content-Type': 'application/json'
        },
        credentials: 'include'
    })
    .then(response => {
        if (!response.ok) {
            throw new Error("HTTP error " + response.status);
        }
        return response.json();
    })
    .then(data => {
        if (data.error) {
            console.error("Error: " + data.error);
            return;
        }

        updateGroupList(data.groups);
    })
    .catch(error => {
        console.error("Error loading groups:", error);
        showError('chat.errors.group');
    });
}

function updateGroupList(groups) {
    const groupList = document.getElementById("group-list");
    groupList.innerHTML = '';

    groups.forEach(group => {
        const groupElement = createGroupElement(group);
        groupList.appendChild(groupElement);
    });
}

function createGroupElement(group) {
    const element = document.createElement("div");
    element.classList.add("chat-group");
    element.dataset.groupId = group.id;

    const lastMessage = group.lastMessage ? 
        `<small class="text-muted">${group.lastMessage.sender}: ${group.lastMessage.content}</small>` : '';
    
    const unreadBadge = group.unreadCount > 0 ? 
        `<span class="badge bg-primary">${group.unreadCount}</span>` : '';

    element.innerHTML = `
        <div class="chat-group-info">
            <div class="d-flex justify-content-between align-items-center">
                <h6 class="mb-0">${group.name}</h6>
                ${unreadBadge}
            </div>
            <div class="chat-group-meta">
                <small class="text-muted">${group.subject} - Cycle ${group.cycle}</small>
                ${lastMessage}
            </div>
        </div>
    `;

    element.addEventListener("click", () => selectGroup(group.id));
    return element;
}

function selectGroup(groupId) {
    if (currentGroupId === groupId) return;
    
    // Disconnect from current group if any
    if (socket) {
        socket.close();
    }

    currentGroupId = groupId;
    document.querySelector('.chat-messages').innerHTML = '';
    document.querySelector('.chat-title').textContent = 
        document.querySelector(`[data-group-id="${groupId}"] h6`).textContent;

    // Show chat interface
    document.querySelector('.groups-container').classList.add('d-none');
    document.querySelector('.chat-container').classList.remove('d-none');

    // Connect to new group
    connectWebSocket(groupId);
    loadMessages(groupId);
}

function connectWebSocket(groupId) {
    const protocol = window.location.protocol === 'https:' ? 'wss:' : 'ws:';
    const wsUrl = `${protocol}//${window.location.host}/ws/chat/${groupId}?token=${getAuthToken()}`;
    
    socket = new WebSocket(wsUrl);
    
    socket.onopen = handleSocketOpen;
    socket.onmessage = handleSocketMessage;
    socket.onclose = handleSocketClose;
    socket.onerror = handleSocketError;
}

function handleSocketOpen() {
    console.log('Connected to chat server');
    document.querySelector('.connection-status').classList.add('d-none');
    reconnectAttempts = 0;
}

function handleSocketMessage(event) {
    const data = JSON.parse(event.data);
    
    switch(data.type) {
        case 'message':
            displayMessage(data.message);
            break;
        case 'typing':
            updateTypingStatus(data);
            break;
        case 'presence':
            updatePresence(data);
            break;
    }
}

function handleSocketClose() {
    console.log('Disconnected from chat server');
    document.querySelector('.connection-status').classList.remove('d-none');
    
    if (reconnectAttempts < MAX_RECONNECT_ATTEMPTS) {
        reconnectAttempts++;
        setTimeout(() => connectWebSocket(currentGroupId), RECONNECT_DELAY);
    }
}

function handleSocketError(error) {
    console.error('WebSocket error:', error);
    showError('chat.errors.connection');
}

function loadMessages(groupId) {
    const endpoint = document.body.dataset.chatType === 'student' ? 
        `/student/chat/messages/${groupId}` : `/chat/messages/${groupId}`;

    fetch(endpoint, {
        method: 'GET',
        headers: {
            'Content-Type': 'application/json'
        },
        credentials: 'include'
    })
    .then(response => response.json())
    .then(data => {
        const messagesContainer = document.querySelector('.chat-messages');
        messagesContainer.innerHTML = '';
        data.messages.forEach(message => displayMessage(message));
        scrollToBottom();
    })
    .catch(error => {
        console.error('Error loading messages:', error);
        showError('chat.errors.message');
    });
}

function displayMessage(message) {
    const messageElement = document.createElement('div');
    messageElement.classList.add('message', message.sender.id === getCurrentUserId() ? 'message-out' : 'message-in');
    
    messageElement.innerHTML = `
        <div class="message-wrapper">
            ${message.sender.id !== getCurrentUserId() ? `
                <div class="message-avatar">
                    <div class="avatar avatar-xs">
                        <img src="/assets/images/default-avatar.png" class="avatar-img rounded-circle" alt="${message.sender.name}">
                    </div>
                </div>
            ` : ''}
            <div class="message-content">
                ${message.sender.id !== getCurrentUserId() ? `
                    <h6 class="mb-1 small">${message.sender.name}</h6>
                ` : ''}
                <div class="message-bubble p-3 ${message.sender.id === getCurrentUserId() ? 'bg-primary text-white' : 'bg-light'} rounded-3">
                    ${message.content}
                </div>
                <div class="message-meta mt-1">
                    <small class="text-muted">
                        ${formatDate(message.createdAt)}
                        ${message.sender.id === getCurrentUserId() ? `
                            <i class="fas fa-${message.isRead ? 'check-double text-primary' : 'check'} ms-1"></i>
                        ` : ''}
                    </small>
                </div>
            </div>
        </div>
    `;

    document.querySelector('.chat-messages').appendChild(messageElement);
    scrollToBottom();
}

function sendMessage(event) {
    event.preventDefault();
    
    const input = document.querySelector('.chat-input');
    const message = input.value.trim();
    
    if (!message || !socket || socket.readyState !== WebSocket.OPEN) return;
    
    socket.send(JSON.stringify({
        type: 'message',
        content: message,
        groupId: currentGroupId
    }));
    
    input.value = '';
}

function updateTypingStatus(data) {
    const typingIndicator = document.querySelector('.typing-indicator');
    
    if (data.typing) {
        typingIndicator.textContent = data.users.length > 1 ? 
            translate('chat.typing.multiple') : 
            translate('chat.typing.single', { name: data.users[0] });
        typingIndicator.classList.remove('d-none');
    } else {
        typingIndicator.classList.add('d-none');
    }
}

function updatePresence(data) {
    // Update online users count and list
    const onlineCount = document.querySelector('.online-count');
    if (onlineCount) {
        onlineCount.textContent = data.onlineCount;
    }
}

function setupEventListeners() {
    // Message form submission
    document.querySelector('.chat-input-form').addEventListener('submit', sendMessage);
    
    // Back button
    document.getElementById('backToGroups').addEventListener('click', () => {
        document.querySelector('.groups-container').classList.remove('d-none');
        document.querySelector('.chat-container').classList.add('d-none');
        if (socket) {
            socket.close();
        }
        currentGroupId = null;
    });
    
    // Typing indicator
    const input = document.querySelector('.chat-input');
    input.addEventListener('input', () => {
        if (!socket || socket.readyState !== WebSocket.OPEN) return;
        
        clearTimeout(typingTimeout);
        socket.send(JSON.stringify({ type: 'typing', typing: true }));
        
        typingTimeout = setTimeout(() => {
            socket.send(JSON.stringify({ type: 'typing', typing: false }));
        }, 1000);
    });
}

// Utility functions
function scrollToBottom() {
    const container = document.querySelector('.chat-messages-container');
    container.scrollTop = container.scrollHeight;
}

function formatDate(dateString) {
    const date = new Date(dateString);
    return date.toLocaleTimeString(undefined, { hour: '2-digit', minute: '2-digit' });
}

function showError(key) {
    // Implement error display using your UI framework
    console.error(translate(key));
}

function translate(key, params = {}) {
    // Implement translation using your translation system
    return key; // Temporary return the key itself
}

function getCurrentUserId() {
    return document.body.dataset.userId;
}

function getAuthToken() {
    return document.body.dataset.authToken;
}
