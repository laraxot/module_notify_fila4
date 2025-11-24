<?php

declare(strict_types=1);

namespace Modules\Notify\Traits;

use Illuminate\Cache\RateLimiter;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Cache;
>>>>>>> 75179b8 (.)
=======
use Illuminate\Support\Facades\Cache;
>>>>>>> 7148d73 (.)

trait HasNotificationRateLimiting
{
    /**
     * Verifica se l'invio della notifica è consentito dal rate limiting.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $key  Chiave univoca per il rate limiting
     */
    protected function shouldSendNotification(string $key): bool
    {
        if (! config('notify.rate_limiting.enabled')) {
=======
=======
>>>>>>> 7148d73 (.)
     * @param string $key Chiave univoca per il rate limiting
     * @return bool
     */
    protected function shouldSendNotification(string $key): bool
    {
        if (!config('notify.rate_limiting.enabled')) {
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
>>>>>>> 7148d73 (.)
            return true;
        }

        $maxAttempts = config('notify.rate_limiting.max_attempts', 5);
        $decayMinutes = config('notify.rate_limiting.decay_minutes', 1);

        /** @var RateLimiter */
        $limiter = app(RateLimiter::class);

        if ($limiter->tooManyAttempts($key, $maxAttempts)) {
            return false;
        }

        $limiter->hit($key, $decayMinutes * 60);
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 75179b8 (.)
=======
>>>>>>> 7148d73 (.)
        return true;
    }

    /**
     * Ottiene il tempo rimanente prima che il rate limiting si resetti.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $key  Chiave univoca per il rate limiting
=======
     * @param string $key Chiave univoca per il rate limiting
>>>>>>> 75179b8 (.)
=======
     * @param string $key Chiave univoca per il rate limiting
>>>>>>> 7148d73 (.)
     * @return int Secondi rimanenti
     */
    protected function getNotificationRateLimitRetryAfter(string $key): int
    {
        /** @var RateLimiter */
        $limiter = app(RateLimiter::class);
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 75179b8 (.)
=======
>>>>>>> 7148d73 (.)
        return $limiter->availableIn($key);
    }

    /**
     * Ottiene il numero di tentativi rimanenti per il rate limiting.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $key  Chiave univoca per il rate limiting
=======
     * @param string $key Chiave univoca per il rate limiting
>>>>>>> 75179b8 (.)
=======
     * @param string $key Chiave univoca per il rate limiting
>>>>>>> 7148d73 (.)
     * @return int Tentativi rimanenti
     */
    protected function getNotificationRateLimitRemainingAttempts(string $key): int
    {
        $maxAttempts = config('notify.rate_limiting.max_attempts', 5);

        /** @var RateLimiter */
        $limiter = app(RateLimiter::class);
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 75179b8 (.)
=======
>>>>>>> 7148d73 (.)
        return $maxAttempts - $limiter->attempts($key);
    }

    /**
     * Resetta il rate limiting per una chiave specifica.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $key  Chiave univoca per il rate limiting
=======
     * @param string $key Chiave univoca per il rate limiting
     * @return void
>>>>>>> 75179b8 (.)
=======
     * @param string $key Chiave univoca per il rate limiting
     * @return void
>>>>>>> 7148d73 (.)
     */
    protected function resetNotificationRateLimit(string $key): void
    {
        /** @var RateLimiter */
        $limiter = app(RateLimiter::class);
        $limiter->clear($key);
    }

    /**
     * Genera una chiave univoca per il rate limiting.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $type  Tipo di notifica
     * @param  mixed  $identifier  Identificatore univoco (es. ID utente)
=======
     * @param string $type Tipo di notifica
     * @param mixed $identifier Identificatore univoco (es. ID utente)
     * @return string
>>>>>>> 75179b8 (.)
=======
     * @param string $type Tipo di notifica
     * @param mixed $identifier Identificatore univoco (es. ID utente)
     * @return string
>>>>>>> 7148d73 (.)
     */
    protected function getNotificationRateLimitKey(string $type, mixed $identifier): string
    {
        return "notify:{$type}:{$identifier}";
    }
}
