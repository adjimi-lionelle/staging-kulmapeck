<?php

namespace App\Service;

class MockChatDataProvider
{
    public function getMockForums(): array
    {
        $now = new \DateTime();
        return [
            [
                'id' => 1,
                'subject' => 'Mathematics',
                'icon' => 'fa-calculator',
                'teacherName' => 'Dr. Smith',
                'teacherAvatar' => '/assets/images/avatar/01.jpg',
                'isTeacherOnline' => true,
                'teacherStatus' => 'Available',
                'unreadCount' => 5,
                'onlineCount' => 12,
                'participantCount' => 45,
                'lastActivity' => $now->modify('-5 minutes')->format('c'),
                'category' => 'sciences'
            ],
            [
                'id' => 2,
                'subject' => 'Physics',
                'icon' => 'fa-atom',
                'teacherName' => 'Prof. Johnson',
                'teacherAvatar' => '/assets/images/avatar/02.jpg',
                'isTeacherOnline' => false,
                'teacherStatus' => 'Away',
                'unreadCount' => 0,
                'onlineCount' => 8,
                'participantCount' => 32,
                'lastActivity' => $now->modify('-1 hour')->format('c'),
                'category' => 'sciences'
            ],
            [
                'id' => 3,
                'subject' => 'Literature',
                'icon' => 'fa-book',
                'teacherName' => 'Ms. Williams',
                'teacherAvatar' => '/assets/images/avatar/03.jpg',
                'isTeacherOnline' => true,
                'teacherStatus' => 'In Session',
                'unreadCount' => 2,
                'onlineCount' => 15,
                'participantCount' => 50,
                'lastActivity' => $now->modify('-30 minutes')->format('c'),
                'category' => 'humanities'
            ]
        ];
    }

    public function getMockCategories(): array
    {
        return [
            ['id' => 1, 'name' => 'Sciences'],
            ['id' => 2, 'name' => 'Humanities'],
            ['id' => 3, 'name' => 'Languages'],
            ['id' => 4, 'name' => 'Arts']
        ];
    }
}
