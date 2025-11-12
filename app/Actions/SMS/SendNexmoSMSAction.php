<?php

declare(strict_types=1);

namespace Modules\Notify\Actions\SMS;

<<<<<<< HEAD
=======
use Override;
>>>>>>> f5f1cb1 (.)
use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
<<<<<<< HEAD
use Modules\Notify\Contracts\SmsActionContract;
use Modules\Notify\Datas\SMS\NexmoData;
use Modules\Notify\Datas\SmsData;
=======
use Modules\Notify\Contracts\SMS\SmsActionContract;
use Modules\Notify\Datas\SMS\NexmoData;
use Modules\Notify\Datas\SmsData;
<<<<<<< HEAD
use Override;
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Notify\Datas\SMS\NexmoData;
use Modules\Notify\Datas\SmsData;
=======
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Datas\SMS\NexmoData;
>>>>>>> a12f125f4a (.)
=======
use Modules\Notify\Datas\SMS\NexmoData;
use Modules\Notify\Datas\SmsData;
>>>>>>> b93ef594b4 (.)
=======
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Datas\SMS\NexmoData;
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
>>>>>>> 82c6772 (.)
=======
>>>>>>> 92ecc28 (.)
=======
=======
>>>>>>> f5f1cb1 (.)
>>>>>>> b94a5f6 (.)
use Spatie\QueueableAction\QueueableAction;

final class SendNexmoSMSAction implements SmsActionContract
{
    private NexmoData $nexmoData;
    private ?string $defaultSender = null;
    
    /** @var array<string, mixed> */
    private array $vars = [];

<<<<<<< HEAD
=======
    protected bool $debug;

<<<<<<< HEAD
    protected ?string $defaultSender = null;
=======
    /** @var string|null */
    protected null|string $defaultSender = null;
>>>>>>> f5f1cb1 (.)

>>>>>>> 82c6772 (.)
    /**
     * Create a new action instance.
     */
    public function __construct()
    {
        $this->nexmoData = NexmoData::make();

<<<<<<< HEAD
        if (! $this->nexmoData->key) {
=======
        if (!$this->nexmoData->key) {
>>>>>>> f5f1cb1 (.)
            throw new Exception('Key Nexmo non configurata in sms.php');
        }

        if (! $this->nexmoData->secret) {
            throw new Exception('Secret Nexmo non configurato in sms.php');
        }

        // Parametri a livello di root
        $sender = config('sms.from');
        $this->defaultSender = is_string($sender) ? $sender : null;
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
=======
    #[Override]
>>>>>>> 92ecc28 (.)
    public function execute(SmsData $smsData): array
    {
        $headers = [
            'Content-Type' => 'application/x-www-form-urlencoded',
        ];

        // Normalizza il numero di telefono
        $to = (string) $smsData->to;
        if (Str::startsWith($to, '00')) {
            $to = $to !== '' ? ('+'.substr($to, 2)) : $to;
        }

        if (! Str::startsWith($to, '+')) {
            $to = '+39'.$to;
        }

        $from = $smsData->from ?? $this->defaultSender;

        $client = new Client([
            'timeout' => $this->nexmoData->getTimeout(),
            'headers' => $headers,
        ]);

        try {
            $response = $client->post($this->nexmoData->getBaseUrl().'/sms/json', [
                'form_params' => [
                    'api_key' => $this->nexmoData->key,
                    'api_secret' => $this->nexmoData->secret,
                    'to' => $to,
                    'from' => $from,
                    'text' => $smsData->body,
                    'type' => 'unicode',
                ],
            ]);

            $this->vars['status_code'] = $response->getStatusCode();
            $this->vars['status_txt'] = $response->getBody()->getContents();

            return $this->vars;
        } catch (ClientException $clientException) {
            throw new Exception(
                $clientException->getMessage().'['.__LINE__.']['.class_basename($this).']',
                $clientException->getCode(),
                $clientException,
            );
        }
    }
}
