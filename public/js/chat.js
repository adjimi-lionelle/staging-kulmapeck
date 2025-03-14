// Initialisation après chargement du DOM
document.addEventListener("DOMContentLoaded", function () {
    console.log("DEBUG: DOMContentLoaded event fired, initializing chat");

    const subjectList = document.getElementById("subject-list");
    const chatContainer = document.querySelector('.chat-app');
    let currentSubject = null;
    let socket = null;
    let isMobileView = window.innerWidth <= 768;

    if (!subjectList) {
        console.error("DEBUG ERROR: L'élément #subject-list est introuvable dans le DOM !");
        return;
    }

    console.log("DEBUG: L'élément #subject-list est bien trouvé dans le DOM");

    // Setup mobile view
    setupMobileView();

    // Charger les sujets au démarrage
    loadSubjects();


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

    // Charger les sujets depuis l'API
    function loadSubjects() {
        console.log("DEBUG: Chargement des sujets depuis l'API...");

        fetch("/api/chat/subjectChats", {
            method: "GET",
            headers: { "Content-Type": "application/json" },
            credentials: "include",
        })
        .then(response => response.json())
        .then(data => {
            console.log("DEBUG: Subjects data received", data);
            renderSubjects(data);
        })
        .catch(error => {
            console.error("DEBUG ERROR: Erreur de chargement des sujets", error);
        });
    }

    // Afficher les sujets dans la liste
    function renderSubjects(subjects) {
        console.log("DEBUG: renderSubjects() called with", subjects);

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
    }

    // Sélectionner un sujet et établir la connexion WebSocket
    function selectSubject(subjectId) {
        console.log(`DEBUG: selectSubject() appelé avec ID ${subjectId}`);

        if (!subjectId) {
            console.error("DEBUG: Aucun subject ID fourni !");
            return;
        }

        currentSubject = subjectId;
        console.log(`DEBUG: currentSubject mis à jour -> ${currentSubject}`);
        getWebSocketToken(subjectId);
        loadChatHistory(subjectId); // Charger l'historique ici

        // Mise à jour de l'affichage du chat
        document.getElementById('welcome-screen').style.display = 'none';
        document.getElementById('chat-header').style.display = 'flex';
        document.getElementById('chat-messages').style.display = 'block';
        document.getElementById('chat-footer').style.display = 'flex';
        
        // Handle mobile view
        if (isMobileView) {
            chatContainer.classList.add('chat-active');
        }
    }

    // Obtenir le token WebSocket
    function getWebSocketToken(subjectId) {
        console.log(`DEBUG: getWebSocketToken() called for subject ${subjectId}`);

        fetch(`/websocket/token/${subjectId}`)
        .then(response => {
            if (!response.ok) {
                return response.json().then(data => { throw new Error(data.error || "Erreur inconnue"); });
            }
            return response.json();
        })
        .then(data => {
            console.log("DEBUG: Token WebSocket reçu", data.token);
            connectWebSocket(subjectId, data.token);
        })
        .catch(error => {
            console.error("DEBUG: Erreur lors de la récupération du token WebSocket :", error);
        });
    }

    // Établir la connexion WebSocket
    function connectWebSocket(subjectId, token) {
        console.log(`DEBUG: Ouverture de la connexion WebSocket...`);

        if (socket) {
            console.log("DEBUG: Fermeture de l'ancienne connexion WebSocket...");
            socket.close();
            socket = null;
        }

        const protocol = window.location.protocol === "https:" ? "wss:" : "ws:";
        const wsUrl = `${protocol}//127.0.0.1:9000/ws?token=${token}&subjectChat_id=${subjectId}`;

        socket = new WebSocket(wsUrl);

        socket.onopen = function () {
            console.log("WebSocket connecté avec succès !");
        };

        socket.onmessage = function (event) {
            console.log("Message WebSocket reçu :", event.data);
            try {
                const data = JSON.parse(event.data);
                
                if (data.type === "new_message") {
                    addMessageToChat(data.message, false); // Afficher le message reçu
                }
        
            } catch (error) {
                console.error("Erreur lors du traitement du message WebSocket :", error);
            }
        };

        socket.onerror = function (error) {
            console.error("Erreur WebSocket :", error);
        };

        socket.onclose = function () {
            console.warn("Connexion WebSocket fermée !");
        };
    }

    function loadChatHistory(subjectId) {
        console.log(`DEBUG: Chargement de l'historique pour le sujet ${subjectId}`);
    
        fetch(`/api/chat/messages/${subjectId}`, {
            method: "GET",
            headers: { "Content-Type": "application/json" },
            credentials: "include",
        })
        .then(response => response.json())
        .then(data => {
            console.log("DEBUG: Messages reçus", data);
            displayMessages(data);
        })
        .catch(error => {
            console.error("DEBUG ERROR: Erreur de chargement des messages", error);
        });
    }

    function getCurrentUserId() {
        const metaTag = document.querySelector('meta[name="current-user-id"]');
        return metaTag ? parseInt(metaTag.getAttribute("content")) : null;
    }

    // Fonction pour afficher les messages
    function displayMessages(messages) {
        const chatMessages = document.getElementById("chat-messages");
        chatMessages.innerHTML = ""; // Effacer les anciens messages

        const currentUserId = getCurrentUserId();
        if (!currentUserId) {
            console.error("DEBUG ERROR: currentUserId non défini !");
            return;
        }

        messages.forEach(msg => {
            const messageElement = document.createElement("div");
            messageElement.className = msg.sender_id === currentUserId ? "message sent" : "message received";
            messageElement.innerHTML = `<p>${msg.content}</p>`;
            chatMessages.appendChild(messageElement);
        });

        chatMessages.scrollTop = chatMessages.scrollHeight; // Faire défiler vers le bas
    }

    function addMessageToChat(messageData, isOwnMessage = false) {
        const chatMessages = document.getElementById("chat-messages");
    
        const messageElement = document.createElement("div");
        messageElement.className = isOwnMessage ? "message sent" : "message received";
        messageElement.innerHTML = `<p>${messageData.message}</p>`;
    
        chatMessages.appendChild(messageElement);
        chatMessages.scrollTop = chatMessages.scrollHeight; // Scroll en bas pour voir le message
    }

    // Envoyer un message au serveur WebSocket
    document.getElementById("send-message").addEventListener("click", function () {
        sendMessage();
    });

    document.getElementById("message-input").addEventListener("keypress", function (e) {
        if (e.key === "Enter" && !e.shiftKey) {
            e.preventDefault();
            sendMessage();
        }
    });

    function sendMessage() {
        if (!currentSubject) {
            console.error("DEBUG: Aucun sujet sélectionné pour envoyer un message.");
            return;
        }

        const messageInput = document.getElementById("message-input");
        const content = messageInput.value.trim();
        if (!content) return;

        if (socket && socket.readyState === WebSocket.OPEN) {
            console.log("DEBUG: Envoi du message via WebSocket");
            socket.send(JSON.stringify({
                subject_id: currentSubject,
                message: content,
                timestamp: new Date().toISOString()
            }));
        } else {
            console.error("DEBUG: WebSocket non disponible, impossible d'envoyer le message.");
        }

        messageInput.value = "";
    }
});
