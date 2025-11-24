<?php

declare(strict_types=1);

namespace Modules\Notify\Contracts;

use Modules\Notify\Datas\TelegramData;

/**
 * Interfaccia per le azioni dei provider Telegram.
 *
 * Questa interfaccia definisce il contratto che tutte le implementazioni
 * di provider Telegram devono rispettare.
 */
interface TelegramProviderActionInterface
{
    /**
     * Esegue l'invio del messaggio Telegram.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  TelegramData  $telegramData  I dati del messaggio Telegram
=======
     * @param TelegramData $telegramData I dati del messaggio Telegram
>>>>>>> 75179b8 (.)
=======
     * @param TelegramData $telegramData I dati del messaggio Telegram
>>>>>>> 7148d73 (.)
     * @return array Risultato dell'operazione
     */
    public function execute(TelegramData $telegramData): array;
}
