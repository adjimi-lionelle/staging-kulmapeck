import React from 'react';
import { Subject } from '../types';

interface ChatHeaderProps {
    subject?: Subject;
}

export const ChatHeader: React.FC<ChatHeaderProps> = ({ subject }) => {
    if (!subject) return null;

    return (
        <div className="chat-header border-bottom">
            <div className="chat-header-info">
                <img
                    src={subject.icon || '/build/images/default-subject.png'}
                    alt={subject.name}
                    className="chat-header-avatar rounded-circle"
                    id="current-subject-icon"
                />
                <div>
                    <div className="chat-header-name" id="current-subject-name">
                        {subject.name}
                    </div>
                    <div className="chat-header-status">
                        <i className="bi bi-circle-fill text-success"></i>
                        <span>Connected</span>
                    </div>
                </div>
            </div>
            <div className="chat-header-actions">
                <button type="button" className="btn btn-light btn-sm rounded-circle">
                    <i className="bi bi-telephone"></i>
                </button>
                <button type="button" className="btn btn-light btn-sm rounded-circle">
                    <i className="bi bi-camera-video"></i>
                </button>
                <button type="button" className="btn btn-light btn-sm rounded-circle">
                    <i className="bi bi-three-dots-vertical"></i>
                </button>
            </div>
        </div>
    );
};
