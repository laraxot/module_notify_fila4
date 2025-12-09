<?php

declare(strict_types=1);

namespace Modules\Notify\Jobs;

use Throwable;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Modules\Notify\Actions\SendNotificationAction;

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
     * @param Model $recipient Il destinatario della notifica
     * @param string $templateCode Il codice del template da utilizzare
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
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
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
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
>>>>>>> d09cb759 (.)
=======
        protected array $options = []
    ) {
        $triesConfig = config('notify.queue.tries', 3);
        $this->tries = is_numeric($triesConfig) ? (int) $triesConfig : 3;
        
        $timeoutConfig = config('notify.queue.retry_after', 60);
        $this->timeout = is_numeric($timeoutConfig) ? (int) $timeoutConfig : 60;
        
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
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
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
=======
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
=======
=======
>>>>>>> origin/develop
>>>>>>> d09cb759 (.)
        $action->execute(
            $this->recipient,
            $this->templateCode,
            $this->data,
            $this->channels,
            $this->options
        );
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
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
>>>>>>> a12f125f4a (.)
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
>>>>>>> 3f537838 (.)
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
>>>>>>> 75179b85 (.)
    }

    /**
     * Gestisce un fallimento del job.
     *
     * @param Throwable $exception
     * @return void
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
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
}
=======
} 
>>>>>>> b19cd40 (.)
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
>>>>>>> d09cb759 (.)
=======
}
>>>>>>> 3f537838 (.)
=======
}
>>>>>>> 75179b85 (.)
