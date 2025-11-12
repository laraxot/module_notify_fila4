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
use Modules\Notify\Datas\SmsData;
use Override;
=======
=======
>>>>>>> 95531e1 (.)
=======
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
>>>>>>> f813254 (.)
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
use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Modules\Notify\Contracts\SmsActionContract;
use Modules\Notify\Datas\SmsData;
>>>>>>> 99ff506 (.)
use Spatie\QueueableAction\QueueableAction;
<<<<<<< HEAD

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
use function Safe\preg_replace;

final class SendNetfunSMSAction implements SmsActionContract
{
    use QueueableAction;

<<<<<<< HEAD
    private string $token;

=======
    /** @var string */
    private string $token;

    /** @var string */
>>>>>>> 99ff506 (.)
    private string $endpoint;

    /** @var array<string, mixed> */
    private array $vars = [];

<<<<<<< HEAD
    protected bool $debug;

    protected int $timeout;

    protected ?string $defaultSender = null;
=======
    /** @var bool */
    protected bool $debug;

    /** @var int */
    protected int $timeout;

    /** @var string|null */
<<<<<<< HEAD
    protected null|string $defaultSender = null;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
=======
=======
    protected ?string $defaultSender = null;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
    protected null|string $defaultSender = null;
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
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
>>>>>>> 99ff506 (.)
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
        $this->timeout = is_numeric(config('sms.timeout', 30)) ? ((int) config('sms.timeout', 30)) : 30;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $this->timeout = is_numeric(config('sms.timeout', 30)) ? ((int) config('sms.timeout', 30)) : 30;
=======
        $this->timeout = is_numeric(config('sms.timeout', 30)) ? (int) config('sms.timeout', 30) : 30;
>>>>>>> a12f125f4a (.)
=======
        $this->timeout = is_numeric(config('sms.timeout', 30)) ? ((int) config('sms.timeout', 30)) : 30;
>>>>>>> b93ef594b4 (.)
=======
        $this->timeout = is_numeric(config('sms.timeout', 30)) ? (int) config('sms.timeout', 30) : 30;
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
    }

    /**
     * Execute the action.
     *
<<<<<<< HEAD
     * @param  SmsData  $smsData  I dati del messaggio SMS
     * @return array Risultato dell'operazione
     *
=======
     * @param SmsData $smsData I dati del messaggio SMS
     * @return array Risultato dell'operazione
>>>>>>> 99ff506 (.)
     * @throws Exception In caso di errore durante l'invio
     */
<<<<<<< HEAD
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
            $to = $to !== '' ? ('+'.mb_substr($to, 2)) : $to;
        }
        if (! Str::startsWith($to, '+')) {
            $to = '+39'.$to;
=======
            $to = $to !== '' ? ('+' . mb_substr($to, 2)) : $to;
        }
        if (!Str::startsWith($to, '+')) {
            $to = '+39' . $to;
>>>>>>> 99ff506 (.)
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
>>>>>>> 99ff506 (.)
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
>>>>>>> 99ff506 (.)
     * @return string Numero di telefono normalizzato in formato E.164
     */
    /**
     * Normalizza il numero di telefono nel formato E.164
     *
<<<<<<< HEAD
     * @param  string  $phoneNumber  Numero di telefono da normalizzare
=======
     * @param string $phoneNumber Numero di telefono da normalizzare
>>>>>>> 99ff506 (.)
     * @return string Numero di telefono normalizzato in formato E.164
     */
    protected function normalizePhoneNumber(string $phoneNumber): string
    {
        // Rimuovi tutti i caratteri non numerici tranne il +
        $cleaned = preg_replace('/[^0-9+]/', '', $phoneNumber);
<<<<<<< HEAD

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
        // Se preg_replace restituisce null (non dovrebbe succedere con input string)
<<<<<<< HEAD
        if (! is_string($cleaned) || $cleaned === '') {
=======
        if (!is_string($cleaned) || $cleaned === '') {
>>>>>>> 99ff506 (.)
            $cleaned = '';
        }
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
=======
        
>>>>>>> b19cd40 (.)
        // Se il numero non inizia con '+'
<<<<<<< HEAD
        if (! Str::startsWith($cleaned, '+')) {
            $cleaned = '+39'.ltrim($cleaned, '0');
=======
        if (!Str::startsWith($cleaned, '+')) {
            $cleaned = '+39' . ltrim($cleaned, '0');
>>>>>>> 99ff506 (.)
        }
=======
>>>>>>> 0f07e6d (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f813254 (.)
<<<<<<< HEAD

=======
        
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
=======

>>>>>>> 4e2ebfb (.)
=======
>>>>>>> e11621f (.)
=======
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
        // Se il numero non inizia con '+'
        if (!Str::startsWith($cleaned, '+')) {
            $cleaned = '+39' . ltrim($cleaned, '0');
        }
<<<<<<< HEAD

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
        return $cleaned;
    }
}
