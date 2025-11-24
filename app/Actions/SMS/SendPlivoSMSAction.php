<?php

declare(strict_types=1);

namespace Modules\Notify\Actions\SMS;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Support\Str;
use Modules\Notify\Contracts\SmsActionContract;
use Modules\Notify\Datas\SMS\PlivoData;
use Modules\Notify\Datas\SmsData;

final class SendPlivoSMSAction implements SmsActionContract
{
    private PlivoData $plivoData;

    private ?string $defaultSender = null;
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
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Modules\Notify\Contracts\SMS\SmsActionContract;
use Modules\Notify\Datas\SMS\PlivoData;
use Modules\Notify\Datas\SmsData;
use Spatie\QueueableAction\QueueableAction;

final class SendPlivoSMSAction implements SmsActionContract
{
    use QueueableAction;

    /** @var PlivoData */
    private PlivoData $plivoData;
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
>>>>>>> 7148d73 (.)

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
        $this->plivoData = PlivoData::make();

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (! $this->plivoData->auth_id) {
            throw new Exception('Auth ID Plivo non configurato in sms.php');
        }

        if (! $this->plivoData->auth_token) {
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
        if (!$this->plivoData->auth_id) {
            throw new Exception('Auth ID Plivo non configurato in sms.php');
        }

        if (!$this->plivoData->auth_token) {
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
>>>>>>> 7148d73 (.)
            throw new Exception('Auth Token Plivo non configurato in sms.php');
        }

        // Parametri a livello di root
        $sender = config('sms.from');
        $this->defaultSender = is_string($sender) ? $sender : null;
<<<<<<< HEAD
<<<<<<< HEAD
=======
        $this->debug = (bool) config('sms.debug', false);
>>>>>>> 75179b8 (.)
=======
        $this->debug = (bool) config('sms.debug', false);
>>>>>>> 7148d73 (.)
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
            $to = $to !== '' ? '+'.substr($to, 2) : $to;
        }

        if (! Str::startsWith($to, '+')) {
            $to = '+39'.$to;
=======
=======
>>>>>>> 7148d73 (.)
            $to = $to !== '' ? ('+' . substr($to, 2)) : $to;
        }

        if (!Str::startsWith($to, '+')) {
            $to = '+39' . $to;
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
>>>>>>> 7148d73 (.)
        }

        $from = $smsData->from ?? $this->defaultSender;

        // Plivo richiede l'autenticazione Basic
        $client = new Client([
            'timeout' => $this->plivoData->getTimeout(),
            'auth' => [$this->plivoData->auth_id, $this->plivoData->auth_token],
            'headers' => [
                'Content-Type' => 'application/json',
            ],
        ]);

<<<<<<< HEAD
<<<<<<< HEAD
        $endpoint = $this->plivoData->getBaseUrl().'/v1/Account/'.$this->plivoData->auth_id.'/Message/';
=======
        $endpoint = $this->plivoData->getBaseUrl() . '/v1/Account/' . $this->plivoData->auth_id . '/Message/';
>>>>>>> 75179b8 (.)
=======
        $endpoint = $this->plivoData->getBaseUrl() . '/v1/Account/' . $this->plivoData->auth_id . '/Message/';
>>>>>>> 7148d73 (.)

        try {
            $response = $client->post($endpoint, [
                'json' => [
                    'src' => $from,
                    'dst' => $to,
                    'text' => $smsData->body,
                ],
            ]);

            $this->vars['status_code'] = $response->getStatusCode();
            $this->vars['status_txt'] = $response->getBody()->getContents();

            return $this->vars;
        } catch (ClientException $clientException) {
            throw new Exception(
<<<<<<< HEAD
<<<<<<< HEAD
                $clientException->getMessage().'['.__LINE__.']['.class_basename($this).']',
=======
                $clientException->getMessage() . '[' . __LINE__ . '][' . class_basename($this) . ']',
>>>>>>> 75179b8 (.)
=======
                $clientException->getMessage() . '[' . __LINE__ . '][' . class_basename($this) . ']',
>>>>>>> 7148d73 (.)
                $clientException->getCode(),
                $clientException,
            );
        }
    }
}
