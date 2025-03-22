
var subjectList;
var chatMessages;
var chatContainer;
var currentSubject;
var socket = null;
var isMobileView = window.innerWidth <= 768;


document.addEventListener("DOMContentLoaded", function () {
   
     chatContainer = document.querySelector('.chat-app');
     subjectList = document.getElementById("subject-list");
    // Setup mobile view
    setupMobileView();
    
    // Charger les sujets au démarrage
    loadSubjects();
});
   

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

    // Charger les sujets depuis l'API
    function loadSubjects() {
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

    function getCurrentUserId() {
        const metaTag = document.querySelector('meta[name="current-user-id"]');
        return metaTag ? parseInt(metaTag.getAttribute("content")) : null;
    }

    // Afficher les sujets dans la liste
    function renderSubjects(subjects) {
        

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
                    <div class="chat-item-preview">${subject.lastMessage || "Commencez le chat..."}</div>
                </div>
                ${subject.unreadCount > 0 ? `
                    <!-- div class="chat-item-meta">
                        <div class="chat-item-badge">${subject.unreadCount}</div>
                    </div -->
                    ` : ""}
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
  
        async function selectSubject(subjectId) {
            console.log(`DEBUG: selectSubject() appelé avec ID ${subjectId}`);
            if (!subjectId) {
                console.error("DEBUG: Aucun subject ID fourni !");
                return;
            }
            
            currentSubject = subjectId;
            console.log(`DEBUG: currentSubject mis à jour -> ${currentSubject}`);
            updateChatHeader(subjectId)
            
            try {
                await getWebSocketToken(subjectId); // Assurer que la connexion WebSocket est établie avec un token valide
                console.log(`DEBUG: connexion okay`);
                console.log(`DEBUG: currentSubject mis à jour -> ${currentSubject}`);
            } catch (error) {
                console.error("DEBUG: Échec de la récupération du token WebSocket, annulation de la connexion WebSocket.", error);
                return;
            }
            
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
    function loadChatHistory(subjectId) {
        console.log(`DEBUG: Chargement de l'historique pour le sujet ${subjectId}`);
        chatMessages = document.getElementById('chat-messages');
    
        fetch(`/api/chat/messages/${subjectId}`, {
            method: "GET",
            headers: { "Content-Type": "application/json" },
            credentials: "include",
        })
        .then(response => response.json())
        .then(messages => {
            console.log("DEBUG: Messages reçus", messages);
            //displayMessages(data);
            chatMessages.innerHTML = `
                    <div class="message-wrapper">
                        <div class="message-time">Aujourdhui</div>
                    </div>
                `;
                
                // Render messages
                if (messages && messages.length > 0) {
                    displayMessages(messages);
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
            console.error("DEBUG ERROR: Erreur de chargement des messages", error);
        });
    }

    function displayMessages(messages) {
         chatMessages = document.getElementById("chat-messages");
        chatMessages.innerHTML = ""; // Effacer les anciens messages

        const currentUserId = getCurrentUserId();
        if (!currentUserId) {
            console.error("DEBUG ERROR: currentUserId non défini !");
            return;
        }

        messages.forEach(msg => {
            if (!msg.content || !msg.createdAt || msg.isFromAI === undefined) {
                console.warn("DEBUG: Message mal formaté, ignoré :", msg);
                return;
            }

            const isFromAI = msg.isFromAI;
            const isOwnMessage = msg.sender_id === currentUserId;

            // Définition des classes CSS
            let containerClass = isFromAI ? "message-container assistant" : "message-container sent";
            let messageClass = isFromAI ? "message assistant" : "message sent";

            const messageDate = new Date(msg.createdAt).toLocaleString("fr-FR", {
                day: "2-digit",
                month: "short",
                year: "numeric",
                hour: "2-digit",
                minute: "2-digit"
            });

            // Création du conteneur
            const messageContainer = document.createElement("div");
            messageContainer.className = containerClass;

            // Création du message
            const messageElement = document.createElement("div");
            messageElement.className = messageClass;
            messageElement.innerHTML = `
                <div class="message-header">
                    <span class="message-date">${messageDate}</span>
                </div>
                <p>${msg.content}</p>
            `;

            messageContainer.appendChild(messageElement);
            chatMessages.appendChild(messageContainer);
        });

        chatMessages.scrollTop = chatMessages.scrollHeight; // Scroll en bas
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
        console.log(`DEBUG: Ouverture de la connexion WebSocket pour subjectChat ${subjectId}...`);

        //  Vérifier si une connexion est déjà active et ouverte
        if (socket && socket.readyState === WebSocket.OPEN) {
            console.log("DEBUG: Une connexion WebSocket est déjà active, annulation de la nouvelle connexion.");
            return;
        }

        // Fermer proprement l'ancienne connexion avant d'en ouvrir une nouvelle
        if (socket) {
            console.log("DEBUG: Fermeture de l'ancienne connexion WebSocket...");
            socket.onclose = null;
            socket.onerror = null;
            socket.onmessage = null;
            socket.close();
        }  

        const protocol = window.location.protocol === "https:" ? "wss:" : "ws:";
        const isLocal = window.location.hostname === "127.0.0.1" || window.location.hostname === "localhost";

        const wsUrl = isLocal
            ? `${protocol}//127.0.0.1:8085/ws?token=${token}&subjectChat_id=${subjectId}`
            : `${protocol}//pay-kulmapeck.online/ws?token=${token}&subjectChat_id=${subjectId}`;

        console.log(`DEBUG: WebSocket URL -> ${wsUrl}`); 
        socket = new WebSocket(wsUrl);

        socket.onopen = function () {
            console.log("WebSocket connecté avec succès !");
            // Effacer les erreurs éventuelles
            const errorBanner = document.querySelector('.error-message');
            if (errorBanner) {
                errorBanner.remove();
            }
        };

        socket.onmessage = function (event) {
            console.log("DEBUG: Message WebSocket reçu :", event.data);
            try {
                const data = JSON.parse(event.data);
                handleWebSocketMessage(data);
            } catch (error) {
                console.error("DEBUG: Erreur lors du traitement du message WebSocket :", error);
            }
        };

        socket.onerror = function (error) {
            console.error("DEBUG: Erreur WebSocket :", error);
            showError('Erreur de connexion. Tentative de reconnexion...');
            setTimeout(() => getWebSocketToken(subjectId), 3000);
        };
        
        socket.onclose = function (event) {
            console.warn(`DEBUG: Connexion WebSocket fermée avec le code ${event.code}`);
            
            if (currentSubject === subjectId) {
                console.log("DEBUG: Tentative de reconnexion WebSocket après fermeture...");
                setTimeout(() => getWebSocketToken(subjectId), 5000);
            }
        };
        

        console.log("DEBUG: WebSocket après initialisation ->", socket);
    }
    
    /**
     * Gérer les messages WebSocket
     */
    function handleWebSocketMessage(data) {
        console.log('DEBUG: Traitement du message WebSocket:', data);
        
        if (data.type === 'new_message' || data.type === 'message' || data.message) {
            console.log('DEBUG: Traitement du message individuel:', data);
            
            let messageContent = "";
            let userId = null;
            let timestamp = "";
            let isFromAI = false;
            let messageId = null;

            //  Vérifier si la structure du message est imbriquée (cas des réponses AI)
            if (data.type === 'new_message' && data.message && typeof data.message === 'object') {
                console.log('DEBUG: Traitement du message avec format imbriqué');
                messageContent = data.message.content;
                userId = data.message.sender_id;
                timestamp = data.message.createdAt || data.message.timestamp;
                isFromAI = data.message.isFromAI === true;
                messageId = data.message.id; //  Utilisé pour éviter les doublons
            } else {
                //  Vérifier si le message est dans un format simple (messages standards)
                console.log('DEBUG: Traitement du message avec format plat');
                messageContent = data.message || data.content;
                userId = data.user_id || data.userId;
                timestamp = data.timestamp;
                isFromAI = data.isFromAI === true;
                messageId = data.id || null; //  Utilisé pour éviter les doublons
            }
            
            console.log(`DEBUG: Message traité - Contenu: "${messageContent}", isFromAI: ${isFromAI}`);

            // Vérifier si le message est déjà affiché pour éviter les doublons
            if (messageId) {
                const existingMessages = document.querySelectorAll('.message[data-id]');
                for (let msg of existingMessages) {
                    if (msg.getAttribute("data-id") === messageId) {
                        console.warn(`DEBUG: Message déjà affiché (ID ${messageId}), ignoré.`);
                        return;
                    }
                }
            }

            if (userId === getCurrentUserId() && !isFromAI) {
                console.log("DEBUG: Ignoré - L'utilisateur actuel a déjà affiché ce message.");
                return;
            }
            
            // Si c'est une réponse AI, supprimer l'indicateur de frappe
           /* if (isFromAI) {
                removeAITypingIndicator();
            }*/
            
            // Ajouter le message avec le style approprié
            if (messageContent) {
                const messageData = {
                    content: messageContent,
                    timestamp: timestamp,
                    sender_id: userId,
                    isFromAI: isFromAI
                };
                
                addMessageToChat(messageData, isFromAI);
            } else {
                console.error('DEBUG: Le contenu du message est vide ou non défini');
            }
        } else {
            console.warn('DEBUG: Format de message inconnu reçu:', data);
        }
    }

    function addMessageToChat(messageData, isFromAI = false) {

        console.log("DEBUG: Ajout du message à l'UI:", messageData);
         chatMessages = document.getElementById("chat-messages");
        
        // Déterminer si le message vient de l'IA ou de l'élève
        const isSentByStudent = !isFromAI;
        
        // Création du conteneur pour le message
        const messageContainer = document.createElement("div");
        messageContainer.className = isSentByStudent ? "message-container sent" : "message-container assistant";
        
        // Création du bloc du message
        const messageElement = document.createElement("div");
        messageElement.className = isSentByStudent ? "message sent" : "message assistant";
        
        // Format de la date
        const messageDate = new Date(messageData.timestamp).toLocaleString("fr-FR", {
            day: "2-digit",
            month: "short",
            year: "numeric",
            hour: "2-digit",
            minute: "2-digit"
        });
        
        // Contenu du message
        messageElement.innerHTML = `
            <div class="message-header">
                <span class="message-date">${messageDate}</span>
            </div>
            <p>${messageData.content}</p>
        `;
        
        // Ajouter le message dans son conteneur
        messageContainer.appendChild(messageElement);
        
        // Ajouter au chat
        chatMessages.appendChild(messageContainer);
        
        // Scroll automatique vers le bas
        chatMessages.scrollTop = chatMessages.scrollHeight;
    }

    function sendMessage() {
        let messageInput = document.getElementById("message-input");
        let content = messageInput.value.trim();
    
        if (content === "") return;
    
        let activeChatItem = document.querySelector(".chat-item.active");
        if (!activeChatItem) {
            console.error("DEBUG: Aucun sujet sélectionné !");
            return;
        }
    
        let subjectChatId = activeChatItem.dataset.subjectId;
        let messageData = {
            subject_id: parseInt(subjectChatId),
            message: content,
            timestamp: new Date().toISOString()
        };
    
        console.log("DEBUG: État actuel du WebSocket avant envoi :", socket ? socket.readyState : "Socket non défini");
    
        if (!socket || socket.readyState !== WebSocket.OPEN) {
            console.warn("DEBUG: WebSocket non ouvert, tentative de reconnexion...");
            let pendingMessages = [];
            // Ajoute le message à une file d'attente pour qu'il soit envoyé après la reconnexion
            pendingMessages.push(messageData);
    
            // Reconnecte WebSocket et envoie les messages après reconnexion
           // reconnectWebSocket(subjectChatId);
           getWebSocketToken(subjectChatId);
        } else {
            console.log("DEBUG: Envoi du message via WebSocket");
            socket.send(JSON.stringify(messageData));
            
            // Ajouter le message immédiatement à l'interface utilisateur
            const optimisticMessageData = {
                content: content,
                timestamp: new Date().toISOString(),
                sender_id: getCurrentUserId(),
                isFromAI: false
            };
            addMessageToChat(optimisticMessageData, false);
            
            // Afficher l'indicateur de frappe de l'IA
           // showAITypingIndicator(); 
        }
    
        messageInput.value = "";
    }

    function updateChatHeader(subjectId) {
        const chatHeader = document.getElementById('chat-header');
        if (!chatHeader || !subjectId) return;
        
        const subjectItem = document.querySelector(`.chat-item[data-subject-id="${subjectId}"]`);
        if (!subjectItem) return;
        
        const subjectName = subjectItem.querySelector('.chat-item-name')?.textContent || 'Subject Chat';
        
        // Update the header with subject name
        const headerNameElement = chatHeader.querySelector('.chat-header-name');
        if (headerNameElement) {
            headerNameElement.textContent = subjectName;
        }
        
        // Update the avatar placeholder
        const avatarPlaceholder = chatHeader.querySelector('.avatar-placeholder');
        if (avatarPlaceholder) {
            avatarPlaceholder.textContent = subjectName.charAt(0).toUpperCase();
        }
        
        // Hide the online status
        const statusElement = chatHeader.querySelector('.chat-header-status');
        if (statusElement) {
            statusElement.classList.add('d-none');
        }
    }
    
    /**
     * Affiche l'indicateur de frappe de l'IA
     */
    function showAITypingIndicator() {
        console.log("DEBUG: Affichage de l'indicateur de frappe de l'IA");
        
        // Supprimer les indicateurs de frappe existants
        removeAITypingIndicator();
        
        // Créer l'indicateur de frappe
        const typingIndicator = document.createElement('div');
        typingIndicator.className = 'message-container assistant';
        typingIndicator.id = 'ai-typing-indicator';
        typingIndicator.innerHTML = `
            <div class="message assistant">
                <div class="message-header">
                    <span class="message-date">En cours...</span>
                </div>
                <p>
                    <span class="typing-dot"></span>
                    <span class="typing-dot"></span>
                    <span class="typing-dot"></span>
                </p>
            </div>
        `;
        
        // Ajouter au chat
         chatMessages = document.getElementById("chat-messages");
        chatMessages.appendChild(typingIndicator);
        
        // Scroll vers le bas
        chatMessages.scrollTop = chatMessages.scrollHeight;
        
        // Définir un délai pour supprimer l'indicateur de frappe si aucune réponse n'est reçue
        setTimeout(() => {
            if (document.getElementById('ai-typing-indicator')) {
                console.log("DEBUG: Délai d'attente de la réponse de l'IA dépassé, suppression de l'indicateur de frappe");
                removeAITypingIndicator();
            }
        }, 30000); // Supprimer après 30 secondes si aucune réponse
    }
    
    /**
     * Supprime l'indicateur de frappe de l'IA
     */
    function removeAITypingIndicator() {
        const existingIndicator = document.getElementById('ai-typing-indicator');
        if (existingIndicator) {
            console.log("DEBUG: Suppression de l'indicateur de frappe existant");
            existingIndicator.remove();
        }
    }
    
    // Afficher un message d'erreur
    function showError(message) {
        const errorDiv = document.createElement('div');
        errorDiv.className = 'error-message';
        errorDiv.textContent = message;
        
        // Supprimer les messages d'erreur existants
        const existingErrors = document.querySelectorAll('.error-message');
        existingErrors.forEach(el => el.remove());
        
        // Ajouter le nouveau message d'erreur
        document.body.prepend(errorDiv);
        
        // Faire disparaître le message après 5 secondes
        setTimeout(() => {
            if (errorDiv.parentNode) {
                errorDiv.remove();
            }
        }, 5000);
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

    function ensureWebSocketConnection(subjectId) {
        if (!socket || socket.readyState !== WebSocket.OPEN) {
            console.warn("DEBUG: WebSocket non ouvert, tentative de reconnexion...");
            getWebSocketToken(subjectId); // 
        }
    }

    // File d'attente des messages en cas de reconnexion
   
        
    // Fonction pour reconnecter WebSocket et envoyer les messages en attente
    function reconnectWebSocket(subjectChatId) {
        getWebSocketToken(subjectChatId);
        
        let checkInterval = setInterval(() => {
            if (socket && socket.readyState === WebSocket.OPEN) {
                console.log("DEBUG: WebSocket reconnecté, envoi des messages en attente...");
                
                // Envoie tous les messages en attente
                while (pendingMessages.length > 0) {
                    let msg = pendingMessages.shift();
                    socket.send(JSON.stringify(msg));
                    addMessageToChat(msg, true);
                }
        
                clearInterval(checkInterval);
            }
        }, 500); // Vérifie la connexion toutes les 500ms jusqu'à ce que WebSocket soit ouvert
    }
        

