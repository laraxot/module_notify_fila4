<?php

declare(strict_types=1);

namespace Modules\Notify\Traits;

use Illuminate\Cache\RateLimiter;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Cache;
>>>>>>> 99ff506 (.)

trait HasNotificationRateLimiting
{
    /**
     * Verifica se l'invio della notifica è consentito dal rate limiting.
     *
<<<<<<< HEAD
     * @param  string  $key  Chiave univoca per il rate limiting
     */
    protected function shouldSendNotification(string $key): bool
    {
        if (! config('notify.rate_limiting.enabled')) {
=======
     * @param string $key Chiave univoca per il rate limiting
     * @return bool
     */
    protected function shouldSendNotification(string $key): bool
    {
        if (!config('notify.rate_limiting.enabled')) {
>>>>>>> 99ff506 (.)
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

=======
>>>>>>> 99ff506 (.)
        return true;
    }

    /**
     * Ottiene il tempo rimanente prima che il rate limiting si resetti.
     *
<<<<<<< HEAD
     * @param  string  $key  Chiave univoca per il rate limiting
=======
     * @param string $key Chiave univoca per il rate limiting
>>>>>>> 99ff506 (.)
     * @return int Secondi rimanenti
     */
    protected function getNotificationRateLimitRetryAfter(string $key): int
    {
        /** @var RateLimiter */
        $limiter = app(RateLimiter::class);
<<<<<<< HEAD

=======
>>>>>>> 99ff506 (.)
        return $limiter->availableIn($key);
    }

    /**
     * Ottiene il numero di tentativi rimanenti per il rate limiting.
     *
<<<<<<< HEAD
     * @param  string  $key  Chiave univoca per il rate limiting
=======
     * @param string $key Chiave univoca per il rate limiting
>>>>>>> 99ff506 (.)
     * @return int Tentativi rimanenti
     */
    protected function getNotificationRateLimitRemainingAttempts(string $key): int
    {
        $maxAttempts = config('notify.rate_limiting.max_attempts', 5);

        /** @var RateLimiter */
        $limiter = app(RateLimiter::class);
<<<<<<< HEAD

=======
>>>>>>> 99ff506 (.)
        return $maxAttempts - $limiter->attempts($key);
    }

    /**
     * Resetta il rate limiting per una chiave specifica.
     *
<<<<<<< HEAD
     * @param  string  $key  Chiave univoca per il rate limiting
=======
     * @param string $key Chiave univoca per il rate limiting
     * @return void
>>>>>>> 99ff506 (.)
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
     * @param  string  $type  Tipo di notifica
     * @param  mixed  $identifier  Identificatore univoco (es. ID utente)
=======
     * @param string $type Tipo di notifica
     * @param mixed $identifier Identificatore univoco (es. ID utente)
     * @return string
>>>>>>> 99ff506 (.)
     */
    protected function getNotificationRateLimitKey(string $type, mixed $identifier): string
    {
        return "notify:{$type}:{$identifier}";
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
>>>>>>> e7a9a2bf (.)
=======
>>>>>>> 9d67cabd (.)
=======
>>>>>>> 9cdf6146 (.)
=======
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 8e5817bc (.)
=======
>>>>>>> e0d9c9be (.)
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
>>>>>>> 7325acf3 (.)
=======
}
=======
>>>>>>> f2e64178 (.)
=======
}
=======
>>>>>>> c4bdacbf (.)
=======
}
=======
>>>>>>> dceba960 (.)
=======
}
=======
>>>>>>> bd804d67 (.)
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
>>>>>>> e7a9a2bf (.)
=======
=======
}
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
=======
}
>>>>>>> ba564870 (.)
=======
>>>>>>> 7325acf3 (.)
=======
}
>>>>>>> 4c323e61 (.)
=======
>>>>>>> 9cdf6146 (.)
=======
=======
}
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
}
>>>>>>> 7c39b1fe (.)
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
>>>>>>> 6d08c01b (.)
=======
=======
}
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
}
>>>>>>> c6c33175 (.)
=======
>>>>>>> c4bdacbf (.)
=======
}
>>>>>>> 4e4a7796 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
=======
}
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
}
>>>>>>> 503981fd (.)
=======
>>>>>>> dceba960 (.)
=======
}
>>>>>>> 9d84f153 (.)
=======
>>>>>>> 8e5817bc (.)
=======
=======
}
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
}
>>>>>>> 7a2f131f (.)
=======
>>>>>>> bd804d67 (.)
=======
}
>>>>>>> 116df547 (.)
