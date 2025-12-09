<?php

declare(strict_types=1);

namespace Modules\Notify\Jobs;

<<<<<<< HEAD
use Throwable;
=======
<<<<<<< HEAD
=======
use Throwable;
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Modules\Notify\Actions\SendNotificationAction;
<<<<<<< HEAD
=======
<<<<<<< HEAD
use Throwable;
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)

class SendNotificationJob implements ShouldQueue
{
    use Dispatchable;
    use InteractsWithQueue;
    use Queueable;
    use SerializesModels;

    /**
     * Numero di tentativi massimi.
     *
     * @var int
     */
    public $tries;

    /**
     * Timeout del job in secondi.
     *
     * @var int
     */
    public $timeout;

    /**
     * Crea una nuova istanza del job.
     *
<<<<<<< HEAD
     * @param Model $recipient Il destinatario della notifica
     * @param string $templateCode Il codice del template da utilizzare
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param array<string, mixed> $data I dati per compilare il template
     * @param array<int, string> $channels I canali da utilizzare
     * @param array<string, mixed> $options Opzioni aggiuntive per l'invio
=======
     * @param array $data I dati per compilare il template
     * @param array $channels I canali da utilizzare
     * @param array $options Opzioni aggiuntive per l'invio
>>>>>>> 75179b85 (.)
=======
     * @param array $data I dati per compilare il template
     * @param array $channels I canali da utilizzare
     * @param array $options Opzioni aggiuntive per l'invio
>>>>>>> 75179b85 (.)
=======
     * @param array $data I dati per compilare il template
     * @param array $channels I canali da utilizzare
     * @param array $options Opzioni aggiuntive per l'invio
>>>>>>> 75179b85 (.)
=======
     * @param array $data I dati per compilare il template
     * @param array $channels I canali da utilizzare
     * @param array $options Opzioni aggiuntive per l'invio
>>>>>>> 75179b85 (.)
=======
<<<<<<< HEAD
     * @param  Model  $recipient  Il destinatario della notifica
     * @param  string  $templateCode  Il codice del template da utilizzare
     * @param  array  $data  I dati per compilare il template
     * @param  array  $channels  I canali da utilizzare
     * @param  array  $options  Opzioni aggiuntive per l'invio
=======
     * @param Model $recipient Il destinatario della notifica
     * @param string $templateCode Il codice del template da utilizzare
     * @param array $data I dati per compilare il template
     * @param array $channels I canali da utilizzare
     * @param array $options Opzioni aggiuntive per l'invio
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
     */
    public function __construct(
        protected Model $recipient,
        protected string $templateCode,
        protected array $data = [],
        protected array $channels = [],
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> e7a9a2bf (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
=======
>>>>>>> ba564870 (.)
=======
>>>>>>> 9cdf6146 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 7c39b1fe (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
        protected array $options = [],
    ) {
        $triesConfig = config('notify.queue.tries', 3);
        $this->tries = is_numeric($triesConfig) ? ((int) $triesConfig) : 3;

        $timeoutConfig = config('notify.queue.retry_after', 60);
        $this->timeout = is_numeric($timeoutConfig) ? ((int) $timeoutConfig) : 60;

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
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
=======
        protected array $options = []
=======
        protected array $options = [],
>>>>>>> b93ef594b4 (.)
    ) {
        $triesConfig = config('notify.queue.tries', 3);
        $this->tries = is_numeric($triesConfig) ? ((int) $triesConfig) : 3;

        $timeoutConfig = config('notify.queue.retry_after', 60);
<<<<<<< HEAD
        $this->timeout = is_numeric($timeoutConfig) ? (int) $timeoutConfig : 60;
        
>>>>>>> a12f125f4a (.)
=======
        $this->timeout = is_numeric($timeoutConfig) ? ((int) $timeoutConfig) : 60;

>>>>>>> b93ef594b4 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4689a827 (.)
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
        protected array $options = []
    ) {
        $triesConfig = config('notify.queue.tries', 3);
        $this->tries = is_numeric($triesConfig) ? (int) $triesConfig : 3;
        
        $timeoutConfig = config('notify.queue.retry_after', 60);
        $this->timeout = is_numeric($timeoutConfig) ? (int) $timeoutConfig : 60;
        
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
>>>>>>> b19cd40 (.)
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
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
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
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
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
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
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
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> e7a9a2bf (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
=======
>>>>>>> ba564870 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 9cdf6146 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 7c39b1fe (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
        $queueConfig = config('notify.queue.queue', 'notifications');
        $this->onQueue(is_string($queueConfig) ? $queueConfig : 'notifications');
    }

    /**
     * Esegue il job.
     */
    public function handle(SendNotificationAction $action): void
    {
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
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 9d67cabd (.)
=======
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 4d2eb53e (.)
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
=======
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
=======
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
=======
>>>>>>> d09cb759 (.)
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
=======
>>>>>>> d09cb759 (.)
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
=======
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 4689a827 (.)
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
=======
>>>>>>> e7a9a2bf (.)
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
=======
>>>>>>> 9cdf6146 (.)
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
=======
>>>>>>> 3f39ac8b (.)
        $action->execute(
            $this->recipient,
            $this->templateCode,
            $this->data,
            $this->channels,
            $this->options
        );
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
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
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
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
>>>>>>> 3f537838 (.)
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
>>>>>>> 3f537838 (.)
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
>>>>>>> 3f537838 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
>>>>>>> 2941b0bd (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> e7a9a2bf (.)
=======
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
>>>>>>> ba564870 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 9cdf6146 (.)
=======
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
>>>>>>> 7c39b1fe (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
>>>>>>> 888799d0 (.)
    }

    /**
     * Gestisce un fallimento del job.
<<<<<<< HEAD
     *
     * @param Throwable $exception
     * @return void
=======
<<<<<<< HEAD
=======
     *
     * @param Throwable $exception
     * @return void
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
     */
    public function failed(Throwable $exception): void
    {
        // Log dell'errore
        logger()->error('Errore nell\'invio della notifica', [
            'recipient_type' => get_class($this->recipient),
            'recipient_id' => $this->recipient->getKey(),
            'template_code' => $this->templateCode,
            'error' => $exception->getMessage(),
            'trace' => $exception->getTraceAsString(),
        ]);
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
