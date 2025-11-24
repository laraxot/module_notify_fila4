<?php

declare(strict_types=1);

namespace Modules\Notify\Datas;

use Exception;
use Illuminate\Support\Arr;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Modules\Tenant\Services\TenantService;
>>>>>>> 75179b8 (.)
=======
use Modules\Tenant\Services\TenantService;
>>>>>>> 7148d73 (.)
use Spatie\LaravelData\Data;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mailer\Transport\Smtp\EsmtpTransport;
use Webmozart\Assert\Assert;

/**
 * Class Modules\Notify\Datas\SmtpData.
 */
class SmtpData extends Data
{
    public string $transport = 'smtp';

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public ?string $url = null;
=======
    public null|string $url = null;
>>>>>>> 75179b8 (.)
=======
=======
>>>>>>> 207ac35 (.)
    public null|string $url = null;
=======
    public ?string $url = null;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
    public null|string $url = null;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
    public null|string $url = null;
>>>>>>> 9777d1b (.)
=======
    public null|string $url = null;
>>>>>>> 7148d73 (.)

    public string $host = '127.0.0.1';

    public int $port = 2525;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public ?string $encryption = null; // 'tls';

    public ?bool $tls = null;

    public ?string $username = null;

    public ?string $password = null;

    public ?string $timeout = null;

    public ?string $local_domain = null;
=======
=======
>>>>>>> 82ae73b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
=======
>>>>>>> 7148d73 (.)
    public null|string $encryption = null; // 'tls';

    public null|bool $tls = null;

    public null|string $username = null;

    public null|string $password = null;

    public null|string $timeout = null;

    public null|string $local_domain = null;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
=======
>>>>>>> 207ac35 (.)
=======
    public ?string $encryption = null; // 'tls';

    public ?bool $tls = null;

    public ?string $username = null;

    public ?string $password = null;

    public ?string $timeout = null;

    public ?string $local_domain = null;
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

    private static array $instance = [];

    public static function make(string $name = 'smtp'): self
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (! isset(self::$instance[$name]) || ! (self::$instance[$name] instanceof self)) {
            // $data = TenantService::getConfig('mail');
            Assert::isArray($data = config('mail'));
            $data_name = Arr::get($data, 'mailers.'.$name);
=======
=======
>>>>>>> 82ae73b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
=======
>>>>>>> 7148d73 (.)
        if (!isset(self::$instance[$name]) || !(self::$instance[$name] instanceof self)) {
            // $data = TenantService::getConfig('mail');
            Assert::isArray($data = config('mail'));
            $data_name = Arr::get($data, 'mailers.' . $name);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
=======
>>>>>>> 207ac35 (.)
=======
        if (!isset(self::$instance[$name]) || ! self::$instance[$name] instanceof self) {
            // $data = TenantService::getConfig('mail');
            Assert::isArray($data = config('mail'));
            $data_name = Arr::get($data, 'mailers.'.$name);
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
            self::$instance[$name] = self::from($data_name);
        }

        return self::$instance[$name];
    }

    public function toArray(): array
    {
        return [
            'transport' => $this->transport,
            'host' => $this->host,
            'port' => $this->port,
            'encryption' => $this->encryption,
            'username' => $this->username,
            'password' => $this->password,
            'timeout' => $this->timeout,
            'local_domain' => $this->local_domain,
        ];
    }

    public function getTransport(): EsmtpTransport
    {
        $transport = new EsmtpTransport($this->host, $this->port, $this->tls);
        if ($this->username !== null && $this->password !== null) {
            $transport->setUsername($this->username);
            $transport->setPassword($this->password);
        }

        return $transport;
    }

    public function getMailer(): Mailer
    {
        $transport = $this->getTransport();
        try {
            $transport->start();
        } catch (Exception $e) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            throw new Exception('Errore durante la connessione SMTP: '.$e->getMessage());
        }

        return new Mailer($transport);
=======
=======
>>>>>>> 82ae73b (.)
=======
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
=======
>>>>>>> 7148d73 (.)
            throw new Exception('Errore durante la connessione SMTP: ' . $e->getMessage());
        }
        $mailer = new Mailer($transport);

        return $mailer;
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
>>>>>>> 7148d73 (.)
    }

    public function send(EmailData $emailData): void
    {
        $mailer = $this->getMailer();
        $mimeEmail = $emailData->getMimeEmail();
        try {
            $mailer->send($mimeEmail);
        } catch (Exception $e) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            throw new Exception("Errore durante l'invio dell'email: ".$e->getMessage());
=======
            throw new Exception("Errore durante l'invio dell'email: " . $e->getMessage());
>>>>>>> 75179b8 (.)
=======
=======
>>>>>>> 207ac35 (.)
            throw new Exception("Errore durante l'invio dell'email: " . $e->getMessage());
=======
            throw new Exception("Errore durante l'invio dell'email: ".$e->getMessage());
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
            throw new Exception("Errore durante l'invio dell'email: " . $e->getMessage());
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
            throw new Exception("Errore durante l'invio dell'email: " . $e->getMessage());
>>>>>>> 9777d1b (.)
=======
            throw new Exception("Errore durante l'invio dell'email: " . $e->getMessage());
>>>>>>> 7148d73 (.)
        }
    }
}
