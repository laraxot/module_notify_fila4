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
     * @param  string  $html  Il contenuto HTML
     * @param  string  $trackingId  ID per il tracking
     */
    protected function addTrackingPixel(string $html, string $trackingId): string
    {
        if (! config('notify.tracking.enabled') || ! config('notify.tracking.pixel.enabled')) {
=======
     * @param string $html Il contenuto HTML
     * @param string $trackingId ID per il tracking
     * @return string
     */
    protected function addTrackingPixel(string $html, string $trackingId): string
    {
        if (!config('notify.tracking.enabled') || !config('notify.tracking.pixel.enabled')) {
>>>>>>> 99ff506 (.)
            return $html;
        }

        $route = route(config('notify.tracking.pixel.route'), ['id' => $trackingId]);
<<<<<<< HEAD
        $pixel = '<img src="'.$route.'" alt="" width="1" height="1" style="display:none">';

        return $html.$pixel;
=======
        $pixel = '<img src="' . $route . '" alt="" width="1" height="1" style="display:none">';

        return $html . $pixel;
>>>>>>> 99ff506 (.)
    }

    /**
     * Aggiunge il tracking ai link in un contenuto HTML.
     *
<<<<<<< HEAD
     * @param  string  $html  Il contenuto HTML
     * @param  string  $trackingId  ID per il tracking
     */
    protected function addLinkTracking(string $html, string $trackingId): string
    {
        if (! config('notify.tracking.enabled') || ! config('notify.tracking.links.enabled')) {
=======
     * @param string $html Il contenuto HTML
     * @param string $trackingId ID per il tracking
     * @return string
     */
    protected function addLinkTracking(string $html, string $trackingId): string
    {
        if (!config('notify.tracking.enabled') || !config('notify.tracking.links.enabled')) {
>>>>>>> 99ff506 (.)
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
                        ! Str::startsWith($url, ['http://', 'https://'])
=======
                        !Str::startsWith($url, ['http://', 'https://'])
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
=======
=======
>>>>>>> 0f07e6d (.)
=======
=======
=======
=======
=======
>>>>>>> origin/develop
>>>>>>> f813254 (.)
                
                // Ignora link di unsubscribe, anchor e link relativi
                if (
                    Str::contains($url, ['unsubscribe', 'mailto:', 'tel:', '#'])
                    || !Str::startsWith($url, ['http://', 'https://'])
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
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
=======
>>>>>>> f5f1cb1 (.)
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
     * @param  string  $html  Il contenuto HTML
     * @param  string  $trackingId  ID per il tracking
=======
     * @param string $html Il contenuto HTML
     * @param string $trackingId ID per il tracking
     * @return string
>>>>>>> 99ff506 (.)
     */
    protected function addTracking(string $html, string $trackingId): string
    {
        $html = $this->addLinkTracking($html, $trackingId);
        $html = $this->addTrackingPixel($html, $trackingId);
<<<<<<< HEAD

=======
>>>>>>> 99ff506 (.)
        return $html;
    }

    /**
     * Genera un ID univoco per il tracking.
<<<<<<< HEAD
=======
     *
     * @return string
>>>>>>> 99ff506 (.)
     */
    protected function generateTrackingId(): string
    {
        return (string) Str::uuid();
    }

    /**
     * Verifica se il tracking è abilitato.
<<<<<<< HEAD
=======
     *
     * @return bool
>>>>>>> 99ff506 (.)
     */
    protected function isTrackingEnabled(): bool
    {
        return config('notify.tracking.enabled', false);
    }

    /**
     * Verifica se il tracking dei pixel è abilitato.
<<<<<<< HEAD
=======
     *
     * @return bool
>>>>>>> 99ff506 (.)
     */
    protected function isPixelTrackingEnabled(): bool
    {
        return $this->isTrackingEnabled() && config('notify.tracking.pixel.enabled', false);
    }

    /**
     * Verifica se il tracking dei link è abilitato.
<<<<<<< HEAD
=======
     *
     * @return bool
>>>>>>> 99ff506 (.)
     */
    protected function isLinkTrackingEnabled(): bool
    {
        return $this->isTrackingEnabled() && config('notify.tracking.links.enabled', false);
    }
}
