<?php

declare(strict_types=1);

namespace Modules\Notify\Actions\SMS;

<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 7148d73 (.)
use Illuminate\Support\Facades\Http;
use Modules\Notify\Contracts\SMS\SmsActionContract;
use Modules\Notify\Datas\SmsData;

<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
>>>>>>> 7148d73 (.)
use function Safe\preg_match;
use function Safe\preg_replace;

/**
 * Azione per l'invio di SMS tramite Agile Telecom.
 */
class NormalizePhoneNumberAction
{
<<<<<<< HEAD
<<<<<<< HEAD
    public function execute(string|array $phoneNumber): string
    {
        // Convert array to string if needed
        if (is_array($phoneNumber)) {
            $phoneNumber = implode('', $phoneNumber);
        }

=======
    public function execute(string $phoneNumber): string
    {
>>>>>>> 75179b8 (.)
=======
    public function execute(string $phoneNumber): string
    {
>>>>>>> 7148d73 (.)
        // Rimuove parentesi e il loro contenuto
        $phoneNumber = preg_replace("/\([0-9]+?\)/", '', $phoneNumber);

        // Rimuove spazi e caratteri non numerici
        $phoneNumber = preg_replace('/[^0-9]/', '', $phoneNumber);

        // Rimuove gli zeri iniziali
<<<<<<< HEAD
<<<<<<< HEAD
        $phoneNumber = is_string($phoneNumber) ? ltrim($phoneNumber, '0') : '';
=======
        $phoneNumber = ltrim($phoneNumber, '0');
>>>>>>> 75179b8 (.)
=======
        $phoneNumber = ltrim($phoneNumber, '0');
>>>>>>> 7148d73 (.)

        // Prefisso italiano
        $prefix = '39';

        // Verifica se il numero non inizia già con il prefisso corretto
<<<<<<< HEAD
<<<<<<< HEAD
        if (! preg_match('/^'.$prefix.'/', $phoneNumber)) {
            $phoneNumber = $prefix.$phoneNumber;
=======
        if (!preg_match('/^' . $prefix . '/', $phoneNumber)) {
            $phoneNumber = $prefix . $phoneNumber;
>>>>>>> 75179b8 (.)
=======
        if (!preg_match('/^' . $prefix . '/', $phoneNumber)) {
            $phoneNumber = $prefix . $phoneNumber;
>>>>>>> 7148d73 (.)
        }

        return "+{$phoneNumber}";
    }
}
