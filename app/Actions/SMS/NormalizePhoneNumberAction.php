<?php

declare(strict_types=1);

namespace Modules\Notify\Actions\SMS;

use Illuminate\Support\Facades\Http;
use Modules\Notify\Contracts\SMS\SmsActionContract;
use Modules\Notify\Datas\SmsData;

use Illuminate\Support\Facades\Http;
use Modules\Notify\Contracts\SMS\SmsActionContract;
use Modules\Notify\Datas\SmsData;






use function Safe\preg_match;
use function Safe\preg_replace;

use function Safe\preg_match;
use function Safe\preg_replace;

use function Safe\preg_match;
use function Safe\preg_replace;
use function Safe\preg_replace;
use function Safe\preg_match;

use function Safe\preg_match;
use function Safe\preg_replace;

use function Safe\preg_match;
use function Safe\preg_replace;

use function Safe\preg_match;
use function Safe\preg_replace;
use function Safe\preg_replace;
use function Safe\preg_match;

use function Safe\preg_match;
use function Safe\preg_replace;

use function Safe\preg_match;
use function Safe\preg_replace;
use function Safe\preg_replace;
use function Safe\preg_match;

use function Safe\preg_match;
use function Safe\preg_replace;

use function Safe\preg_match;
use function Safe\preg_replace;
use function Safe\preg_replace;
use function Safe\preg_match;

use function Safe\preg_match;
use function Safe\preg_replace;

use function Safe\preg_match;
use function Safe\preg_replace;

use function Safe\preg_match;
use function Safe\preg_replace;

use function Safe\preg_match;
use function Safe\preg_replace;
use function Safe\preg_replace;
use function Safe\preg_match;

use function Safe\preg_match;
use function Safe\preg_replace;

use function Safe\preg_match;
use function Safe\preg_replace;
use function Safe\preg_replace;
use function Safe\preg_match;

use function Safe\preg_match;
use function Safe\preg_replace;

use function Safe\preg_match;
use function Safe\preg_replace;
use function Safe\preg_replace;
use function Safe\preg_match;
use function Safe\preg_match;
use function Safe\preg_replace;
use Illuminate\Support\Facades\Http;
use Modules\Notify\Contracts\SMS\SmsActionContract;
use Modules\Notify\Datas\SmsData;

use function Safe\preg_match;
use function Safe\preg_replace;
use function Safe\preg_replace;
use function Safe\preg_match;

use function Safe\preg_match;
use function Safe\preg_replace;

use function Safe\preg_match;
use function Safe\preg_replace;
use function Safe\preg_replace;
use function Safe\preg_match;
use function Safe\preg_match;
use function Safe\preg_replace;

/**
 * Azione per l'invio di SMS tramite Agile Telecom.
 */
class NormalizePhoneNumberAction
{
    public function execute(string|array $phoneNumber): string
    {
        // Convert array to string if needed
        if (is_array($phoneNumber)) {
            $phoneNumber = implode('', $phoneNumber);
        }
        

        

        
    public function execute(string $phoneNumber): string
    {
    public function execute(string $phoneNumber): string
    {

        
    public function execute(string $phoneNumber): string
    {
    public function execute(string $phoneNumber): string
    {
        // Rimuove parentesi e il loro contenuto
class NormalizePhoneNumberAction
class NormalizePhoneNumberAction 
{
    public function execute(string|array $phoneNumber): string
    {
        // Convert array to string if needed
        if (is_array($phoneNumber)) {
            $phoneNumber = implode('', $phoneNumber);
        }
        
        // Rimuove parentesi e il loro contenuto
class NormalizePhoneNumberAction
{
    public function execute(string|array $phoneNumber): string
    {
        // Convert array to string if needed
        if (is_array($phoneNumber)) {
            $phoneNumber = implode('', $phoneNumber);
        }
        

    public function execute(string $phoneNumber): string
    {
    public function execute(string $phoneNumber): string
    {
    public function execute(string $phoneNumber): string
    {
        // Rimuove parentesi e il loro contenuto
class NormalizePhoneNumberAction
{
    public function execute(string|array $phoneNumber): string
    {
        // Convert array to string if needed
        if (is_array($phoneNumber)) {
            $phoneNumber = implode('', $phoneNumber);
        }
        

        
    public function execute(string $phoneNumber): string
    {
        // Rimuove parentesi e il loro contenuto
class NormalizePhoneNumberAction
{
    public function execute(string|array $phoneNumber): string
    {
        // Convert array to string if needed
        if (is_array($phoneNumber)) {
            $phoneNumber = implode('', $phoneNumber);
        }
        

        
    public function execute(string $phoneNumber): string
    {
    public function execute(string $phoneNumber): string
    {
        // Rimuove parentesi e il loro contenuto
        $phoneNumber = preg_replace("/\([0-9]+?\)/", '', $phoneNumber);

        // Rimuove spazi e caratteri non numerici
        $phoneNumber = preg_replace('/[^0-9]/', '', $phoneNumber);

        // Rimuove gli zeri iniziali
        $phoneNumber = is_string($phoneNumber) ? ltrim($phoneNumber, '0') : '';
        $phoneNumber = is_string($phoneNumber) ? ltrim($phoneNumber, '0') : '';
        $phoneNumber = ltrim($phoneNumber, '0');
        $phoneNumber = is_string($phoneNumber) ? ltrim($phoneNumber, '0') : '';
        $phoneNumber = is_string($phoneNumber) ? ltrim($phoneNumber, '0') : '';
        $phoneNumber = ltrim($phoneNumber, '0');
        $phoneNumber = is_string($phoneNumber) ? ltrim($phoneNumber, '0') : '';
        $phoneNumber = is_string($phoneNumber) ? ltrim($phoneNumber, '0') : '';
        $phoneNumber = is_string($phoneNumber) ? ltrim($phoneNumber, '0') : '';
        $phoneNumber = is_string($phoneNumber) ? ltrim($phoneNumber, '0') : '';
        $phoneNumber = ltrim($phoneNumber, '0');
        $phoneNumber = ltrim($phoneNumber, '0');
        $phoneNumber = is_string($phoneNumber) ? ltrim($phoneNumber, '0') : '';
        $phoneNumber = is_string($phoneNumber) ? ltrim($phoneNumber, '0') : '';
        $phoneNumber = is_string($phoneNumber) ? ltrim($phoneNumber, '0') : '';
        $phoneNumber = is_string($phoneNumber) ? ltrim($phoneNumber, '0') : '';
        $phoneNumber = ltrim($phoneNumber, '0');

        // Prefisso italiano
        $prefix = '39';

        $phoneNumber = preg_replace("/\([0-9]+?\)/", "", $phoneNumber);
        
        $phoneNumber = preg_replace("/\([0-9]+?\)/", '', $phoneNumber);

        // Rimuove spazi e caratteri non numerici
        $phoneNumber = preg_replace('/[^0-9]/', '', $phoneNumber);

        // Rimuove gli zeri iniziali
        $phoneNumber = ltrim($phoneNumber, '0');

        // Prefisso italiano
        $prefix = "39";
        
        $prefix = '39';

        $phoneNumber = preg_replace("/\([0-9]+?\)/", "", $phoneNumber);
        
        // Rimuove spazi e caratteri non numerici
        $phoneNumber = preg_replace("/[^0-9]/", "", $phoneNumber);
        
        // Rimuove gli zeri iniziali
        $phoneNumber = ltrim($phoneNumber, '0');
        
        // Prefisso italiano
        $prefix = "39";
        
        // Verifica se il numero non inizia già con il prefisso corretto
        if (!preg_match('/^' . $prefix . '/', $phoneNumber)) {
            $phoneNumber = $prefix . $phoneNumber;
        if (! preg_match('/^'.$prefix.'/', $phoneNumber)) {
            $phoneNumber = $prefix.$phoneNumber;
        if (!preg_match('/^' . $prefix . '/', $phoneNumber)) {
            $phoneNumber = $prefix . $phoneNumber;
        }

        return "+{$phoneNumber}";
        
        return "+$phoneNumber";
        

        return "+{$phoneNumber}";

        return "+{$phoneNumber}";

        return "+{$phoneNumber}";

        return "+{$phoneNumber}";

        return "+{$phoneNumber}";

        return "+{$phoneNumber}";

        return "+{$phoneNumber}";

        return "+{$phoneNumber}";

        return "+{$phoneNumber}";

        return "+{$phoneNumber}";

        return "+{$phoneNumber}";

        return "+{$phoneNumber}";
        
        return "+$phoneNumber";
        

        return "+{$phoneNumber}";

        return "+{$phoneNumber}";

        return "+{$phoneNumber}";

        return "+{$phoneNumber}";

        return "+{$phoneNumber}";

        return "+{$phoneNumber}";

        return "+{$phoneNumber}";

        return "+{$phoneNumber}";

        return "+{$phoneNumber}";

        return "+{$phoneNumber}";

        return "+{$phoneNumber}";

        return "+{$phoneNumber}";

        return "+{$phoneNumber}";
        // Verifica se il numero non inizia già con il prefisso corretto
        if (!preg_match('/^' . $prefix . '/', $phoneNumber)) {
            $phoneNumber = $prefix . $phoneNumber;
        }

        return "+{$phoneNumber}";

        return "+{$phoneNumber}";
        
        return "+$phoneNumber";
        

        return "+{$phoneNumber}";

        return "+{$phoneNumber}";
        
        return "+$phoneNumber";
        

        return "+{$phoneNumber}";

        return "+{$phoneNumber}";

        return "+{$phoneNumber}";

        return "+{$phoneNumber}";

        return "+{$phoneNumber}";

        return "+{$phoneNumber}";

        return "+{$phoneNumber}";
    }
}
