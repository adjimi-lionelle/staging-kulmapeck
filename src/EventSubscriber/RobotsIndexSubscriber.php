<?php

namespace App\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\ResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;

class RobotsIndexSubscriber implements EventSubscriberInterface
{
    public function onKernelResponse(ResponseEvent $event): void
    {
        $response = $event->getResponse();
        // Remove any existing X-Robots-Tag header
        $response->headers->remove('X-Robots-Tag');
        // Set our desired header
        $response->headers->set('X-Robots-Tag', 'index, follow');
    }

    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::RESPONSE => ['onKernelResponse', -1], // Low priority to run after other subscribers
        ];
    }
}