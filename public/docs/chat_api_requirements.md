# Chat API Requirements

This document outlines the data exchange requirements between the frontend and backend for the Kulmapeck chat system.

## WebSocket Connection

The frontend expects the following data to be provided by the backend:

- `websocket_url`: The WebSocket server URL
- `token`: Authentication token for the current user's WebSocket connection (obtained from `/websocket/token` endpoint)
- `group_id`: The subject chat ID to connect to

## Data Structures

### Subject Data

The backend should provide an array of subject objects with the following structure:

```json
[
  {
    "id": 123,
    "name": "Mathematics",
    "matiere": {
      "id": 456,
      "name": "Math"
    },
    "type": "teacher",
    "cycle": 2,
    "unreadCount": 5,
    "lastMessage": "Last message preview"
  }
]
```

### Message Data

Messages should have the following structure:

```json
{
  "id": 456,
  "content": "Hello, this is a message",
  "sender": {
    "id": 789,
    "pseudo": "John Doe",
    "avatar": "/path/to/avatar.jpg"
  },
  "subjectChat": {
    "id": 123
  },
  "isFromAI": false,
  "isRead": false,
  "createdAt": "2025-02-27T12:30:45+01:00"
}
```

## WebSocket Communication

### Connection Parameters

When connecting to WebSocket, the following query parameters are required:
- `token`: JWT token obtained from the `/websocket/token` endpoint
- `group_id`: The ID of the subject chat to connect to

### Messages Sent by Frontend

1. **New Message**
```json
{
  "group_id": 123,
  "message": "This is my message"
}
```

2. **Typing Indicator**
```json
{
  "action": "typing",
  "group_id": 123,
  "isTyping": true
}
```

### Messages Received by Frontend

1. **Message History on Connection**
```json
{
  "type": "history",
  "messages": [
    {
      "id": 456,
      "content": "Hello, this is a message",
      "author": "John Doe",
      "createdAt": "2025-02-27 12:30:45"
    },
    // More messages...
  ]
}
```

2. **New Message**
```json
{
  "message": "New message from someone else",
  "author": "Jane Smith"
}
```

3. **Typing Indicator**
```json
{
  "type": "typing",
  "user": "Jane Smith",
  "isTyping": true
}
```

## REST API Endpoints

1. **Get WebSocket Token**
   - URL: `/websocket/token`
   - Method: `GET`
   - Response:
     ```json
     {
       "token": "jwt_token_here"
     }
     ```

2. **Get Subject Chats**
   - URL: `/api/subject-chats`
   - Method: `GET`
   - Response:
     ```json
     [
       {
         "id": 123,
         "name": "Mathematics",
         "matiere": {
           "id": 456,
           "name": "Math"
         },
         "type": "teacher",
         "cycle": 2,
         "unreadCount": 5
       },
       // More subjects...
     ]
     ```

## Implementation Notes

1. The frontend expects the backend to maintain WebSocket connections and handle authentication.
2. Messages should be stored in the `message_chat` table with references to `subject_chat` and `user`.
3. WebSocket connections are tracked in the `web_socket_connection` table.
4. The backend should handle:
   - User authentication via JWT tokens
   - Message persistence
   - Message history retrieval
   - Typing indicators (ephemeral, not stored permanently)
   - Broadcasting messages to all connected users in the same subject chat
