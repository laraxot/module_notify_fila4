<?php

declare(strict_types=1);

namespace Modules\Notify\Traits;

use Illuminate\Support\Str;

trait HasNotificationTracking
{
    /**
     * Aggiunge il pixel di tracking a un contenuto HTML.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $html  Il contenuto HTML
     * @param  string  $trackingId  ID per il tracking
     */
    protected function addTrackingPixel(string $html, string $trackingId): string
    {
        if (! config('notify.tracking.enabled') || ! config('notify.tracking.pixel.enabled')) {
=======
=======
>>>>>>> 7148d73 (.)
     * @param string $html Il contenuto HTML
     * @param string $trackingId ID per il tracking
     * @return string
     */
    protected function addTrackingPixel(string $html, string $trackingId): string
    {
        if (!config('notify.tracking.enabled') || !config('notify.tracking.pixel.enabled')) {
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
>>>>>>> 7148d73 (.)
            return $html;
        }

        $route = route(config('notify.tracking.pixel.route'), ['id' => $trackingId]);
<<<<<<< HEAD
<<<<<<< HEAD
        $pixel = '<img src="'.$route.'" alt="" width="1" height="1" style="display:none">';

        return $html.$pixel;
=======
        $pixel = '<img src="' . $route . '" alt="" width="1" height="1" style="display:none">';

        return $html . $pixel;
>>>>>>> 75179b8 (.)
=======
        $pixel = '<img src="' . $route . '" alt="" width="1" height="1" style="display:none">';

        return $html . $pixel;
>>>>>>> 7148d73 (.)
    }

    /**
     * Aggiunge il tracking ai link in un contenuto HTML.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $html  Il contenuto HTML
     * @param  string  $trackingId  ID per il tracking
     */
    protected function addLinkTracking(string $html, string $trackingId): string
    {
        if (! config('notify.tracking.enabled') || ! config('notify.tracking.links.enabled')) {
=======
=======
>>>>>>> 7148d73 (.)
     * @param string $html Il contenuto HTML
     * @param string $trackingId ID per il tracking
     * @return string
     */
    protected function addLinkTracking(string $html, string $trackingId): string
    {
        if (!config('notify.tracking.enabled') || !config('notify.tracking.links.enabled')) {
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
>>>>>>> 7148d73 (.)
            return $html;
        }

        return preg_replace_callback(
            '/<a\s+(?:[^>]*?\s+)?href=(["\'])(.*?)\1/i',
            function ($matches) use ($trackingId) {
                $url = $matches[2];

                // Ignora link di unsubscribe, anchor e link relativi
                if (
                    Str::contains($url, ['unsubscribe', 'mailto:', 'tel:', '#']) ||
<<<<<<< HEAD
<<<<<<< HEAD
                        ! Str::startsWith($url, ['http://', 'https://'])
=======
                        !Str::startsWith($url, ['http://', 'https://'])
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
=======
>>>>>>> 207ac35 (.)
=======
                
                // Ignora link di unsubscribe, anchor e link relativi
                if (
                    Str::contains($url, ['unsubscribe', 'mailto:', 'tel:', '#'])
                    || !Str::startsWith($url, ['http://', 'https://'])
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
=======
                        !Str::startsWith($url, ['http://', 'https://'])
>>>>>>> 7148d73 (.)
                ) {
                    return $matches[0];
                }

                $trackingUrl = route(config('notify.tracking.links.route'), [
                    'id' => $trackingId,
                    'url' => $url,
                ]);

                return str_replace($url, $trackingUrl, $matches[0]);
            },
            $html,
        );
    }

    /**
     * Aggiunge il tracking completo (pixel + link) a un contenuto HTML.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $html  Il contenuto HTML
     * @param  string  $trackingId  ID per il tracking
=======
     * @param string $html Il contenuto HTML
     * @param string $trackingId ID per il tracking
     * @return string
>>>>>>> 75179b8 (.)
=======
     * @param string $html Il contenuto HTML
     * @param string $trackingId ID per il tracking
     * @return string
>>>>>>> 7148d73 (.)
     */
    protected function addTracking(string $html, string $trackingId): string
    {
        $html = $this->addLinkTracking($html, $trackingId);
<<<<<<< HEAD
<<<<<<< HEAD

        return $this->addTrackingPixel($html, $trackingId);
=======
        $html = $this->addTrackingPixel($html, $trackingId);
        return $html;
>>>>>>> 75179b8 (.)
=======
        $html = $this->addTrackingPixel($html, $trackingId);
        return $html;
>>>>>>> 7148d73 (.)
    }

    /**
     * Genera un ID univoco per il tracking.
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @return string
>>>>>>> 75179b8 (.)
=======
     *
     * @return string
>>>>>>> 7148d73 (.)
     */
    protected function generateTrackingId(): string
    {
        return (string) Str::uuid();
    }

    /**
     * Verifica se il tracking è abilitato.
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @return bool
>>>>>>> 75179b8 (.)
=======
     *
     * @return bool
>>>>>>> 7148d73 (.)
     */
    protected function isTrackingEnabled(): bool
    {
        return config('notify.tracking.enabled', false);
    }

    /**
     * Verifica se il tracking dei pixel è abilitato.
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @return bool
>>>>>>> 75179b8 (.)
=======
     *
     * @return bool
>>>>>>> 7148d73 (.)
     */
    protected function isPixelTrackingEnabled(): bool
    {
        return $this->isTrackingEnabled() && config('notify.tracking.pixel.enabled', false);
    }

    /**
     * Verifica se il tracking dei link è abilitato.
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @return bool
>>>>>>> 75179b8 (.)
=======
     *
     * @return bool
>>>>>>> 7148d73 (.)
     */
    protected function isLinkTrackingEnabled(): bool
    {
        return $this->isTrackingEnabled() && config('notify.tracking.links.enabled', false);
    }
}
