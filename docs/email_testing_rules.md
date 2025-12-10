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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 712617d3 (.)
=======
>>>>>>> fdb24863 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> fd1fcc4c (.)
=======
>>>>>>> 4f3927d7 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 8c8937e7 (rebase 210)
<<<<<<< HEAD
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
<<<<<<< HEAD
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
=======
>>>>>>> 2a97406c (.)
>>>>>>> 998e6866b (.)
=======
>>>>>>> 36136dcfa (.)
=======
=======
>>>>>>> 712617d3 (.)
>>>>>>> 731b801a8 (.)
=======
>>>>>>> b85076e48 (.)
=======
=======
>>>>>>> 4fc21b78 (rebase 210)
>>>>>>> 43dd68f4b (.)
=======
>>>>>>> ce1853afd (.)
=======
=======
>>>>>>> eb62d6cf (rebase 210)
>>>>>>> 7a142b4f5 (.)
=======
>>>>>>> c31e900eb (.)
=======
>>>>>>> fea359347 (.)
=======
=======
>>>>>>> fd1fcc4c (.)
>>>>>>> d9e649ac3 (.)
=======
>>>>>>> 602b8a0a9 (.)
=======
=======
>>>>>>> c8b1c8bf (.)
>>>>>>> 7ceb00286 (.)
=======
>>>>>>> 379ffe3f3 (.)
=======
>>>>>>> a55aa5e96 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> dceba960 (.)
=======
>>>>>>> b99af5a8 (.)
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 69fa7d37 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 229a065a (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 5aedc39c (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> 22baa66d (rebase 210)
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3ee54c5d (.)
=======
>>>>>>> 0ebb7b01 (.)
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 909e45af (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 510809c6f (.)
=======
=======
>>>>>>> 31f5d28f (.)
>>>>>>> e2f1a4045 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> 01af324fe (.)
=======
=======
>>>>>>> 7325acf3 (.)
>>>>>>> 2e9bd58c3 (.)
=======
>>>>>>> 53eef8d8d (.)
=======
=======
>>>>>>> f2e64178 (.)
>>>>>>> 23f115647 (.)
=======
>>>>>>> 13aa25113 (.)
=======
=======
>>>>>>> c4bdacbf (.)
>>>>>>> a115e2aad (.)
=======
>>>>>>> 7aae79847 (.)
=======
=======
>>>>>>> dceba960 (.)
>>>>>>> 9cb55171f (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
>>>>>>> 848f79b79 (.)
=======
=======
>>>>>>> f3086887 (rebase 210)
>>>>>>> 74eb2e964 (.)
=======
>>>>>>> 3e757cee2 (.)
=======
=======
>>>>>>> 3d462363 (rebase 210)
>>>>>>> 0a5473e16 (.)
=======
>>>>>>> c188e2a18 (.)
=======
=======
>>>>>>> 54ad93c4 (rebase 210)
>>>>>>> 6ad5224fb (.)
=======
>>>>>>> cd5474106 (.)
=======
=======
>>>>>>> 6e12a84b (rebase 210)
>>>>>>> 1c96b91fe (.)
=======
>>>>>>> 01750b107 (.)
=======
>>>>>>> ad905ce9c (.)
=======
=======
>>>>>>> 2effe245 (.)
>>>>>>> 26d39e2eb (.)
=======
>>>>>>> c7d5eaf96 (.)
=======
=======
>>>>>>> e790eb33 (.)
>>>>>>> 2dab69c8a (.)
=======
>>>>>>> a2f3c239e (.)
=======
=======
>>>>>>> 3ee54c5d (.)
>>>>>>> 763771402 (.)
=======
>>>>>>> 1dc3e4fcd (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> e2f1a4045 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> 01af324fe (.)
=======
>>>>>>> 2e9bd58c3 (.)
=======
>>>>>>> 53eef8d8d (.)
=======
>>>>>>> 23f115647 (.)
=======
>>>>>>> 13aa25113 (.)
=======
>>>>>>> a115e2aad (.)
=======
>>>>>>> 7aae79847 (.)
=======
>>>>>>> 9cb55171f (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
>>>>>>> 848f79b79 (.)
=======
>>>>>>> 74eb2e964 (.)
=======
>>>>>>> 3e757cee2 (.)
=======
>>>>>>> 0a5473e16 (.)
=======
>>>>>>> c188e2a18 (.)
=======
>>>>>>> 6ad5224fb (.)
=======
>>>>>>> cd5474106 (.)
=======
>>>>>>> 1c96b91fe (.)
=======
>>>>>>> 01750b107 (.)
=======
>>>>>>> ad905ce9c (.)
=======
>>>>>>> 26d39e2eb (.)
=======
>>>>>>> c7d5eaf96 (.)
=======
>>>>>>> 2dab69c8a (.)
=======
>>>>>>> a2f3c239e (.)
=======
>>>>>>> 763771402 (.)
=======
>>>>>>> 1dc3e4fcd (.)
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
<<<<<<< HEAD
=======
>>>>>>> 12a7e2462 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> f963d2c0 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a070a65a5 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 2941b0bd (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 98d837b9 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b215d516b (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 9721a5b2 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 731b801a8 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 712617d3 (.)
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a75783374 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 84082535 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 7a142b4f5 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> eb62d6cf (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d284d65 (.)
>>>>>>> 22baa66d (rebase 210)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 5b50927d (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> fd1fcc4c (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bf479cc (.)
>>>>>>> 0ebb7b01 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> cccb594f (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 7ceb00286 (.)
=======
- [Best Practices Laravel](https://laravel.com/project_docs/best-practices)
- [Convenzioni Laraxot](../Xot/project_docs/laraxot-conventions.md)
>>>>>>> c8b1c8bf (.)
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 138485550 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 66453ace (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 36136dcfa (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 4f042b88 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bc2faa05b (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 9d84f153 (.)
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ec4cda261 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 116df547 (.)
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 43dd68f4b (.)
=======
- [Best Practices Laravel](https://laravel.com/project_docs/best-practices)
- [Convenzioni Laraxot](../Xot/project_docs/laraxot-conventions.md)
>>>>>>> 4fc21b78 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ce1853afd (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 9c45d9bd (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d284d65 (.)
>>>>>>> 9f8e680a (rebase 210)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 7ffa94fc (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> d38aa9d2 (rebase 210)
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> fea359347 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 36ac4fc1 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> f9ec4f86 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 602b8a0a9 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 4f3927d7 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4bec160e6 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> ee18dd92 (.)
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> febe79e3 (.)
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> c7a4727b (.)
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f957fb24b (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> 1442e291 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> laraxot/develop
=======
>>>>>>> 1487fe812 (.)
=======
>>>>>>> 12a7e2462 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
>>>>>>> 510809c6f (.)
=======
>>>>>>> 11b43e822 (.)
=======
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
>>>>>>> e2f1a4045 (.)
=======
>>>>>>> c4282a934 (.)
=======
>>>>>>> 4bec160e6 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> a070a65a5 (.)
=======
=======
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
>>>>>>> 01af324fe (.)
=======
>>>>>>> 8c6d84fe6 (.)
=======
>>>>>>> 138485550 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
>>>>>>> 2e9bd58c3 (.)
=======
>>>>>>> 37beb5238 (.)
=======
=======
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
>>>>>>> 53eef8d8d (.)
=======
>>>>>>> 753ea7aca (.)
=======
>>>>>>> 998e6866b (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
>>>>>>> 23f115647 (.)
=======
>>>>>>> 8c19c8df2 (.)
=======
=======
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
>>>>>>> 13aa25113 (.)
=======
>>>>>>> fdad57c30 (.)
=======
>>>>>>> 36136dcfa (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
>>>>>>> a115e2aad (.)
=======
>>>>>>> 09f5337a8 (.)
=======
=======
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
>>>>>>> 7aae79847 (.)
=======
>>>>>>> 275b7ad99 (.)
=======
>>>>>>> 9cb55171f (.)
=======
>>>>>>> bc2faa05b (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
>>>>>>> b215d516b (.)
=======
>>>>>>> 731b801a8 (.)
=======
>>>>>>> 848f79b79 (.)
=======
>>>>>>> ec4cda261 (.)
=======
>>>>>>> 74eb2e964 (.)
=======
>>>>>>> f957fb24b (.)
=======
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> fdb24863 (rebase 210)
>>>>>>> b85076e48 (.)
=======
>>>>>>> 3e757cee2 (.)
=======
>>>>>>> a75783374 (.)
=======
=======
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
>>>>>>> 0a5473e16 (.)
=======
>>>>>>> 252fa579e (.)
=======
>>>>>>> 43dd68f4b (.)
=======
>>>>>>> ce1853afd (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 9f8e680a (rebase 210)
>>>>>>> c188e2a18 (.)
=======
>>>>>>> f3c06ccdd (.)
=======
=======
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
>>>>>>> 6ad5224fb (.)
=======
>>>>>>> 21a6fa9bc (.)
=======
>>>>>>> 7a142b4f5 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 5aedc39c (rebase 210)
>>>>>>> cd5474106 (.)
=======
>>>>>>> e312314fa (.)
=======
=======
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
>>>>>>> 1c96b91fe (.)
=======
>>>>>>> 610b999f1 (.)
=======
>>>>>>> c31e900eb (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 22baa66d (rebase 210)
>>>>>>> 01750b107 (.)
=======
>>>>>>> 5e028c03d (.)
=======
=======
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
>>>>>>> ad905ce9c (.)
=======
>>>>>>> ff78f10a5 (.)
=======
>>>>>>> fea359347 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 2effe245 (.)
>>>>>>> 26d39e2eb (.)
=======
>>>>>>> f15c41e60 (.)
=======
=======
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
>>>>>>> c7d5eaf96 (.)
=======
>>>>>>> d9e649ac3 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> e790eb33 (.)
>>>>>>> 2dab69c8a (.)
=======
>>>>>>> 8db6adf75 (.)
=======
=======
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
>>>>>>> a2f3c239e (.)
=======
>>>>>>> 8134673e1 (.)
=======
>>>>>>> 602b8a0a9 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 3ee54c5d (.)
>>>>>>> 763771402 (.)
=======
>>>>>>> a85ebf6cc (.)
=======
=======
>>>>>>> bf479cc (.)
>>>>>>> 0ebb7b01 (.)
>>>>>>> 1dc3e4fcd (.)
=======
>>>>>>> 3808094f6 (.)
=======
>>>>>>> 7ceb00286 (.)
=======
>>>>>>> 379ffe3f3 (.)
=======
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)
>>>>>>> a55aa5e96 (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
=======
- Seguire il principio "meno è più" 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 3f537838 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> e2f1a4045 (.)
=======
=======
- Seguire il principio "meno è più" 
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 53eef8d8d (.)
=======
=======
- Seguire il principio "meno è più" 
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c7a4727b (.)
=======
=======
- Seguire il principio "meno è più" 
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 7ffa94fc (rebase 210)
=======
=======
- Seguire il principio "meno è più" 
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
- Seguire il principio "meno è più" 
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 5b50927d (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ad905ce9c (.)
=======
=======
- Seguire il principio "meno è più" 
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> cb5f23b0 (.)
=======
=======
- Seguire il principio "meno è più" 
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
- Seguire il principio "meno è più" 
>>>>>>> c8b1c8bf (.)
=======
- Seguire il principio "meno è più" 
>>>>>>> 9cf0dc90 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
=======
>>>>>>> 5fd545e4 (.)
=======
- Seguire il principio "meno è più" 
>>>>>>> 2a97406c (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 116df547 (.)
=======
=======
- Seguire il principio "meno è più" 
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
=======
>>>>>>> 54220b28 (rebase 210)
=======
- Seguire il principio "meno è più" 
>>>>>>> 4fc21b78 (rebase 210)
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82e5ee2d (rebase 210)
=======
=======
- Seguire il principio "meno è più" 
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
- Seguire il principio "meno è più" 
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> d45a0226 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c7d5eaf96 (.)
=======
=======
- Seguire il principio "meno è più" 
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4b544042 (.)
=======
=======
- Seguire il principio "meno è più" 
>>>>>>> bf479cc (.)
>>>>>>> 0ebb7b01 (.)
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 01af324fe (.)
=======
=======
- Seguire il principio "meno è più" 
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ca10d6ad (.)
=======
- Seguire il principio "meno è più" 
>>>>>>> 66453ace (.)
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a29a4728 (.)
=======
- Seguire il principio "meno è più" 
>>>>>>> 4f042b88 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> laraxot/develop
=======
>>>>>>> 301ad8b44 (.)
=======
>>>>>>> 1487fe812 (.)
=======
=======
- Seguire il principio "meno è più" 
>>>>>>> f963d2c0 (.)
>>>>>>> 12a7e2462 (.)
=======
>>>>>>> 11b43e822 (.)
=======
>>>>>>> e2f1a4045 (.)
=======
>>>>>>> c4282a934 (.)
=======
=======
- Seguire il principio "meno è più" 
>>>>>>> ee18dd92 (.)
>>>>>>> 4bec160e6 (.)
=======
>>>>>>> a070a65a5 (.)
=======
>>>>>>> 01af324fe (.)
=======
=======
>>>>>>> ca10d6ad (.)
>>>>>>> 8c6d84fe6 (.)
=======
>>>>>>> 138485550 (.)
=======
>>>>>>> 37beb5238 (.)
=======
>>>>>>> 53eef8d8d (.)
=======
>>>>>>> 753ea7aca (.)
=======
>>>>>>> 998e6866b (.)
=======
=======
>>>>>>> 98d837b9 (.)
>>>>>>> 8c19c8df2 (.)
=======
>>>>>>> 13aa25113 (.)
=======
=======
>>>>>>> a29a4728 (.)
>>>>>>> fdad57c30 (.)
=======
>>>>>>> 36136dcfa (.)
=======
=======
>>>>>>> 4e4a7796 (.)
>>>>>>> 09f5337a8 (.)
=======
>>>>>>> 7aae79847 (.)
=======
=======
>>>>>>> c7a4727b (.)
>>>>>>> 275b7ad99 (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
=======
>>>>>>> 9721a5b2 (.)
>>>>>>> b215d516b (.)
=======
>>>>>>> 731b801a8 (.)
=======
=======
>>>>>>> 116df547 (.)
>>>>>>> ec4cda261 (.)
=======
>>>>>>> 74eb2e964 (.)
=======
=======
>>>>>>> 1442e291 (rebase 210)
>>>>>>> f957fb24b (.)
=======
=======
- Seguire il principio "meno è più" 
>>>>>>> fdb24863 (rebase 210)
<<<<<<< HEAD
>>>>>>> b85076e48 (.)
=======
=======
>>>>>>> 84082535 (rebase 210)
<<<<<<< HEAD
>>>>>>> a75783374 (.)
=======
=======
=======
- Seguire il principio "meno è più" 
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
>>>>>>> 0a5473e16 (.)
=======
>>>>>>> 252fa579e (.)
=======
>>>>>>> 43dd68f4b (.)
=======
>>>>>>> ce1853afd (.)
=======
=======
>>>>>>> 7ffa94fc (rebase 210)
>>>>>>> f3c06ccdd (.)
=======
>>>>>>> 6ad5224fb (.)
=======
=======
>>>>>>> 9d3810d0 (rebase 210)
>>>>>>> 21a6fa9bc (.)
=======
>>>>>>> 7a142b4f5 (.)
=======
=======
>>>>>>> 82e5ee2d (rebase 210)
>>>>>>> e312314fa (.)
=======
>>>>>>> 1c96b91fe (.)
=======
>>>>>>> 610b999f1 (.)
=======
=======
- Seguire il principio "meno è più" 
>>>>>>> 8c8937e7 (rebase 210)
>>>>>>> c31e900eb (.)
=======
>>>>>>> 5e028c03d (.)
=======
>>>>>>> ad905ce9c (.)
=======
>>>>>>> ff78f10a5 (.)
=======
=======
- Seguire il principio "meno è più" 
>>>>>>> 36ac4fc1 (.)
>>>>>>> fea359347 (.)
=======
>>>>>>> f15c41e60 (.)
=======
>>>>>>> c7d5eaf96 (.)
=======
>>>>>>> d9e649ac3 (.)
=======
=======
>>>>>>> cb5f23b0 (.)
>>>>>>> 8db6adf75 (.)
=======
>>>>>>> a2f3c239e (.)
=======
=======
>>>>>>> f9ec4f86 (.)
>>>>>>> 8134673e1 (.)
=======
>>>>>>> 602b8a0a9 (.)
=======
=======
>>>>>>> 4b544042 (.)
>>>>>>> a85ebf6cc (.)
=======
>>>>>>> 1dc3e4fcd (.)
=======
>>>>>>> 3808094f6 (.)
=======
=======
- Seguire il principio "meno è più" 
>>>>>>> c8b1c8bf (.)
>>>>>>> 7ceb00286 (.)
=======
>>>>>>> 379ffe3f3 (.)
=======
- Seguire il principio "meno è più" 
>>>>>>> a55aa5e96 (.)
