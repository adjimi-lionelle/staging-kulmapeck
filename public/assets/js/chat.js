document.addEventListener("DOMContentLoaded", function () {
    fetchMyGroups();
});

let socket = null;

function fetchMyGroups() {
    fetch('/api/chat/my-groups', {
        method: 'GET',
        headers: {
            'Content-Type': 'application/json'
        },
        credentials: 'include' // Assure que les cookies de session sont envoyés
    })
    .then(response => {
        if (!response.ok) {
            throw new Error("Erreur HTTP " + response.status);
        }
        return response.json();
    })
    .then(data => {
        if (data.error) {
            console.error("Erreur : " + data.error);
            return;
        }

        let groupList = document.getElementById("group-list");

        data.forEach(group => {
            let groupElement = document.createElement("div");
            groupElement.classList.add("chat-group");
            groupElement.dataset.groupId = group.id;
            groupElement.innerHTML = `
                <div class="chat-group-info">
                    <h6>${group.name}</h6>
                    <!-- span class="unread-badge" id="unread-${group.id}">0</span -->
                </div>
            `;
            groupElement.addEventListener("click", () => selectGroup(group.id));
            groupList.appendChild(groupElement);
        });
    })
    .catch(error => console.error("Erreur lors du chargement des groupes :", error));
}

//  Fonction pour se connecter à un groupe via WebSocket
function selectGroup(groupId) {
    console.log("Groupe sélectionné :", groupId);

    let selectedGroup = document.querySelector(`[data-group-id="${groupId}"] h6`).textContent;
    let chatTitle = document.getElementById("chat-title");
    chatTitle.textContent = selectedGroup;
    chatTitle.setAttribute("data-group-id", groupId);

    let chatInputArea = document.getElementById("chat-input-area");
    chatInputArea.classList.remove("d-none");

    document.getElementById("chat-message").removeAttribute("disabled");
    document.getElementById("send-message").removeAttribute("disabled");

    let chatMessages = document.querySelector(".chat-messages");
    chatMessages.innerHTML = "<p>Chargement des messages...</p>";

    if (socket) {
        socket.close();
    }

    fetch("/websocket/token")
        .then(response => response.json())
        .then(data => {
            if (!data.token) {
                console.error("Impossible d'obtenir un token WebSocket.");
                return;
            }

            socket = new WebSocket(`ws://127.0.0.1:9000?token=${data.token}&group_id=${groupId}`);

            socket.onopen = function () {
                console.log("Connexion WebSocket établie pour le groupe", groupId);
            };

            socket.onmessage = function (event) {
                let data = JSON.parse(event.data);

                if (data.type === "history") {
                    chatMessages.innerHTML = "";
                    data.messages.forEach(msg => {
                        displayMessage(msg.author, msg.content, msg.createdAt);
                    });
                }

                if (data.message) {
                    displayMessage(data.author, data.message, new Date().toLocaleTimeString());
                }
            };

            socket.onerror = function (error) {
                console.error("Erreur WebSocket :", error);
            };

            socket.onclose = function () {
                console.log("Connexion WebSocket fermée.");
            };
        })
        .catch(error => console.error("Erreur lors de la récupération du token WebSocket :", error));
}

function displayMessage(author, content, createdAt) {
    let chatMessages = document.querySelector(".chat-messages");

    let messageElement = document.createElement("div");
    messageElement.classList.add("message-item");

   /* let currentUser = getCurrentUserIdentifier(); // Fonction qui retourne l'identifiant (email ou pseudo)

    let isCurrentUser = (author === currentUser);*/

    messageElement.innerHTML = `
        <div class="message-header">
            <strong>${author}</strong> <span class="message-time">${createdAt}</span>
        </div>
        <div class="message-content">${content}</div>
    `;

    chatMessages.appendChild(messageElement);
    chatMessages.scrollTop = chatMessages.scrollHeight; // Scroll en bas
}

document.getElementById("send-message").addEventListener("click", function () {
    let messageInput = document.getElementById("chat-message");
    let messageText = messageInput.value.trim();

    if (messageText === "") return;

    let groupId = document.getElementById("chat-title").getAttribute("data-group-id");

    let messageData = {
        group_id: parseInt(groupId), // Assure que c'est bien un nombre
        message: messageText
    };

    console.log("Envoi du message WebSocket :", messageData);

    if (socket && socket.readyState === WebSocket.OPEN) {
        socket.send(JSON.stringify(messageData));
        displayMessage("Moi", messageText, new Date().toLocaleTimeString());
        messageInput.value = ""; // Efface le champ après envoi
    } else {
        console.error("Connexion WebSocket non établie !");
    }
     
});

