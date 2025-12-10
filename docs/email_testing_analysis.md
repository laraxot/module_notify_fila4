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
# Analisi delle Pagine di Test Email

## 🎯 Panoramica

Il modulo Notify contiene due pagine per il test delle email:
1. `TestSmtpPage.php` - Test completo della configurazione SMTP
2. `SendEmail.php` - Invio email semplice

## 🔍 Analisi Dettagliata

### TestSmtpPage.php

#### Punti di Forza
- ✅ Utilizza `XotBasePage` come base
- ✅ Implementa correttamente `HasForms`
- ✅ Utilizza `EmailData` e `SmtpData` per type safety
- ✅ Validazione con `Assert`
- ✅ Gestione errori appropriata
- ✅ Form strutturato in sezioni logiche

#### Aree di Miglioramento
1. **Configurazione SMTP**
   - ❌ I valori di default sono commentati
   - ❌ Manca validazione dei campi SMTP
   - ❌ Nessun test di connessione SMTP prima dell'invio

2. **Gestione Form**
   - ❌ `fillForms()` non gestisce correttamente i valori di default
   - ❌ Manca validazione dei campi email
   - ❌ Nessun feedback in caso di errore SMTP

3. **Type Safety**
   - ❌ `$emailData` è dichiarato come `?array` invece di usare un DTO
   - ❌ `$error_message` non è tipizzato
   - ❌ Manca PHPDoc per alcuni metodi

### SendEmail.php

#### Punti di Forza
- ✅ Implementa correttamente `HasForms`
- ✅ Utilizza `EmailData` per type safety
- ✅ Form semplice e diretto
- ✅ Gestione errori appropriata

#### Aree di Miglioramento
1. **Architettura**
   - ❌ Non estende `XotBasePage`
   - ❌ `NavigationLabelTrait` è commentato
   - ❌ Manca validazione dei campi

2. **Gestione Form**
   - ❌ `fillForms()` è vuoto
   - ❌ Manca gestione errori
   - ❌ Nessun feedback dettagliato

3. **Type Safety**
   - ❌ `$emailData` è dichiarato come `?array`
   - ❌ Manca PHPDoc per alcuni metodi
   - ❌ Manca validazione dei tipi

## 💡 Raccomandazioni

### 1. Standardizzazione
- Utilizzare `XotBasePage` per entrambe le classi
- Implementare `NavigationLabelTrait` dove necessario
- Standardizzare la gestione degli errori

### 2. Miglioramento Type Safety
```php
// Prima
public ?array $emailData = [];

// Dopo
public ?EmailData $emailData = null;
```

### 3. Validazione e Feedback
```php
public function emailForm(Form $form): Form
{
    return $form
        ->schema([
            Forms\Components\TextInput::make('host')
                ->required()
                ->rules(['string', 'max:255'])
                ->validationMessages([
                    'required' => 'Il campo host è obbligatorio',
                    'max' => 'L\'host non può superare i 255 caratteri',
                ]),
            // ... altri campi
        ]);
}
```

### 4. Test SMTP
```php
public function testSmtpConnection(): bool
{
    try {
        $smtp = SmtpData::from($this->emailForm->getState());
        return $smtp->testConnection();
    } catch (\Exception $e) {
        $this->error_message = $e->getMessage();
        return false;
    }
}
```

### 5. Gestione Errori
```php
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
```

## 🔄 Piano di Azione

### Priorità Alta
1. Standardizzare l'uso di `XotBasePage`
2. Migliorare la type safety
3. Implementare validazione completa
4. Aggiungere test SMTP

### Priorità Media
1. Migliorare il feedback utente
2. Standardizzare la gestione errori
3. Aggiungere logging

### Priorità Bassa
1. Migliorare la documentazione
2. Aggiungere test unitari
3. Implementare caching

## 📝 Note Aggiuntive

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
- Seguire il principio "meno è più"

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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

## 📋 Checklist

- [ ] Standardizzare l'uso di `XotBasePage`
- [ ] Migliorare la type safety
- [ ] Implementare validazione completa
- [ ] Aggiungere test SMTP
- [ ] Migliorare il feedback utente
- [ ] Standardizzare la gestione errori
- [ ] Aggiungere logging
- [ ] Migliorare la documentazione
- [ ] Aggiungere test unitari
<<<<<<< HEAD
- [ ] Implementare caching 
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
- [ ] Implementare caching 
>>>>>>> 75179b85 (.)
=======
- [ ] Implementare caching 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 3f537838 (.)
=======
=======
- [ ] Implementare caching 
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
- [ ] Implementare caching 
>>>>>>> 75179b85 (.)
=======
- [ ] Implementare caching 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 3f537838 (.)
=======
=======
- [ ] Implementare caching 
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
- [ ] Implementare caching 
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [ ] Implementare caching 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 3f537838 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> e2f1a4045 (.)
=======
=======
- [ ] Implementare caching 
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
<<<<<<< HEAD
=======
>>>>>>> a404ea71 (.)
=======
- [ ] Implementare caching 
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 2941b0bd (.)
=======
=======
- [ ] Implementare caching 
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
- [ ] Implementare caching 
>>>>>>> 66453ace (.)
=======
>>>>>>> 4c323e61 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 53eef8d8d (.)
=======
=======
- [ ] Implementare caching 
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
<<<<<<< HEAD
=======
>>>>>>> febe79e3 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
- [ ] Implementare caching 
>>>>>>> 2a97406c (.)
=======
>>>>>>> 98d837b9 (.)
=======
=======
- [ ] Implementare caching 
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
- [ ] Implementare caching 
>>>>>>> 4f042b88 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e4a7796 (.)
=======
=======
- [ ] Implementare caching 
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c7a4727b (.)
=======
=======
- [ ] Implementare caching 
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 9721a5b2 (.)
=======
- [ ] Implementare caching 
>>>>>>> 712617d3 (.)
=======
>>>>>>> 116df547 (.)
=======
=======
- [ ] Implementare caching 
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 1442e291 (rebase 210)
=======
- [ ] Implementare caching 
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 84082535 (rebase 210)
=======
=======
- [ ] Implementare caching 
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> fcaebc79 (rebase 210)
<<<<<<< HEAD
=======
>>>>>>> 54220b28 (rebase 210)
=======
- [ ] Implementare caching 
>>>>>>> 4fc21b78 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [ ] Implementare caching 
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 7ffa94fc (rebase 210)
=======
=======
- [ ] Implementare caching 
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 9d3810d0 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [ ] Implementare caching 
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 82e5ee2d (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1c96b91fe (.)
=======
=======
- [ ] Implementare caching 
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
<<<<<<< HEAD
=======
>>>>>>> d38aa9d2 (rebase 210)
=======
- [ ] Implementare caching 
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 5b50927d (rebase 210)
=======
=======
- [ ] Implementare caching 
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 9e7ba5b6 (rebase 210)
=======
- [ ] Implementare caching 
>>>>>>> 36ac4fc1 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d45a0226 (.)
=======
=======
- [ ] Implementare caching 
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [ ] Implementare caching 
>>>>>>> fd1fcc4c (.)
=======
>>>>>>> cb5f23b0 (.)
=======
=======
- [ ] Implementare caching 
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
=======
>>>>>>> f9ec4f86 (.)
=======
- [ ] Implementare caching 
>>>>>>> 4f3927d7 (.)
=======
>>>>>>> 4b544042 (.)
=======
=======
- [ ] Implementare caching 
>>>>>>> bf479cc (.)
>>>>>>> 0ebb7b01 (.)
=======
>>>>>>> cccb594f (.)
=======
- [ ] Implementare caching 
>>>>>>> c8b1c8bf (.)
=======
- [ ] Implementare caching 
>>>>>>> 9cf0dc90 (.)
=======
- [ ] Implementare caching 
>>>>>>> 75179b85 (.)
=======
- [ ] Implementare caching 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 3f537838 (.)
=======
=======
- [ ] Implementare caching 
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [ ] Implementare caching 
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 2941b0bd (.)
=======
=======
- [ ] Implementare caching 
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
- [ ] Implementare caching 
>>>>>>> 66453ace (.)
=======
>>>>>>> 4c323e61 (.)
=======
=======
- [ ] Implementare caching 
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> febe79e3 (.)
<<<<<<< HEAD
=======
>>>>>>> 5fd545e4 (.)
=======
- [ ] Implementare caching 
>>>>>>> 2a97406c (.)
<<<<<<< HEAD
=======
>>>>>>> 98d837b9 (.)
=======
=======
- [ ] Implementare caching 
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
- [ ] Implementare caching 
>>>>>>> 4f042b88 (.)
=======
>>>>>>> 4e4a7796 (.)
=======
=======
- [ ] Implementare caching 
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> c7a4727b (.)
=======
=======
- [ ] Implementare caching 
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 9721a5b2 (.)
=======
- [ ] Implementare caching 
>>>>>>> 712617d3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 116df547 (.)
=======
=======
- [ ] Implementare caching 
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 1442e291 (rebase 210)
=======
- [ ] Implementare caching 
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 84082535 (rebase 210)
=======
=======
- [ ] Implementare caching 
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> fcaebc79 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
- [ ] Implementare caching 
>>>>>>> 4fc21b78 (rebase 210)
=======
- [ ] Implementare caching 
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 7ffa94fc (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6ad5224fb (.)
=======
=======
- [ ] Implementare caching 
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
<<<<<<< HEAD
=======
>>>>>>> 9d3810d0 (rebase 210)
=======
- [ ] Implementare caching 
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 82e5ee2d (rebase 210)
=======
=======
- [ ] Implementare caching 
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> d38aa9d2 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [ ] Implementare caching 
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 5b50927d (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ad905ce9c (.)
=======
=======
- [ ] Implementare caching 
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 9e7ba5b6 (rebase 210)
=======
- [ ] Implementare caching 
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> d45a0226 (.)
=======
=======
- [ ] Implementare caching 
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
- [ ] Implementare caching 
>>>>>>> fd1fcc4c (.)
=======
>>>>>>> cb5f23b0 (.)
=======
=======
- [ ] Implementare caching 
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
=======
>>>>>>> f9ec4f86 (.)
=======
- [ ] Implementare caching 
>>>>>>> 4f3927d7 (.)
=======
>>>>>>> 4b544042 (.)
=======
=======
- [ ] Implementare caching 
>>>>>>> bf479cc (.)
>>>>>>> 0ebb7b01 (.)
=======
>>>>>>> cccb594f (.)
=======
- [ ] Implementare caching 
>>>>>>> c8b1c8bf (.)
=======
- [ ] Implementare caching 
>>>>>>> 9cf0dc90 (.)
=======
- [ ] Implementare caching 
>>>>>>> 75179b85 (.)
=======
- [ ] Implementare caching 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 3f537838 (.)
=======
- [ ] Implementare caching 
>>>>>>> 75179b855 (.)
=======
- [ ] Implementare caching 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 3f537838 (.)
=======
=======
- [ ] Implementare caching 
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
- [ ] Implementare caching 
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 2941b0bd (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 01af324fe (.)
=======
=======
- [ ] Implementare caching 
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ca10d6ad (.)
=======
- [ ] Implementare caching 
>>>>>>> 66453ace (.)
<<<<<<< HEAD
=======
>>>>>>> 4c323e61 (.)
=======
=======
- [ ] Implementare caching 
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> febe79e3 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
- [ ] Implementare caching 
>>>>>>> 2a97406c (.)
=======
>>>>>>> 98d837b9 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 13aa25113 (.)
=======
=======
- [ ] Implementare caching 
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a29a4728 (.)
=======
- [ ] Implementare caching 
>>>>>>> 4f042b88 (.)
=======
>>>>>>> 4e4a7796 (.)
=======
=======
- [ ] Implementare caching 
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> c7a4727b (.)
=======
=======
- [ ] Implementare caching 
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 9721a5b2 (.)
=======
- [ ] Implementare caching 
>>>>>>> 712617d3 (.)
=======
>>>>>>> 116df547 (.)
=======
=======
- [ ] Implementare caching 
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
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
- [ ] Implementare caching 
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
- [ ] Implementare caching 
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
- [ ] Implementare caching 
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
- [ ] Implementare caching 
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
>>>>>>> 0a5473e16 (.)
=======
>>>>>>> 252fa579e (.)
=======
>>>>>>> 43dd68f4b (.)
=======
=======
- [ ] Implementare caching 
>>>>>>> 9c45d9bd (rebase 210)
>>>>>>> ce1853afd (.)
=======
>>>>>>> f3c06ccdd (.)
=======
>>>>>>> 6ad5224fb (.)
=======
>>>>>>> 21a6fa9bc (.)
=======
=======
- [ ] Implementare caching 
>>>>>>> eb62d6cf (rebase 210)
>>>>>>> 7a142b4f5 (.)
=======
>>>>>>> e312314fa (.)
=======
>>>>>>> 1c96b91fe (.)
=======
>>>>>>> 610b999f1 (.)
=======
=======
- [ ] Implementare caching 
>>>>>>> 8c8937e7 (rebase 210)
>>>>>>> c31e900eb (.)
=======
>>>>>>> 5e028c03d (.)
=======
>>>>>>> ad905ce9c (.)
=======
=======
>>>>>>> 9e7ba5b6 (rebase 210)
>>>>>>> ff78f10a5 (.)
=======
>>>>>>> fea359347 (.)
=======
=======
>>>>>>> d45a0226 (.)
>>>>>>> f15c41e60 (.)
=======
>>>>>>> c7d5eaf96 (.)
=======
=======
- [ ] Implementare caching 
>>>>>>> fd1fcc4c (.)
>>>>>>> d9e649ac3 (.)
