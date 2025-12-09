<?php

declare(strict_types=1);

namespace Modules\Notify\Actions\SMS;

use Illuminate\Support\Facades\Http;
use Modules\Notify\Contracts\SMS\SmsActionContract;
use Modules\Notify\Datas\SmsData;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)

use function Safe\preg_match;
use function Safe\preg_replace;
=======
use function Safe\preg_replace;
use function Safe\preg_match;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
=======

use function Safe\preg_match;
use function Safe\preg_replace;
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)

/**
 * Azione per l'invio di SMS tramite Agile Telecom.
 */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
class NormalizePhoneNumberAction
=======
class NormalizePhoneNumberAction 
>>>>>>> b19cd40 (.)
{
    public function execute(string|array $phoneNumber): string
    {
        // Convert array to string if needed
        if (is_array($phoneNumber)) {
            $phoneNumber = implode('', $phoneNumber);
        }
        
        // Rimuove parentesi e il loro contenuto
<<<<<<< HEAD
=======
=======
>>>>>>> 82ae73be (.)
class NormalizePhoneNumberAction
=======
class NormalizePhoneNumberAction 
>>>>>>> b19cd40 (.)
{
    public function execute(string $phoneNumber): string
    {
        // Rimuove parentesi e il loro contenuto
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
        $phoneNumber = preg_replace("/\([0-9]+?\)/", '', $phoneNumber);

        // Rimuove spazi e caratteri non numerici
        $phoneNumber = preg_replace('/[^0-9]/', '', $phoneNumber);

        // Rimuove gli zeri iniziali
<<<<<<< HEAD
        $phoneNumber = is_string($phoneNumber) ? ltrim($phoneNumber, '0') : '';
=======
        $phoneNumber = ltrim($phoneNumber, '0');
>>>>>>> 75179b85 (.)

        // Prefisso italiano
        $prefix = '39';

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
        $phoneNumber = preg_replace("/\([0-9]+?\)/", "", $phoneNumber);
        
        // Rimuove spazi e caratteri non numerici
        $phoneNumber = preg_replace("/[^0-9]/", "", $phoneNumber);
        
        // Rimuove gli zeri iniziali
        $phoneNumber = ltrim($phoneNumber, '0');
        
        // Prefisso italiano
        $prefix = "39";
        
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
        // Verifica se il numero non inizia già con il prefisso corretto
        if (!preg_match('/^' . $prefix . '/', $phoneNumber)) {
            $phoneNumber = $prefix . $phoneNumber;
        }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)

        return "+{$phoneNumber}";
=======
        
        return "+$phoneNumber";
        
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
=======

        return "+{$phoneNumber}";
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
    }
}
