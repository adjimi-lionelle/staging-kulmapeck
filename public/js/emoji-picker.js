// Simple emoji picker implementation
document.addEventListener('DOMContentLoaded', function() {
    console.log("DEBUG: Initializing emoji picker");
    
    const emojiButton = document.getElementById('emoji-button');
    const messageInput = document.getElementById('message-input');
    
    if (!emojiButton || !messageInput) {
        console.error("DEBUG ERROR: Required elements not found for emoji picker");
        return;
    }
    
    // Create emoji picker container
    const emojiPickerContainer = document.createElement('div');
    emojiPickerContainer.id = 'emoji-picker-container';
    emojiPickerContainer.style.position = 'absolute';
    emojiPickerContainer.style.bottom = '70px';
    emojiPickerContainer.style.left = '10px';
    emojiPickerContainer.style.zIndex = '1000';
    emojiPickerContainer.style.display = 'none';
    emojiPickerContainer.innerHTML = `
        <div class="emoji-grid">
            <button class="emoji-btn" data-emoji="😀">😀</button>
            <button class="emoji-btn" data-emoji="😂">😂</button>
            <button class="emoji-btn" data-emoji="😊">😊</button>
            <button class="emoji-btn" data-emoji="😍">😍</button>
            <button class="emoji-btn" data-emoji="🤔">🤔</button>
            <button class="emoji-btn" data-emoji="👍">👍</button>
            <button class="emoji-btn" data-emoji="👏">👏</button>
            <button class="emoji-btn" data-emoji="🎉">🎉</button>
            <button class="emoji-btn" data-emoji="❤️">❤️</button>
            <button class="emoji-btn" data-emoji="🔥">🔥</button>
            <button class="emoji-btn" data-emoji="⭐">⭐</button>
            <button class="emoji-btn" data-emoji="🙏">🙏</button>
            <button class="emoji-btn" data-emoji="😭">😭</button>
            <button class="emoji-btn" data-emoji="😎">😎</button>
            <button class="emoji-btn" data-emoji="🤣">🤣</button>
            <button class="emoji-btn" data-emoji="😢">😢</button>
        </div>
    `;
    
    // Add styles for emoji grid
    const style = document.createElement('style');
    style.textContent = `
        .emoji-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 5px;
            background-color: white;
            padding: 10px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .emoji-btn {
            font-size: 24px;
            background: none;
            border: none;
            cursor: pointer;
            padding: 5px;
            border-radius: 5px;
        }
        .emoji-btn:hover {
            background-color: #f0f0f0;
        }
    `;
    document.head.appendChild(style);
    
    // Add container to the DOM
    document.querySelector('.chat-footer').appendChild(emojiPickerContainer);
    
    // Toggle emoji picker visibility when emoji button is clicked
    emojiButton.addEventListener('click', function(event) {
        console.log("DEBUG: Emoji button clicked");
        event.stopPropagation(); // Prevent event from bubbling up
        
        if (emojiPickerContainer.style.display === 'none') {
            console.log("DEBUG: Showing emoji picker");
            emojiPickerContainer.style.display = 'block';
        } else {
            console.log("DEBUG: Hiding emoji picker");
            emojiPickerContainer.style.display = 'none';
        }
    });
    
    // Handle emoji selection
    emojiPickerContainer.addEventListener('click', function(event) {
        if (event.target.classList.contains('emoji-btn')) {
            const emoji = event.target.getAttribute('data-emoji');
            console.log("DEBUG: Emoji selected:", emoji);
            
            // Get current cursor position
            const cursorPosition = messageInput.selectionStart;
            
            // Insert emoji at cursor position
            const text = messageInput.value;
            const newText = 
                text.substring(0, cursorPosition) + 
                emoji + 
                text.substring(cursorPosition);
            
            messageInput.value = newText;
            
            // Set cursor position after the inserted emoji
            messageInput.selectionStart = cursorPosition + emoji.length;
            messageInput.selectionEnd = cursorPosition + emoji.length;
            
            // Focus back on the input
            messageInput.focus();
            
            // Hide emoji picker after selection
            emojiPickerContainer.style.display = 'none';
        }
    });
    
    // Hide emoji picker when clicking outside
    document.addEventListener('click', function(event) {
        if (!emojiButton.contains(event.target) && 
            !emojiPickerContainer.contains(event.target) && 
            emojiPickerContainer.style.display === 'block') {
            console.log("DEBUG: Hiding emoji picker (clicked outside)");
            emojiPickerContainer.style.display = 'none';
        }
    });
});
