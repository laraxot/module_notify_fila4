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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f1c9518b (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
        if (! is_array($auth)) {
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
=======
        if (!is_array($auth)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
<<<<<<< HEAD
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
        if (!is_array($auth)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> d09cb759 (.)
=======
        if (!is_array($auth)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 4689a827 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4689a827 (.)
        if (!is_array($auth)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
=======
        if (! is_array($auth)) {
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
=======
        if (!is_array($auth)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 4e2ebfb (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
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
        if (!is_array($auth)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 82ae73be (.)
=======
        if (!is_array($auth)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> de02998b (.)
=======
        if (! is_array($auth)) {
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
        if (!is_array($auth)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
        if (!is_array($auth)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
=======
=======
>>>>>>> 0f07e6d (.)
=======
        if (!is_array($auth)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f813254 (.)
        if (!is_array($auth)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
=======
        if (! is_array($auth)) {
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
=======
=======
=======
        if (!is_array($auth)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
<<<<<<< HEAD
>>>>>>> 4d2eb53e (.)
=======
=======
        if (!is_array($auth)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
>>>>>>> e11621f (.)
<<<<<<< HEAD
>>>>>>> 888799d0 (.)
=======
=======
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
>>>>>>> f2e64178 (.)
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
        curl_setopt($ch, CURLOPT_URL, $this->base_endpoint . 'sms');
=======
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
        curl_setopt($ch, CURLOPT_URL, $this->base_endpoint.'sms');
>>>>>>> f1c9518b (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> f1c9518b (.)
=======
=======
>>>>>>> 95531e1 (.)
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 0f07e6d (.)
<<<<<<< HEAD
>>>>>>> 4d2eb53e (.)
=======
=======
>>>>>>> e11621f (.)
<<<<<<< HEAD
>>>>>>> 888799d0 (.)
=======
=======
>>>>>>> f813254 (.)
>>>>>>> f2e64178 (.)
        curl_setopt($ch, CURLOPT_URL, $this->base_endpoint . 'sms');

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
        if (!is_string($auth[0])) {
            $auth[0] = '';
        }
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)

        if (!is_string($auth[1])) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
            $auth[1] = '';
        }

        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-type: application/json',
<<<<<<< HEAD
            'user_key: ' . $auth[0],
            'Session_key: ' . $auth[1],
=======
<<<<<<< HEAD
            'user_key: '.$auth[0],
            'Session_key: '.$auth[1],
=======
            'user_key: ' . $auth[0],
            'Session_key: ' . $auth[1],
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
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
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 207ac35e (.)
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
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 4689a827 (.)
=======
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> f2e64178 (.)
        
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
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
<<<<<<< HEAD
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
>>>>>>> a12f125f4a (.)
=======

        if (!is_string($auth[1])) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
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
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> b19cd40 (.)
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
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)

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
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
<<<<<<< HEAD
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
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
        $res = json_decode(is_string($response) ? $response : ((string) $response), true, 512, JSON_THROW_ON_ERROR);

        dddx($res);
<<<<<<< HEAD
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
>>>>>>> 011072e4 (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> de02998b (.)
        $res = json_decode(is_string($response) ? $response : (string) $response, true, 512, JSON_THROW_ON_ERROR);

        dddx($res);
        if (! is_array($res)) {
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
        $res = json_decode(is_string($response) ? $response : (string) $response, true, 512, JSON_THROW_ON_ERROR);

        dddx($res);
        if (! is_array($res)) {
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
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
=======
>>>>>>> b19cd40 (.)
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
<<<<<<< HEAD
        if (! is_array($res)) {
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
=======
        if (!is_array($res)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename($this) . ']');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
=======
=======
>>>>>>> 0f07e6d (.)
=======
=======
=======
=======
=======
>>>>>>> origin/develop
>>>>>>> f813254 (.)
        $res = json_decode(is_string($response) ? $response : (string) $response, true, 512, JSON_THROW_ON_ERROR);

        dddx($res);
        if (! is_array($res)) {
<<<<<<< HEAD
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
=======
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
<<<<<<< HEAD
>>>>>>> 4d2eb53e (.)
=======
=======
>>>>>>> e11621f (.)
<<<<<<< HEAD
>>>>>>> 888799d0 (.)
=======
=======
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
>>>>>>> f2e64178 (.)
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
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
    public function login(): null|array
=======
    public function login(): ?array
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
    public function login(): null|array
>>>>>>> d09cb759 (.)
=======
    public function login(): null|array
>>>>>>> 4689a827 (.)
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
=======
    public function login(): ?array
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
=======
    public function login(): null|array
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
    public function login(): null|array
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
    public function login(): null|array
>>>>>>> 2941b0bd (.)
=======
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
    public function login(): ?array
=======
    public function login(): null|array
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
=======
=======
>>>>>>> 0f07e6d (.)
    public function login(): null|array
=======
    public function login(): ?array
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
=======
=======
=======
    public function login(): null|array
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
<<<<<<< HEAD
>>>>>>> 4d2eb53e (.)
=======
=======
    public function login(): null|array
>>>>>>> e11621f (.)
<<<<<<< HEAD
>>>>>>> 888799d0 (.)
=======
=======
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
>>>>>>> f2e64178 (.)
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
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
        $login_string = $this->base_endpoint . 'login?username=' . $username . '&password=' . $password;
=======
        $login_string = $this->base_endpoint.'login?username='.$username.'&password='.$password;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
        $login_string = $this->base_endpoint . 'login?username=' . $username . '&password=' . $password;
>>>>>>> d09cb759 (.)
=======
        $login_string = $this->base_endpoint . 'login?username=' . $username . '&password=' . $password;
>>>>>>> 4689a827 (.)
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
=======
        $login_string = $this->base_endpoint.'login?username='.$username.'&password='.$password;
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
=======
        $login_string = $this->base_endpoint . 'login?username=' . $username . '&password=' . $password;
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
        $login_string = $this->base_endpoint . 'login?username=' . $username . '&password=' . $password;
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
        $login_string = $this->base_endpoint . 'login?username=' . $username . '&password=' . $password;
>>>>>>> 2941b0bd (.)
=======
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
        $login_string = $this->base_endpoint.'login?username='.$username.'&password='.$password;
=======
        $login_string = $this->base_endpoint . 'login?username=' . $username . '&password=' . $password;
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
=======
=======
>>>>>>> 0f07e6d (.)
        $login_string = $this->base_endpoint . 'login?username=' . $username . '&password=' . $password;
=======
        $login_string = $this->base_endpoint.'login?username='.$username.'&password='.$password;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
=======
=======
=======
        $login_string = $this->base_endpoint . 'login?username=' . $username . '&password=' . $password;
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
<<<<<<< HEAD
>>>>>>> 4d2eb53e (.)
=======
=======
        $login_string = $this->base_endpoint . 'login?username=' . $username . '&password=' . $password;
>>>>>>> e11621f (.)
<<<<<<< HEAD
>>>>>>> 888799d0 (.)
=======
=======
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
>>>>>>> f2e64178 (.)

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
        return explode(';', is_string($response) ? $response : ((string) $response));
=======
        return explode(';', is_string($response) ? $response : (string) $response);
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
=======
        return explode(';', is_string($response) ? $response : ((string) $response));
=======
>>>>>>> d09cb759 (.)
=======
        return explode(';', is_string($response) ? $response : ((string) $response));
=======
>>>>>>> 4689a827 (.)
=======
        return explode(';', is_string($response) ? $response : ((string) $response));
=======
>>>>>>> f2e64178 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> de02998b (.)
=======
=======
        return explode(';', is_string($response) ? $response : ((string) $response));
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
        return explode(';', is_string($response) ? $response : ((string) $response));
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
        return explode(';', is_string($response) ? $response : ((string) $response));
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
        return explode(';', is_string($response) ? $response : ((string) $response));
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
        return explode(';', is_string($response) ? $response : ((string) $response));
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
    }
}
