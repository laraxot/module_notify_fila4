<?php

declare(strict_types=1);

namespace Modules\Notify\Actions\SMS;

use Exception;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Log;
>>>>>>> 8bc2fc9f (first)
=======
>>>>>>> 20a3d3b (.)
use Illuminate\Support\Str;
use Modules\Notify\Contracts\SmsActionContract;
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
=======
>>>>>>> 20a3d3b (.)
    protected bool $debug;

    protected ?string $defaultSender = null;

<<<<<<< HEAD
=======
>>>>>>> 8bc2fc9f (first)
=======
>>>>>>> 20a3d3b (.)
    private GammuData $gammuData;

    /** @var array<string, mixed> */
    private array $vars = [];

<<<<<<< HEAD
<<<<<<< HEAD
=======
    protected bool $debug;

    protected ?string $defaultSender = null;

>>>>>>> 8bc2fc9f (first)
=======
>>>>>>> 20a3d3b (.)
    /**
     * Create a new action instance.
     */
    public function __construct()
    {
        $this->gammuData = GammuData::make();

        if (! $this->gammuData->path) {
            throw new Exception('Path Gammu non configurato in sms.php');
        }

        if (! $this->gammuData->config) {
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
     * @param  SmsData  $smsData  I dati del messaggio SMS
     * @return array Risultato dell'operazione
     *
     * @throws Exception In caso di errore durante l'invio
     */
<<<<<<< HEAD
<<<<<<< HEAD
=======
    #[\Override]
>>>>>>> 8bc2fc9f (first)
=======
>>>>>>> 20a3d3b (.)
    public function execute(SmsData $smsData): array
    {
        // Normalizza il numero di telefono
        $to = (string) $smsData->to;
        if (Str::startsWith($to, '00')) {
            $to = '+'.mb_substr($to, 2);
        }

        if (! Str::startsWith($to, '+')) {
            $to = '+39'.$to;
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

            if (! $process->isSuccessful()) {
                throw new Exception('Gammu error: '.$process->getErrorOutput());
            }

            $this->vars['status_code'] = $process->getExitCode();
            $this->vars['status_txt'] = $process->getOutput();

            return $this->vars;
        } catch (Exception $exception) {
            // Rimuove il file temporaneo in caso di errore
            unlink($tempFile);

            throw new Exception(
                $exception->getMessage().'['.__LINE__.']['.class_basename($this).']',
                $exception->getCode(),
                $exception,
            );
        }
    }
}
