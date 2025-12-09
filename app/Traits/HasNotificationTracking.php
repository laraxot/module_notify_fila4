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
     * @param string $html Il contenuto HTML
     * @param string $trackingId ID per il tracking
     * @return string
     */
    protected function addTrackingPixel(string $html, string $trackingId): string
    {
        if (!config('notify.tracking.enabled') || !config('notify.tracking.pixel.enabled')) {
=======
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
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
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
            return $html;
        }

        $route = route(config('notify.tracking.pixel.route'), ['id' => $trackingId]);
<<<<<<< HEAD
<<<<<<< HEAD
        $pixel = '<img src="' . $route . '" alt="" width="1" height="1" style="display:none">';

        return $html . $pixel;
=======
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
        $pixel = '<img src="'.$route.'" alt="" width="1" height="1" style="display:none">';

        return $html.$pixel;
=======
        $pixel = '<img src="' . $route . '" alt="" width="1" height="1" style="display:none">';

        return $html . $pixel;
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
    }

    /**
     * Aggiunge il tracking ai link in un contenuto HTML.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param string $html Il contenuto HTML
     * @param string $trackingId ID per il tracking
     * @return string
     */
    protected function addLinkTracking(string $html, string $trackingId): string
    {
        if (!config('notify.tracking.enabled') || !config('notify.tracking.links.enabled')) {
=======
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
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
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
            return $html;
        }

        return preg_replace_callback(
            '/<a\s+(?:[^>]*?\s+)?href=(["\'])(.*?)\1/i',
            function ($matches) use ($trackingId) {
                $url = $matches[2];
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)

                // Ignora link di unsubscribe, anchor e link relativi
                if (
                    Str::contains($url, ['unsubscribe', 'mailto:', 'tel:', '#']) ||
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                        !Str::startsWith($url, ['http://', 'https://'])
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 4689a827 (.)
                
                // Ignora link di unsubscribe, anchor e link relativi
                if (
                    Str::contains($url, ['unsubscribe', 'mailto:', 'tel:', '#'])
                    || !Str::startsWith($url, ['http://', 'https://'])
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 2effe245 (.)
                        ! Str::startsWith($url, ['http://', 'https://'])
=======
                        !Str::startsWith($url, ['http://', 'https://'])
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
=======
=======
>>>>>>> 0f07e6d (.)
=======
=======
=======
>>>>>>> 2effe245 (.)
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
>>>>>>> f813254 (.)
=======
>>>>>>> 2effe245 (.)
                
                // Ignora link di unsubscribe, anchor e link relativi
                if (
                    Str::contains($url, ['unsubscribe', 'mailto:', 'tel:', '#'])
                    || !Str::startsWith($url, ['http://', 'https://'])
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
=======
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
<<<<<<< HEAD
>>>>>>> 4d2eb53e (.)
=======
=======
>>>>>>> e11621f (.)
<<<<<<< HEAD
>>>>>>> 888799d0 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 2effe245 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f2e64178 (.)
=======
=======
>>>>>>> f5f1cb1 (.)
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
                        ! Str::startsWith($url, ['http://', 'https://'])
>>>>>>> 985c7bda (.)
=======
                        ! Str::startsWith($url, ['http://', 'https://'])
=======
                        !Str::startsWith($url, ['http://', 'https://'])
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
=======
                        ! Str::startsWith($url, ['http://', 'https://'])
=======
                        !Str::startsWith($url, ['http://', 'https://'])
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
            $html,
=======
            $html
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
            $html,
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
            $html,
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
            $html,
>>>>>>> 9777d1b3 (.)
=======
            $html,
=======
=======
            $html,
=======
>>>>>>> d09cb759 (.)
=======
            $html,
=======
>>>>>>> d09cb759 (.)
=======
            $html,
=======
>>>>>>> 4689a827 (.)
=======
            $html,
=======
>>>>>>> f2e64178 (.)
=======
            $html,
=======
>>>>>>> 2effe245 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
            $html,
>>>>>>> 3f537838 (.)
=======
            $html,
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
            $html,
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
            $html,
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
            $html,
>>>>>>> 3f537838 (.)
=======
            $html,
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
            $html,
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
            $html,
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
            $html,
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
            $html,
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
            $html,
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
            $html,
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
            $html,
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
            $html,
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
            $html,
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
            $html,
>>>>>>> 985c7bda (.)
        );
    }

    /**
     * Aggiunge il tracking completo (pixel + link) a un contenuto HTML.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param string $html Il contenuto HTML
     * @param string $trackingId ID per il tracking
     * @return string
=======
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
     * @param  string  $html  Il contenuto HTML
     * @param  string  $trackingId  ID per il tracking
=======
     * @param string $html Il contenuto HTML
     * @param string $trackingId ID per il tracking
     * @return string
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
     */
    protected function addTracking(string $html, string $trackingId): string
    {
        $html = $this->addLinkTracking($html, $trackingId);
<<<<<<< HEAD
        $html = $this->addTrackingPixel($html, $trackingId);
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
        return $html;
=======
<<<<<<< HEAD

        return $this->addTrackingPixel($html, $trackingId);
=======
        $html = $this->addTrackingPixel($html, $trackingId);
        return $html;
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
    }

    /**
     * Genera un ID univoco per il tracking.
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @return string
=======
<<<<<<< HEAD
=======
     *
     * @return string
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
=======
     *
     * @return string
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
     */
    protected function generateTrackingId(): string
    {
        return (string) Str::uuid();
    }

    /**
     * Verifica se il tracking è abilitato.
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @return bool
=======
<<<<<<< HEAD
=======
     *
     * @return bool
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
=======
     *
     * @return bool
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
     */
    protected function isTrackingEnabled(): bool
    {
        return config('notify.tracking.enabled', false);
    }

    /**
     * Verifica se il tracking dei pixel è abilitato.
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @return bool
=======
<<<<<<< HEAD
=======
     *
     * @return bool
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
=======
     *
     * @return bool
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
     */
    protected function isPixelTrackingEnabled(): bool
    {
        return $this->isTrackingEnabled() && config('notify.tracking.pixel.enabled', false);
    }

    /**
     * Verifica se il tracking dei link è abilitato.
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @return bool
=======
<<<<<<< HEAD
=======
     *
     * @return bool
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
=======
     *
     * @return bool
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
     */
    protected function isLinkTrackingEnabled(): bool
    {
        return $this->isTrackingEnabled() && config('notify.tracking.links.enabled', false);
    }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
}
=======
} 
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
}
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
}
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
}
>>>>>>> 9777d1b3 (.)
=======
}
=======
=======
}
=======
>>>>>>> d09cb759 (.)
=======
}
=======
>>>>>>> d09cb759 (.)
=======
}
=======
>>>>>>> 4689a827 (.)
=======
}
=======
>>>>>>> f2e64178 (.)
=======
}
=======
>>>>>>> 2effe245 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
}
>>>>>>> 3f537838 (.)
=======
}
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
}
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
}
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
}
>>>>>>> 3f537838 (.)
=======
}
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
}
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
}
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
}
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
}
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
}
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
}
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
}
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
}
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
}
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
}
>>>>>>> 985c7bda (.)
