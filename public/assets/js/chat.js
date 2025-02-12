document.addEventListener("DOMContentLoaded", function () {
    fetchMyGroups();
});

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

/*function selectGroup(groupId) {
    console.log("Groupe sélectionné :", groupId);

    // Affiche la zone d'entrée de message uniquement quand un groupe est sélectionné
    let chatInputArea = document.getElementById("chat-input-area");
    chatInputArea.classList.remove("d-none");

    // Active la saisie des messages
    document.getElementById("chat-message").removeAttribute("disabled");
    document.getElementById("send-message").removeAttribute("disabled");

    // Charger l'historique des messages (à implémenter après)
}
*/
// 🔹 Fonction pour se connecter à un groupe via WebSocket
function selectGroup(groupId) {
    console.log("Groupe sélectionné :", groupId);

    // Activer l'entrée de message
    document.getElementById("chat-input-area").classList.remove("d-none");
    document.getElementById("chat-message").removeAttribute("disabled");
    document.getElementById("send-message").removeAttribute("disabled");

    // Nettoyer l'historique des messages
    let chatMessages = document.querySelector(".chat-messages");
    chatMessages.innerHTML = "<p>Chargement des messages...</p>";

    // **Fermer une connexion WebSocket existante**
    if (socket) {
        socket.close();
    }
}
