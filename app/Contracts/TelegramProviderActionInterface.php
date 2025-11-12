<?php

declare(strict_types=1);

namespace Modules\Notify\Contracts;

use Modules\Notify\Datas\TelegramData;

/**
 * Interfaccia per le azioni dei provider Telegram.
<<<<<<< HEAD
 *
=======
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
 * Questa interfaccia definisce il contratto che tutte le implementazioni
 * di provider Telegram devono rispettare.
 */
interface TelegramProviderActionInterface
{
    /**
     * Esegue l'invio del messaggio Telegram.
     *
     * @param  TelegramData  $telegramData  I dati del messaggio Telegram
     * @return array Risultato dell'operazione
     */
    public function execute(TelegramData $telegramData): array;
<<<<<<< HEAD
}
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
}
=======
} 
>>>>>>> a12f125f4a (.)
=======
}
>>>>>>> b93ef594b4 (.)
=======
} 
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
