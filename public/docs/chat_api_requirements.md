# Chat API Requirements

This document outlines the data exchange requirements between the frontend and backend for the Kulmapeck chat system.

## WebSocket Connection

The frontend expects the following data to be provided by the backend:

- `websocket_url`: The WebSocket server URL
- `token`: Authentication token for the current user's WebSocket connection

## Data Structures

### Subject Data

The backend should provide an array of subject objects with the following structure:

```json
[
  {
    "id": 123,
    "name": "Mathematics",
    "icon": "/path/to/icon.png",
    "teacherName": "Prof. Smith",
    "unreadCount": 5
  }
]
```

### Message Data

Messages should have the following structure:

```json
{
  "id": 456,
  "subjectId": 123,
  "userId": 789,
  "userName": "John Doe",
  "userAvatar": "/path/to/avatar.jpg",
  "content": "Hello, this is a message",
  "timestamp": "2025-02-27T12:30:45+01:00",
  "isRead": false,
  "isFromCurrentUser": true
}
```

## WebSocket Communication

### Messages Sent by Frontend

1. **Authentication**
```json
{
  "action": "authenticate",
  "token": "user_auth_token"
}
```

2. **New Message**
```json
{
  "action": "message",
  "subjectId": 123,
  "content": "This is my message",
  "timestamp": "2025-02-27T12:35:22+01:00"
}
```

3. **Typing Indicator**
```json
{
  "action": "typing",
  "subjectId": 123,
  "isTyping": true
}
```

4. **Read Receipt**
```json
{
  "action": "read",
  "messageIds": [456, 457, 458]
}
```

5. **Read All Messages in Subject**
```json
{
  "action": "readAll",
  "subjectId": 123
}
```

6. **Get Messages for Subject**
```json
{
  "action": "getMessages",
  "subjectId": 123
}
```

### Messages Received by Frontend

1. **New Message**
```json
{
  "event": "message",
  "data": {
    "id": 459,
    "subjectId": 123,
    "userId": 790,
    "userName": "Jane Smith",
    "userAvatar": "/path/to/avatar.jpg",
    "content": "New message from someone else",
    "timestamp": "2025-02-27T12:36:10+01:00",
    "isRead": false,
    "isFromCurrentUser": false
  }
}
```

2. **User Typing**
```json
{
  "event": "typing",
  "data": {
    "subjectId": 123,
    "userId": 790,
    "userName": "Jane Smith",
    "isTyping": true
  }
}
```

3. **User Status Update**
```json
{
  "event": "userStatus",
  "data": {
    "subjectId": 123,
    "users": [
      {"id": 789, "status": "online"},
      {"id": 790, "status": "offline"}
    ]
  }
}
```

4. **Messages List Response**
```json
{
  "event": "messagesList",
  "data": {
    "subjectId": 123,
    "messages": [
      {
        "id": 456,
        "userId": 789,
        "userName": "John Doe",
        "userAvatar": "/path/to/avatar.jpg",
        "content": "Hello, this is a message",
        "timestamp": "2025-02-27T12:30:45+01:00",
        "isRead": true,
        "isFromCurrentUser": true
      },
      // More messages...
    ]
  }
}
```

## Implementation Notes

1. The frontend expects the backend to maintain WebSocket connections and handle authentication.
2. Messages should be stored persistently and retrieved when a user selects a subject.
3. Read status should be tracked per user and per message.
4. Typing indicators should be ephemeral and not stored in the database.
5. User online status should be tracked and broadcast to all users in the same subject chat.
