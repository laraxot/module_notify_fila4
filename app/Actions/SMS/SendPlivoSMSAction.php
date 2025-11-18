<?php

declare(strict_types=1);

namespace Modules\Notify\Actions\SMS;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Support\Str;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Notify\Contracts\SmsActionContract;
=======
use Modules\Notify\Contracts\SMS\SmsActionContract;
>>>>>>> 8bc2fc9f (first)
=======
use Modules\Notify\Contracts\SmsActionContract;
>>>>>>> 20a3d3b (.)
use Modules\Notify\Datas\SMS\PlivoData;
use Modules\Notify\Datas\SmsData;

final class SendPlivoSMSAction implements SmsActionContract
{
    private PlivoData $plivoData;
<<<<<<< HEAD
<<<<<<< HEAD

    private ?string $defaultSender = null;

=======
    private ?string $defaultSender = null;
    
>>>>>>> 8bc2fc9f (first)
=======

    private ?string $defaultSender = null;

>>>>>>> 20a3d3b (.)
    /** @var array<string, mixed> */
    private array $vars = [];

    /**
     * Create a new action instance.
     */
    public function __construct()
    {
        $this->plivoData = PlivoData::make();

        if (! $this->plivoData->auth_id) {
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
<<<<<<< HEAD
<<<<<<< HEAD
            $to = $to !== '' ? '+'.substr($to, 2) : $to;
=======
            $to = $to !== '' ? ('+'.substr($to, 2)) : $to;
>>>>>>> 8bc2fc9f (first)
=======
            $to = $to !== '' ? '+'.substr($to, 2) : $to;
>>>>>>> 20a3d3b (.)
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
            ],
        ]);

        $endpoint = $this->plivoData->getBaseUrl().'/v1/Account/'.$this->plivoData->auth_id.'/Message/';

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
                $clientException->getMessage().'['.__LINE__.']['.class_basename($this).']',
                $clientException->getCode(),
                $clientException,
            );
        }
    }
}
