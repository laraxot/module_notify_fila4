<?php

declare(strict_types=1);

namespace Modules\Notify\Factories;

use Exception;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;
use Modules\Notify\Contracts\SMS\SmsActionContract;

/**
 * Factory per la creazione di azioni SMS.
 *
 * Questa factory centralizza la logica di selezione del driver SMS
 * e la creazione dell'azione corrispondente, seguendo il pattern di risoluzione dinamica
 * delle classi basato su convenzioni di naming.
 */
final class SmsActionFactory
{
    /**
     * Lista dei provider SMS supportati ufficialmente.
     *
     * Questa lista serve come documentazione e validazione
     * per garantire che i provider utilizzati siano quelli supportati.
     *
     * @var array<string>
     */
    protected array $supportedDrivers = [
        'smsfactor',
        'twilio',
        'nexmo',
        'plivo',
        'gammu',
        'netfun',
    ];

    /**
     * Mappatura di alias ai nomi dei driver effettivi.
     *
     * @var array<string, string>
     */
    protected array $driverAliases = [
        'vonage' => 'nexmo',
        'smsfac' => 'smsfactor',
        'textmessage' => 'twilio',
        'clickatell' => 'twilio',
        'aws' => 'aws',
        'amazon' => 'aws',
    ];

    /**
     * Crea un'azione SMS basata sul driver specificato o su quello predefinito.
     * Utilizza una risoluzione dinamica delle classi basata sulla convenzione di naming
     * per istanziare l'action corretta.
     *
     * @param string|null $driver Driver SMS da utilizzare (se null, viene utilizzato quello predefinito)
     * @return SmsActionContract Azione SMS corrispondente al driver
     * @throws Exception Se il driver specificato non è supportato o la classe non esiste
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
    public function create(null|string $driver = null): SmsActionContract
    {
        $driver ??= Config::get('sms.default', 'netfun');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
    public function create(?string $driver = null): SmsActionContract
    {
        $driver = $driver ?? Config::get('sms.default', 'netfun');
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
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
    public function create(null|string $driver = null): SmsActionContract
    {
        $driver ??= Config::get('sms.default', 'netfun');
=======
    public function create(?string $driver = null): SmsActionContract
    {
        $driver = $driver ?? Config::get('sms.default', 'netfun');
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> d09cb759 (.)
=======
    public function create(null|string $driver = null): SmsActionContract
    {
        $driver ??= Config::get('sms.default', 'netfun');
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
    public function create(null|string $driver = null): SmsActionContract
    {
        $driver ??= Config::get('sms.default', 'netfun');
>>>>>>> 9777d1b3 (.)
=======
=======
>>>>>>> d09cb759 (.)
>>>>>>> b93ef594b4 (.)
=======
    public function create(?string $driver = null): SmsActionContract
    {
        $driver = $driver ?? Config::get('sms.default', 'netfun');
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
    public function create(null|string $driver = null): SmsActionContract
    {
        $driver ??= Config::get('sms.default', 'netfun');
>>>>>>> 3f537838 (.)
=======
    public function create(null|string $driver = null): SmsActionContract
    {
        $driver ??= Config::get('sms.default', 'netfun');
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
    public function create(null|string $driver = null): SmsActionContract
    {
        $driver ??= Config::get('sms.default', 'netfun');
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
    public function create(null|string $driver = null): SmsActionContract
    {
        $driver ??= Config::get('sms.default', 'netfun');
>>>>>>> 3f537838 (.)
=======
    public function create(null|string $driver = null): SmsActionContract
    {
        $driver ??= Config::get('sms.default', 'netfun');
>>>>>>> 75179b85 (.)

        // Normalizza il nome del driver e assicura formato camelCase
        $normalizedDriver = $this->normalizeDriverName(is_string($driver) ? $driver : '');

        // Avvisa per driver non standard
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
=======
>>>>>>> 75179b85 (.)
        if (!in_array($normalizedDriver, $this->supportedDrivers, strict: true)) {
            Log::warning('Attempting to use non-standard SMS driver: ' . (is_string($driver) ? $driver : ''));
        }

        // Costruisci il nome della classe seguendo la convenzione
        $className = "Modules\\Notify\\Actions\\SMS\\Send" . ucfirst($normalizedDriver) . 'SMSAction';

        // Verifica se la classe esiste
        if (!class_exists($className)) {
            Log::error('SMS driver class not found', [
                'driver' => $driver,
                'normalized' => $normalizedDriver,
                'className' => $className,
            ]);

            throw new Exception(
                'Unsupported SMS driver: ' . (is_string($driver) ? $driver : '') . ". Class {$className} not found.",
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
=======
        if (!in_array($normalizedDriver, $this->supportedDrivers)) {
            Log::warning("Attempting to use non-standard SMS driver: " . (is_string($driver) ? $driver : ''));
=======
        if (!in_array($normalizedDriver, $this->supportedDrivers, strict: true)) {
            Log::warning('Attempting to use non-standard SMS driver: ' . (is_string($driver) ? $driver : ''));
>>>>>>> b93ef594b4 (.)
        }

        // Costruisci il nome della classe seguendo la convenzione
        $className = "Modules\\Notify\\Actions\\SMS\\Send" . ucfirst($normalizedDriver) . 'SMSAction';

        // Verifica se la classe esiste
        if (!class_exists($className)) {
            Log::error('SMS driver class not found', [
                'driver' => $driver,
                'normalized' => $normalizedDriver,
                'className' => $className,
            ]);

<<<<<<< HEAD
            throw new Exception("Unsupported SMS driver: " . (is_string($driver) ? $driver : '') . ". Class {$className} not found.");
>>>>>>> a12f125f4a (.)
=======
            throw new Exception(
                'Unsupported SMS driver: ' . (is_string($driver) ? $driver : '') . ". Class {$className} not found.",
            );
>>>>>>> b93ef594b4 (.)
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
        if (!in_array($normalizedDriver, $this->supportedDrivers)) {
            Log::warning("Attempting to use non-standard SMS driver: " . (is_string($driver) ? $driver : ''));
        }

        // Costruisci il nome della classe seguendo la convenzione
        $className = "Modules\\Notify\\Actions\\SMS\\Send" . ucfirst($normalizedDriver) . "SMSAction";

        // Verifica se la classe esiste
        if (!class_exists($className)) {
            Log::error("SMS driver class not found", [
                'driver' => $driver,
                'normalized' => $normalizedDriver,
                'className' => $className
            ]);

            throw new Exception("Unsupported SMS driver: " . (is_string($driver) ? $driver : '') . ". Class {$className} not found.");
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
>>>>>>> 75179b85 (.)
        }

        $instance = app($className);

        // Verifica che l'istanza implementi l'interfaccia corretta
        if (!($instance instanceof SmsActionContract)) {
            throw new Exception("Class {$className} does not implement SmsActionContract.");
        }

        return $instance;
    }

    /**
     * Normalizza il nome del driver eliminando trattini e underscore
     * e gestendo eventuali casi speciali/alias.
     *
     * @param string $driver Nome del driver da normalizzare
     * @return string Nome normalizzato
     */
    private function normalizeDriverName(string $driver): string
    {
        // Rimuovi trattini e underscore
        $normalized = str_replace(['-', '_', ' '], '', strtolower($driver));

        // Gestisci casi speciali e alias tramite la mappa di alias
        return $this->driverAliases[$normalized] ?? $normalized;
    }
}
