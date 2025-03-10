/**
 * Kulmapeck Chat System
 * Affichage des subjectChats uniquement
 */

console.log("DEBUG: Script subject_chat.js chargé !"); // ✅ Vérifie que le script est bien chargé

document.addEventListener('DOMContentLoaded', function() {
    console.log("DEBUG: DOMContentLoaded event fired, initializing chat");

    // DOM Elements
    const subjectList = document.getElementById('subject-list');

    if (!subjectList) {
        console.error("DEBUG ERROR: L'élément #subject-list est introuvable dans le DOM !");
        return; // ✅ Empêche l'exécution si subjectList n'existe pas
    }

    console.log("DEBUG: L'élément #subject-list est bien trouvé dans le DOM");

    // ✅ Fonction pour charger les subjects depuis l'API
    function loadSubjects() {
        console.log("DEBUG: loadSubjects() appelé");

        // Affichage de l'état de chargement
        subjectList.innerHTML = `
            <div class="loading-state text-center p-4">
                <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">Loading subjects...</span>
                </div>
                <p class="mt-3 text-muted">Loading subjects...</p>
            </div>
        `;

        console.log("DEBUG: Fetching subjects from API endpoint: /api/chat/subjectChats");

        fetch('/api/chat/subjectChats', {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json'
            },
            credentials: 'include' // ✅ Envoie les cookies de session
        })
        .then(response => {
            console.log('DEBUG: API response received', {
                status: response.status,
                statusText: response.statusText,
                headers: Object.fromEntries([...response.headers.entries()])
            });

            if (!response.ok) {
                return response.text().then(text => {
                    console.error("DEBUG ERROR: API error response", { text });
                    try {
                        return JSON.parse(text);
                    } catch (e) {
                        throw new Error(`Server error: ${response.status} ${text}`);
                    }
                });
            }
            return response.json();
        })
        .then(data => {
            console.log("DEBUG: Subjects data received", data);

            if (data.error) {
                console.error("DEBUG ERROR: API returned error", data.error);
                throw new Error(data.error);
            }

            if (!Array.isArray(data)) {
                console.error("DEBUG ERROR: API did not return an array", data);
                throw new Error("Invalid data format received from server");
            }

            console.log(`DEBUG: Rendering ${data.length} subjects`);
            renderSubjects(data);
        })
        .catch(error => {
            console.error("DEBUG ERROR: Error loading subjects:", error);
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

    // ✅ Fonction pour afficher les subjects
    function renderSubjects(subjects) {
        console.log("DEBUG: renderSubjects() called with", subjects);

        if (!Array.isArray(subjects)) {
            console.error("DEBUG ERROR: subjects is not an array", subjects);
            subjects = [];
        }

        if (subjects.length === 0) {
            console.log("DEBUG: No subjects to render");
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
            console.log(`DEBUG: Rendering subject #${index}`, subject);

            if (!subject || !subject.id || !subject.name) {
                console.error("DEBUG ERROR: Invalid subject data", subject);
                return;
            }

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
                    ${unreadBadge}
                </div>
            `;

            subjectList.appendChild(chatItem);
        });
    }

    // ✅ Charge les subjects au démarrage
    loadSubjects();
});
