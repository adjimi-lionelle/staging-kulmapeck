import React from 'react';
import { Message } from '../types';
import { format } from 'date-fns';
import classNames from 'classnames';

interface ChatMessageProps {
    message: Message;
}

export const ChatMessage: React.FC<ChatMessageProps> = ({ message }) => {
    return (
        <div className={classNames('message', {
            'outgoing': message.fromStudent,
            'incoming': !message.fromStudent
        })}>
            <div className="message-content">
                {message.content}
                <div className="message-time">
                    {format(new Date(message.createdAt), 'HH:mm')}
                </div>
            </div>
        </div>
    );
};
