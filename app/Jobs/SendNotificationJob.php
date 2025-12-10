<?php

declare(strict_types=1);

namespace Modules\Notify\Jobs;

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
use Throwable;
=======
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
<<<<<<< HEAD
=======
use Throwable;
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
=======
=======
=======
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
use Throwable;
=======
=======
use Throwable;
=======
>>>>>>> d09cb759 (.)
=======
use Throwable;
=======
>>>>>>> 4689a827 (.)
=======
=======
>>>>>>> 98d837b9 (.)
=======
use Throwable;
>>>>>>> 99ff506 (.)
=======
use Throwable;
=======
>>>>>>> f2e64178 (.)
=======
=======
<<<<<<< HEAD
use Throwable;
=======
>>>>>>> 2effe245 (.)
=======
use Throwable;
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
use Throwable;
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f813254 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f2e64178 (.)
=======
=======
use Throwable;
>>>>>>> f5f1cb1 (.)
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
=======
use Throwable;
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
=======
>>>>>>> fbed41ac (.)
=======
=======
use Throwable;
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
use Throwable;
>>>>>>> 75179b85 (.)
=======
>>>>>>> d09cb759 (.)
=======
use Throwable;
>>>>>>> 3f537838 (.)
=======
>>>>>>> 4689a827 (.)
=======
use Throwable;
>>>>>>> 2941b0bd (.)
=======
=======
use Throwable;
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> f813254 (.)
>>>>>>> f2e64178 (.)
=======
=======
use Throwable;
>>>>>>> f5f1cb1 (.)
>>>>>>> 98d837b9 (.)
=======
>>>>>>> f813254 (.)
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
=======
use Throwable;
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
=======
>>>>>>> fbed41ac (.)
=======
=======
use Throwable;
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
use Throwable;
>>>>>>> 75179b85 (.)
=======
>>>>>>> d09cb759 (.)
=======
use Throwable;
>>>>>>> 3f537838 (.)
=======
use Throwable;
>>>>>>> 75179b855 (.)
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Modules\Notify\Actions\SendNotificationAction;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
use Throwable;
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
use Throwable;
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
use Throwable;
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
use Throwable;
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b855 (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> f1c9518b (.)
     * @param  Model  $recipient  Il destinatario della notifica
     * @param  string  $templateCode  Il codice del template da utilizzare
     * @param  array  $data  I dati per compilare il template
     * @param  array  $channels  I canali da utilizzare
     * @param  array  $options  Opzioni aggiuntive per l'invio
=======
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
     * @param  Model  $recipient  Il destinatario della notifica
     * @param  string  $templateCode  Il codice del template da utilizzare
     * @param  array<string, mixed>  $data  I dati per compilare il template
     * @param  array<int, string>  $channels  I canali da utilizzare
     * @param  array<string, mixed>  $options  Opzioni aggiuntive per l'invio
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)
=======
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f1c9518b (.)
=======
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b855 (.)
     * @param Model $recipient Il destinatario della notifica
     * @param string $templateCode Il codice del template da utilizzare
     * @param array $data I dati per compilare il template
     * @param array $channels I canali da utilizzare
     * @param array $options Opzioni aggiuntive per l'invio
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b855 (.)
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
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> d09cb759 (.)
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
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 6d08c01b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> c6c33175 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 503981fd (.)
=======
>>>>>>> 8e5817bc (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 7a2f131f (.)
=======
>>>>>>> 51182e3c (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> cb85c538 (rebase 210)
=======
>>>>>>> 1c0eb9c7 (rebase 210)
=======
>>>>>>> a9bf0423 (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
=======
>>>>>>> 4d253d2c (rebase 210)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
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
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 6d08c01b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> c6c33175 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 503981fd (.)
=======
>>>>>>> 8e5817bc (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 7a2f131f (.)
=======
>>>>>>> 51182e3c (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> cb85c538 (rebase 210)
=======
>>>>>>> 1c0eb9c7 (rebase 210)
=======
>>>>>>> a9bf0423 (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
=======
>>>>>>> 4d253d2c (rebase 210)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
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
>>>>>>> 75179b855 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
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
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> d09cb759 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> f2e64178 (.)
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
=======
>>>>>>> 51182e3c (rebase 210)
=======
>>>>>>> cb85c538 (rebase 210)
=======
>>>>>>> a9bf0423 (rebase 210)
=======
>>>>>>> 460b8f5b (rebase 210)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
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
>>>>>>> f2e64178 (.)
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
=======
>>>>>>> 51182e3c (rebase 210)
=======
>>>>>>> cb85c538 (rebase 210)
=======
>>>>>>> a9bf0423 (rebase 210)
=======
>>>>>>> 460b8f5b (rebase 210)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
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
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 6d08c01b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> c6c33175 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3b4c9907 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 503981fd (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 8e5817bc (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 7a2f131f (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 51182e3c (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> cb85c538 (rebase 210)
=======
>>>>>>> 1c0eb9c7 (rebase 210)
=======
>>>>>>> b19cd40 (.)
>>>>>>> a9bf0423 (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
=======
>>>>>>> 4d253d2c (rebase 210)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
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
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 6d08c01b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> c6c33175 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3b4c9907 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 503981fd (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 8e5817bc (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 7a2f131f (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 51182e3c (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> cb85c538 (rebase 210)
=======
>>>>>>> 1c0eb9c7 (rebase 210)
=======
>>>>>>> b19cd40 (.)
>>>>>>> a9bf0423 (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
=======
>>>>>>> 4d253d2c (rebase 210)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
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
>>>>>>> 75179b855 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
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
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> e0d9c9be (.)
=======
>>>>>>> cb85c538 (rebase 210)
=======
>>>>>>> 460b8f5b (rebase 210)
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
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> e0d9c9be (.)
=======
>>>>>>> cb85c538 (rebase 210)
=======
>>>>>>> 460b8f5b (rebase 210)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
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
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
=======
>>>>>>> f2e64178 (.)
=======
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> d45a0226 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> d45a0226 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
        /** @var array<string, mixed> $data */
        $data = $this->data;
        /** @var array<int, string> $channels */
        $channels = array_values($this->channels);
        /** @var array<string, mixed> $options */
        $options = $this->options;

        $action->execute($this->recipient, $this->templateCode, $data, $channels, $options);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2effe245 (.)
=======
<<<<<<< HEAD
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
=======
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
=======
>>>>>>> d09cb759 (.)
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
=======
>>>>>>> 4689a827 (.)
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
=======
>>>>>>> d09cb759 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> f2e64178 (.)
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
=======
>>>>>>> 6d08c01b (.)
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
=======
>>>>>>> 3b4c9907 (.)
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
=======
>>>>>>> 8e5817bc (.)
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
=======
>>>>>>> 51182e3c (rebase 210)
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
=======
>>>>>>> a9bf0423 (rebase 210)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> d09cb759 (.)
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
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> d09cb759 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> f2e64178 (.)
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
>>>>>>> 98d837b9 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 6d08c01b (.)
=======
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
>>>>>>> c6c33175 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3b4c9907 (.)
=======
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
>>>>>>> 503981fd (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 8e5817bc (.)
=======
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
>>>>>>> 7a2f131f (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 51182e3c (rebase 210)
=======
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
>>>>>>> 4e2ebfb (.)
>>>>>>> cb85c538 (rebase 210)
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
>>>>>>> 1c0eb9c7 (rebase 210)
=======
>>>>>>> b19cd40 (.)
>>>>>>> a9bf0423 (rebase 210)
=======
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
>>>>>>> 4d253d2c (rebase 210)
=======
>>>>>>> f813254 (.)
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
=======
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)
=======
=======
=======
>>>>>>> 207ac35 (.)
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
=======
=======
=======
>>>>>>> 207ac35 (.)
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
=======
>>>>>>> 82ae73be (.)
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
=======
>>>>>>> de02998b (.)
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
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
=======
>>>>>>> 6d08c01b (.)
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
=======
>>>>>>> 3b4c9907 (.)
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
=======
>>>>>>> 8e5817bc (.)
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
=======
>>>>>>> 51182e3c (rebase 210)
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
=======
>>>>>>> a9bf0423 (rebase 210)
=======
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
=======
>>>>>>> 2fc60436 (.)
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
=======
>>>>>>> 82ae73be (.)
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
=======
>>>>>>> 82ae73be (.)
        $action->execute(
            $this->recipient,
            $this->templateCode,
            $this->data,
            $this->channels,
            $this->options
        );
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
<<<<<<< HEAD
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> 82ae73b (.)
>>>>>>> ce89c8bb (.)
=======
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce89c8bb (.)
=======
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
>>>>>>> 9777d1b (.)
>>>>>>> 58816034 (.)
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
>>>>>>> d09cb759 (.)
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
>>>>>>> 3f537838 (.)
=======
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
>>>>>>> 3f39ac8b (.)
=======
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 6d08c01b (.)
=======
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
>>>>>>> c6c33175 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
>>>>>>> 503981fd (.)
=======
>>>>>>> 8e5817bc (.)
=======
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
>>>>>>> 7a2f131f (.)
=======
>>>>>>> 51182e3c (rebase 210)
=======
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
>>>>>>> 4e2ebfb (.)
>>>>>>> cb85c538 (rebase 210)
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
>>>>>>> 1c0eb9c7 (rebase 210)
=======
>>>>>>> a9bf0423 (rebase 210)
=======
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
>>>>>>> 4d253d2c (rebase 210)
=======
>>>>>>> f813254 (.)
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
=======
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 82ae73b (.)
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
>>>>>>> 9777d1b (.)
>>>>>>> 58816034 (.)
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
>>>>>>> d09cb759 (.)
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
>>>>>>> 3f537838 (.)
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
>>>>>>> 75179b855 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        $action->execute($this->recipient, $this->templateCode, $this->data, $this->channels, $this->options);
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
    }

    /**
     * Gestisce un fallimento del job.
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
     *
     * @param Throwable $exception
     * @return void
=======
<<<<<<< HEAD
=======
>>>>>>> d45a0226 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> f1c9518b (.)
=======
>>>>>>> d45a0226 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
     *
     * @param Throwable $exception
     * @return void
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
=======
>>>>>>> 2effe245 (.)
=======
     *
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
     * @param Throwable $exception
     * @return void
>>>>>>> f813254 (.)
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
=======
>>>>>>> fbed41ac (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
     *
     * @param Throwable $exception
     * @return void
>>>>>>> 75179b85 (.)
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
=======
>>>>>>> fbed41ac (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
     *
     * @param Throwable $exception
     * @return void
>>>>>>> 75179b85 (.)
=======
     *
     * @param Throwable $exception
     * @return void
>>>>>>> 75179b855 (.)
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
=======
>>>>>>> 51182e3c (rebase 210)
=======
>>>>>>> cb85c538 (rebase 210)
=======
>>>>>>> a9bf0423 (rebase 210)
=======
>>>>>>> 460b8f5b (rebase 210)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
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
=======
>>>>>>> 51182e3c (rebase 210)
=======
>>>>>>> cb85c538 (rebase 210)
=======
>>>>>>> a9bf0423 (rebase 210)
=======
>>>>>>> 460b8f5b (rebase 210)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
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
=======
}
=======
>>>>>>> d09cb759 (.)
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
>>>>>>> 51182e3c (rebase 210)
=======
=======
}
>>>>>>> 4e2ebfb (.)
>>>>>>> cb85c538 (rebase 210)
=======
}
>>>>>>> 1c0eb9c7 (rebase 210)
=======
>>>>>>> a9bf0423 (rebase 210)
=======
=======
}
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
=======
}
>>>>>>> 4d253d2c (rebase 210)
=======
>>>>>>> 2effe245 (.)
=======
}
>>>>>>> 985c7bda (.)
=======
>>>>>>> 2fc60436 (.)
=======
=======
}
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
}
>>>>>>> 58816034 (.)
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
>>>>>>> 51182e3c (rebase 210)
=======
=======
}
>>>>>>> 4e2ebfb (.)
>>>>>>> cb85c538 (rebase 210)
=======
}
>>>>>>> 1c0eb9c7 (rebase 210)
=======
>>>>>>> a9bf0423 (rebase 210)
=======
=======
}
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
=======
}
>>>>>>> 4d253d2c (rebase 210)
=======
>>>>>>> 2effe245 (.)
=======
}
>>>>>>> 985c7bda (.)
=======
>>>>>>> 2fc60436 (.)
=======
=======
}
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
}
>>>>>>> 58816034 (.)
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
>>>>>>> 75179b855 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
}
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
