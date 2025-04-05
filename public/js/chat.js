var subjectList;
var chatMessages;
var chatContainer;
var currentSubject;
var socket = null;
var isMobileView = window.innerWidth <= 768;
var messageBeingEdited = null;

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

    function getCurrentUsername() {
        const metaTag = document.querySelector('meta[name="current-username"]');
        return metaTag ? metaTag.getAttribute("content") : "";
    }

    // Afficher les sujets dans la liste
    function renderSubjects(subjects) {
        

        subjectList.innerHTML = "";

        subjects.forEach((subject) => {
            const chatItem = document.createElement("div");
            chatItem.className = "chat-item";
            chatItem.dataset.subjectId = subject.id;

            // Get the initials based on the subject name
            const subjectInitials = getSubjectInitials(subject.name);

            chatItem.innerHTML = `
                <div class="chat-item-avatar">
                    <div class="avatar-placeholder rounded-circle">${subjectInitials}</div>
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

    /***
     * Get subject initials (two letters) from the subject name
     * @param {string} name - The subject name
     * @returns {string} - The initials (1-2 characters)
     */
    function getSubjectInitials(name) {
        if (!name) return "?";
        
        // Split the name by spaces
        const words = name.split(/\s+/);
        
        if (words.length >= 2) {
            // If there are at least two words, take the first letter of each
            return (words[0].charAt(0) + words[1].charAt(0)).toUpperCase();
        } else if (words[0].length >= 2) {
            // If there's only one word, take the first two letters
            return words[0].substring(0, 2).toUpperCase();
        } else {
            // Fallback to the first letter if the word is only one character
            return words[0].charAt(0).toUpperCase();
        }
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
            updateChatHeader(subjectId)
            
            try {
                 getWebSocketToken(subjectId); // Assurer que la connexion WebSocket est établie avec un token valide
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
            messageContainer.dataset.messageId = msg.id;

            // Création du message
            const messageElement = document.createElement("div");
            messageElement.className = messageClass;
            
            // Create message content with personalized greeting if AI message
            let messageContent = msg.content;
            
            // Add message actions for user messages only
            let messageActions = '';
            if (!isFromAI && isOwnMessage) {
                messageActions = `
                    <div class="message-actions">
                        <button class="message-action-btn edit" title="Edit"><i class="bi bi-pencil"></i></button>
                        <button class="message-action-btn copy" title="Copy"><i class="bi bi-clipboard"></i></button>
                        <button class="message-action-btn delete" title="Delete"><i class="bi bi-trash"></i></button>
                    </div>
                `;
            }

            messageElement.innerHTML = `
                <div class="message-header">
                    <span class="message-date">${messageDate}</span>
                </div>
                ${!isFromAI && isOwnMessage ? 
                `<div class="message-actions">
                    <button class="message-action-btn edit" title="Edit"><i class="bi bi-pencil"></i></button>
                    <button class="message-action-btn copy" title="Copy"><i class="bi bi-clipboard"></i></button>
                    <button class="message-action-btn delete" title="Delete"><i class="bi bi-trash"></i></button>
                </div>` : ''}
                <p class="message-content">${messageContent}</p>
                ${msg.edited ? '<div class="message-edited">Edited</div>' : ''}
            `;

            messageContainer.appendChild(messageElement);
            chatMessages.appendChild(messageContainer);
            
            // Add event listeners to action buttons if they exist
            if (!isFromAI && isOwnMessage) {
                const editBtn = messageElement.querySelector('.edit');
                const copyBtn = messageElement.querySelector('.copy');
                const deleteBtn = messageElement.querySelector('.delete');
                
                if (editBtn) {
                    editBtn.addEventListener('click', () => editMessage(messageContainer, msg));
                }
                
                if (copyBtn) {
                    copyBtn.addEventListener('click', () => copyMessageText(msg.content));
                }
                
                if (deleteBtn) {
                    deleteBtn.addEventListener('click', () => deleteMessage(messageContainer, msg.id));
                }
            }
        });

        chatMessages.scrollTop = chatMessages.scrollHeight; // Scroll en bas
    }

    function addMessageToChat(messageData, isFromAI = false) {

        console.log("DEBUG: Ajout du message à l'UI:", messageData);
         chatMessages = document.getElementById("chat-messages");
        
        // Déterminer si le message vient de l'IA ou de l'élève
        const isSentByStudent = !isFromAI;
        
        // Création du conteneur pour le message
        const messageContainer = document.createElement("div");
        messageContainer.className = isSentByStudent ? "message-container sent" : "message-container assistant";
        messageContainer.dataset.messageId = messageData.id || Date.now(); // Use timestamp as fallback ID
        
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
        
        // Add personalized greeting if AI message
        let messageContent = messageData.content;
        
        // Add message actions for user messages only
        let messageActions = '';
        if (isSentByStudent) {
            messageActions = `
                <div class="message-actions">
                    <button class="message-action-btn edit" title="Edit"><i class="bi bi-pencil"></i></button>
                    <button class="message-action-btn copy" title="Copy"><i class="bi bi-clipboard"></i></button>
                    <button class="message-action-btn delete" title="Delete"><i class="bi bi-trash"></i></button>
                </div>
            `;
        }
        
        // Contenu du message
        messageElement.innerHTML = `
            <div class="message-header">
                <span class="message-date">${messageDate}</span>
            </div>
            ${!isFromAI ? 
            `<div class="message-actions">
                <button class="message-action-btn edit" title="Edit"><i class="bi bi-pencil"></i></button>
                <button class="message-action-btn copy" title="Copy"><i class="bi bi-clipboard"></i></button>
                <button class="message-action-btn delete" title="Delete"><i class="bi bi-trash"></i></button>
            </div>` : ''}
            <p class="message-content">${messageContent}</p>
        `;

        // Ajouter le message dans son conteneur
        messageContainer.appendChild(messageElement);
        
        // Ajouter au chat
        chatMessages.appendChild(messageContainer);
        
        // Add event listeners to action buttons if they exist
        if (isSentByStudent) {
            const editBtn = messageElement.querySelector('.edit');
            const copyBtn = messageElement.querySelector('.copy');
            const deleteBtn = messageElement.querySelector('.delete');
            
            if (editBtn) {
                editBtn.addEventListener('click', () => editMessage(messageContainer, messageData));
            }
            
            if (copyBtn) {
                copyBtn.addEventListener('click', () => copyMessageText(messageData.content));
            }
            
            if (deleteBtn) {
                deleteBtn.addEventListener('click', () => deleteMessage(messageContainer, messageData.id));
            }
        }
        
        // Scroll automatique vers le bas
        chatMessages.scrollTop = chatMessages.scrollHeight;
    }

    /**
     * Edit message
     * @param {HTMLElement} messageContainer - The message container element
     * @param {Object} messageData - The message data object
     */
    function editMessage(messageContainer, messageData) {
        // Prevent multiple edit operations
        if (messageBeingEdited) {
            cancelEdit(messageBeingEdited);
        }
        
        const messageElement = messageContainer.querySelector('.message');
        const messageContentElement = messageContainer.querySelector('.message-content');
        const originalText = messageContentElement.textContent;
        
        // Store original content in data attribute for cancellation
        messageContentElement.setAttribute('data-original-content', originalText);
        
        // Store reference to the message being edited
        messageBeingEdited = messageContainer;
        
        // Add editing class
        messageElement.classList.add('editing');
        
        // Replace content with textarea
        messageContentElement.innerHTML = `
            <textarea class="message-edit-input">${originalText}</textarea>
            <div class="message-edit-actions">
                <button class="message-edit-btn message-edit-cancel">Cancel</button>
                <button class="message-edit-btn message-edit-save">Save</button>
            </div>
        `;
        
        // Focus on textarea
        const textarea = messageContentElement.querySelector('textarea');
        textarea.focus();
        textarea.setSelectionRange(textarea.value.length, textarea.value.length);
        
        // Add event listeners to buttons
        const saveBtn = messageContentElement.querySelector('.message-edit-save');
        const cancelBtn = messageContentElement.querySelector('.message-edit-cancel');
        
        saveBtn.addEventListener('click', () => saveEdit(messageContainer, textarea.value, messageData));
        cancelBtn.addEventListener('click', () => cancelEdit(messageContainer));
        
        // Add event listener for Escape key
        textarea.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                cancelEdit(messageContainer);
            } else if (e.key === 'Enter' && !e.shiftKey) {
                e.preventDefault();
                saveEdit(messageContainer, textarea.value, messageData);
            }
        });
    }
    
    /**
     * Save edited message
     * @param {HTMLElement} messageContainer - The message container element
     * @param {string} newText - The new message text
     * @param {Object} messageData - The original message data
     */
    function saveEdit(messageContainer, newText, messageData) {
        if (!newText.trim()) {
            alert('Message cannot be empty');
            return;
        }
        
        const messageElement = messageContainer.querySelector('.message');
        const messageContentElement = messageContainer.querySelector('.message-content');
        
        // Remove editing class
        messageElement.classList.remove('editing');
        
        // If text hasn't changed, just cancel the edit
        if (newText.trim() === messageData.content) {
            cancelEdit(messageContainer);
            return;
        }
        
        // Update message content
        messageContentElement.textContent = newText;
        
        // Add edited indicator if not already present
        if (!messageContainer.querySelector('.message-edited')) {
            const editedIndicator = document.createElement('div');
            editedIndicator.className = 'message-edited';
            editedIndicator.textContent = 'Edited';
            messageElement.appendChild(editedIndicator);
        }
        
        // Reset messageBeingEdited
        messageBeingEdited = null;
        
        // Send updated message to server
        if (socket && socket.readyState === WebSocket.OPEN) {
            const editedMessage = {
                type: 'edit_message',
                message_id: messageData.id,
                content: newText,
                subject_id: currentSubject
            };
            
            socket.send(JSON.stringify(editedMessage));
            
            // After editing, request a new AI response
            setTimeout(() => {
                sendMessage(newText, true);
            }, 500);
        } else {
            console.error('WebSocket not connected, cannot send edited message');
            showError('Connection lost. Please refresh the page.');
        }
    }
    
    /**
     * Cancel message edit
     * @param {HTMLElement} messageContainer - The message container element
     */
    function cancelEdit(messageContainer) {
        const messageElement = messageContainer.querySelector('.message');
        const messageContentElement = messageContainer.querySelector('.message-content');
        
        // Remove editing class
        messageElement.classList.remove('editing');
        
        // Get the original message data
        const originalContent = messageContentElement.getAttribute('data-original-content') || "";
        
        // Restore original content
        messageContentElement.textContent = originalContent;
        
        // Reset messageBeingEdited
        messageBeingEdited = null;
    }
    
    /**
     * Copy message text to clipboard
     * @param {string} text - The text to copy
     */
    function copyMessageText(text) {
        navigator.clipboard.writeText(text)
            .then(() => {
                // Show a brief success message
                const notification = document.createElement('div');
                notification.className = 'copy-notification';
                notification.textContent = 'Copied to clipboard';
                document.body.appendChild(notification);
                
                setTimeout(() => {
                    notification.remove();
                }, 2000);
            })
            .catch(err => {
                console.error('Failed to copy text: ', err);
                showError('Failed to copy text to clipboard');
            });
    }
    
    /**
     * Delete message
     * @param {HTMLElement} messageContainer - The message container element
     * @param {string|number} messageId - The message ID
     */
    function deleteMessage(messageContainer, messageId) {
        if (confirm('Are you sure you want to delete this message?')) {
            // Remove from DOM
            messageContainer.classList.add('deleting');
            messageContainer.style.opacity = '0.5';
            
            // Send delete request to server
            if (socket && socket.readyState === WebSocket.OPEN) {
                const deleteRequest = {
                    type: 'delete_message',
                    message_id: messageId,
                    subject_id: currentSubject
                };
                
                socket.send(JSON.stringify(deleteRequest));
                
                // Remove from DOM after animation
                setTimeout(() => {
                    messageContainer.remove();
                }, 500);
            } else {
                console.error('WebSocket not connected, cannot delete message');
                showError('Connection lost. Please refresh the page.');
                messageContainer.classList.remove('deleting');
                messageContainer.style.opacity = '1';
            }
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
        console.log(`DEBUG: Ouverture de la connexion WebSocket pour subjectChat ${subjectId}...`);

        //  Vérifier si une connexion est déjà active et ouverte
       /* if (socket && socket.readyState === WebSocket.OPEN) {
            console.log("DEBUG: Une connexion WebSocket est déjà active, annulation de la nouvelle connexion.");
            return;
        }*/

        // Fermer proprement l'ancienne connexion avant d'en ouvrir une nouvelle
        if (socket) {
            console.log("DEBUG: Fermeture de l'ancienne connexion WebSocket...");
            socket.onclose = null;
            socket.onerror = null;
            socket.onmessage = null;
            socket.close();
        }  

       /* const protocol = window.location.protocol === "https:" ? "wss:" : "ws:";
        const isLocal = window.location.hostname === "127.0.0.1" || window.location.hostname === "localhost";

        const wsUrl = isLocal
            ? `${protocol}//127.0.0.1:8085/ws?token=${token}&subjectChat_id=${subjectId}`
            : `${protocol}//pay-kulmapeck.online/ws?token=${token}&subjectChat_id=${subjectId}`;*/

            const protocol = window.location.protocol === "https:" ? "wss:" : "ws:";
            const hostname = window.location.hostname;
            const isLocal = hostname === "127.0.0.1" || hostname === "localhost";

            let wsHost;

            if (isLocal) {
                wsHost = "127.0.0.1:8085";
            } else if (hostname === "pay-kulmapeck.online" || hostname === "www.pay-kulmapeck.online") {
                wsHost = "pay-kulmapeck.online";
            } else if (hostname === "kulmapeck.com" || hostname === "www.kulmapeck.com") {
                wsHost = "kulmapeck.com";
            } else {
                // Par défaut en production si autre domaine
                wsHost = hostname;
            }

            const wsUrl = `${protocol}://${wsHost}/ws?token=${token}&subjectChat_id=${subjectId}`;

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

    function sendMessage(customText = null, isResend = false) {
        const messageInput = document.getElementById("message-input");
        const message = customText || messageInput.value.trim();

        if (!message) {
            return;
        }

        if (!isResend) {
            messageInput.value = "";
        }

        if (!currentSubject) {
            console.error("DEBUG: Aucun sujet sélectionné");
            showError("Veuillez sélectionner un sujet avant d'envoyer un message");
            return;
        }

        if (!socket || socket.readyState !== WebSocket.OPEN) {
            console.log("DEBUG: WebSocket déconnecté, tentative de reconnexion...");
            reconnectWebSocket(currentSubject);
            showError("Connexion perdue, veuillez patienter pendant la reconnexion...");
            return;
        }
        
        // Créer le message JSON
        const messageData = {
            type: "message",
            subject_id: currentSubject,
            message: message, // Contenu du message
            timestamp: new Date().toISOString()
        };
        
        // Si c'est un message réédité, ne pas l'ajouter à l'interface
        if (!isResend) {
            // Afficher le message dans le chat localement
            addMessageToChat({
                content: message,
                timestamp: new Date().toISOString()
            });
        }
        
        // Envoyer le message via WebSocket
        socket.send(JSON.stringify(messageData));
        
        // Afficher l'indicateur de frappe IA
        showAITypingIndicator();
        
        console.log("DEBUG: Message envoyé:", message);
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
