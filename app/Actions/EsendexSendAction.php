<?php

declare(strict_types=1);

namespace Modules\Notify\Actions;

<<<<<<< HEAD
use Exception;
=======
<<<<<<< HEAD
use Exception;
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
use Modules\Notify\Datas\SmsData;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

use function Safe\curl_exec;
use function Safe\curl_getinfo;
use function Safe\curl_init;
use function Safe\curl_setopt;
use function Safe\json_decode;
use function Safe\json_encode;

/**
 * @property string $base_endpoint
 */
class EsendexSendAction
{
    use QueueableAction;

    public string $base_endpoint = 'https://app.messaggissima.it/API/v1.0/REST/';

    /**
     * Sends an SMS message.
     */
    public function execute(SmsData $smsData): array
    {
        $auth = $this->login();

<<<<<<< HEAD
        if (! is_array($auth)) {
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
=======
<<<<<<< HEAD
        if (!is_array($auth)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (!is_array($auth)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
=======
        if (! is_array($auth)) {
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
>>>>>>> a12f125f4a (.)
=======
        if (!is_array($auth)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> b93ef594b4 (.)
=======
        if (! is_array($auth)) {
            throw new \Exception('['.__LINE__.']['.class_basename($this).']');
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
        }

        $data = [
            'message' => $smsData->body,
            'message_type' => 'N',
            'returnCredits' => false,
            'recipient' => [$smsData->to],
            'sender' => config('esendex.sender'),
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
<<<<<<< HEAD
        curl_setopt($ch, CURLOPT_URL, $this->base_endpoint.'sms');
=======
<<<<<<< HEAD
        curl_setopt($ch, CURLOPT_URL, $this->base_endpoint . 'sms');
>>>>>>> f813254 (.)

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        curl_setopt($ch, CURLOPT_URL, $this->base_endpoint . 'sms');

=======
        curl_setopt($ch, CURLOPT_URL, $this->base_endpoint.'sms');
        
>>>>>>> a12f125f4a (.)
=======
        curl_setopt($ch, CURLOPT_URL, $this->base_endpoint . 'sms');

>>>>>>> b93ef594b4 (.)
=======
        curl_setopt($ch, CURLOPT_URL, $this->base_endpoint.'sms');
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        // Verifichiamo che i valori dell'array di autenticazione siano stringhe
        if (! is_string($auth[0])) {
            $auth[0] = '';
        }
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)

        if (! is_string($auth[1])) {
            $auth[1] = '';
        }

        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-type: application/json',
            'user_key: '.$auth[0],
            'Session_key: '.$auth[1],
        ]);
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        
        if (!is_string($auth[1])) {
            $auth[1] = '';
        }
        
        curl_setopt(
            $ch,
            CURLOPT_HTTPHEADER,
            [
                'Content-type: application/json',
                'user_key: '.$auth[0],
                'Session_key: '.$auth[1],
            ]
        );
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

        if (!is_string($auth[1])) {
            $auth[1] = '';
        }

        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-type: application/json',
            'user_key: ' . $auth[0],
            'Session_key: ' . $auth[1],
        ]);
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data, JSON_THROW_ON_ERROR));
        $response = curl_exec($ch);
        $info = curl_getinfo($ch);
        curl_close($ch);
        Assert::isArray($info);
        if ($info['http_code'] !== 201) {
            return [];
        }

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
        $res = json_decode(is_string($response) ? $response : ((string) $response), true, 512, JSON_THROW_ON_ERROR);

        dddx($res);
<<<<<<< HEAD
        if (! is_array($res)) {
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
=======
        if (!is_array($res)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        $res = json_decode(is_string($response) ? $response : (string) $response, true, 512, JSON_THROW_ON_ERROR);

        dddx($res);
        if (! is_array($res)) {
<<<<<<< HEAD
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
>>>>>>> a12f125f4a (.)
=======
        $res = json_decode(is_string($response) ? $response : ((string) $response), true, 512, JSON_THROW_ON_ERROR);

        dddx($res);
        if (!is_array($res)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> b93ef594b4 (.)
=======
            throw new \Exception('['.__LINE__.']['.class_basename($this).']');
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
        }

        return $res;
    }

    /**
     * Authenticates the user given it's username and password.
     * Returns the pair user_key, Session_key.
     */
<<<<<<< HEAD
    public function login(): ?array
=======
<<<<<<< HEAD
    public function login(): null|array
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function login(): null|array
=======
    public function login(): ?array
>>>>>>> a12f125f4a (.)
=======
    public function login(): null|array
>>>>>>> b93ef594b4 (.)
=======
    public function login(): ?array
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
    {
        $curlHandle = curl_init();
        curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, false);

        Assert::string($username = config('esendex.username'));
        Assert::string($password = config('esendex.password'));

<<<<<<< HEAD
        $login_string = $this->base_endpoint.'login?username='.$username.'&password='.$password;
=======
<<<<<<< HEAD
        $login_string = $this->base_endpoint . 'login?username=' . $username . '&password=' . $password;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $login_string = $this->base_endpoint . 'login?username=' . $username . '&password=' . $password;
=======
        $login_string = $this->base_endpoint.'login?username='.$username.'&password='.$password;
>>>>>>> a12f125f4a (.)
=======
        $login_string = $this->base_endpoint . 'login?username=' . $username . '&password=' . $password;
>>>>>>> b93ef594b4 (.)
=======
        $login_string = $this->base_endpoint.'login?username='.$username.'&password='.$password;
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)

        curl_setopt($curlHandle, CURLOPT_URL, $login_string);

        curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($curlHandle);

        // dddx(['login_string' => $login_string, 'response' => $response]);

        $info = curl_getinfo($curlHandle);

        curl_close($curlHandle);
        Assert::isArray($info);
        if ($info['http_code'] !== 200) {
            return null;
        }

<<<<<<< HEAD
        return explode(';', is_string($response) ? $response : ((string) $response));
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return explode(';', is_string($response) ? $response : ((string) $response));
=======
        return explode(';', is_string($response) ? $response : (string) $response);
>>>>>>> a12f125f4a (.)
=======
        return explode(';', is_string($response) ? $response : ((string) $response));
>>>>>>> b93ef594b4 (.)
=======
        return explode(';', is_string($response) ? $response : (string) $response);
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
    }
}
