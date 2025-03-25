/**
 * Sidebar Resizer
 * Allows users to adjust the width of the chat sidebar
 */
document.addEventListener('DOMContentLoaded', function() {
    console.log("DEBUG: Initializing sidebar resizer");
    initSidebarResizer();
});

/**
 * Initialize the sidebar resizer functionality
 */
function initSidebarResizer() {
    const sidebar = document.querySelector('.chat-sidebar');
    const resizer = document.getElementById('sidebar-resizer');
    
    if (!sidebar || !resizer) {
        console.log("DEBUG: Sidebar or resizer elements not found");
        return;
    }
    
    // Load saved width from localStorage
    const savedWidth = localStorage.getItem('sidebarWidth');
    if (savedWidth) {
        sidebar.style.width = savedWidth + 'px';
    }
    
    let isResizing = false;
    let lastDownX = 0;
    
    // Mouse down event on the resizer
    resizer.addEventListener('mousedown', function(e) {
        isResizing = true;
        lastDownX = e.clientX;
        resizer.classList.add('active');
        
        // Add event listeners for mousemove and mouseup
        document.addEventListener('mousemove', handleMouseMove);
        document.addEventListener('mouseup', handleMouseUp);
        
        // Prevent text selection during resize
        document.body.style.userSelect = 'none';
        
        e.preventDefault();
    });
    
    // Touch events for mobile devices
    resizer.addEventListener('touchstart', function(e) {
        if (e.touches.length === 1) {
            isResizing = true;
            lastDownX = e.touches[0].clientX;
            resizer.classList.add('active');
            
            // Prevent scrolling during resize
            e.preventDefault();
        }
    });
    
    document.addEventListener('touchmove', function(e) {
        if (!isResizing) return;
        
        if (e.touches.length === 1) {
            const touch = e.touches[0];
            const deltaX = touch.clientX - lastDownX;
            lastDownX = touch.clientX;
            
            const newWidth = sidebar.offsetWidth + deltaX;
            
            // Enforce min and max width constraints
            if (newWidth >= 200 && newWidth <= 500) {
                sidebar.style.width = newWidth + 'px';
                
                // Save to localStorage
                localStorage.setItem('sidebarWidth', newWidth);
            }
            
            // Prevent scrolling during resize
            e.preventDefault();
        }
    });
    
    document.addEventListener('touchend', function() {
        if (isResizing) {
            isResizing = false;
            resizer.classList.remove('active');
        }
    });
    
    // Handle mouse move during resize
    function handleMouseMove(e) {
        if (!isResizing) return;
        
        const deltaX = e.clientX - lastDownX;
        lastDownX = e.clientX;
        
        const newWidth = sidebar.offsetWidth + deltaX;
        
        // Enforce min and max width constraints
        if (newWidth >= 200 && newWidth <= 500) {
            sidebar.style.width = newWidth + 'px';
            
            // Save to localStorage
            localStorage.setItem('sidebarWidth', newWidth);
        }
    }
    
    // Handle mouse up after resize
    function handleMouseUp() {
        isResizing = false;
        resizer.classList.remove('active');
        
        // Remove event listeners
        document.removeEventListener('mousemove', handleMouseMove);
        document.removeEventListener('mouseup', handleMouseUp);
        
        // Restore text selection
        document.body.style.userSelect = '';
    }
    
    // Reset sidebar width to default
    function resetSidebarWidth() {
        sidebar.style.width = '300px';
        localStorage.removeItem('sidebarWidth');
    }
    
    // Double-click to reset width
    resizer.addEventListener('dblclick', resetSidebarWidth);
    
    console.log("DEBUG: Sidebar resizer initialized");
}
