<?php

declare(strict_types=1);

namespace Modules\Notify\Actions;

use Exception;
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
        if (! is_array($auth)) {
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
=======
        if (!is_array($auth)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> 207ac35e (.)
=======
        if (!is_array($auth)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
=======
        if (!is_array($auth)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> d09cb759 (.)
=======
        if (!is_array($auth)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> d09cb759 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
        if (!is_array($auth)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
=======
        if (! is_array($auth)) {
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
        if (!is_array($auth)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 4e2ebfb (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 207ac35e (.)
=======
        if (!is_array($auth)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 9777d1b3 (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
        if (!is_array($auth)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 3f537838 (.)
=======
        if (!is_array($auth)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
=======
        if (!is_array($auth)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 82ae73be (.)
=======
        if (!is_array($auth)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 82ae73be (.)
=======
        if (! is_array($auth)) {
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> de02998b (.)
=======
        if (!is_array($auth)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
        if (!is_array($auth)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
        if (!is_array($auth)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 3f537838 (.)
=======
        if (!is_array($auth)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
        if (!is_array($auth)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
        if (!is_array($auth)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 3f537838 (.)
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
        curl_setopt($ch, CURLOPT_URL, $this->base_endpoint . 'sms');

=======
        curl_setopt($ch, CURLOPT_URL, $this->base_endpoint.'sms');
        
>>>>>>> b19cd40 (.)
        // Verifichiamo che i valori dell'array di autenticazione siano stringhe
<<<<<<< HEAD
        if (! is_string($auth[0])) {
            $auth[0] = '';
        }

        if (! is_string($auth[1])) {
=======
        if (!is_string($auth[0])) {
            $auth[0] = '';
        }
<<<<<<< HEAD

        if (!is_string($auth[1])) {
>>>>>>> 75179b85 (.)
=======
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
        curl_setopt($ch, CURLOPT_URL, $this->base_endpoint . 'sms');

        // Verifichiamo che i valori dell'array di autenticazione siano stringhe
        if (!is_string($auth[0])) {
            $auth[0] = '';
        }

        if (!is_string($auth[1])) {
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
            $auth[1] = '';
        }

        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-type: application/json',
            'user_key: ' . $auth[0],
            'Session_key: ' . $auth[1],
        ]);
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
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
=======
=======
>>>>>>> d09cb759 (.)
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
        
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
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
<<<<<<< HEAD
=======
>>>>>>> d09cb759 (.)
>>>>>>> a12f125f4a (.)
=======

        if (!is_string($auth[1])) {
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> d09cb759 (.)
            $auth[1] = '';
        }

        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-type: application/json',
            'user_key: ' . $auth[0],
            'Session_key: ' . $auth[1],
        ]);
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d09cb759 (.)
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
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
=======
>>>>>>> 4e2ebfb (.)
=======
>>>>>>> 9777d1b3 (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
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
        $res = json_decode(is_string($response) ? $response : ((string) $response), true, 512, JSON_THROW_ON_ERROR);

        dddx($res);
        if (!is_array($res)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
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
=======
>>>>>>> 82ae73be (.)
        $res = json_decode(is_string($response) ? $response : (string) $response, true, 512, JSON_THROW_ON_ERROR);

        dddx($res);
        if (! is_array($res)) {
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
<<<<<<< HEAD
=======
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
        $res = json_decode(is_string($response) ? $response : ((string) $response), true, 512, JSON_THROW_ON_ERROR);

        dddx($res);
        if (!is_array($res)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> 207ac35e (.)
=======
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
        $res = json_decode(is_string($response) ? $response : (string) $response, true, 512, JSON_THROW_ON_ERROR);

        dddx($res);
        if (! is_array($res)) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
>>>>>>> 75179b85 (.)
=======
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
>>>>>>> b19cd40 (.)
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
>>>>>>> b19cd40 (.)
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
        }

        return $res;
    }

    /**
     * Authenticates the user given it's username and password.
     * Returns the pair user_key, Session_key.
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
    public function login(): ?array
=======
    public function login(): null|array
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
    public function login(): null|array
=======
    public function login(): ?array
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======
    public function login(): null|array
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
    public function login(): null|array
>>>>>>> 9777d1b3 (.)
=======
    public function login(): null|array
=======
    public function login(): null|array
>>>>>>> d09cb759 (.)
=======
    public function login(): null|array
>>>>>>> d09cb759 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
    public function login(): null|array
>>>>>>> 3f537838 (.)
=======
    public function login(): null|array
=======
    public function login(): ?array
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
    public function login(): null|array
>>>>>>> 75179b85 (.)
=======
    public function login(): null|array
=======
    public function login(): ?array
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
    public function login(): null|array
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
    public function login(): null|array
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
    public function login(): null|array
>>>>>>> 3f537838 (.)
=======
    public function login(): null|array
>>>>>>> 75179b85 (.)
=======
    public function login(): null|array
=======
    public function login(): ?array
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
    public function login(): null|array
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
    public function login(): null|array
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
    public function login(): null|array
>>>>>>> 3f537838 (.)
    {
        $curlHandle = curl_init();
        curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, false);

        Assert::string($username = config('esendex.username'));
        Assert::string($password = config('esendex.password'));

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
        $login_string = $this->base_endpoint.'login?username='.$username.'&password='.$password;
=======
        $login_string = $this->base_endpoint . 'login?username=' . $username . '&password=' . $password;
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
        $login_string = $this->base_endpoint . 'login?username=' . $username . '&password=' . $password;
=======
        $login_string = $this->base_endpoint.'login?username='.$username.'&password='.$password;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======
        $login_string = $this->base_endpoint . 'login?username=' . $username . '&password=' . $password;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        $login_string = $this->base_endpoint . 'login?username=' . $username . '&password=' . $password;
>>>>>>> 9777d1b3 (.)
=======
        $login_string = $this->base_endpoint . 'login?username=' . $username . '&password=' . $password;
=======
        $login_string = $this->base_endpoint . 'login?username=' . $username . '&password=' . $password;
>>>>>>> d09cb759 (.)
=======
        $login_string = $this->base_endpoint . 'login?username=' . $username . '&password=' . $password;
>>>>>>> d09cb759 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
        $login_string = $this->base_endpoint . 'login?username=' . $username . '&password=' . $password;
>>>>>>> 3f537838 (.)
=======
        $login_string = $this->base_endpoint . 'login?username=' . $username . '&password=' . $password;
=======
        $login_string = $this->base_endpoint.'login?username='.$username.'&password='.$password;
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
        $login_string = $this->base_endpoint . 'login?username=' . $username . '&password=' . $password;
>>>>>>> 75179b85 (.)
=======
        $login_string = $this->base_endpoint . 'login?username=' . $username . '&password=' . $password;
=======
        $login_string = $this->base_endpoint.'login?username='.$username.'&password='.$password;
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
        $login_string = $this->base_endpoint . 'login?username=' . $username . '&password=' . $password;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        $login_string = $this->base_endpoint . 'login?username=' . $username . '&password=' . $password;
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
        $login_string = $this->base_endpoint . 'login?username=' . $username . '&password=' . $password;
>>>>>>> 3f537838 (.)
=======
        $login_string = $this->base_endpoint . 'login?username=' . $username . '&password=' . $password;
>>>>>>> 75179b85 (.)
=======
        $login_string = $this->base_endpoint . 'login?username=' . $username . '&password=' . $password;
=======
        $login_string = $this->base_endpoint.'login?username='.$username.'&password='.$password;
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
        $login_string = $this->base_endpoint . 'login?username=' . $username . '&password=' . $password;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        $login_string = $this->base_endpoint . 'login?username=' . $username . '&password=' . $password;
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
        $login_string = $this->base_endpoint . 'login?username=' . $username . '&password=' . $password;
>>>>>>> 3f537838 (.)

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
        return explode(';', is_string($response) ? $response : ((string) $response));
=======
        return explode(';', is_string($response) ? $response : (string) $response);
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        return explode(';', is_string($response) ? $response : ((string) $response));
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        return explode(';', is_string($response) ? $response : ((string) $response));
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        return explode(';', is_string($response) ? $response : ((string) $response));
>>>>>>> 9777d1b3 (.)
=======
        return explode(';', is_string($response) ? $response : ((string) $response));
=======
=======
        return explode(';', is_string($response) ? $response : ((string) $response));
=======
>>>>>>> d09cb759 (.)
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
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
        return explode(';', is_string($response) ? $response : ((string) $response));
>>>>>>> 3f537838 (.)
=======
        return explode(';', is_string($response) ? $response : ((string) $response));
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        return explode(';', is_string($response) ? $response : ((string) $response));
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        return explode(';', is_string($response) ? $response : ((string) $response));
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
        return explode(';', is_string($response) ? $response : ((string) $response));
>>>>>>> 3f537838 (.)
    }
}
