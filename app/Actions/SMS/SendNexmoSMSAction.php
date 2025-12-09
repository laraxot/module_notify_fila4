<?php

declare(strict_types=1);

namespace Modules\Notify\Actions\SMS;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
use Override;
=======
>>>>>>> b19cd40 (.)
=======
use Override;
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
use Override;
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
use Override;
>>>>>>> 9777d1b3 (.)
use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Modules\Notify\Contracts\SMS\SmsActionContract;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
use Modules\Notify\Datas\SMS\NexmoData;
use Modules\Notify\Datas\SmsData;
=======
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Datas\SMS\NexmoData;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Modules\Notify\Datas\SMS\NexmoData;
use Modules\Notify\Datas\SmsData;
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
use Modules\Notify\Datas\SMS\NexmoData;
use Modules\Notify\Datas\SmsData;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
use Modules\Notify\Datas\SMS\NexmoData;
use Modules\Notify\Datas\SmsData;
>>>>>>> 9777d1b3 (.)
use Spatie\QueueableAction\QueueableAction;

final class SendNexmoSMSAction implements SmsActionContract
{
    use QueueableAction;

    /** @var NexmoData */
    private NexmoData $nexmoData;

    /** @var array<string, mixed> */
    private array $vars = [];

    /** @var bool */
    protected bool $debug;

    /** @var string|null */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
    protected null|string $defaultSender = null;
=======
    protected ?string $defaultSender = null;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
    protected null|string $defaultSender = null;
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
    protected null|string $defaultSender = null;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
    protected null|string $defaultSender = null;
>>>>>>> 9777d1b3 (.)

    /**
     * Create a new action instance.
     */
    public function __construct()
    {
        $this->nexmoData = NexmoData::make();
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
        if (!$this->nexmoData->key) {
            throw new Exception('Key Nexmo non configurata in sms.php');
        }

        if (!$this->nexmoData->secret) {
            throw new Exception('Secret Nexmo non configurato in sms.php');
        }

        // Parametri a livello di root
        $sender = config('sms.from');
        $this->defaultSender = is_string($sender) ? $sender : null;
        $this->debug = (bool) config('sms.debug', false);
    }

    /**
     * Execute the action.
     *
     * @param SmsData $smsData I dati del messaggio SMS
     * @return array Risultato dell'operazione
     * @throws Exception In caso di errore durante l'invio
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
    #[Override]
=======
>>>>>>> b19cd40 (.)
=======
    #[Override]
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
    #[Override]
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
    #[Override]
>>>>>>> 9777d1b3 (.)
    public function execute(SmsData $smsData): array
    {
        $headers = [
            'Content-Type' => 'application/x-www-form-urlencoded',
        ];

        // Normalizza il numero di telefono
        $to = (string) $smsData->to;
        if (Str::startsWith($to, '00')) {
            $to = $to !== '' ? ('+' . substr($to, 2)) : $to;
        }

        if (!Str::startsWith($to, '+')) {
            $to = '+39' . $to;
        }

        $from = $smsData->from ?? $this->defaultSender;

        $client = new Client([
            'timeout' => $this->nexmoData->getTimeout(),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
            'headers' => $headers,
=======
            'headers' => $headers
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
            'headers' => $headers,
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
            'headers' => $headers,
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
            'headers' => $headers,
>>>>>>> 9777d1b3 (.)
        ]);

        try {
            $response = $client->post($this->nexmoData->getBaseUrl() . '/sms/json', [
                'form_params' => [
                    'api_key' => $this->nexmoData->key,
                    'api_secret' => $this->nexmoData->secret,
                    'to' => $to,
                    'from' => $from,
                    'text' => $smsData->body,
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
                    'type' => 'unicode',
                ],
=======
                    'type' => 'unicode'
                ]
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
                    'type' => 'unicode',
                ],
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
                    'type' => 'unicode',
                ],
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
                    'type' => 'unicode',
                ],
>>>>>>> 9777d1b3 (.)
            ]);

            $this->vars['status_code'] = $response->getStatusCode();
            $this->vars['status_txt'] = $response->getBody()->getContents();

            return $this->vars;
        } catch (ClientException $clientException) {
            throw new Exception(
                $clientException->getMessage() . '[' . __LINE__ . '][' . class_basename($this) . ']',
                $clientException->getCode(),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
                $clientException,
=======
                $clientException
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
                $clientException,
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
                $clientException,
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
                $clientException,
>>>>>>> 9777d1b3 (.)
            );
        }
    }
}
