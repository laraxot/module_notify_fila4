<?php

declare(strict_types=1);

namespace Modules\Notify\Actions\SMS;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
use Override;
=======
>>>>>>> b19cd40 (.)
=======
use Override;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
use Override;
=======
=======
use Override;
=======
>>>>>>> d09cb759 (.)
=======
use Override;
=======
>>>>>>> d09cb759 (.)
=======
use Override;
=======
>>>>>>> 4689a827 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
use Override;
>>>>>>> 3f537838 (.)
=======
use Override;
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
=======
>>>>>>> d09cb759 (.)
=======
use Override;
>>>>>>> 3f537838 (.)
=======
use Override;
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
=======
>>>>>>> d09cb759 (.)
=======
use Override;
>>>>>>> 3f537838 (.)
=======
use Override;
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
use Override;
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
use Override;
>>>>>>> 2941b0bd (.)
=======
>>>>>>> f1c9518b (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Modules\Notify\Contracts\SmsActionContract;
use Modules\Notify\Datas\SmsData;
<<<<<<< HEAD
=======
use Override;
=======
=======
>>>>>>> 95531e1 (.)
=======
>>>>>>> 0f07e6d (.)
use Override;
=======
>>>>>>> b19cd40 (.)
=======
use Override;
>>>>>>> 4e2ebfb (.)
use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Modules\Notify\Contracts\SmsActionContract;
use Modules\Notify\Datas\SmsData;
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
use Spatie\QueueableAction\QueueableAction;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4d2eb53e (.)

=======
>>>>>>> b19cd40 (.)
=======

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======

=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======

>>>>>>> 9777d1b3 (.)
=======

=======
=======

=======
>>>>>>> d09cb759 (.)
=======

=======
>>>>>>> d09cb759 (.)
=======

=======
>>>>>>> 4689a827 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======

>>>>>>> 3f537838 (.)
=======

>>>>>>> 75179b85 (.)
=======

=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======

>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======

>>>>>>> 3f537838 (.)
=======

>>>>>>> 75179b85 (.)
=======

=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======

>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======

>>>>>>> 3f537838 (.)
=======

=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======

>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======

>>>>>>> 2941b0bd (.)
=======

=======
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
use function Safe\preg_replace;

final class SendNetfunSMSAction implements SmsActionContract
{
    use QueueableAction;

<<<<<<< HEAD
    /** @var string */
    private string $token;

    /** @var string */
=======
<<<<<<< HEAD
    private string $token;

=======
    /** @var string */
    private string $token;

    /** @var string */
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
    private string $endpoint;

    /** @var array<string, mixed> */
    private array $vars = [];

<<<<<<< HEAD
    /** @var bool */
=======
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
    protected bool $debug;

    /** @var int */
    protected int $timeout;

    /** @var string|null */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
    protected null|string $defaultSender = null;
=======
    protected ?string $defaultSender = null;
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
    protected null|string $defaultSender = null;
=======
=======
    protected null|string $defaultSender = null;
=======
>>>>>>> d09cb759 (.)
=======
    protected null|string $defaultSender = null;
=======
>>>>>>> d09cb759 (.)
=======
    protected null|string $defaultSender = null;
=======
>>>>>>> 4689a827 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
    protected null|string $defaultSender = null;
>>>>>>> 3f537838 (.)
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
=======
>>>>>>> d09cb759 (.)
=======
    protected null|string $defaultSender = null;
>>>>>>> 3f537838 (.)
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
=======
>>>>>>> d09cb759 (.)
=======
    protected null|string $defaultSender = null;
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
    protected null|string $defaultSender = null;
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
    protected null|string $defaultSender = null;
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
    protected null|string $defaultSender = null;
>>>>>>> 2941b0bd (.)
=======
=======
    /** @var bool */
    protected bool $debug;

    /** @var int */
    protected int $timeout;

    /** @var string|null */
<<<<<<< HEAD
<<<<<<< HEAD
    protected null|string $defaultSender = null;
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
=======
=======
    protected ?string $defaultSender = null;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
=======
=======
=======
    protected null|string $defaultSender = null;
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
>>>>>>> 4d2eb53e (.)

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
        if (!is_string($token)) {
=======
<<<<<<< HEAD
        if (! is_string($token)) {
=======
        if (!is_string($token)) {
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
        $this->timeout = is_numeric(config('sms.timeout', 30)) ? ((int) config('sms.timeout', 30)) : 30;
=======
        $this->timeout = is_numeric(config('sms.timeout', 30)) ? (int) config('sms.timeout', 30) : 30;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        $this->timeout = is_numeric(config('sms.timeout', 30)) ? ((int) config('sms.timeout', 30)) : 30;
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        $this->timeout = is_numeric(config('sms.timeout', 30)) ? ((int) config('sms.timeout', 30)) : 30;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        $this->timeout = is_numeric(config('sms.timeout', 30)) ? ((int) config('sms.timeout', 30)) : 30;
>>>>>>> 9777d1b3 (.)
=======
        $this->timeout = is_numeric(config('sms.timeout', 30)) ? ((int) config('sms.timeout', 30)) : 30;
=======
=======
        $this->timeout = is_numeric(config('sms.timeout', 30)) ? ((int) config('sms.timeout', 30)) : 30;
=======
>>>>>>> d09cb759 (.)
=======
        $this->timeout = is_numeric(config('sms.timeout', 30)) ? ((int) config('sms.timeout', 30)) : 30;
=======
>>>>>>> d09cb759 (.)
=======
        $this->timeout = is_numeric(config('sms.timeout', 30)) ? ((int) config('sms.timeout', 30)) : 30;
=======
>>>>>>> 4689a827 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
        $this->timeout = is_numeric(config('sms.timeout', 30)) ? ((int) config('sms.timeout', 30)) : 30;
>>>>>>> 3f537838 (.)
=======
        $this->timeout = is_numeric(config('sms.timeout', 30)) ? ((int) config('sms.timeout', 30)) : 30;
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        $this->timeout = is_numeric(config('sms.timeout', 30)) ? ((int) config('sms.timeout', 30)) : 30;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        $this->timeout = is_numeric(config('sms.timeout', 30)) ? ((int) config('sms.timeout', 30)) : 30;
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
        $this->timeout = is_numeric(config('sms.timeout', 30)) ? ((int) config('sms.timeout', 30)) : 30;
>>>>>>> 3f537838 (.)
=======
        $this->timeout = is_numeric(config('sms.timeout', 30)) ? ((int) config('sms.timeout', 30)) : 30;
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        $this->timeout = is_numeric(config('sms.timeout', 30)) ? ((int) config('sms.timeout', 30)) : 30;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        $this->timeout = is_numeric(config('sms.timeout', 30)) ? ((int) config('sms.timeout', 30)) : 30;
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
        $this->timeout = is_numeric(config('sms.timeout', 30)) ? ((int) config('sms.timeout', 30)) : 30;
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
        $this->timeout = is_numeric(config('sms.timeout', 30)) ? ((int) config('sms.timeout', 30)) : 30;
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
        $this->timeout = is_numeric(config('sms.timeout', 30)) ? ((int) config('sms.timeout', 30)) : 30;
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
        $this->timeout = is_numeric(config('sms.timeout', 30)) ? ((int) config('sms.timeout', 30)) : 30;
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
        $this->timeout = is_numeric(config('sms.timeout', 30)) ? ((int) config('sms.timeout', 30)) : 30;
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
    }

    /**
     * Execute the action.
     *
<<<<<<< HEAD
     * @param SmsData $smsData I dati del messaggio SMS
     * @return array Risultato dell'operazione
=======
<<<<<<< HEAD
     * @param  SmsData  $smsData  I dati del messaggio SMS
     * @return array Risultato dell'operazione
     *
=======
     * @param SmsData $smsData I dati del messaggio SMS
     * @return array Risultato dell'operazione
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
     * @throws Exception In caso di errore durante l'invio
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
    #[Override]
<<<<<<< HEAD
=======
>>>>>>> b19cd40 (.)
=======
    #[Override]
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
    #[Override]
=======
=======
    #[Override]
=======
>>>>>>> d09cb759 (.)
=======
    #[Override]
=======
>>>>>>> d09cb759 (.)
=======
    #[Override]
=======
>>>>>>> 4689a827 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
    #[Override]
>>>>>>> 3f537838 (.)
=======
    #[Override]
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
=======
>>>>>>> d09cb759 (.)
=======
    #[Override]
>>>>>>> 3f537838 (.)
=======
    #[Override]
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
=======
>>>>>>> d09cb759 (.)
=======
    #[Override]
>>>>>>> 3f537838 (.)
=======
    #[Override]
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
    #[Override]
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
    #[Override]
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 5fd545e4 (.)
=======
    #[Override]
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
    #[Override]
=======
>>>>>>> b19cd40 (.)
=======
    #[Override]
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
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
            $to = $to !== '' ? ('+' . mb_substr($to, 2)) : $to;
        }
        if (!Str::startsWith($to, '+')) {
            $to = '+39' . $to;
=======
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
>>>>>>> f1c9518b (.)
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
                $clientException->getMessage() . '[' . __LINE__ . '][' . class_basename($this) . ']',
=======
<<<<<<< HEAD
                $clientException->getMessage().'['.__LINE__.']['.class_basename($this).']',
=======
                $clientException->getMessage() . '[' . __LINE__ . '][' . class_basename($this) . ']',
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
                $clientException->getCode(),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
                $clientException,
=======
                $clientException
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
                $clientException,
=======
=======
                $clientException,
=======
>>>>>>> d09cb759 (.)
=======
                $clientException,
=======
>>>>>>> d09cb759 (.)
=======
                $clientException,
=======
>>>>>>> 4689a827 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
                $clientException,
>>>>>>> 3f537838 (.)
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
=======
>>>>>>> d09cb759 (.)
=======
                $clientException,
>>>>>>> 3f537838 (.)
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
=======
>>>>>>> d09cb759 (.)
=======
                $clientException,
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
                $clientException,
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
                $clientException,
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
                $clientException,
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
                $clientException,
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
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
     * @param string $phoneNumber Numero di telefono da normalizzare
=======
<<<<<<< HEAD
     * @param  string  $phoneNumber  Numero di telefono da normalizzare
=======
     * @param string $phoneNumber Numero di telefono da normalizzare
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
     * @return string Numero di telefono normalizzato in formato E.164
     */
    /**
     * Normalizza il numero di telefono nel formato E.164
     *
<<<<<<< HEAD
     * @param string $phoneNumber Numero di telefono da normalizzare
=======
<<<<<<< HEAD
     * @param  string  $phoneNumber  Numero di telefono da normalizzare
=======
     * @param string $phoneNumber Numero di telefono da normalizzare
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
     * @return string Numero di telefono normalizzato in formato E.164
     */
    protected function normalizePhoneNumber(string $phoneNumber): string
    {
        // Rimuovi tutti i caratteri non numerici tranne il +
        $cleaned = preg_replace('/[^0-9+]/', '', $phoneNumber);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)

=======
        
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======

=======
=======

=======
>>>>>>> d09cb759 (.)
=======

=======
>>>>>>> d09cb759 (.)
=======

=======
>>>>>>> 4689a827 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======

>>>>>>> 3f537838 (.)
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
=======
>>>>>>> d09cb759 (.)
=======

>>>>>>> 3f537838 (.)
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
=======
>>>>>>> d09cb759 (.)
=======

>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======

>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======

>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======

>>>>>>> 2941b0bd (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======

>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
        // Se preg_replace restituisce null (non dovrebbe succedere con input string)
<<<<<<< HEAD
        if (!is_string($cleaned) || $cleaned === '') {
=======
<<<<<<< HEAD
        if (! is_string($cleaned) || $cleaned === '') {
=======
        if (!is_string($cleaned) || $cleaned === '') {
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
            $cleaned = '';
        }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)

=======
        
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======

>>>>>>> 9777d1b3 (.)
=======

=======
=======

=======
>>>>>>> d09cb759 (.)
=======

=======
>>>>>>> 4689a827 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======

>>>>>>> 3f537838 (.)
=======

>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======

>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 4689a827 (.)
=======

>>>>>>> 2941b0bd (.)
=======
>>>>>>> 3f39ac8b (.)
        // Se il numero non inizia con '+'
<<<<<<< HEAD
        if (!Str::startsWith($cleaned, '+')) {
            $cleaned = '+39' . ltrim($cleaned, '0');
=======
<<<<<<< HEAD
        if (! Str::startsWith($cleaned, '+')) {
            $cleaned = '+39'.ltrim($cleaned, '0');
=======
        if (!Str::startsWith($cleaned, '+')) {
            $cleaned = '+39' . ltrim($cleaned, '0');
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
        }
=======
>>>>>>> 0f07e6d (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 011072e4 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 3f39ac8b (.)

=======
        
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======

>>>>>>> 4e2ebfb (.)
=======

>>>>>>> 9777d1b3 (.)
=======

=======
=======

=======
>>>>>>> d09cb759 (.)
=======
<<<<<<< HEAD

=======
>>>>>>> d09cb759 (.)
=======
<<<<<<< HEAD

=======
>>>>>>> 4689a827 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======

>>>>>>> 3f537838 (.)
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
=======
=======

>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======

>>>>>>> 161887a2 (.)
=======
=======

>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
        // Se il numero non inizia con '+'
        if (!Str::startsWith($cleaned, '+')) {
            $cleaned = '+39' . ltrim($cleaned, '0');
        }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD

>>>>>>> 207ac35e (.)
=======

>>>>>>> 011072e4 (.)
=======

>>>>>>> 4d2eb53e (.)
=======
        
>>>>>>> b19cd40 (.)
=======

>>>>>>> 4e2ebfb (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
=======
<<<<<<< HEAD
=======
        // Se il numero non inizia con '+'
        if (!Str::startsWith($cleaned, '+')) {
            $cleaned = '+39' . ltrim($cleaned, '0');
        }
>>>>>>> 207ac35e (.)
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
=======
        
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> b19cd40 (.)
=======

>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======

>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======

>>>>>>> 3f537838 (.)
=======

>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======

>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======

>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======

>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======

>>>>>>> 2941b0bd (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
        return $cleaned;
    }
}
