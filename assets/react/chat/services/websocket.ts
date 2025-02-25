import { WebSocketMessage } from '../types';

export class ChatWebSocket {
    private ws: WebSocket;
    private messageHandlers: ((message: WebSocketMessage) => void)[] = [];

    constructor(url: string, token: string) {
        console.log('Initializing WebSocket with URL:', url);
        this.ws = new WebSocket(`${url}?token=${token}`);
        this.setupEventHandlers();
    }

    private setupEventHandlers() {
        this.ws.onopen = () => {
            console.log('WebSocket connection established');
        };

        this.ws.onmessage = (event) => {
            console.log('Received WebSocket message:', event.data);
            try {
                const message: WebSocketMessage = JSON.parse(event.data);
                this.messageHandlers.forEach(handler => handler(message));
            } catch (error) {
                console.error('Failed to parse WebSocket message:', error);
            }
        };

        this.ws.onclose = (event) => {
            console.log('WebSocket connection closed:', {
                code: event.code,
                reason: event.reason,
                wasClean: event.wasClean
            });
            setTimeout(() => this.reconnect(), 5000);
        };

        this.ws.onerror = (error) => {
            console.error('WebSocket error:', {
                error,
                readyState: this.ws.readyState,
                url: this.ws.url
            });
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
            const message = JSON.stringify({ type, payload });
            console.log('Sending WebSocket message:', message);
            this.ws.send(message);
        } else {
            console.warn('WebSocket is not connected. Ready state:', this.ws.readyState);
        }
    }

    private reconnect() {
        console.log('Attempting to reconnect WebSocket...');
        if (this.ws.readyState === WebSocket.CLOSED) {
            this.setupEventHandlers();
        }
    }

    public close() {
        this.ws.close();
    }
}
