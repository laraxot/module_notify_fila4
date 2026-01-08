<?php

declare(strict_types=1);

namespace Modules\Notify\Datas;

use Spatie\LaravelData\Data;

/**
 * Data Transfer Object per i messaggi Telegram.
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
 *
=======
 * 
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 4689a827 (.)
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
>>>>>>> de02998b (.)
<<<<<<< HEAD
>>>>>>> 75cb51873 (.)
=======
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
>>>>>>> c0f3d67cc (.)
 * Questo DTO standardizza i dati necessari per l'invio di messaggi Telegram
 * attraverso diversi provider, garantendo coerenza e tipo-sicurezza.
 */
class TelegramData extends Data
{
    /**
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> cf20697a6 (.)
     * @param  string  $chatId  ID della chat o username del destinatario (es. 123456789 o @username)
     * @param  string  $text  Contenuto testuale del messaggio
     * @param  string|null  $parseMode  Modalità di parsing del testo ('Markdown', 'MarkdownV2', 'HTML')
     * @param  bool  $disableWebPagePreview  Se disabilitare l'anteprima dei link nel messaggio
     * @param  bool  $disableNotification  Se inviare il messaggio silenziosamente
     * @param  int|null  $replyToMessageId  ID del messaggio a cui rispondere
     * @param  array|null  $replyMarkup  Markup per tastiere inline, tastiere personalizzate, ecc.
     * @param  array|null  $media  Array di media da allegare al messaggio (immagini, video, documenti)
     * @param  string  $type  Tipo di messaggio: 'text', 'photo', 'video', 'document', 'audio', 'animation'
<<<<<<< HEAD
=======
=======
>>>>>>> f1c9518b (.)
     * @param string $chatId ID della chat o username del destinatario (es. 123456789 o @username)
     * @param string $text Contenuto testuale del messaggio
     * @param string|null $parseMode Modalità di parsing del testo ('Markdown', 'MarkdownV2', 'HTML')
     * @param bool $disableWebPagePreview Se disabilitare l'anteprima dei link nel messaggio
     * @param bool $disableNotification Se inviare il messaggio silenziosamente
     * @param int|null $replyToMessageId ID del messaggio a cui rispondere
     * @param array|null $replyMarkup Markup per tastiere inline, tastiere personalizzate, ecc.
     * @param array|null $media Array di media da allegare al messaggio (immagini, video, documenti)
     * @param string $type Tipo di messaggio: 'text', 'photo', 'video', 'document', 'audio', 'animation'
<<<<<<< HEAD
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
>>>>>>> cf20697a6 (.)
     */
    public function __construct(
        public string $chatId,
        public string $text,
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
>>>>>>> 4689a827 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
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
>>>>>>> de02998b (.)
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
>>>>>>> c0f3d67cc (.)
        public null|string $parseMode = null,
        public bool $disableWebPagePreview = false,
        public bool $disableNotification = false,
        public null|int $replyToMessageId = null,
        public null|array $replyMarkup = null,
        public null|array $media = null,
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 011072e4 (.)
>>>>>>> c0f3d67cc (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> de02998b (.)
<<<<<<< HEAD
>>>>>>> 75cb51873 (.)
=======
=======
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
>>>>>>> c0f3d67cc (.)
=======
=======
>>>>>>> f1c9518b (.)
>>>>>>> cf20697a6 (.)
        public ?string $parseMode = null,
        public bool $disableWebPagePreview = false,
        public bool $disableNotification = false,
        public ?int $replyToMessageId = null,
        public ?array $replyMarkup = null,
        public ?array $media = null,
<<<<<<< HEAD
=======
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
<<<<<<< HEAD
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
>>>>>>> a12f125f4a (.)
=======
>>>>>>> f1c9518b (.)
=======
        public null|string $parseMode = null,
        public bool $disableWebPagePreview = false,
        public bool $disableNotification = false,
        public null|int $replyToMessageId = null,
        public null|array $replyMarkup = null,
        public null|array $media = null,
<<<<<<< HEAD
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
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
>>>>>>> c0f3d67cc (.)
=======
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
>>>>>>> cf20697a6 (.)
        public string $type = 'text',
    ) {
    }
}
