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
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Support\Str;
use Modules\Notify\Contracts\SMS\SmsActionContract;
<<<<<<< HEAD
use Modules\Notify\Datas\SMS\PlivoData;
use Modules\Notify\Datas\SmsData;
<<<<<<< HEAD
=======
<<<<<<< HEAD
use Override;
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Notify\Datas\SMS\PlivoData;
use Modules\Notify\Datas\SmsData;
=======
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Datas\SMS\PlivoData;
>>>>>>> a12f125f4a (.)
=======
use Modules\Notify\Datas\SMS\PlivoData;
use Modules\Notify\Datas\SmsData;
>>>>>>> b93ef594b4 (.)
=======
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Datas\SMS\PlivoData;
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
use Spatie\QueueableAction\QueueableAction;
>>>>>>> 82c6772 (.)

final class SendPlivoSMSAction implements SmsActionContract
{
    private PlivoData $plivoData;
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

>>>>>>> 82c6772 (.)
    /**
     * Create a new action instance.
     */
    public function __construct()
    {
        $this->plivoData = PlivoData::make();
<<<<<<< HEAD

<<<<<<< HEAD
        if (! $this->plivoData->auth_id) {
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
        if (!$this->plivoData->auth_id) {
>>>>>>> f813254 (.)
            throw new Exception('Auth ID Plivo non configurato in sms.php');
        }

        if (! $this->plivoData->auth_token) {
            throw new Exception('Auth Token Plivo non configurato in sms.php');
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
            $to = $to !== '' ? ('+'.substr($to, 2)) : $to;
        }

        if (! Str::startsWith($to, '+')) {
            $to = '+39'.$to;
        }

        $from = $smsData->from ?? $this->defaultSender;

        // Plivo richiede l'autenticazione Basic
        $client = new Client([
            'timeout' => $this->plivoData->getTimeout(),
            'auth' => [$this->plivoData->auth_id, $this->plivoData->auth_token],
            'headers' => [
                'Content-Type' => 'application/json',
<<<<<<< HEAD
            ],
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            ],
=======
            ]
>>>>>>> a12f125f4a (.)
=======
            ],
>>>>>>> b93ef594b4 (.)
=======
            ]
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        ]);

        $endpoint = $this->plivoData->getBaseUrl().'/v1/Account/'.$this->plivoData->auth_id.'/Message/';

        try {
            $response = $client->post($endpoint, [
                'json' => [
                    'src' => $from,
                    'dst' => $to,
                    'text' => $smsData->body,
<<<<<<< HEAD
                ],
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                ],
=======
                ]
>>>>>>> a12f125f4a (.)
=======
                ],
>>>>>>> b93ef594b4 (.)
=======
                ]
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
            ]);

            $this->vars['status_code'] = $response->getStatusCode();
            $this->vars['status_txt'] = $response->getBody()->getContents();

            return $this->vars;
        } catch (ClientException $clientException) {
            throw new Exception(
                $clientException->getMessage().'['.__LINE__.']['.class_basename($this).']',
                $clientException->getCode(),
<<<<<<< HEAD
                $clientException,
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                $clientException,
=======
                $clientException
>>>>>>> a12f125f4a (.)
=======
                $clientException,
>>>>>>> b93ef594b4 (.)
=======
                $clientException
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
            );
        }
    }
}
