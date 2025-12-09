<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> eb62d6cf (rebase 210)
# Risoluzione dei Problemi nelle Email 

Questa documentazione fornisce soluzioni per i problemi comuni che possono verificarsi durante l'invio di email nel modulo Notify.

## Errori Comuni e Soluzioni

### 1. Gestione corretta degli allegati con la classe `Attachment` di Laravel

La classe `SpatieEmail` ora utilizza l'API moderna di Laravel per gli allegati tramite la classe `Attachment`.

#### Best Practices

```php
// Preparazione degli allegati
$attachments = [
    [
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'path' => '/var/www/html/<nome progetto>/public_html/images/avatars/default.svg',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'path' => '/var/www/html/<nome progetto>/public_html/images/avatars/default.svg',
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> 75179b85 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> f963d2c0 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
=======
        'path' => '/var/www/html/<nome progetto>/public_html/images/avatars/default.svg',
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default.svg',
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
<<<<<<< HEAD
>>>>>>> d284d65 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> dceba960 (.)
        'path' => '/var/www/html/<nome progetto>/public_html/images/avatars/default.svg',
<<<<<<< HEAD
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
=======
        'path' => '/var/www/html/<nome progetto>/public_html/images/avatars/default.svg',
>>>>>>> bf479cc (.)
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default.svg',
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 503981fd (.)
        'path' => '/var/www/html/<nome progetto>/public_html/images/avatars/default.svg',
<<<<<<< HEAD
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
=======
        'path' => '/var/www/html/<nome progetto>/public_html/images/avatars/default.svg',
>>>>>>> bf479cc (.)
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default.svg',
<<<<<<< HEAD
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 207ac35e (.)
=======
        'path' => '/var/www/html/<nome progetto>/public_html/images/avatars/default.svg',
<<<<<<< HEAD
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
=======
        'path' => '/var/www/html/<nome progetto>/public_html/images/avatars/default.svg',
>>>>>>> bf479cc (.)
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default.svg',
>>>>>>> 4e2ebfb (.)
<<<<<<< HEAD
>>>>>>> 207ac35e (.)
=======
        'path' => '/var/www/html/<nome progetto>/public_html/images/avatars/default.svg',
<<<<<<< HEAD
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
=======
        'path' => '/var/www/html/<nome progetto>/public_html/images/avatars/default.svg',
>>>>>>> bf479cc (.)
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default.svg',
>>>>>>> 9777d1b3 (.)
=======
        'path' => '/var/www/html/<nome progetto>/public_html/images/avatars/default.svg',
<<<<<<< HEAD
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
=======
        'path' => '/var/www/html/<nome progetto>/public_html/images/avatars/default.svg',
>>>>>>> bf479cc (.)
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default.svg',
>>>>>>> f963d2c0 (.)
=======
=======
>>>>>>> 9cdf6146 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> f2e64178 (.)
        'path' => '/var/www/html/<nome progetto>/public_html/images/avatars/default.svg',
<<<<<<< HEAD
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
=======
        'path' => '/var/www/html/<nome progetto>/public_html/images/avatars/default.svg',
>>>>>>> bf479cc (.)
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default.svg',
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
        'path' => '/var/www/html/<nome progetto>/public_html/images/avatars/default.svg',
<<<<<<< HEAD
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
=======
        'path' => '/var/www/html/<nome progetto>/public_html/images/avatars/default.svg',
>>>>>>> bf479cc (.)
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default.svg',
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
        'path' => '/var/www/html/<nome progetto>/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default.svg',
>>>>>>> 9777d1b3 (.)
=======
        'path' => '/var/www/html/<nome progetto>/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default.svg',
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
        'path' => '/var/www/html/<nome progetto>/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default.svg',
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 9d67cabd (.)
=======
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> 1375c94d (rebase 210)
        'path' => '/var/www/html/<nome progetto>/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default.svg',
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 9d67cabd (.)
=======
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 1375c94d (rebase 210)
=======
        'path' => '/var/www/html/<nome progetto>/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default.svg',
>>>>>>> 4e2ebfb (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 207ac35e (.)
=======
        'path' => '/var/www/html/<nome progetto>/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default.svg',
>>>>>>> 9777d1b3 (.)
=======
        'path' => '/var/www/html/<nome progetto>/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default.svg',
>>>>>>> f963d2c0 (.)
=======
        'path' => '/var/www/html/<nome progetto>/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default.svg',
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
        'path' => '/var/www/html/<nome progetto>/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default.svg',
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
        'path' => '/var/www/html/<nome progetto>/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default.svg',
>>>>>>> 161887a2 (.)
=======
        'path' => '/var/www/html/<nome progetto>/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default.svg',
>>>>>>> ee18dd92 (.)
=======
        'path' => '/var/www/html/<nome progetto>/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default.svg',
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
        'path' => '/var/www/html/<nome progetto>/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default.svg',
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> b19cd40 (.)
>>>>>>> e7a9a2bf (.)
=======
>>>>>>> 9d67cabd (.)
=======
        'path' => '/var/www/html/<nome progetto>/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default.svg',
>>>>>>> ba564870 (.)
=======
        'path' => '/var/www/html/<nome progetto>/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default.svg',
>>>>>>> 66453ace (.)
=======
        'path' => '/var/www/html/<nome progetto>/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default.svg',
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 9cdf6146 (.)
=======
>>>>>>> 80f054e0 (.)
=======
        'path' => '/var/www/html/<nome progetto>/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default.svg',
>>>>>>> 7c39b1fe (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
        'path' => '/var/www/html/<nome progetto>/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default.svg',
>>>>>>> 888799d0 (.)
=======
        'path' => '/var/www/html/<nome progetto>/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default.svg',
>>>>>>> 2a97406c (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
        'path' => '/var/www/html/<nome progetto>/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default.svg',
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> b19cd40 (.)
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
        'path' => '/var/www/html/<nome progetto>/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default.svg',
>>>>>>> c6c33175 (.)
=======
        'path' => '/var/www/html/<nome progetto>/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default.svg',
>>>>>>> 4f042b88 (.)
=======
        'path' => '/var/www/html/<nome progetto>/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default.svg',
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> b19cd40 (.)
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 503981fd (.)
=======
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> d284d65 (.)
>>>>>>> dceba960 (.)
=======
        'path' => '/var/www/html/<nome progetto>/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default.svg',
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> b19cd40 (.)
>>>>>>> b4f93b3a (rebase 210)
=======
>>>>>>> 1375c94d (rebase 210)
=======
        'path' => '/var/www/html/<nome progetto>/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default.svg',
>>>>>>> 52cd5f85 (rebase 210)
=======
        'path' => '/var/www/html/<nome progetto>/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default.svg',
>>>>>>> eb62d6cf (rebase 210)
        'as' => 'logo.svg',
        'mime' => 'image/svg+xml',
    ],
];

// Opzione 1: Fluent API (concatenazione dei metodi)
Mail::to($recipient)
    ->locale('it')
    ->send((new SpatieEmail($user, 'template-slug'))->addAttachments($attachments));

// Opzione 2: Istanziazione separata (più leggibile)
$email = new SpatieEmail($user, 'template-slug');
$email->addAttachments($attachments);

Mail::to($recipient)
    ->locale('it')
    ->send($email);
```

#### Miglioramenti dell'implementazione

L'implementazione attuale include:

1. **Validazione dei file**: Verifica che il file esista prima di allegarlo
2. **Utilizzo della classe moderna `Attachment`**: Più robusta e manutenibile
3. **Gestione opzionale di nome e MIME type**: Personalizzazione flessibile degli allegati
4. **Documentazione PHPDoc completa**: Miglior supporto IDE e type hints

Per maggiori dettagli, consultare [ATTACHMENTS_USAGE.md](./ATTACHMENTS_USAGE.md).

### 2. Errore: "View [notify::emails.template-name] not found"

#### Problema
Questo errore si verifica quando il template email non è stato trovato nel database o il nome del template è errato.

#### Soluzione
1. Verificare che il template esista nella tabella `mail_templates`
2. Controllare che lo slug del template sia corretto
3. Verificare che il namespace sia corretto

```php
// Esempio di inserimento di un template nel database
MailTemplate::create([
    'mailable' => \Modules\Notify\Emails\SpatieEmail::class,
    'name' => 'Template Test',
    'slug' => 'test-template',
    'subject' => 'Test Email: {{ name }}',
    'html_template' => '<p>Ciao, {{ name }}.</p>',
    'text_template' => 'Ciao, {{ name }}.'
]);
```

### 3. Errore: "File not found at path: [percorso]"

#### Problema
Questo errore si verifica quando il percorso di un allegato non è valido o il file non esiste.

#### Soluzione
1. Utilizzare percorsi assoluti o funzioni helper Laravel per i percorsi
2. Verificare che il file esista prima di allegarlo

```php
// Esempio di verifica file e utilizzo di percorso assoluto
$filePath = public_path('assets/images/logo.png');
if (file_exists($filePath)) {
    $attachments = [
        [
            'path' => $filePath,
            'as' => 'logo.png',
            'mime' => 'image/png',
        ],
    ];
    // Invio email con allegati
}
```

### 4. Errore: "Connection could not be established with host smtp.example.com"

#### Problema
Problemi di connessione al server SMTP.

#### Soluzione
1. Verificare le credenziali SMTP nel file `.env`
2. Controllare la connessione di rete
3. Verificare che il server SMTP sia attivo e accessibile

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
Questo errore si verifica quando si tenta di chiamare il metodo `addAttachments()` su un oggetto null.

#### Soluzione
Assicurarsi che l'istanza di `SpatieEmail` sia creata correttamente:

```php
// Corretto
$email = new SpatieEmail($user, 'template-slug');
$email->addAttachments($attachments);
Mail::to($recipient)->send($email);

// Alternativa in una sola linea
Mail::to($recipient)->send((new SpatieEmail($user, 'template-slug'))->addAttachments($attachments));
```

## Procedure di Debug

### Logging delle Email

Per il debug delle email, è possibile utilizzare il logger:

```php
try {
    Mail::to($recipient)->send(new SpatieEmail($user, 'template-slug'));
} catch (\Exception $e) {
    \Log::error('Errore invio email: ' . $e->getMessage(), [
        'recipient' => $recipient,
        'template' => 'template-slug',
        'trace' => $e->getTraceAsString()
    ]);
}
```

### Test in Ambiente Locale

Per testare le email in ambiente locale senza inviarle realmente:

1. Configurare Mailtrap o un servizio simile
2. Utilizzare Laravel Log Driver per salvare le email nel log

```dotenv

# .env per test con Mailtrap
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your_mailtrap_username
MAIL_PASSWORD=your_mailtrap_password
MAIL_ENCRYPTION=tls

# Oppure per salvare le email nel log
MAIL_MAILER=log
```

## Test Automatizzati

Esempio di test per verificare il corretto funzionamento dell'invio email:

```php
public function test_can_send_email_with_attachments()
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
    
    // Crea il file test se non esiste
    if (!file_exists(public_path('test-file.txt'))) {
        file_put_contents(public_path('test-file.txt'), 'Test content');
    }
    
    // Invia email
    Mail::to($user->email)->send((new SpatieEmail($user, 'test-template'))->addAttachments($attachments));
    
    // Verifica che l'email sia stata inviata
    Mail::assertSent(SpatieEmail::class, function ($mail) use ($user) {
        return $mail->hasTo($user->email);
    });
}
```

## Collegamenti alla Documentazione Correlata

- [ATTACHMENTS_USAGE.md](./ATTACHMENTS_USAGE.md)
- [EMAIL_LAYOUTS_BEST_PRACTICES.md](../mail-templates/EMAIL_LAYOUTS_BEST_PRACTICES.md)
- [SPATIE_MAIL_TEMPLATES_STRUCTURE.md](../mail-templates/SPATIE_MAIL_TEMPLATES_STRUCTURE.md)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> eb62d6cf (rebase 210)
