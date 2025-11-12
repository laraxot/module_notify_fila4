# Risoluzione dei Problemi nelle Email

Questa documentazione raccoglie le soluzioni ai problemi più comuni durante l'invio di email nel modulo Notify.

## Errori Comuni e Soluzioni

### 1. Gestione corretta degli allegati con la classe `Attachment` di Laravel

La classe `SpatieEmail` utilizza l'API moderna di Laravel per gli allegati tramite `Attachment`.

#### Best practice

```php
// Preparazione degli allegati
$attachments = [
    [
        'path' => '/var/www/_bases/base_quaeris_fila4_mono/public_html/images/avatars/default.svg',
        'as' => 'logo.svg',
        'mime' => 'image/svg+xml',
    ],
];

// Opzione 1: Fluent API
Mail::to($recipient)
    ->locale('it')
    ->send((new SpatieEmail($user, 'template-slug'))->addAttachments($attachments));

// Opzione 2: Istanziazione separata
$email = new SpatieEmail($user, 'template-slug');
$email->addAttachments($attachments);

Mail::to($recipient)
    ->locale('it')
    ->send($email);
```

#### Miglioramenti introdotti
1. **Validazione dei file**: il file viene verificato prima dell'allegato.
2. **Uso di `Attachment`**: API moderna, robusta e manutenibile.
3. **Gestione opzionale di nome/MIME**: personalizzazione flessibile.
4. **PHPDoc completi**: supporto IDE e type hints.

Per dettagli, vedi [ATTACHMENTS_USAGE.md](./ATTACHMENTS_USAGE.md).

### 2. Errore: "View [notify::emails.template-name] not found"

#### Problema
Template email inesistente o slug errato.

#### Soluzione
1. Verifica la presenza nella tabella `mail_templates`.
2. Controlla slug e namespace.

```php
MailTemplate::create([
    'mailable' => \Modules\Notify\Emails\SpatieEmail::class,
    'name' => 'Template Test',
    'slug' => 'test-template',
    'subject' => 'Test Email: {{ name }}',
    'html_template' => '<p>Ciao, {{ name }}.</p>',
    'text_template' => 'Ciao, {{ name }}.',
]);
```

### 3. Errore: "File not found at path: [percorso]"

#### Problema
Percorso allegato non valido.

#### Soluzione
Usa helper Laravel e verifica l'esistenza del file:

```php
$filePath = public_path('assets/images/logo.png');
if (file_exists($filePath)) {
    $attachments = [
        [
            'path' => $filePath,
            'as' => 'logo.png',
            'mime' => 'image/png',
        ],
    ];
    // Invio email
}
```

### 4. Errore: "Connection could not be established with host smtp.example.com"

#### Problema
Connessione SMTP fallita.

#### Soluzione
1. Controlla le credenziali nello `.env`.
2. Verifica la rete.
3. Conferma che l'host SMTP sia raggiungibile.

```dotenv
MAIL_MAILER=smtp
MAIL_HOST=smtp.example.com
MAIL_PORT=587
MAIL_USERNAME=username
MAIL_PASSWORD=password
MAIL_ENCRYPTION=tls
```

### 5. Errore: "Call to a member function addAttachments() on null"

#### Problema
L'istanza `SpatieEmail` non viene creata correttamente.

#### Soluzione

```php
$email = new SpatieEmail($user, 'template-slug');
$email->addAttachments($attachments);
Mail::to($recipient)->send($email);

// Inline
Mail::to($recipient)->send(
    (new SpatieEmail($user, 'template-slug'))->addAttachments($attachments)
);
```

## Procedure di Debug

### Logging delle email

```php
try {
    Mail::to($recipient)->send(new SpatieEmail($user, 'template-slug'));
} catch (\Exception $e) {
    \Log::error('Errore invio email: '.$e->getMessage(), [
        'recipient' => $recipient,
        'template' => 'template-slug',
        'trace' => $e->getTraceAsString(),
    ]);
}
```

### Test in ambiente locale

1. Configura Mailtrap (o servizio equivalente).
2. In alternativa usa il driver `log`.

```dotenv
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your_mailtrap_username
MAIL_PASSWORD=your_mailtrap_password
MAIL_ENCRYPTION=tls

# oppure
MAIL_MAILER=log
```

## Test automatizzati

```php
public function test_can_send_email_with_attachments(): void
{
    Mail::fake();

    $user = User::factory()->create();
    $attachments = [
        [
            'path' => public_path('test-file.txt'),
            'as' => 'test.txt',
            'mime' => 'text/plain',
        ],
    ];

    if (! file_exists(public_path('test-file.txt'))) {
        file_put_contents(public_path('test-file.txt'), 'Test content');
    }

    Mail::to('example@example.com')
        ->send((new SpatieEmail($user, 'template-slug'))->addAttachments($attachments));

    Mail::assertSent(SpatieEmail::class, function (SpatieEmail $mail) use ($attachments) {
        return $mail->hasAttachments($attachments);
    });
}
```

---
**Ultimo aggiornamento**: gennaio 2025 – conflitti risolti e documentazione consolidata.
