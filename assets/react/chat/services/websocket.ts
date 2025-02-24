import { WebSocketMessage } from '../types';

export class ChatWebSocket {
    private ws: WebSocket;
    private messageHandlers: ((message: WebSocketMessage) => void)[] = [];

    constructor(url: string, token: string) {
        this.ws = new WebSocket(`${url}?token=${token}`);
        this.setupEventHandlers();
    }

    private setupEventHandlers() {
        this.ws.onmessage = (event) => {
            try {
                const message: WebSocketMessage = JSON.parse(event.data);
                this.messageHandlers.forEach(handler => handler(message));
            } catch (error) {
                console.error('Failed to parse WebSocket message:', error);
            }
        };

        this.ws.onclose = () => {
            console.log('WebSocket connection closed');
            setTimeout(() => this.reconnect(), 5000);
        };

        this.ws.onerror = (error) => {
            console.error('WebSocket error:', error);
        };
    }

    public addMessageHandler(handler: (message: WebSocketMessage) => void) {
        this.messageHandlers.push(handler);
    }

    public removeMessageHandler(handler: (message: WebSocketMessage) => void) {
        this.messageHandlers = this.messageHandlers.filter(h => h !== handler);
    }

    public sendMessage(type: string, payload: any) {
        if (this.ws.readyState === WebSocket.OPEN) {
            this.ws.send(JSON.stringify({ type, payload }));
        } else {
            console.warn('WebSocket is not connected');
        }
    }

    private reconnect() {
        if (this.ws.readyState === WebSocket.CLOSED) {
            this.setupEventHandlers();
        }
    }

    public close() {
        this.ws.close();
    }
}
