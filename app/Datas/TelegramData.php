<?php

declare(strict_types=1);

namespace Modules\Notify\Datas;

use Spatie\LaravelData\Data;

/**
 * Data Transfer Object per i messaggi Telegram.
 *
 * Questo DTO standardizza i dati necessari per l'invio di messaggi Telegram
 * attraverso diversi provider, garantendo coerenza e tipo-sicurezza.
 */
class TelegramData extends Data
{
    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $chatId  ID della chat o username del destinatario (es. 123456789 o @username)
     * @param  string  $text  Contenuto testuale del messaggio
     * @param  string|null  $parseMode  Modalità di parsing del testo ('Markdown', 'MarkdownV2', 'HTML')
     * @param  bool  $disableWebPagePreview  Se disabilitare l'anteprima dei link nel messaggio
     * @param  bool  $disableNotification  Se inviare il messaggio silenziosamente
     * @param  int|null  $replyToMessageId  ID del messaggio a cui rispondere
     * @param  array|null  $replyMarkup  Markup per tastiere inline, tastiere personalizzate, ecc.
     * @param  array|null  $media  Array di media da allegare al messaggio (immagini, video, documenti)
     * @param  string  $type  Tipo di messaggio: 'text', 'photo', 'video', 'document', 'audio', 'animation'
=======
=======
>>>>>>> 7148d73 (.)
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
>>>>>>> 75179b8 (.)
=======
>>>>>>> 7148d73 (.)
     */
    public function __construct(
        public string $chatId,
        public string $text,
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        public ?string $parseMode = null,
        public bool $disableWebPagePreview = false,
        public bool $disableNotification = false,
        public ?int $replyToMessageId = null,
        public ?array $replyMarkup = null,
        public ?array $media = null,
=======
=======
>>>>>>> 82ae73b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
=======
>>>>>>> 7148d73 (.)
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
>>>>>>> 75179b8 (.)
=======
=======
>>>>>>> 207ac35 (.)
=======
        public ?string $parseMode = null,
        public bool $disableWebPagePreview = false,
        public bool $disableNotification = false,
        public ?int $replyToMessageId = null,
        public ?array $replyMarkup = null,
        public ?array $media = null,
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
=======
>>>>>>> 7148d73 (.)
        public string $type = 'text',
    ) {}
}
