import React, { useState } from 'react';
import { Subject } from '../types';
import { useChatStore } from '../store';
import classNames from 'classnames';

interface ChatSidebarProps {
    onSubjectSelect: (subject: Subject) => void;
}

export const ChatSidebar: React.FC<ChatSidebarProps> = ({ onSubjectSelect }) => {
    const [searchQuery, setSearchQuery] = useState('');
    const { subjects, currentSubject } = useChatStore();

    const filteredSubjects = subjects.filter(subject =>
        subject.name.toLowerCase().includes(searchQuery.toLowerCase()) ||
        subject.teacherName.toLowerCase().includes(searchQuery.toLowerCase())
    );

    return (
        <div className="chat-sidebar border-end">
            <div className="search-container p-3 border-bottom">
                <div className="search-box">
                    <i className="bi bi-search"></i>
                    <input
                        type="text"
                        className="form-control"
                        placeholder="Search subjects..."
                        value={searchQuery}
                        onChange={(e) => setSearchQuery(e.target.value)}
                    />
                </div>
            </div>
            <div className="chat-list">
                {filteredSubjects.length === 0 ? (
                    <div className="empty-state text-center p-4">
                        <i className="bi bi-journal-x" style={{ fontSize: '48px', color: '#6c757d' }}></i>
                        <p className="mt-3 text-muted">No subjects found</p>
                    </div>
                ) : (
                    filteredSubjects.map(subject => (
                        <div
                            key={subject.id}
                            className={classNames('chat-item', {
                                'active': currentSubject?.id === subject.id
                            })}
                            onClick={() => onSubjectSelect(subject)}
                        >
                            <div className="chat-item-avatar">
                                {subject.icon ? (
                                    <img
                                        src={subject.icon}
                                        alt={subject.name}
                                        className="rounded-circle"
                                    />
                                ) : (
                                    <div className="avatar-placeholder rounded-circle bg-primary text-white">
                                        <i className="bi bi-book-fill"></i>
                                    </div>
                                )}
                            </div>
                            <div className="chat-item-info">
                                <div className="chat-item-name">{subject.name}</div>
                                <div className="chat-item-preview">
                                    Prof. {subject.teacherName}
                                </div>
                            </div>
                        </div>
                    ))
                )}
            </div>
        </div>
    );
};
