<?php

declare(strict_types=1);

namespace Modules\Notify\Actions\SMS;

<<<<<<< HEAD
use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
=======
use Override;
use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Support\Facades\Log;
>>>>>>> 75179b8 (.)
use Illuminate\Support\Str;
use Modules\Notify\Contracts\SmsActionContract;
use Modules\Notify\Datas\SmsData;
use Spatie\QueueableAction\QueueableAction;

use function Safe\preg_replace;

final class SendNetfunSMSAction implements SmsActionContract
{
    use QueueableAction;

<<<<<<< HEAD
    protected bool $debug;

    protected int $timeout;

    protected ?string $defaultSender = null;

    private string $token;

=======
    /** @var string */
    private string $token;

    /** @var string */
>>>>>>> 75179b8 (.)
    private string $endpoint;

    /** @var array<string, mixed> */
    private array $vars = [];

<<<<<<< HEAD
=======
    /** @var bool */
    protected bool $debug;

    /** @var int */
    protected int $timeout;

    /** @var string|null */
    protected null|string $defaultSender = null;

>>>>>>> 75179b8 (.)
    /**
     * Create a new action instance.
     *
     * @throws Exception Se il token API non è configurato
     */
    public function __construct()
    {
        // Recupera la configurazione specifica per il provider Netfun dalla sezione drivers
        $token = config('sms.drivers.netfun.token');
<<<<<<< HEAD
        if (! is_string($token)) {
=======
        if (!is_string($token)) {
>>>>>>> 75179b8 (.)
            throw new Exception('put [NETFUN_TOKEN] variable to your .env and config [sms.drivers.netfun.token]');
        }
        $this->token = $token;
        $endpoint = config('sms.drivers.netfun.api_url', 'https://v2.smsviainternet.it/api/rest/v1/sms-batch.json');
        $this->endpoint = is_string($endpoint) ? $endpoint : 'https://v2.smsviainternet.it/api/rest/v1/sms-batch.json';
        // Parametri a livello di root
        $sender = config('sms.from');
        $this->defaultSender = is_string($sender) ? $sender : null;
        $this->debug = (bool) config('sms.debug', false);
<<<<<<< HEAD
        $this->timeout = is_numeric(config('sms.timeout', 30)) ? (int) config('sms.timeout', 30) : 30;
=======
        $this->timeout = is_numeric(config('sms.timeout', 30)) ? ((int) config('sms.timeout', 30)) : 30;
>>>>>>> 75179b8 (.)
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
    #[Override]
>>>>>>> 75179b8 (.)
    public function execute(SmsData $smsData): array
    {
        $headers = [
            'Cache-Control' => 'no-cache',
            'Content-Type' => 'application/json',
        ];

        // Normalizza il numero di telefono
        $to = (string) $smsData->to;
        if (Str::startsWith($to, '00')) {
<<<<<<< HEAD
            $to = $to !== '' ? '+'.mb_substr($to, 2) : $to;
        }
        if (! Str::startsWith($to, '+')) {
            $to = '+39'.$to;
=======
            $to = $to !== '' ? ('+' . mb_substr($to, 2)) : $to;
        }
        if (!Str::startsWith($to, '+')) {
            $to = '+39' . $to;
>>>>>>> 75179b8 (.)
        }

        $body = [
            'api_token' => $this->token,
            'sender' => $smsData->from ?? $this->defaultSender,
            'text_template' => $smsData->body,
            'async' => true,
            'utf8_enabled' => true,
            'destinations' => [
                [
                    'number' => $to,
                ],
            ],
        ];

        $client = new Client($headers);
        try {
            $response = $client->post($this->endpoint, ['json' => $body]);
        } catch (ClientException $clientException) {
            throw new Exception(
<<<<<<< HEAD
                $clientException->getMessage().'['.__LINE__.']['.class_basename($this).']',
=======
                $clientException->getMessage() . '[' . __LINE__ . '][' . class_basename($this) . ']',
>>>>>>> 75179b8 (.)
                $clientException->getCode(),
                $clientException,
            );
        }

        $this->vars['status_code'] = $response->getStatusCode();
        $this->vars['status_txt'] = $response->getBody()->getContents();

        return $this->vars;
    }

    /**
     * Normalizza il numero di telefono nel formato E.164
     *
<<<<<<< HEAD
     * @param  string  $phoneNumber  Numero di telefono da normalizzare
=======
     * @param string $phoneNumber Numero di telefono da normalizzare
>>>>>>> 75179b8 (.)
     * @return string Numero di telefono normalizzato in formato E.164
     */
    /**
     * Normalizza il numero di telefono nel formato E.164
     *
<<<<<<< HEAD
     * @param  string  $phoneNumber  Numero di telefono da normalizzare
=======
     * @param string $phoneNumber Numero di telefono da normalizzare
>>>>>>> 75179b8 (.)
     * @return string Numero di telefono normalizzato in formato E.164
     */
    protected function normalizePhoneNumber(string $phoneNumber): string
    {
        // Rimuovi tutti i caratteri non numerici tranne il +
        $cleaned = preg_replace('/[^0-9+]/', '', $phoneNumber);

        // Se preg_replace restituisce null (non dovrebbe succedere con input string)
<<<<<<< HEAD
        if (! is_string($cleaned) || $cleaned === '') {
=======
        if (!is_string($cleaned) || $cleaned === '') {
>>>>>>> 75179b8 (.)
            $cleaned = '';
        }

        // Se il numero non inizia con '+'
<<<<<<< HEAD
        if (! Str::startsWith($cleaned, '+')) {
            $cleaned = '+39'.ltrim($cleaned, '0');
=======
        if (!Str::startsWith($cleaned, '+')) {
            $cleaned = '+39' . ltrim($cleaned, '0');
>>>>>>> 75179b8 (.)
        }

        return $cleaned;
    }
}
