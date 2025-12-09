<?php

declare(strict_types=1);

namespace Modules\Notify\Factories;

use Exception;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;
<<<<<<< HEAD
use Modules\Notify\Contracts\SmsActionContract;
=======
use Modules\Notify\Contracts\SMS\SmsActionContract;
>>>>>>> 75179b8 (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
     * @param string|null $driver Driver SMS da utilizzare (se null, viene utilizzato quello predefinito)
=======
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
     * @param  string|null  $driver  Driver SMS da utilizzare (se null, viene utilizzato quello predefinito)
>>>>>>> f1c9518b (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 4689a827 (.)
    public function create(null|string $driver = null): SmsActionContract
=======
    public function create(?string $driver = null): SmsActionContract
=======
     * @param string|null $driver Driver SMS da utilizzare (se null, viene utilizzato quello predefinito)
     * @return SmsActionContract Azione SMS corrispondente al driver
     * @throws Exception Se il driver specificato non è supportato o la classe non esiste
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function create(null|string $driver = null): SmsActionContract
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
    {
        $driver ??= Config::get('sms.default', 'netfun');
<<<<<<< HEAD
<<<<<<< HEAD
=======
    public function create(?string $driver = null): SmsActionContract
=======
<<<<<<< HEAD
    public function create(null|string $driver = null): SmsActionContract
>>>>>>> f813254 (.)
    {
        $driver ??= Config::get('sms.default', 'netfun');
>>>>>>> 2effe245 (.)
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
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 3f39ac8b (.)
    public function create(?string $driver = null): SmsActionContract
    {
        $driver = $driver ?? Config::get('sms.default', 'netfun');
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4689a827 (.)
    public function create(null|string $driver = null): SmsActionContract
    {
        $driver ??= Config::get('sms.default', 'netfun');
<<<<<<< HEAD
=======
    public function create(null|string $driver = null): SmsActionContract
    {
        $driver ??= Config::get('sms.default', 'netfun');
>>>>>>> f2e64178 (.)
=======
    public function create(null|string $driver = null): SmsActionContract
    {
        $driver ??= Config::get('sms.default', 'netfun');
>>>>>>> 2effe245 (.)
=======
    public function create(?string $driver = null): SmsActionContract
    {
        $driver = $driver ?? Config::get('sms.default', 'netfun');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 207ac35e (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 4689a827 (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> f2e64178 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 2effe245 (.)
=======
    public function create(null|string $driver = null): SmsActionContract
    {
        $driver ??= Config::get('sms.default', 'netfun');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
>>>>>>> b93ef594b4 (.)
=======
    public function create(?string $driver = null): SmsActionContract
    {
        $driver = $driver ?? Config::get('sms.default', 'netfun');
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> de02998b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
    public function create(null|string $driver = null): SmsActionContract
    {
        $driver ??= Config::get('sms.default', 'netfun');
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
    public function create(null|string $driver = null): SmsActionContract
    {
        $driver ??= Config::get('sms.default', 'netfun');
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
=======
>>>>>>> d45a0226 (.)
    public function create(?string $driver = null): SmsActionContract
=======
    public function create(null|string $driver = null): SmsActionContract
>>>>>>> f5f1cb1 (.)
    {
        $driver ??= Config::get('sms.default', 'netfun');
>>>>>>> 985c7bda (.)
=======
=======
    public function create(?string $driver = null): SmsActionContract
    {
        $driver = $driver ?? Config::get('sms.default', 'netfun');
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 2fc60436 (.)
=======
=======
    public function create(null|string $driver = null): SmsActionContract
    {
        $driver ??= Config::get('sms.default', 'netfun');
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
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
        if (!in_array($normalizedDriver, $this->supportedDrivers, strict: true)) {
            Log::warning('Attempting to use non-standard SMS driver: ' . (is_string($driver) ? $driver : ''));
=======
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
        if (! in_array($normalizedDriver, $this->supportedDrivers, strict: true)) {
            Log::warning('Attempting to use non-standard SMS driver: '.(is_string($driver) ? $driver : ''));
>>>>>>> f1c9518b (.)
=======
        if (! in_array($normalizedDriver, $this->supportedDrivers, strict: true)) {
            Log::warning('Attempting to use non-standard SMS driver: '.(is_string($driver) ? $driver : ''));
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
        if (!in_array($normalizedDriver, $this->supportedDrivers, strict: true)) {
            Log::warning('Attempting to use non-standard SMS driver: ' . (is_string($driver) ? $driver : ''));
>>>>>>> f813254 (.)
>>>>>>> 2effe245 (.)
=======
        if (! in_array($normalizedDriver, $this->supportedDrivers, strict: true)) {
            Log::warning('Attempting to use non-standard SMS driver: '.(is_string($driver) ? $driver : ''));
>>>>>>> 985c7bda (.)
=======
        if (! in_array($normalizedDriver, $this->supportedDrivers, strict: true)) {
            Log::warning('Attempting to use non-standard SMS driver: '.(is_string($driver) ? $driver : ''));
=======
        if (!in_array($normalizedDriver, $this->supportedDrivers, strict: true)) {
            Log::warning('Attempting to use non-standard SMS driver: ' . (is_string($driver) ? $driver : ''));
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
        }

        // Costruisci il nome della classe seguendo la convenzione
        $className = "Modules\\Notify\\Actions\\SMS\\Send" . ucfirst($normalizedDriver) . 'SMSAction';

        // Verifica se la classe esiste
<<<<<<< HEAD
        if (!class_exists($className)) {
=======
        if (! class_exists($className)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 95531e1 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
=======
>>>>>>> f5f1cb1 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
=======
>>>>>>> 82ae73b (.)
<<<<<<< HEAD
>>>>>>> 2fc60436 (.)
=======
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
>>>>>>> ce89c8bb (.)
        if (!in_array($normalizedDriver, $this->supportedDrivers, strict: true)) {
            Log::warning('Attempting to use non-standard SMS driver: ' . (is_string($driver) ? $driver : ''));
        }

        // Costruisci il nome della classe seguendo la convenzione
        $className = "Modules\\Notify\\Actions\\SMS\\Send" . ucfirst($normalizedDriver) . 'SMSAction';

        // Verifica se la classe esiste
        if (!class_exists($className)) {
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
            Log::error('SMS driver class not found', [
                'driver' => $driver,
                'normalized' => $normalizedDriver,
                'className' => $className,
            ]);

            throw new Exception(
<<<<<<< HEAD
<<<<<<< HEAD
                'Unsupported SMS driver: ' . (is_string($driver) ? $driver : '') . ". Class {$className} not found.",
=======
<<<<<<< HEAD
                'Unsupported SMS driver: '.(is_string($driver) ? $driver : '').". Class {$className} not found.",
=======
                'Unsupported SMS driver: ' . (is_string($driver) ? $driver : '') . ". Class {$className} not found.",
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
                'Unsupported SMS driver: '.(is_string($driver) ? $driver : '').". Class {$className} not found.",
=======
                'Unsupported SMS driver: ' . (is_string($driver) ? $driver : '') . ". Class {$className} not found.",
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
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
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
        }

        $instance = app($className);

        // Verifica che l'istanza implementi l'interfaccia corretta
<<<<<<< HEAD
<<<<<<< HEAD
        if (!($instance instanceof SmsActionContract)) {
=======
<<<<<<< HEAD
        if (! ($instance instanceof SmsActionContract)) {
=======
        if (!($instance instanceof SmsActionContract)) {
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
        if (! ($instance instanceof SmsActionContract)) {
=======
        if (!($instance instanceof SmsActionContract)) {
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
            throw new Exception("Class {$className} does not implement SmsActionContract.");
        }

        return $instance;
    }

    /**
     * Normalizza il nome del driver eliminando trattini e underscore
     * e gestendo eventuali casi speciali/alias.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param string $driver Nome del driver da normalizzare
=======
<<<<<<< HEAD
     * @param  string  $driver  Nome del driver da normalizzare
=======
     * @param string $driver Nome del driver da normalizzare
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
     * @param  string  $driver  Nome del driver da normalizzare
=======
     * @param string $driver Nome del driver da normalizzare
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
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
