<?php

declare(strict_types=1);

namespace Modules\Notify\Actions\SMS;

<<<<<<< HEAD
use Webmozart\Assert\Assert;

use function Safe\preg_match;
use function Safe\preg_replace;
=======
use Illuminate\Support\Facades\Http;
use Modules\Notify\Contracts\SMS\SmsActionContract;
use Modules\Notify\Datas\SmsData;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> c0f3d67cc (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 4689a827 (.)

use function Safe\preg_match;
use function Safe\preg_replace;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use function Safe\preg_replace;
use function Safe\preg_match;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
=======
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4689a827 (.)
>>>>>>> c0f3d67cc (.)

use function Safe\preg_match;
use function Safe\preg_replace;
=======
use function Safe\preg_replace;
use function Safe\preg_match;
>>>>>>> a12f125f4a (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======

use function Safe\preg_match;
use function Safe\preg_replace;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======

use function Safe\preg_match;
use function Safe\preg_replace;
>>>>>>> 9777d1b3 (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
>>>>>>> b93ef594b4 (.)
=======
use function Safe\preg_replace;
use function Safe\preg_match;
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======

use function Safe\preg_match;
use function Safe\preg_replace;
>>>>>>> 3f537838 (.)
=======

use function Safe\preg_match;
use function Safe\preg_replace;
>>>>>>> 75179b85 (.)
=======
use function Safe\preg_replace;
use function Safe\preg_match;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======

use function Safe\preg_match;
use function Safe\preg_replace;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======

use function Safe\preg_match;
use function Safe\preg_replace;
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======

use function Safe\preg_match;
use function Safe\preg_replace;
>>>>>>> 3f537838 (.)
=======
use function Safe\preg_replace;
use function Safe\preg_match;
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
<<<<<<< HEAD
>>>>>>> 75cb51873 (.)
=======
=======
>>>>>>> 011072e4 (.)
=======

use function Safe\preg_match;
use function Safe\preg_replace;
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
>>>>>>> c0f3d67cc (.)

/**
 * Azione per l'invio di SMS tramite Agile Telecom.
 */
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
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
>>>>>>> 62b0c9c (.)
        // Rimuove parentesi e il loro contenuto
>>>>>>> c0f3d67cc (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> c0f3d67cc (.)
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
>>>>>>> 75cb51873 (.)
class NormalizePhoneNumberAction
=======
class NormalizePhoneNumberAction 
>>>>>>> b19cd40 (.)
{
    public function execute(string $phoneNumber): string
    {
        // Rimuove parentesi e il loro contenuto
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
=======
>>>>>>> 4689a827 (.)
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
class NormalizePhoneNumberAction
{
    public function execute(string|array $phoneNumber): string
    {
        // Convert array to string if needed
        if (is_array($phoneNumber)) {
            $phoneNumber = implode('', $phoneNumber);
        }
        
        // Rimuove parentesi e il loro contenuto
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> 75cb51873 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
>>>>>>> c0f3d67cc (.)
        $phoneNumber = preg_replace("/\([0-9]+?\)/", '', $phoneNumber);
        Assert::string($phoneNumber, 'Failed to remove parentheses from phone number');

        // Rimuove spazi e caratteri non numerici
        $phoneNumber = preg_replace('/[^0-9]/', '', $phoneNumber);
        Assert::string($phoneNumber, 'Failed to remove non-numeric characters from phone number');

        // Rimuove gli zeri iniziali
        $phoneNumber = ltrim($phoneNumber, '0');

        // Prefisso italiano
        $prefix = '39';

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
        $phoneNumber = is_string($phoneNumber) ? ltrim($phoneNumber, '0') : '';
>>>>>>> a404ea71 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)

        // Prefisso italiano
<<<<<<< HEAD
        $prefix = "39";
        
>>>>>>> a12f125f4a (.)
=======
        $prefix = '39';

>>>>>>> b93ef594b4 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> de02998b (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> c0f3d67cc (.)
        $phoneNumber = preg_replace("/\([0-9]+?\)/", "", $phoneNumber);
        
        // Rimuove spazi e caratteri non numerici
        $phoneNumber = preg_replace("/[^0-9]/", "", $phoneNumber);
        
        // Rimuove gli zeri iniziali
        $phoneNumber = ltrim($phoneNumber, '0');
        
        // Prefisso italiano
        $prefix = "39";
        
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
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
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
<<<<<<< HEAD
>>>>>>> 75cb51873 (.)
=======
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
>>>>>>> c0f3d67cc (.)
        // Verifica se il numero non inizia già con il prefisso corretto
        if (! preg_match('/^'.$prefix.'/', $phoneNumber)) {
            $phoneNumber = $prefix.$phoneNumber;
        }
<<<<<<< HEAD

        return "+{$phoneNumber}";
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> de02998b (.)

        return "+{$phoneNumber}";
=======
        
        return "+$phoneNumber";
        
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

        return "+{$phoneNumber}";
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 207ac35e (.)
=======

        return "+{$phoneNumber}";
>>>>>>> 4e2ebfb (.)
<<<<<<< HEAD
>>>>>>> 207ac35e (.)
=======

        return "+{$phoneNumber}";
>>>>>>> 9777d1b3 (.)
=======

        return "+{$phoneNumber}";
=======
=======

        return "+{$phoneNumber}";
=======
>>>>>>> d09cb759 (.)
=======

        return "+{$phoneNumber}";
=======
>>>>>>> 4689a827 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======

        return "+{$phoneNumber}";
>>>>>>> 3f537838 (.)
=======

        return "+{$phoneNumber}";
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======

        return "+{$phoneNumber}";
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======

        return "+{$phoneNumber}";
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
<<<<<<< HEAD
>>>>>>> 75cb51873 (.)
=======
=======
>>>>>>> 011072e4 (.)
=======

        return "+{$phoneNumber}";
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
>>>>>>> c0f3d67cc (.)
    }
}
