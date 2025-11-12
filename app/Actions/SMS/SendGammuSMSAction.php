<?php

declare(strict_types=1);

namespace Modules\Notify\Actions\SMS;

<<<<<<< HEAD
=======
<<<<<<< HEAD
use Override;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Override;
=======
>>>>>>> a12f125f4a (.)
=======
use Override;
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
<<<<<<< HEAD
use Modules\Notify\Contracts\SmsActionContract;
=======
use Modules\Notify\Contracts\SMS\SmsActionContract;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> 82c6772 (.)
use Modules\Notify\Datas\SMS\GammuData;
use Modules\Notify\Datas\SmsData;
use Spatie\QueueableAction\QueueableAction;
use Symfony\Component\Process\Process;

use function Safe\file_put_contents;
use function Safe\tempnam;
<<<<<<< HEAD
=======
=======
use Modules\Notify\Datas\SmsData;
=======
>>>>>>> b93ef594b4 (.)
use Modules\Notify\Datas\SMS\GammuData;
use Modules\Notify\Datas\SmsData;
use Spatie\QueueableAction\QueueableAction;
use Symfony\Component\Process\Process;

use function Safe\file_put_contents;
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
use function Safe\tempnam;
>>>>>>> b93ef594b4 (.)
=======
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Datas\SMS\GammuData;
use Spatie\QueueableAction\QueueableAction;
use Symfony\Component\Process\Process;
use function Safe\tempnam;
use function Safe\file_put_contents;
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
use function Safe\unlink;

final class SendGammuSMSAction implements SmsActionContract
{
    use QueueableAction;

    private GammuData $gammuData;

    /** @var array<string, mixed> */
    private array $vars = [];

    protected bool $debug;

<<<<<<< HEAD
    protected ?string $defaultSender = null;
=======
    /** @var string|null */
<<<<<<< HEAD
    protected null|string $defaultSender = null;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected null|string $defaultSender = null;
=======
    protected ?string $defaultSender = null;
>>>>>>> a12f125f4a (.)
=======
    protected null|string $defaultSender = null;
>>>>>>> b93ef594b4 (.)
=======
    protected ?string $defaultSender = null;
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)

    /**
     * Create a new action instance.
     */
    public function __construct()
    {
        $this->gammuData = GammuData::make();
<<<<<<< HEAD

<<<<<<< HEAD
        if (! $this->gammuData->path) {
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        if (!$this->gammuData->path) {
>>>>>>> f813254 (.)
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
    #[\Override]
=======
    #[Override]
>>>>>>> 6ba141fc (.)
=======
    #[Override]
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> a12f125f4a (.)
=======
    #[Override]
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> 82c6772 (.)
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
<<<<<<< HEAD
            '-c',
            $this->gammuData->getConfig(),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            '-c',
            $this->gammuData->getConfig(),
=======
            '-c', $this->gammuData->getConfig(),
>>>>>>> a12f125f4a (.)
=======
            '-c',
            $this->gammuData->getConfig(),
>>>>>>> b93ef594b4 (.)
=======
            '-c', $this->gammuData->getConfig(),
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
            'sendsms',
            'TEXT',
            $to,
            '-text',
<<<<<<< HEAD
            $tempFile,
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $tempFile,
=======
            $tempFile
>>>>>>> a12f125f4a (.)
=======
            $tempFile,
>>>>>>> b93ef594b4 (.)
=======
            $tempFile
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
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
<<<<<<< HEAD
                $exception,
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                $exception,
=======
                $exception
>>>>>>> a12f125f4a (.)
=======
                $exception,
>>>>>>> b93ef594b4 (.)
=======
                $exception
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
            );
        }
    }
}
