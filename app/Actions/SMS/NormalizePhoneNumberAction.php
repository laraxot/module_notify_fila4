<?php

declare(strict_types=1);

namespace Modules\Notify\Actions\SMS;

<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Http;
use Modules\Notify\Contracts\SMS\SmsActionContract;
use Modules\Notify\Datas\SmsData;
<<<<<<< HEAD
<<<<<<< HEAD

>>>>>>> 99ff506 (.)
use function Safe\preg_match;
use function Safe\preg_replace;
=======
use function Safe\preg_replace;
use function Safe\preg_match;
>>>>>>> b19cd40 (.)
=======

use function Safe\preg_match;
use function Safe\preg_replace;
>>>>>>> 4e2ebfb (.)

/**
 * Azione per l'invio di SMS tramite Agile Telecom.
 */
<<<<<<< HEAD
<<<<<<< HEAD
class NormalizePhoneNumberAction
=======
class NormalizePhoneNumberAction 
>>>>>>> b19cd40 (.)
=======
class NormalizePhoneNumberAction
>>>>>>> 4e2ebfb (.)
{
    public function execute(string|array $phoneNumber): string
    {
        // Convert array to string if needed
        if (is_array($phoneNumber)) {
            $phoneNumber = implode('', $phoneNumber);
        }
<<<<<<< HEAD

=======
        
>>>>>>> 99ff506 (.)
        // Rimuove parentesi e il loro contenuto
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
        $phoneNumber = preg_replace("/\([0-9]+?\)/", '', $phoneNumber);

        // Rimuove spazi e caratteri non numerici
        $phoneNumber = preg_replace('/[^0-9]/', '', $phoneNumber);

        // Rimuove gli zeri iniziali
        $phoneNumber = is_string($phoneNumber) ? ltrim($phoneNumber, '0') : '';

        // Prefisso italiano
        $prefix = '39';

<<<<<<< HEAD
=======
        $phoneNumber = preg_replace("/\([0-9]+?\)/", "", $phoneNumber);
        
        // Rimuove spazi e caratteri non numerici
        $phoneNumber = preg_replace("/[^0-9]/", "", $phoneNumber);
        
        // Rimuove gli zeri iniziali
        $phoneNumber = ltrim($phoneNumber, '0');
        
        // Prefisso italiano
        $prefix = "39";
        
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
        // Verifica se il numero non inizia già con il prefisso corretto
<<<<<<< HEAD
        if (! preg_match('/^'.$prefix.'/', $phoneNumber)) {
            $phoneNumber = $prefix.$phoneNumber;
=======
        if (!preg_match('/^' . $prefix . '/', $phoneNumber)) {
            $phoneNumber = $prefix . $phoneNumber;
>>>>>>> 99ff506 (.)
        }
<<<<<<< HEAD
<<<<<<< HEAD

        return "+{$phoneNumber}";
=======
        
        return "+$phoneNumber";
        
>>>>>>> b19cd40 (.)
=======

        return "+{$phoneNumber}";
>>>>>>> 4e2ebfb (.)
    }
}
