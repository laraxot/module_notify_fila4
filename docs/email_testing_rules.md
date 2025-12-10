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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 2a97406c (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> 712617d3 (.)
=======
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> fd1fcc4c (.)
=======
>>>>>>> 4f3927d7 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 66453ace (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> 712617d3 (.)
=======
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> fd1fcc4c (.)
=======
>>>>>>> 4f3927d7 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 75179b855 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 66453ace (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> 712617d3 (.)
>>>>>>> laraxot/develop
# Regole per il Testing delle Email

## 🎯 Scopo

Questo documento definisce le regole e le best practices per l'implementazione e il testing delle funzionalità email nel modulo Notify.

## 📋 Regole Fondamentali

### 1. Type Safety
- Utilizzare sempre DTO per i dati email (`EmailData`, `SmtpData`)
- Evitare array generici (`?array`)
- Definire tipi espliciti per tutte le proprietà
- Utilizzare PHPDoc con generics dove necessario

### 2. Validazione
- Validare tutti i campi del form
- Implementare regole di validazione specifiche per SMTP
- Fornire messaggi di errore chiari e localizzati
- Testare la connessione SMTP prima dell'invio

### 3. Gestione Errori
- Utilizzare try-catch per gestire le eccezioni
- Fornire feedback dettagliato all'utente
- Loggare gli errori per il debugging
- Implementare retry logic per errori temporanei

### 4. Architettura
- Estendere sempre `XotBasePage`
- Implementare `NavigationLabelTrait` dove necessario
- Seguire il pattern Repository per l'accesso ai dati
- Utilizzare Service per la logica di business

### 5. UI/UX
- Fornire feedback immediato all'utente
- Mostrare lo stato dell'invio in tempo reale
- Implementare preview dell'email
- Supportare template HTML

## 💡 Best Practices

### 1. Configurazione SMTP
```php
// ✅ CORRETTO
public function emailForm(Form $form): Form
{
    return $form
        ->schema([
            Forms\Components\TextInput::make('host')
                ->required()
                ->rules(['string', 'max:255'])
                ->validationMessages([
                    'required' => __('notify::validation.host_required'),
                    'max' => __('notify::validation.host_max'),
                ]),
        ]);
}

// ❌ VIETATO
public function emailForm(Form $form): Form
{
    return $form
        ->schema([
            Forms\Components\TextInput::make('host'),
        ]);
}
```

### 2. Gestione Dati
```php
// ✅ CORRETTO
public ?EmailData $emailData = null;

// ❌ VIETATO
public ?array $emailData = [];
```

### 3. Invio Email
```php
// ✅ CORRETTO
public function sendEmail(): void
{
    try {
        $data = $this->emailForm->getState();
        $smtp = SmtpData::from($data);
        $emailData = EmailData::from($data);
        
        $smtp->send($emailData);
        
        Notification::make()
            ->success()
            ->title(__('notify::messages.email_sent'))
            ->send();
    } catch (\Exception $e) {
        Notification::make()
            ->danger()
            ->title(__('notify::messages.email_error'))
            ->body($e->getMessage())
            ->send();
    }
}

// ❌ VIETATO
public function sendEmail(): void
{
    $data = $this->emailForm->getState();
    Mail::to($data['to'])->send(new EmailDataEmail($data));
}
```

## 🔄 Processo di Testing

### 1. Pre-invio
- Validare configurazione SMTP
- Testare connessione
- Verificare template
- Controllare destinatari

### 2. Durante l'invio
- Monitorare progresso
- Gestire timeout
- Implementare retry
- Loggare eventi

### 3. Post-invio
- Verificare delivery
- Controllare bounce
- Analizzare feedback
- Aggiornare statistiche

## 📊 Metriche di Qualità

### 1. Performance
- Tempo di invio < 5s
- Tasso di successo > 99%
- Zero memory leaks
- Logging efficiente

### 2. Codice
- PHPStan livello 9+
- 100% type coverage
- Zero duplicazioni
- Documentazione completa

### 3. UX
- Feedback immediato
- UI responsive
- Errori chiari
- Preview funzionante

## 🔗 Collegamenti

- [Documentazione Filament](https://filamentphp.com/docs)
<<<<<<< HEAD
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> d09cb759 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> dceba960 (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 229a065a (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> 22baa66d (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> e790eb33 (.)
=======
>>>>>>> eb71492d (.)
=======
>>>>>>> 3ee54c5d (.)
=======
>>>>>>> 0ebb7b01 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> dceba960 (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 229a065a (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> 22baa66d (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> e790eb33 (.)
=======
>>>>>>> eb71492d (.)
=======
>>>>>>> 3ee54c5d (.)
=======
>>>>>>> 0ebb7b01 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> dceba960 (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> f3086887 (rebase 210)
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
=======
- [Best Practices Laravel](https://laravel.com/project_docs/best-practices)
- [Convenzioni Laraxot](../Xot/project_docs/laraxot-conventions.md)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 3f537838 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> a404ea71 (.)
=======
- [Best Practices Laravel](https://laravel.com/project_docs/best-practices)
- [Convenzioni Laraxot](../Xot/project_docs/laraxot-conventions.md)
>>>>>>> 75179b85 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 3f537838 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> a404ea71 (.)
=======
- [Best Practices Laravel](https://laravel.com/project_docs/best-practices)
- [Convenzioni Laraxot](../Xot/project_docs/laraxot-conventions.md)
>>>>>>> 75179b85 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 3f537838 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> a404ea71 (.)
=======
- [Best Practices Laravel](https://laravel.com/project_docs/best-practices)
- [Convenzioni Laraxot](../Xot/project_docs/laraxot-conventions.md)
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 3f537838 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> a404ea71 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> ee18dd92 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 2941b0bd (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> ca10d6ad (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 66453ace (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 4c323e61 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> febe79e3 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 2a97406c (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 98d837b9 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> a29a4728 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 4f042b88 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 4e4a7796 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> c7a4727b (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> dceba960 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 9d84f153 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 9721a5b2 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 712617d3 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 116df547 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 1442e291 (rebase 210)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 229a065a (rebase 210)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 84082535 (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> fcaebc79 (rebase 210)
=======
- [Best Practices Laravel](https://laravel.com/project_docs/best-practices)
- [Convenzioni Laraxot](../Xot/project_docs/laraxot-conventions.md)
>>>>>>> 4fc21b78 (rebase 210)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 9f8e680a (rebase 210)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 7ffa94fc (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 9d3810d0 (rebase 210)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 5aedc39c (rebase 210)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 82e5ee2d (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> d38aa9d2 (rebase 210)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 22baa66d (rebase 210)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 5b50927d (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 9e7ba5b6 (rebase 210)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 2effe245 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> d45a0226 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> fd1fcc4c (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> e790eb33 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> cb5f23b0 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> f9ec4f86 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 4f3927d7 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 3ee54c5d (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 4b544042 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 0ebb7b01 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> cccb594f (.)
=======
- [Best Practices Laravel](https://laravel.com/project_docs/best-practices)
- [Convenzioni Laraxot](../Xot/project_docs/laraxot-conventions.md)
>>>>>>> c8b1c8bf (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 9cf0dc90 (.)
=======
- [Best Practices Laravel](https://laravel.com/project_docs/best-practices)
- [Convenzioni Laraxot](../Xot/project_docs/laraxot-conventions.md)
>>>>>>> 75179b85 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 3f537838 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> a404ea71 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> ee18dd92 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 2941b0bd (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> ca10d6ad (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 66453ace (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 4c323e61 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> febe79e3 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 2a97406c (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 98d837b9 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> a29a4728 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 4f042b88 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 4e4a7796 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> c7a4727b (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> dceba960 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 9d84f153 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 9721a5b2 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 712617d3 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 116df547 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 1442e291 (rebase 210)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 229a065a (rebase 210)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 84082535 (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> fcaebc79 (rebase 210)
=======
- [Best Practices Laravel](https://laravel.com/project_docs/best-practices)
- [Convenzioni Laraxot](../Xot/project_docs/laraxot-conventions.md)
>>>>>>> 4fc21b78 (rebase 210)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 9f8e680a (rebase 210)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 7ffa94fc (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 9d3810d0 (rebase 210)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 5aedc39c (rebase 210)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 82e5ee2d (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> d38aa9d2 (rebase 210)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 22baa66d (rebase 210)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 5b50927d (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 9e7ba5b6 (rebase 210)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 2effe245 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> d45a0226 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> fd1fcc4c (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> e790eb33 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> cb5f23b0 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> f9ec4f86 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 4f3927d7 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 3ee54c5d (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 4b544042 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 0ebb7b01 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> cccb594f (.)
=======
- [Best Practices Laravel](https://laravel.com/project_docs/best-practices)
- [Convenzioni Laraxot](../Xot/project_docs/laraxot-conventions.md)
>>>>>>> c8b1c8bf (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 9cf0dc90 (.)
=======
- [Best Practices Laravel](https://laravel.com/project_docs/best-practices)
- [Convenzioni Laraxot](../Xot/project_docs/laraxot-conventions.md)
>>>>>>> 75179b85 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 3f537838 (.)
=======
- [Best Practices Laravel](https://laravel.com/project_docs/best-practices)
- [Convenzioni Laraxot](../Xot/project_docs/laraxot-conventions.md)
>>>>>>> 75179b855 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 3f537838 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> a404ea71 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> ee18dd92 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 2941b0bd (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> ca10d6ad (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 66453ace (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 4c323e61 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> febe79e3 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 2a97406c (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 98d837b9 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> a29a4728 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 4f042b88 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 4e4a7796 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> c7a4727b (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> dceba960 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 9d84f153 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 9721a5b2 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 712617d3 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 116df547 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 1442e291 (rebase 210)
>>>>>>> laraxot/develop
=======
>>>>>>> 1487fe812 (.)

## 📝 Note

### Filosofia
- Il codice deve essere self-documenting
- La type safety è fondamentale
- Il feedback utente deve essere chiaro e immediato

### Politica
- Standardizzare l'approccio tra i moduli
- Mantenere la coerenza con le convenzioni Laraxot
- Rispettare la separazione delle responsabilità

### Zen
- Semplificare dove possibile
- Mantenere l'equilibrio tra funzionalità e complessità
<<<<<<< HEAD
- Seguire il principio "meno è più" 
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
- Seguire il principio "meno è più" 
>>>>>>> 75179b85 (.)
=======
- Seguire il principio "meno è più" 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 3f537838 (.)
=======
=======
- Seguire il principio "meno è più" 
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
- Seguire il principio "meno è più" 
>>>>>>> 75179b85 (.)
=======
- Seguire il principio "meno è più" 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 3f537838 (.)
=======
=======
- Seguire il principio "meno è più" 
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
- Seguire il principio "meno è più" 
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
=======
- Seguire il principio "meno è più" 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 3f537838 (.)
=======
=======
- Seguire il principio "meno è più" 
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
- Seguire il principio "meno è più" 
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 2941b0bd (.)
=======
=======
- Seguire il principio "meno è più" 
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
- Seguire il principio "meno è più" 
>>>>>>> 66453ace (.)
=======
>>>>>>> 4c323e61 (.)
=======
=======
- Seguire il principio "meno è più" 
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> febe79e3 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
- Seguire il principio "meno è più" 
>>>>>>> 2a97406c (.)
=======
>>>>>>> 98d837b9 (.)
=======
=======
- Seguire il principio "meno è più" 
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
- Seguire il principio "meno è più" 
>>>>>>> 4f042b88 (.)
=======
>>>>>>> 4e4a7796 (.)
=======
=======
- Seguire il principio "meno è più" 
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> c7a4727b (.)
=======
=======
- Seguire il principio "meno è più" 
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 9721a5b2 (.)
=======
- Seguire il principio "meno è più" 
>>>>>>> 712617d3 (.)
=======
>>>>>>> 116df547 (.)
=======
=======
- Seguire il principio "meno è più" 
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 1442e291 (rebase 210)
=======
- Seguire il principio "meno è più" 
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 84082535 (rebase 210)
=======
=======
- Seguire il principio "meno è più" 
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> fcaebc79 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
- Seguire il principio "meno è più" 
>>>>>>> 4fc21b78 (rebase 210)
=======
- Seguire il principio "meno è più" 
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 7ffa94fc (rebase 210)
=======
=======
- Seguire il principio "meno è più" 
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 9d3810d0 (rebase 210)
=======
- Seguire il principio "meno è più" 
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 82e5ee2d (rebase 210)
=======
=======
- Seguire il principio "meno è più" 
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> d38aa9d2 (rebase 210)
=======
- Seguire il principio "meno è più" 
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 5b50927d (rebase 210)
=======
=======
- Seguire il principio "meno è più" 
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 9e7ba5b6 (rebase 210)
=======
- Seguire il principio "meno è più" 
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> d45a0226 (.)
=======
=======
- Seguire il principio "meno è più" 
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
- Seguire il principio "meno è più" 
>>>>>>> fd1fcc4c (.)
=======
>>>>>>> cb5f23b0 (.)
=======
=======
- Seguire il principio "meno è più" 
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
=======
>>>>>>> f9ec4f86 (.)
=======
- Seguire il principio "meno è più" 
>>>>>>> 4f3927d7 (.)
=======
>>>>>>> 4b544042 (.)
=======
=======
- Seguire il principio "meno è più" 
>>>>>>> bf479cc (.)
>>>>>>> 0ebb7b01 (.)
=======
>>>>>>> cccb594f (.)
=======
- Seguire il principio "meno è più" 
>>>>>>> c8b1c8bf (.)
=======
- Seguire il principio "meno è più" 
>>>>>>> 9cf0dc90 (.)
=======
- Seguire il principio "meno è più" 
>>>>>>> 75179b85 (.)
=======
- Seguire il principio "meno è più" 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 3f537838 (.)
=======
=======
- Seguire il principio "meno è più" 
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
- Seguire il principio "meno è più" 
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 2941b0bd (.)
=======
=======
- Seguire il principio "meno è più" 
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
- Seguire il principio "meno è più" 
>>>>>>> 66453ace (.)
=======
>>>>>>> 4c323e61 (.)
=======
=======
- Seguire il principio "meno è più" 
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> febe79e3 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
- Seguire il principio "meno è più" 
>>>>>>> 2a97406c (.)
=======
>>>>>>> 98d837b9 (.)
=======
=======
- Seguire il principio "meno è più" 
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
- Seguire il principio "meno è più" 
>>>>>>> 4f042b88 (.)
=======
>>>>>>> 4e4a7796 (.)
=======
=======
- Seguire il principio "meno è più" 
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> c7a4727b (.)
=======
=======
- Seguire il principio "meno è più" 
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 9721a5b2 (.)
=======
- Seguire il principio "meno è più" 
>>>>>>> 712617d3 (.)
=======
>>>>>>> 116df547 (.)
=======
=======
- Seguire il principio "meno è più" 
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 1442e291 (rebase 210)
=======
- Seguire il principio "meno è più" 
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 84082535 (rebase 210)
=======
=======
- Seguire il principio "meno è più" 
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> fcaebc79 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
- Seguire il principio "meno è più" 
>>>>>>> 4fc21b78 (rebase 210)
=======
- Seguire il principio "meno è più" 
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 7ffa94fc (rebase 210)
=======
=======
- Seguire il principio "meno è più" 
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 9d3810d0 (rebase 210)
=======
- Seguire il principio "meno è più" 
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 82e5ee2d (rebase 210)
=======
=======
- Seguire il principio "meno è più" 
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> d38aa9d2 (rebase 210)
=======
- Seguire il principio "meno è più" 
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 5b50927d (rebase 210)
=======
=======
- Seguire il principio "meno è più" 
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 9e7ba5b6 (rebase 210)
=======
- Seguire il principio "meno è più" 
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> d45a0226 (.)
=======
=======
- Seguire il principio "meno è più" 
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
- Seguire il principio "meno è più" 
>>>>>>> fd1fcc4c (.)
=======
>>>>>>> cb5f23b0 (.)
=======
=======
- Seguire il principio "meno è più" 
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
=======
>>>>>>> f9ec4f86 (.)
=======
- Seguire il principio "meno è più" 
>>>>>>> 4f3927d7 (.)
=======
>>>>>>> 4b544042 (.)
=======
=======
- Seguire il principio "meno è più" 
>>>>>>> bf479cc (.)
>>>>>>> 0ebb7b01 (.)
=======
>>>>>>> cccb594f (.)
=======
- Seguire il principio "meno è più" 
>>>>>>> c8b1c8bf (.)
=======
- Seguire il principio "meno è più" 
>>>>>>> 9cf0dc90 (.)
=======
- Seguire il principio "meno è più" 
>>>>>>> 75179b85 (.)
=======
- Seguire il principio "meno è più" 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 3f537838 (.)
=======
- Seguire il principio "meno è più" 
>>>>>>> 75179b855 (.)
=======
- Seguire il principio "meno è più" 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 3f537838 (.)
=======
=======
- Seguire il principio "meno è più" 
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
- Seguire il principio "meno è più" 
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 2941b0bd (.)
=======
=======
- Seguire il principio "meno è più" 
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
- Seguire il principio "meno è più" 
>>>>>>> 66453ace (.)
=======
>>>>>>> 4c323e61 (.)
=======
=======
- Seguire il principio "meno è più" 
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> febe79e3 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
- Seguire il principio "meno è più" 
>>>>>>> 2a97406c (.)
=======
>>>>>>> 98d837b9 (.)
=======
=======
- Seguire il principio "meno è più" 
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
- Seguire il principio "meno è più" 
>>>>>>> 4f042b88 (.)
=======
>>>>>>> 4e4a7796 (.)
=======
=======
- Seguire il principio "meno è più" 
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> c7a4727b (.)
=======
=======
- Seguire il principio "meno è più" 
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 9721a5b2 (.)
=======
- Seguire il principio "meno è più" 
>>>>>>> 712617d3 (.)
=======
>>>>>>> 116df547 (.)
=======
=======
- Seguire il principio "meno è più" 
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 1442e291 (rebase 210)
>>>>>>> laraxot/develop
=======
>>>>>>> 301ad8b44 (.)
=======
>>>>>>> 1487fe812 (.)
