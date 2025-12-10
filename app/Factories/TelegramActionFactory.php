<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Modules\Notify\Factories;

use Exception;
use Illuminate\Support\Facades\Config;
<<<<<<< HEAD
use Modules\Notify\Actions\Telegram\SendBotmanTelegramAction;
use Modules\Notify\Actions\Telegram\SendNutgramTelegramAction;
use Modules\Notify\Actions\Telegram\SendOfficialTelegramAction;
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
use Modules\Notify\Actions\Telegram\SendBotmanTelegramAction;
use Modules\Notify\Actions\Telegram\SendNutgramTelegramAction;
use Modules\Notify\Actions\Telegram\SendOfficialTelegramAction;
=======
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> f1c9518b (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> f1c9518b (.)
=======
>>>>>>> e53a56570 (.)
=======
use Modules\Notify\Actions\Telegram\SendBotmanTelegramAction;
use Modules\Notify\Actions\Telegram\SendNutgramTelegramAction;
use Modules\Notify\Actions\Telegram\SendOfficialTelegramAction;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
use Modules\Notify\Actions\Telegram\SendBotmanTelegramAction;
use Modules\Notify\Actions\Telegram\SendNutgramTelegramAction;
use Modules\Notify\Actions\Telegram\SendOfficialTelegramAction;
>>>>>>> 75179b85 (.)
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
use Modules\Notify\Actions\Telegram\SendBotmanTelegramAction;
use Modules\Notify\Actions\Telegram\SendNutgramTelegramAction;
use Modules\Notify\Actions\Telegram\SendOfficialTelegramAction;
>>>>>>> 75179b85 (.)
=======
use Modules\Notify\Actions\Telegram\SendBotmanTelegramAction;
use Modules\Notify\Actions\Telegram\SendNutgramTelegramAction;
use Modules\Notify\Actions\Telegram\SendOfficialTelegramAction;
>>>>>>> 75179b855 (.)
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
>>>>>>> laraxot/develop
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
>>>>>>> e53a56570 (.)
use Modules\Notify\Contracts\TelegramProviderActionInterface;

/**
 * Factory per la creazione di azioni Telegram.
<<<<<<< HEAD
 *
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> de02998b (.)
<<<<<<< HEAD
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
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
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
<<<<<<< HEAD
=======
>>>>>>> 10292b60a (.)
=======
=======
>>>>>>> 207ac35e (.)
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> b207a9b1a (.)
=======
>>>>>>> 1619767d8 (.)
=======
=======
>>>>>>> 3f39ac8b (.)
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 2f135ef98 (.)
 *
=======
 * 
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 10292b60a (.)
=======
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> b207a9b1a (.)
=======
>>>>>>> 1619767d8 (.)
=======
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 2f135ef98 (.)
=======
 *
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
 *
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
 *
>>>>>>> 9777d1b3 (.)
=======
 *
=======
=======
 *
=======
>>>>>>> d09cb759 (.)
=======
 *
=======
>>>>>>> d09cb759 (.)
=======
 *
=======
>>>>>>> 4689a827 (.)
=======
 *
=======
>>>>>>> f2e64178 (.)
=======
 *
=======
>>>>>>> 2effe245 (.)
<<<<<<< HEAD
=======
 *
=======
>>>>>>> 4689a827 (.)
=======
 *
=======
>>>>>>> f2e64178 (.)
=======
 *
=======
>>>>>>> 2effe245 (.)
=======
 *
=======
>>>>>>> d09cb759 (.)
=======
 *
=======
>>>>>>> 4689a827 (.)
=======
 *
=======
>>>>>>> f2e64178 (.)
=======
 *
=======
>>>>>>> 2effe245 (.)
=======
 *
=======
>>>>>>> d09cb759 (.)
=======
 *
=======
>>>>>>> d09cb759 (.)
=======
 *
=======
>>>>>>> 4689a827 (.)
=======
 *
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 510809c6f (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 *
=======
 * 
>>>>>>> a12f125f4a (.)
=======
 *
>>>>>>> b93ef594b4 (.)
=======
 * 
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 510809c6f (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> 23f115647 (.)
=======
>>>>>>> 26d39e2eb (.)
>>>>>>> d09cb759 (.)
=======
 *
>>>>>>> 3f537838 (.)
=======
 *
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
 *
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
 *
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
 *
>>>>>>> 3f537838 (.)
=======
 *
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
=======
 *
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
<<<<<<< HEAD
=======
 *
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
 *
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
 *
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
 *
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
 *
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
 *
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
 *
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
 *
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
 *
>>>>>>> 985c7bda (.)
=======
>>>>>>> 2fc60436 (.)
=======
=======
 *
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
 *
>>>>>>> 58816034 (.)
=======
 *
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
 *
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
 *
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
 *
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
 *
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
 *
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
 *
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
 *
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
 *
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
 *
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
<<<<<<< HEAD
=======
 *
>>>>>>> 985c7bda (.)
=======
>>>>>>> 2fc60436 (.)
=======
=======
 *
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
 *
>>>>>>> 58816034 (.)
=======
 *
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
 *
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
 *
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
 *
>>>>>>> 3f537838 (.)
=======
<<<<<<< HEAD
 *
>>>>>>> 75179b855 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
 *
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
 *
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
 *
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
 *
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
<<<<<<< HEAD
=======
 *
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
 *
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 3f39ac8b (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2f135ef98 (.)
=======
=======
 *
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
<<<<<<< HEAD
=======
 *
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
 *
>>>>>>> 98d837b9 (.)
>>>>>>> laraxot/develop
=======
>>>>>>> 1487fe812 (.)
=======
=======
>>>>>>> 82ae73be (.)
>>>>>>> 10292b60a (.)
=======
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> 510809c6f (.)
=======
=======
 *
>>>>>>> 3f537838 (.)
>>>>>>> 11b43e822 (.)
=======
>>>>>>> de02998b (.)
>>>>>>> b207a9b1a (.)
=======
>>>>>>> 1619767d8 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
=======
 *
>>>>>>> 2941b0bd (.)
>>>>>>> a070a65a5 (.)
=======
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 2f135ef98 (.)
=======
>>>>>>> 23f115647 (.)
=======
=======
 *
>>>>>>> 98d837b9 (.)
>>>>>>> 8c19c8df2 (.)
=======
>>>>>>> 26d39e2eb (.)
 * Questa factory centralizza la logica di selezione del driver Telegram
 * e la creazione dell'azione corrispondente, seguendo il pattern Factory.
 */
final class TelegramActionFactory
{
    /**
     * Crea un'azione Telegram basata sul driver specificato o su quello predefinito.
     *
<<<<<<< HEAD
     * @param string|null $driver Driver Telegram da utilizzare (se null, viene utilizzato quello predefinito)
     * @return TelegramProviderActionInterface Azione Telegram corrispondente al driver
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
     * @param string|null $driver Driver Telegram da utilizzare (se null, viene utilizzato quello predefinito)
     * @return TelegramProviderActionInterface Azione Telegram corrispondente al driver
=======
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> f1c9518b (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> f1c9518b (.)
=======
>>>>>>> e53a56570 (.)
     * @param  string|null  $driver  Driver Telegram da utilizzare (se null, viene utilizzato quello predefinito)
     * @return TelegramProviderActionInterface Azione Telegram corrispondente al driver
     *
=======
     * @param string|null $driver Driver Telegram da utilizzare (se null, viene utilizzato quello predefinito)
     * @return TelegramProviderActionInterface Azione Telegram corrispondente al driver
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
     * @param string|null $driver Driver Telegram da utilizzare (se null, viene utilizzato quello predefinito)
     * @return TelegramProviderActionInterface Azione Telegram corrispondente al driver
>>>>>>> 75179b85 (.)
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
     * @param string|null $driver Driver Telegram da utilizzare (se null, viene utilizzato quello predefinito)
     * @return TelegramProviderActionInterface Azione Telegram corrispondente al driver
>>>>>>> 75179b85 (.)
=======
     * @param string|null $driver Driver Telegram da utilizzare (se null, viene utilizzato quello predefinito)
     * @return TelegramProviderActionInterface Azione Telegram corrispondente al driver
>>>>>>> 75179b855 (.)
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
>>>>>>> laraxot/develop
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
>>>>>>> e53a56570 (.)
     * @throws Exception Se il driver specificato non è supportato
     */
    /**
     * Crea un'azione Telegram basata sul driver specificato o su quello predefinito.
     * Utilizza una formula per calcolare il nome della classe dell'azione.
     *
<<<<<<< HEAD
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
     * @param string|null $driver Driver Telegram da utilizzare (se null, viene utilizzato quello predefinito)
=======
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> f1c9518b (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> f1c9518b (.)
=======
     * @param string|null $driver Driver Telegram da utilizzare (se null, viene utilizzato quello predefinito)
=======
<<<<<<< HEAD
>>>>>>> e53a56570 (.)
     * @param  string|null  $driver  Driver Telegram da utilizzare (se null, viene utilizzato quello predefinito)
>>>>>>> f1c9518b (.)
     * @return TelegramProviderActionInterface Azione Telegram corrispondente al driver
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 1487fe812 (.)
=======
>>>>>>> 10292b60a (.)
=======
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> 11b43e822 (.)
=======
>>>>>>> b207a9b1a (.)
=======
>>>>>>> 1619767d8 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> a070a65a5 (.)
=======
>>>>>>> e53a56570 (.)
=======
>>>>>>> 26d39e2eb (.)
=======
>>>>>>> f15c41e60 (.)
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
>>>>>>> 4689a827 (.)
=======
=======
>>>>>>> 510809c6f (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> 8dc1f2ed6 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
<<<<<<< HEAD
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1619767d8 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
<<<<<<< HEAD
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 1487fe812 (.)
=======
=======
>>>>>>> 82ae73be (.)
>>>>>>> 10292b60a (.)
=======
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> 510809c6f (.)
=======
=======
>>>>>>> 3f537838 (.)
>>>>>>> 11b43e822 (.)
=======
>>>>>>> b207a9b1a (.)
=======
>>>>>>> 1619767d8 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
=======
>>>>>>> 2941b0bd (.)
>>>>>>> a070a65a5 (.)
    public function create(null|string $driver = null): TelegramProviderActionInterface
=======
<<<<<<< HEAD
=======
>>>>>>> 2effe245 (.)
    public function create(?string $driver = null): TelegramProviderActionInterface
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
>>>>>>> f1c9518b (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b855 (.)
=======
>>>>>>> f1c9518b (.)
>>>>>>> laraxot/develop
=======
    public function create(?string $driver = null): TelegramProviderActionInterface
=======
>>>>>>> e53a56570 (.)
     * @param string|null $driver Driver Telegram da utilizzare (se null, viene utilizzato quello predefinito)
     * @return TelegramProviderActionInterface Azione Telegram corrispondente al driver
     * @throws Exception Se il driver specificato non è supportato o la classe non esiste
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> 23f115647 (.)
=======
>>>>>>> 8c19c8df2 (.)
    public function create(null|string $driver = null): TelegramProviderActionInterface
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
    public function create(?string $driver = null): TelegramProviderActionInterface
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 2effe245 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
    public function create(null|string $driver = null): TelegramProviderActionInterface
>>>>>>> f813254 (.)
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
=======
    public function create(?string $driver = null): TelegramProviderActionInterface
>>>>>>> 985c7bda (.)
=======
    public function create(?string $driver = null): TelegramProviderActionInterface
=======
    public function create(null|string $driver = null): TelegramProviderActionInterface
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> 2effe245 (.)
=======
    public function create(?string $driver = null): TelegramProviderActionInterface
>>>>>>> 985c7bda (.)
=======
    public function create(?string $driver = null): TelegramProviderActionInterface
=======
    public function create(null|string $driver = null): TelegramProviderActionInterface
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
=======
>>>>>>> e53a56570 (.)
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
    public function create(?string $driver = null): TelegramProviderActionInterface
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
    public function create(null|string $driver = null): TelegramProviderActionInterface
>>>>>>> f813254 (.)
>>>>>>> 2effe245 (.)
<<<<<<< HEAD
=======
=======
    public function create(?string $driver = null): TelegramProviderActionInterface
>>>>>>> 985c7bda (.)
=======
    public function create(?string $driver = null): TelegramProviderActionInterface
=======
    public function create(null|string $driver = null): TelegramProviderActionInterface
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
>>>>>>> f15c41e60 (.)
    {
        $driver ??= Config::get('telegram.default', 'official');

        // Normalizza il nome del driver (prima lettera maiuscola, il resto minuscolo)
        $normalizedDriver = ucfirst(strtolower(is_string($driver) ? $driver : ''));

        // Costruisci il nome completo della classe
        $className = "\\Modules\\Notify\\Actions\\Telegram\\Send{$normalizedDriver}TelegramAction";

        // Verifica se la classe esiste
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> e53a56570 (.)
        if (!class_exists($className)) {
            throw new Exception(
                'Unsupported Telegram driver: ' .
                (is_string($driver) ? $driver : '') .
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> f1c9518b (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> f1c9518b (.)
=======
>>>>>>> e53a56570 (.)
        if (! class_exists($className)) {
            throw new Exception(
                'Unsupported Telegram driver: '.
                (is_string($driver) ? $driver : '').
=======
        if (!class_exists($className)) {
            throw new Exception(
                'Unsupported Telegram driver: ' .
                (is_string($driver) ? $driver : '') .
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
=======
>>>>>>> e53a56570 (.)
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
                    ". Class {$className} not found.",
            );
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 1487fe812 (.)
=======
>>>>>>> 10292b60a (.)
=======
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> 11b43e822 (.)
=======
>>>>>>> b207a9b1a (.)
=======
>>>>>>> 1619767d8 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> a070a65a5 (.)
=======
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 2f135ef98 (.)
=======
>>>>>>> 23f115647 (.)
=======
>>>>>>> 8c19c8df2 (.)
=======
>>>>>>> 26d39e2eb (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> f2e64178 (.)
=======
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> 23f115647 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 26d39e2eb (.)
=======
    public function create(?string $driver = null): TelegramProviderActionInterface
=======
    public function create(null|string $driver = null): TelegramProviderActionInterface
>>>>>>> b93ef594b4 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b855 (.)
=======
>>>>>>> f2e64178 (.)
>>>>>>> laraxot/develop
    {
        $driver ??= Config::get('telegram.default', 'official');

        // Normalizza il nome del driver (prima lettera maiuscola, il resto minuscolo)
        $normalizedDriver = ucfirst(strtolower(is_string($driver) ? $driver : ''));

        // Costruisci il nome completo della classe
        $className = "\\Modules\\Notify\\Actions\\Telegram\\Send{$normalizedDriver}TelegramAction";

        // Verifica se la classe esiste
        if (!class_exists($className)) {
            throw new Exception(
                'Unsupported Telegram driver: ' .
                (is_string($driver) ? $driver : '') .
                    ". Class {$className} not found.",
            );
        }
<<<<<<< HEAD

        // Verifica se la classe implementa l'interfaccia richiesta
        if (!is_subclass_of($className, TelegramProviderActionInterface::class)) {
            throw new Exception("Class {$className} does not implement TelegramProviderActionInterface.");
        }

        /** @var TelegramProviderActionInterface $instance */
        $instance = app($className);
        return $instance;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> f2e64178 (.)
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 510809c6f (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> 23f115647 (.)
=======
>>>>>>> 26d39e2eb (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4689a827 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
=======
<<<<<<< HEAD
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> f2e64178 (.)
=======
=======
>>>>>>> 10292b60a (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> de02998b (.)
=======
<<<<<<< HEAD
>>>>>>> b207a9b1a (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 1619767d8 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 2f135ef98 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 23f115647 (.)
=======
>>>>>>> 26d39e2eb (.)
    public function create(?string $driver = null): TelegramProviderActionInterface
    {
        $driver = $driver ?? Config::get('telegram.default', 'official');
        
        // Normalizza il nome del driver (prima lettera maiuscola, il resto minuscolo)
        $normalizedDriver = ucfirst(strtolower(is_string($driver) ? $driver : ''));
        
        // Costruisci il nome completo della classe
        $className = "\\Modules\\Notify\\Actions\\Telegram\\Send{$normalizedDriver}TelegramAction";
        
        // Verifica se la classe esiste
        if (!class_exists($className)) {
            throw new Exception("Unsupported Telegram driver: " . (is_string($driver) ? $driver : '') . ". Class {$className} not found.");
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
=======
>>>>>>> 10292b60a (.)
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> b207a9b1a (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 23f115647 (.)
=======
>>>>>>> 26d39e2eb (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> 1619767d8 (.)
=======
>>>>>>> 2f135ef98 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
<<<<<<< HEAD
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1619767d8 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
<<<<<<< HEAD
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2f135ef98 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
<<<<<<< HEAD
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
=======
>>>>>>> 58816034 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 58816034 (.)
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
<<<<<<< HEAD
>>>>>>> 1487fe812 (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
>>>>>>> 10292b60a (.)
=======
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> 510809c6f (.)
=======
=======
>>>>>>> 3f537838 (.)
>>>>>>> 11b43e822 (.)
=======
>>>>>>> b207a9b1a (.)
=======
>>>>>>> 1619767d8 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
=======
>>>>>>> 2941b0bd (.)
>>>>>>> a070a65a5 (.)
=======
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 2f135ef98 (.)
=======
>>>>>>> 23f115647 (.)
=======
=======
>>>>>>> 98d837b9 (.)
>>>>>>> 8c19c8df2 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> 2effe245 (.)
>>>>>>> 26d39e2eb (.)
        // Verifica se la classe implementa l'interfaccia richiesta
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (!is_subclass_of($className, TelegramProviderActionInterface::class)) {
=======
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> f1c9518b (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> f1c9518b (.)
=======
        if (!is_subclass_of($className, TelegramProviderActionInterface::class)) {
=======
<<<<<<< HEAD
>>>>>>> e53a56570 (.)
        if (! is_subclass_of($className, TelegramProviderActionInterface::class)) {
=======
        if (!is_subclass_of($className, TelegramProviderActionInterface::class)) {
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> e53a56570 (.)
>>>>>>> f1c9518b (.)
            throw new Exception("Class {$className} does not implement TelegramProviderActionInterface.");
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 1487fe812 (.)
=======
>>>>>>> 10292b60a (.)
=======
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> 11b43e822 (.)
=======
>>>>>>> b207a9b1a (.)
=======
>>>>>>> 1619767d8 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> a070a65a5 (.)
=======
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 2f135ef98 (.)
=======
>>>>>>> 23f115647 (.)
=======
>>>>>>> 8c19c8df2 (.)
=======
>>>>>>> 26d39e2eb (.)

<<<<<<< HEAD
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
>>>>>>> 985c7bda (.)

<<<<<<< HEAD
<<<<<<< HEAD
=======

<<<<<<< HEAD
>>>>>>> 2effe245 (.)
=======

>>>>>>> 985c7bda (.)
=======
>>>>>>> d45a0226 (.)
=======
=======

<<<<<<< HEAD
>>>>>>> 26d39e2eb (.)
=======
>>>>>>> f15c41e60 (.)
        $instance = app($className);

        if (! $instance instanceof TelegramProviderActionInterface) {
            throw new Exception("Failed to create instance of {$className}.");
        }

>>>>>>> 2effe245 (.)
        /** @var TelegramProviderActionInterface $instance */
        $instance = app($className);
        return $instance;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f15c41e60 (.)
=======
=======
<<<<<<< HEAD
=======
        
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======

>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
=======
=======
>>>>>>> 2effe245 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
=======
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
=======
        
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
        return app($className);
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
>>>>>>> 82ae73be (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
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
<<<<<<< HEAD
=======
>>>>>>> 10292b60a (.)
=======
=======
>>>>>>> 207ac35e (.)
>>>>>>> bf5d31b0f (.)

=======
        
>>>>>>> b19cd40 (.)
=======

>>>>>>> 4e2ebfb (.)
=======

=======
=======
>>>>>>> 26d39e2eb (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
>>>>>>> 510809c6f (.)
=======
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
>>>>>>> 26d39e2eb (.)
=======
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
<<<<<<< HEAD

<<<<<<< HEAD
>>>>>>> 11b43e822 (.)
=======
=======
        
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> b207a9b1a (.)
=======
=======

>>>>>>> 4e2ebfb (.)
>>>>>>> 1619767d8 (.)
=======
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> 8dc1f2ed6 (.)
=======

>>>>>>> a070a65a5 (.)
=======
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
<<<<<<< HEAD

=======
        
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> f87b41c3b (.)
=======
=======

>>>>>>> 4e2ebfb (.)
>>>>>>> 2f135ef98 (.)
=======
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> 23f115647 (.)
=======

>>>>>>> 8c19c8df2 (.)
        return app($className);
>>>>>>> 75179b85 (.)
=======

        return app($className);
>>>>>>> 75179b85 (.)
=======

        return app($className);
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
=======
        return app($className);
>>>>>>> 5fd545e4 (.)
=======
        return app($className);
>>>>>>> 54220b28 (rebase 210)
=======
        return app($className);
>>>>>>> f813254 (.)
>>>>>>> 2effe245 (.)
<<<<<<< HEAD
=======
>>>>>>> 985c7bda (.)
=======
=======
        return app($className);
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
<<<<<<< HEAD
=======
=======
=======

        // Verifica se la classe implementa l'interfaccia richiesta
>>>>>>> 75179b85 (.)
        if (!is_subclass_of($className, TelegramProviderActionInterface::class)) {
=======
>>>>>>> f1c9518b (.)
=======
=======
        if (!is_subclass_of($className, TelegramProviderActionInterface::class)) {
>>>>>>> c8b1c8bf (.)
=======

        // Verifica se la classe implementa l'interfaccia richiesta
        if (!is_subclass_of($className, TelegramProviderActionInterface::class)) {
>>>>>>> 75179b85 (.)
=======

        // Verifica se la classe implementa l'interfaccia richiesta
        if (!is_subclass_of($className, TelegramProviderActionInterface::class)) {
>>>>>>> 75179b855 (.)
=======
>>>>>>> f1c9518b (.)
            throw new Exception("Class {$className} does not implement TelegramProviderActionInterface.");
        }

        return app($className);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 54220b28 (rebase 210)
=======
        return app($className);
>>>>>>> f813254 (.)
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
=======
        return app($className);
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b855 (.)
=======
>>>>>>> 5fd545e4 (.)
>>>>>>> laraxot/develop
=======
>>>>>>> 1487fe812 (.)
=======
>>>>>>> 26d39e2eb (.)
=======
>>>>>>> f15c41e60 (.)
    }
}
=======
>>>>>>> 301ad8b44 (.)
