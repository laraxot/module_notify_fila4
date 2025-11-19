<?php

declare(strict_types=1);

namespace Modules\Notify\Actions\SMS;

<<<<<<< HEAD
<<<<<<< HEAD
use Exception;
use Illuminate\Support\Str;
use Modules\Notify\Contracts\SmsActionContract;
=======
=======
>>>>>>> 82ae73b (.)
use Override;
=======
>>>>>>> b19cd40 (.)
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Modules\Notify\Contracts\SMS\SmsActionContract;
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
use Modules\Notify\Datas\SMS\GammuData;
use Modules\Notify\Datas\SmsData;
use Spatie\QueueableAction\QueueableAction;
use Symfony\Component\Process\Process;

use function Safe\file_put_contents;
use function Safe\tempnam;
=======
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Datas\SMS\GammuData;
use Spatie\QueueableAction\QueueableAction;
use Symfony\Component\Process\Process;
use function Safe\tempnam;
use function Safe\file_put_contents;
>>>>>>> b19cd40 (.)
use function Safe\unlink;

final class SendGammuSMSAction implements SmsActionContract
{
    use QueueableAction;

<<<<<<< HEAD
    protected bool $debug;

    protected ?string $defaultSender = null;

=======
    /** @var GammuData */
>>>>>>> 75179b8 (.)
    private GammuData $gammuData;

    /** @var array<string, mixed> */
    private array $vars = [];

<<<<<<< HEAD
=======
    /** @var bool */
    protected bool $debug;

    /** @var string|null */
<<<<<<< HEAD
    protected null|string $defaultSender = null;
=======
    protected ?string $defaultSender = null;
>>>>>>> b19cd40 (.)

>>>>>>> 75179b8 (.)
    /**
     * Create a new action instance.
     */
    public function __construct()
    {
        $this->gammuData = GammuData::make();
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
>>>>>>> 82ae73b (.)
        if (!$this->gammuData->path) {
            throw new Exception('Path Gammu non configurato in sms.php');
        }

        if (!$this->gammuData->config) {
>>>>>>> 75179b8 (.)
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
     * @param  SmsData  $smsData  I dati del messaggio SMS
     * @return array Risultato dell'operazione
     *
     * @throws Exception In caso di errore durante l'invio
     */
=======
     * @param SmsData $smsData I dati del messaggio SMS
     * @return array Risultato dell'operazione
     * @throws Exception In caso di errore durante l'invio
     */
<<<<<<< HEAD
    #[Override]
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73b (.)
    public function execute(SmsData $smsData): array
    {
        // Normalizza il numero di telefono
        $to = (string) $smsData->to;
        if (Str::startsWith($to, '00')) {
<<<<<<< HEAD
            $to = '+'.mb_substr($to, 2);
        }

        if (! Str::startsWith($to, '+')) {
            $to = '+39'.$to;
=======
            $to = '+' . mb_substr($to, 2);
        }

        if (!Str::startsWith($to, '+')) {
            $to = '+39' . $to;
>>>>>>> 75179b8 (.)
        }

        // Prepara il messaggio per Gammu
        $tempFile = tempnam(sys_get_temp_dir(), 'sms_');
        file_put_contents($tempFile, $smsData->body);

        // Esegue il comando Gammu per inviare l'SMS
        $process = new Process([
            $this->gammuData->getPath(),
<<<<<<< HEAD
            '-c',
            $this->gammuData->getConfig(),
=======
            '-c', $this->gammuData->getConfig(),
>>>>>>> b19cd40 (.)
            'sendsms',
            'TEXT',
            $to,
            '-text',
<<<<<<< HEAD
            $tempFile,
=======
            $tempFile
>>>>>>> b19cd40 (.)
        ]);

        $process->setTimeout($this->gammuData->getTimeout());

        try {
            $process->run();

            // Rimuove il file temporaneo
            unlink($tempFile);

<<<<<<< HEAD
            if (! $process->isSuccessful()) {
                throw new Exception('Gammu error: '.$process->getErrorOutput());
=======
            if (!$process->isSuccessful()) {
                throw new Exception('Gammu error: ' . $process->getErrorOutput());
>>>>>>> 75179b8 (.)
            }

            $this->vars['status_code'] = $process->getExitCode();
            $this->vars['status_txt'] = $process->getOutput();

            return $this->vars;
        } catch (Exception $exception) {
            // Rimuove il file temporaneo in caso di errore
            unlink($tempFile);

            throw new Exception(
<<<<<<< HEAD
                $exception->getMessage().'['.__LINE__.']['.class_basename($this).']',
=======
                $exception->getMessage() . '[' . __LINE__ . '][' . class_basename($this) . ']',
>>>>>>> 75179b8 (.)
                $exception->getCode(),
<<<<<<< HEAD
                $exception,
=======
                $exception
>>>>>>> b19cd40 (.)
            );
        }
    }
}
