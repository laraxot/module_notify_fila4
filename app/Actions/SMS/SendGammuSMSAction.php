<?php

declare(strict_types=1);

namespace Modules\Notify\Actions\SMS;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Exception;
use Illuminate\Support\Str;
use Modules\Notify\Contracts\SmsActionContract;
=======
=======
>>>>>>> 82ae73b (.)
=======
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
=======
>>>>>>> 7148d73 (.)
use Override;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Modules\Notify\Contracts\SMS\SmsActionContract;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
=======
>>>>>>> 7148d73 (.)
use Modules\Notify\Datas\SMS\GammuData;
use Modules\Notify\Datas\SmsData;
use Spatie\QueueableAction\QueueableAction;
use Symfony\Component\Process\Process;

use function Safe\file_put_contents;
use function Safe\tempnam;
use function Safe\unlink;

final class SendGammuSMSAction implements SmsActionContract
{
    use QueueableAction;

<<<<<<< HEAD
<<<<<<< HEAD
    protected bool $debug;

    protected ?string $defaultSender = null;

=======
    /** @var GammuData */
>>>>>>> 75179b8 (.)
=======
    /** @var GammuData */
>>>>>>> 7148d73 (.)
    private GammuData $gammuData;

    /** @var array<string, mixed> */
    private array $vars = [];

<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 7148d73 (.)
    /** @var bool */
    protected bool $debug;

    /** @var string|null */
    protected null|string $defaultSender = null;

<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
>>>>>>> 7148d73 (.)
    /**
     * Create a new action instance.
     */
    public function __construct()
    {
        $this->gammuData = GammuData::make();

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (! $this->gammuData->path) {
            throw new Exception('Path Gammu non configurato in sms.php');
        }

        if (! $this->gammuData->config) {
=======
=======
=======
        
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
>>>>>>> 7148d73 (.)
        if (!$this->gammuData->path) {
            throw new Exception('Path Gammu non configurato in sms.php');
        }

        if (!$this->gammuData->config) {
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
>>>>>>> 7148d73 (.)
            throw new Exception('Config Gammu non configurato in sms.php');
        }

        // Parametri a livello di root
        $sender = config('sms.from');
        $this->defaultSender = is_string($sender) ? $sender : null;
        $this->debug = (bool) config('sms.debug', false);
    }

    /**
     * Execute the action.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  SmsData  $smsData  I dati del messaggio SMS
     * @return array Risultato dell'operazione
     *
     * @throws Exception In caso di errore durante l'invio
     */
=======
=======
>>>>>>> 7148d73 (.)
     * @param SmsData $smsData I dati del messaggio SMS
     * @return array Risultato dell'operazione
     * @throws Exception In caso di errore durante l'invio
     */
    #[Override]
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
=======
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
    #[Override]
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
=======
>>>>>>> 7148d73 (.)
    public function execute(SmsData $smsData): array
    {
        // Normalizza il numero di telefono
        $to = (string) $smsData->to;
        if (Str::startsWith($to, '00')) {
<<<<<<< HEAD
<<<<<<< HEAD
            $to = '+'.mb_substr($to, 2);
        }

        if (! Str::startsWith($to, '+')) {
            $to = '+39'.$to;
=======
=======
>>>>>>> 7148d73 (.)
            $to = '+' . mb_substr($to, 2);
        }

        if (!Str::startsWith($to, '+')) {
            $to = '+39' . $to;
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
>>>>>>> 7148d73 (.)
        }

        // Prepara il messaggio per Gammu
        $tempFile = tempnam(sys_get_temp_dir(), 'sms_');
        file_put_contents($tempFile, $smsData->body);

        // Esegue il comando Gammu per inviare l'SMS
        $process = new Process([
            $this->gammuData->getPath(),
            '-c',
            $this->gammuData->getConfig(),
            'sendsms',
            'TEXT',
            $to,
            '-text',
            $tempFile,
        ]);

        $process->setTimeout($this->gammuData->getTimeout());

        try {
            $process->run();

            // Rimuove il file temporaneo
            unlink($tempFile);

<<<<<<< HEAD
<<<<<<< HEAD
            if (! $process->isSuccessful()) {
                throw new Exception('Gammu error: '.$process->getErrorOutput());
=======
            if (!$process->isSuccessful()) {
                throw new Exception('Gammu error: ' . $process->getErrorOutput());
>>>>>>> 75179b8 (.)
=======
            if (!$process->isSuccessful()) {
                throw new Exception('Gammu error: ' . $process->getErrorOutput());
>>>>>>> 7148d73 (.)
            }

            $this->vars['status_code'] = $process->getExitCode();
            $this->vars['status_txt'] = $process->getOutput();

            return $this->vars;
        } catch (Exception $exception) {
            // Rimuove il file temporaneo in caso di errore
            unlink($tempFile);

            throw new Exception(
<<<<<<< HEAD
<<<<<<< HEAD
                $exception->getMessage().'['.__LINE__.']['.class_basename($this).']',
=======
                $exception->getMessage() . '[' . __LINE__ . '][' . class_basename($this) . ']',
>>>>>>> 75179b8 (.)
=======
                $exception->getMessage() . '[' . __LINE__ . '][' . class_basename($this) . ']',
>>>>>>> 7148d73 (.)
                $exception->getCode(),
                $exception,
            );
        }
    }
}
