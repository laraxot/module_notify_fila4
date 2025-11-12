<?php

declare(strict_types=1);

namespace Modules\Notify\Traits;

use Illuminate\Support\Str;

trait HasNotificationTracking
{
    /**
     * Aggiunge il pixel di tracking a un contenuto HTML.
     *
     * @param  string  $html  Il contenuto HTML
     * @param  string  $trackingId  ID per il tracking
     */
    protected function addTrackingPixel(string $html, string $trackingId): string
    {
        if (! config('notify.tracking.enabled') || ! config('notify.tracking.pixel.enabled')) {
            return $html;
        }

        $route = route(config('notify.tracking.pixel.route'), ['id' => $trackingId]);
        $pixel = '<img src="'.$route.'" alt="" width="1" height="1" style="display:none">';

        return $html.$pixel;
    }

    /**
     * Aggiunge il tracking ai link in un contenuto HTML.
     *
     * @param  string  $html  Il contenuto HTML
     * @param  string  $trackingId  ID per il tracking
     */
    protected function addLinkTracking(string $html, string $trackingId): string
    {
        if (! config('notify.tracking.enabled') || ! config('notify.tracking.links.enabled')) {
            return $html;
        }

        return preg_replace_callback(
            '/<a\s+(?:[^>]*?\s+)?href=(["\'])(.*?)\1/i',
            function ($matches) use ($trackingId) {
                $url = $matches[2];
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)

                // Ignora link di unsubscribe, anchor e link relativi
                if (
                    Str::contains($url, ['unsubscribe', 'mailto:', 'tel:', '#']) ||
<<<<<<< HEAD
                        ! Str::startsWith($url, ['http://', 'https://'])
=======
                        !Str::startsWith($url, ['http://', 'https://'])
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
                
                // Ignora link di unsubscribe, anchor e link relativi
                if (
                    Str::contains($url, ['unsubscribe', 'mailto:', 'tel:', '#'])
                    || !Str::startsWith($url, ['http://', 'https://'])
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

                // Ignora link di unsubscribe, anchor e link relativi
                if (
                    Str::contains($url, ['unsubscribe', 'mailto:', 'tel:', '#']) ||
                        !Str::startsWith($url, ['http://', 'https://'])
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
                ) {
                    return $matches[0];
                }

                $trackingUrl = route(config('notify.tracking.links.route'), [
                    'id' => $trackingId,
                    'url' => $url,
                ]);

                return str_replace($url, $trackingUrl, $matches[0]);
            },
<<<<<<< HEAD
            $html,
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $html,
=======
            $html
>>>>>>> a12f125f4a (.)
=======
            $html,
>>>>>>> b93ef594b4 (.)
=======
            $html
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        );
    }

    /**
     * Aggiunge il tracking completo (pixel + link) a un contenuto HTML.
     *
     * @param  string  $html  Il contenuto HTML
     * @param  string  $trackingId  ID per il tracking
     */
    protected function addTracking(string $html, string $trackingId): string
    {
        $html = $this->addLinkTracking($html, $trackingId);
        $html = $this->addTrackingPixel($html, $trackingId);

        return $html;
    }

    /**
     * Genera un ID univoco per il tracking.
     */
    protected function generateTrackingId(): string
    {
        return (string) Str::uuid();
    }

    /**
     * Verifica se il tracking è abilitato.
     */
    protected function isTrackingEnabled(): bool
    {
        return config('notify.tracking.enabled', false);
    }

    /**
     * Verifica se il tracking dei pixel è abilitato.
     */
    protected function isPixelTrackingEnabled(): bool
    {
        return $this->isTrackingEnabled() && config('notify.tracking.pixel.enabled', false);
    }

    /**
     * Verifica se il tracking dei link è abilitato.
     */
    protected function isLinkTrackingEnabled(): bool
    {
        return $this->isTrackingEnabled() && config('notify.tracking.links.enabled', false);
    }
<<<<<<< HEAD
}
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
}
=======
} 
>>>>>>> a12f125f4a (.)
=======
}
>>>>>>> b93ef594b4 (.)
=======
} 
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
