<?php

declare(strict_types=1);

namespace Modules\Notify\Actions\SMS;

use Illuminate\Support\Facades\Http;
use Modules\Notify\Contracts\SMS\SmsActionContract;
use Modules\Notify\Datas\SmsData;
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> b19cd40 (.)
=======

>>>>>>> 75179b85 (.)
use function Safe\preg_split;

/**
 * Azione per l'invio di SMS tramite Agile Telecom.
 */
<<<<<<< HEAD
<<<<<<< HEAD
class FormatSmsMessageAction
=======
class FormatSmsMessageAction 
>>>>>>> b19cd40 (.)
=======
class FormatSmsMessageAction
>>>>>>> 75179b85 (.)
{
    public function execute(string $message): array
    {
        // Sanitizza i caratteri accentati
        $formattedMessage = str_replace(
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
            ['à', 'è', 'é', 'ì', 'ò', 'ù', 'À', 'È', 'É', 'Ì', 'Ò', 'Ù', '€'],
            ["a'", "e'", "e'", "i'", "o'", "u'", "A'", "E'", "E'", "I'", "O'", "U'", 'EUR'],
            $message,
        );

<<<<<<< HEAD
=======
            ["à", "è", "é", "ì", "ò", "ù", "À", "È", "É", "Ì", "Ò", "Ù", "€"],
            ["a'", "e'", "e'", "i'", "o'", "u'", "A'", "E'", "E'", "I'", "O'", "U'", "EUR"],
            $message
        );
        
>>>>>>> b19cd40 (.)
=======
>>>>>>> 75179b85 (.)
        // Calcola il numero di caratteri considerando doppi i caratteri speciali
        $characterCount = mb_strlen($formattedMessage);
        $specialChars = ['^', '{', '}', '[', ']', '~', '\\', '|'];
        $specialCharsEscaped = ['\^', '{', '}', '\[', '\]', '~', '\\\\', '\|'];
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)

        foreach ($specialChars as $index => $specialChar) {
            $messageParts = preg_split("/{$specialCharsEscaped[$index]}/", $formattedMessage, -1, PREG_SPLIT_NO_EMPTY);

            // preg_split restituisce sempre un array, quindi controlliamo se è valido

            $specialCharCount = count($messageParts) - 1;

<<<<<<< HEAD
=======
        
        foreach ($specialChars as $index => $specialChar) {
            $messageParts = preg_split("/{$specialCharsEscaped[$index]}/", $formattedMessage, -1, PREG_SPLIT_NO_EMPTY);
            
            // preg_split restituisce sempre un array, quindi controlliamo se è valido
            
            $specialCharCount = count($messageParts) - 1;
            
            
>>>>>>> b19cd40 (.)
=======
>>>>>>> 75179b85 (.)
            if (str_starts_with($formattedMessage, $specialChar)) {
                $specialCharCount++;
            }
            if (str_ends_with($formattedMessage, $specialChar)) {
                $specialCharCount++;
            }
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)

            // Ogni carattere speciale conta come 2 caratteri
            $characterCount += $specialCharCount;
        }

<<<<<<< HEAD
=======
            
            // Ogni carattere speciale conta come 2 caratteri
            $characterCount += $specialCharCount;
        }
        
>>>>>>> b19cd40 (.)
=======
>>>>>>> 75179b85 (.)
        // Calcola il numero di SMS
        if ($characterCount <= 160) {
            $smsCount = 1;
        } else {
            // Per messaggi concatenati, ogni SMS è di 153 caratteri
            $smsCount = intval($characterCount / 153);
            if (($characterCount % 153) > 0) {
                $smsCount++;
            }
        }
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> b19cd40 (.)
=======

>>>>>>> 75179b85 (.)
        return [$formattedMessage, $characterCount, $smsCount];
    }
}
