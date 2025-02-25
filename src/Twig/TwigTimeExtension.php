<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class TwigTimeExtension extends AbstractExtension
{
    public function getFilters()
    {
        return [
            new TwigFilter('time_diff', [$this, 'calculateTimeDiff']),
        ];
    }

    public function calculateTimeDiff($date)
    {
        if (!$date instanceof \DateTime && !$date instanceof \DateTimeInterface) {
            $date = new \DateTime($date);
        }

        $now = new \DateTime();
        $diff = $now->diff($date);
        $diffDays = (int) $diff->format('%r%a');

        if ($diffDays === 0) {
            if ($diff->h > 0) {
                return $diff->h . ' hour' . ($diff->h > 1 ? 's' : '') . ' ago';
            }
            if ($diff->i > 0) {
                return $diff->i . ' minute' . ($diff->i > 1 ? 's' : '') . ' ago';
            }
            return 'just now';
        }

        if (abs($diffDays) < 7) {
            return abs($diffDays) . ' day' . (abs($diffDays) > 1 ? 's' : '') . ' ago';
        }

        if (abs($diffDays) < 30) {
            $weeks = floor(abs($diffDays) / 7);
            return $weeks . ' week' . ($weeks > 1 ? 's' : '') . ' ago';
        }

        if (abs($diffDays) < 365) {
            $months = floor(abs($diffDays) / 30);
            return $months . ' month' . ($months > 1 ? 's' : '') . ' ago';
        }

        $years = floor(abs($diffDays) / 365);
        return $years . ' year' . ($years > 1 ? 's' : '') . ' ago';
    }

    public function getName()
    {
        return 'app_time';
    }
}
