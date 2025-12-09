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
>>>>>>> 909e45af (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> 36321fcb (.)
=======
>>>>>>> b99af5a8 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
- [Best Practices Laravel](https://laravel.com/project_docs/best-practices)
- [Convenzioni Laraxot](../Xot/project_docs/laraxot-conventions.md)
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
- [Best Practices Laravel](https://laravel.com/project_docs/best-practices)
- [Convenzioni Laraxot](../Xot/project_docs/laraxot-conventions.md)
>>>>>>> 31f5d28f (.)
=======
- [Best Practices Laravel](https://laravel.com/project_docs/best-practices)
- [Convenzioni Laraxot](../Xot/project_docs/laraxot-conventions.md)
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
- [Best Practices Laravel](https://laravel.com/project_docs/best-practices)
- [Convenzioni Laraxot](../Xot/project_docs/laraxot-conventions.md)
>>>>>>> 31f5d28f (.)
=======
- [Best Practices Laravel](https://laravel.com/project_docs/best-practices)
- [Convenzioni Laraxot](../Xot/project_docs/laraxot-conventions.md)
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
- [Best Practices Laravel](https://laravel.com/project_docs/best-practices)
- [Convenzioni Laraxot](../Xot/project_docs/laraxot-conventions.md)
>>>>>>> 31f5d28f (.)
=======
- [Best Practices Laravel](https://laravel.com/project_docs/best-practices)
- [Convenzioni Laraxot](../Xot/project_docs/laraxot-conventions.md)
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
- [Best Practices Laravel](https://laravel.com/project_docs/best-practices)
- [Convenzioni Laraxot](../Xot/project_docs/laraxot-conventions.md)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> ee18dd92 (.)
=======
- [Best Practices Laravel](https://laravel.com/project_docs/best-practices)
- [Convenzioni Laraxot](../Xot/project_docs/laraxot-conventions.md)
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 66453ace (.)
=======
- [Best Practices Laravel](https://laravel.com/project_docs/best-practices)
- [Convenzioni Laraxot](../Xot/project_docs/laraxot-conventions.md)
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> 2a97406c (.)
=======
- [Best Practices Laravel](https://laravel.com/project_docs/best-practices)
- [Convenzioni Laraxot](../Xot/project_docs/laraxot-conventions.md)
>>>>>>> 909e45af (.)
=======
>>>>>>> 4f042b88 (.)
=======
- [Best Practices Laravel](https://laravel.com/project_docs/best-practices)
- [Convenzioni Laraxot](../Xot/project_docs/laraxot-conventions.md)
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> 36321fcb (.)
=======
- [Best Practices Laravel](https://laravel.com/project_docs/best-practices)
- [Convenzioni Laraxot](../Xot/project_docs/laraxot-conventions.md)
>>>>>>> b99af5a8 (.)
- [Best Practices Laravel](https://laravel.com/docs/best-practices)
- [Convenzioni Laraxot](../Xot/docs/laraxot-conventions.md)

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- Seguire il principio "meno è più" 
=======
>>>>>>> 5fd545e4 (.)
=======
- Seguire il principio "meno è più" 
>>>>>>> 2a97406c (.)
=======
- Seguire il principio "meno è più" 
>>>>>>> 909e45af (.)
=======
- Seguire il principio "meno è più" 
>>>>>>> 4f042b88 (.)
=======
- Seguire il principio "meno è più" 
>>>>>>> bb7e77c2 (.)
=======
- Seguire il principio "meno è più" 
>>>>>>> 36321fcb (.)
=======
- Seguire il principio "meno è più" 
>>>>>>> b99af5a8 (.)
