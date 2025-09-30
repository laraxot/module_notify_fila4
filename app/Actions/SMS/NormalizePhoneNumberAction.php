<?php

declare(strict_types=1);

namespace Modules\Notify\Actions\SMS;

use Illuminate\Support\Facades\Http;
use Modules\Notify\Contracts\SMS\SmsActionContract;
use Modules\Notify\Datas\SmsData;
<<<<<<< HEAD

use function Safe\preg_match;
use function Safe\preg_replace;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

use function Safe\preg_match;
use function Safe\preg_replace;
=======
use function Safe\preg_replace;
use function Safe\preg_match;
>>>>>>> a12f125f4a (.)
=======

use function Safe\preg_match;
use function Safe\preg_replace;
>>>>>>> b93ef594b4 (.)
=======
use function Safe\preg_replace;
use function Safe\preg_match;
>>>>>>> origin/develop
>>>>>>> d284d65 (.)

/**
 * Azione per l'invio di SMS tramite Agile Telecom.
 */
<<<<<<< HEAD
class NormalizePhoneNumberAction
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
class NormalizePhoneNumberAction
=======
class NormalizePhoneNumberAction 
>>>>>>> a12f125f4a (.)
=======
class NormalizePhoneNumberAction
>>>>>>> b93ef594b4 (.)
=======
class NormalizePhoneNumberAction 
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
        $phoneNumber = preg_replace("/\([0-9]+?\)/", '', $phoneNumber);

        // Rimuove spazi e caratteri non numerici
        $phoneNumber = preg_replace('/[^0-9]/', '', $phoneNumber);

        // Rimuove gli zeri iniziali
        $phoneNumber = is_string($phoneNumber) ? ltrim($phoneNumber, '0') : '';

        // Prefisso italiano
        $prefix = '39';

<<<<<<< HEAD
=======
=======
        $phoneNumber = preg_replace("/\([0-9]+?\)/", "", $phoneNumber);
        
=======
        $phoneNumber = preg_replace("/\([0-9]+?\)/", '', $phoneNumber);

>>>>>>> b93ef594b4 (.)
        // Rimuove spazi e caratteri non numerici
        $phoneNumber = preg_replace('/[^0-9]/', '', $phoneNumber);

        // Rimuove gli zeri iniziali
        $phoneNumber = ltrim($phoneNumber, '0');

        // Prefisso italiano
<<<<<<< HEAD
        $prefix = "39";
        
>>>>>>> a12f125f4a (.)
=======
        $prefix = '39';

>>>>>>> b93ef594b4 (.)
=======
        $phoneNumber = preg_replace("/\([0-9]+?\)/", "", $phoneNumber);
        
        // Rimuove spazi e caratteri non numerici
        $phoneNumber = preg_replace("/[^0-9]/", "", $phoneNumber);
        
        // Rimuove gli zeri iniziali
        $phoneNumber = ltrim($phoneNumber, '0');
        
        // Prefisso italiano
        $prefix = "39";
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        // Verifica se il numero non inizia già con il prefisso corretto
        if (!preg_match('/^' . $prefix . '/', $phoneNumber)) {
            $phoneNumber = $prefix . $phoneNumber;
        }
<<<<<<< HEAD

        return "+{$phoneNumber}";
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

        return "+{$phoneNumber}";
=======
        
        return "+$phoneNumber";
        
>>>>>>> a12f125f4a (.)
=======

        return "+{$phoneNumber}";
>>>>>>> b93ef594b4 (.)
=======
        
        return "+$phoneNumber";
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
    }
}
