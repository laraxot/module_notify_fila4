<?php

declare(strict_types=1);

namespace Modules\Notify\Jobs;

<<<<<<< HEAD
=======
use Throwable;
>>>>>>> 75179b8 (.)
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Modules\Notify\Actions\SendNotificationAction;
<<<<<<< HEAD
use Throwable;
=======
>>>>>>> 75179b8 (.)

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
     * @param  Model  $recipient  Il destinatario della notifica
     * @param  string  $templateCode  Il codice del template da utilizzare
     * @param  array<string, mixed>  $data  I dati per compilare il template
     * @param  array<int, string>  $channels  I canali da utilizzare
     * @param  array<string, mixed>  $options  Opzioni aggiuntive per l'invio
=======
     * @param Model $recipient Il destinatario della notifica
     * @param string $templateCode Il codice del template da utilizzare
     * @param array $data I dati per compilare il template
     * @param array $channels I canali da utilizzare
     * @param array $options Opzioni aggiuntive per l'invio
>>>>>>> 75179b8 (.)
     */
    public function __construct(
        protected Model $recipient,
        protected string $templateCode,
        protected array $data = [],
        protected array $channels = [],
        protected array $options = [],
    ) {
        $triesConfig = config('notify.queue.tries', 3);
        $this->tries = is_numeric($triesConfig) ? ((int) $triesConfig) : 3;

        $timeoutConfig = config('notify.queue.retry_after', 60);
        $this->timeout = is_numeric($timeoutConfig) ? ((int) $timeoutConfig) : 60;

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
        /** @var array<string, mixed> $data */
        $data = $this->data;
        /** @var array<int, string> $channels */
        $channels = array_values($this->channels);
        /** @var array<string, mixed> $options */
        $options = $this->options;

        $action->execute($this->recipient, $this->templateCode, $data, $channels, $options);
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
>>>>>>> 75179b8 (.)
=======
=======
>>>>>>> 207ac35 (.)
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
=======
        $action->execute(
            $this->recipient,
            $this->templateCode,
            $this->data,
            $this->channels,
            $this->options
        );
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
>>>>>>> 9777d1b (.)
    }

    /**
     * Gestisce un fallimento del job.
<<<<<<< HEAD
=======
     *
     * @param Throwable $exception
     * @return void
>>>>>>> 75179b8 (.)
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
}
