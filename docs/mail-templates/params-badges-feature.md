<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 909e45af (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> 36321fcb (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fd1fcc4c (.)
=======
>>>>>>> eb71492d (.)
=======
>>>>>>> 4f3927d7 (.)
=======
>>>>>>> 0ebb7b01 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
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
=======
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fd1fcc4c (.)
=======
>>>>>>> eb71492d (.)
=======
>>>>>>> 4f3927d7 (.)
=======
>>>>>>> 0ebb7b01 (.)
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
>>>>>>> 31f5d28f (.)
=======
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
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
# Visualizzazione Parametri come Badge - Mail Templates

## Panoramica

Questa funzionalità permette di visualizzare i parametri dei template email come badge colorati nell'interfaccia Filament, migliorando l'usabilità e la comprensione dei parametri disponibili per ogni template.

## Caratteristiche Principali

### 1. Campo Parametri Editabile
- **Tipo**: Input di testo
- **Formato**: Parametri separati da virgola
- **Esempio**: `name, email, company, date, address`

### 2. Visualizzazione Badge
- **Posizione**: Subito dopo il campo HTML Template
- **Stile**: Badge blu con supporto modalità dark
- **Comportamento**: Visibili solo quando ci sono parametri definiti

### 3. Design Responsivo
- **Layout**: Flexbox con wrap automatico
- **Accessibilità**: Supporto screen reader
- **Temi**: Light e dark mode

## Implementazione Tecnica

### File Coinvolti

1. **MailTemplateResource.php**
   ```php
   'params_display' => Forms\Components\View::make('notify::filament.components.params-badges')
       ->viewData(fn ($record) => ['params' => $record?->params])
       ->columnSpanFull()
       ->visible(fn ($record): bool => !empty($record?->params)),

   'params' => Forms\Components\TextInput::make('params')
       ->label('Parametri')
       ->helperText('Inserisci i parametri separati da virgola (es: name, email, date)')
       ->placeholder('name, email, date, company')
       ->columnSpanFull(),
   ```

2. **params-badges.blade.php**
   ```blade
   @if(!empty($params))
       <div class="space-y-2">
           <div class="text-sm font-medium text-gray-900 dark:text-gray-100">
               {{ __('notify::mail_template.sections.variables') }}
           </div>
           
           <div class="flex flex-wrap gap-2">
               @foreach(array_filter(array_map('trim', explode(',', $params))) as $param)
                   <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium 
                              bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-300 
                              border border-blue-200 dark:border-blue-800">
                       {{ $param }}
                   </span>
               @endforeach
           </div>
           
           <div class="text-xs text-gray-500 dark:text-gray-400">
               {{ __('notify::mail_template.fields.variables.helper_text') }}
           </div>
       </div>
   @endif
   ```

### Database Schema

Il campo `params` è definito nella migrazione come:
```php
$table->string('params')->nullable();
```

## Utilizzo

### Per gli Sviluppatori

1. **Aggiungere Parametri**
   ```php
   $template = MailTemplate::create([
       'name' => 'Welcome Email',
       'mailable' => WelcomeEmail::class,
       'params' => 'user_name, email, registration_date, company_name'
   ]);
   ```

2. **Utilizzare nei Template**
   ```html
   <h1>Benvenuto {{ user_name }}!</h1>
   <p>La tua email {{ email }} è stata registrata il {{ registration_date }}.</p>
   <p>Benvenuto in {{ company_name }}!</p>
   ```

### Per gli Utenti Finali

1. Aprire un template email esistente o crearne uno nuovo
2. Nel campo "Parametri", inserire i nomi delle variabili separati da virgola
3. I badge appariranno automaticamente sotto il template HTML
4. Utilizzare i parametri nel template con la sintassi `{{ parameter_name }}`

## Esempi Pratici

### Template di Benvenuto
```
Parametri: user_name, email, activation_link
Badge: [user_name] [email] [activation_link]
```

### Template di Conferma Ordine
```
Parametri: customer_name, order_number, total_amount, delivery_date
Badge: [customer_name] [order_number] [total_amount] [delivery_date]
```

### Template di Reset Password
```
Parametri: user_name, reset_link, expiry_time
Badge: [user_name] [reset_link] [expiry_time]
```

## Benefici

1. **Visibilità Immediata**: I parametri sono chiaramente visibili
2. **Riduzione Errori**: Meno probabilità di utilizzare parametri sbagliati
3. **Documentazione Visiva**: I badge fungono da documentazione interattiva
4. **Coerenza UI**: Design integrato con Filament
5. **Usabilità**: Facilita la creazione e modifica dei template

## Best Practices

### Naming Conventions
- Utilizzare nomi descrittivi: `user_name` invece di `name`
- Mantenere consistenza: `user_email` e `user_phone`
- Evitare spazi: utilizzare `_` o `camelCase`

### Organizzazione
- Ordinare i parametri per logica: prima dati utente, poi dati ordine
- Limitare il numero di parametri per template (max 10-15)
- Documentare parametri complessi nei commenti

### Validazione
- Verificare che tutti i parametri nel campo siano utilizzati nel template
- Controllare che tutti i parametri nel template siano definiti nel campo
- Testare con dati reali per verificare la correttezza

## Troubleshooting

### Badge Non Visibili
- Verificare che il campo `params` non sia vuoto
- Controllare che la view `params-badges.blade.php` esista
- Verificare i permessi sui file di view

### Styling Problematico
- Assicurarsi che Tailwind CSS sia caricato
- Verificare la compatibilità con la versione di Filament
- Controllare eventuali override CSS custom

### Performance
- Con molti parametri, considerare la paginazione
- Ottimizzare la view per grandi quantità di badge
- Monitorare l'impatto sul caricamento delle pagine

## Collegamenti

- [Implementation Notes](./implementation_notes.md#visualizzazione-parametri-come-badge)
- [Mail Templates Index](./index.md)
- [Filament UI Enhancements](./filament_ui_enhancements.md)
- [Email Templates Guide](./email_templates_guide.md)

---

**Ultimo aggiornamento**: Gennaio 2025  
**Versione**: 1.0  
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
**Compatibilità**: Filament 4.x, Laravel 10+ 
=======
**Compatibilità**: Filament 3.x, Laravel 10+ 
>>>>>>> 75179b85 (.)
=======
**Compatibilità**: Filament 4.x, Laravel 10+ 
>>>>>>> f963d2c0 (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> dceba960 (.)
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> 229a065a (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
=======
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> 22baa66d (rebase 210)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> e790eb33 (.)
=======
>>>>>>> 3ee54c5d (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> dceba960 (.)
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> 229a065a (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
=======
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> 22baa66d (rebase 210)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> e790eb33 (.)
=======
>>>>>>> 3ee54c5d (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> c4bdacbf (.)
**Compatibilità**: Filament 4.x, Laravel 10+ 
=======
**Compatibilità**: Filament 3.x, Laravel 10+ 
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
**Compatibilità**: Filament 3.x, Laravel 10+ 
>>>>>>> 31f5d28f (.)
=======
**Compatibilità**: Filament 3.x, Laravel 10+ 
>>>>>>> 75179b85 (.)
=======
**Compatibilità**: Filament 4.x, Laravel 10+ 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d09cb759 (.)
=======
**Compatibilità**: Filament 3.x, Laravel 10+ 
>>>>>>> 31f5d28f (.)
=======
**Compatibilità**: Filament 3.x, Laravel 10+ 
>>>>>>> 75179b85 (.)
=======
**Compatibilità**: Filament 4.x, Laravel 10+ 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d09cb759 (.)
=======
**Compatibilità**: Filament 3.x, Laravel 10+ 
>>>>>>> 31f5d28f (.)
=======
**Compatibilità**: Filament 3.x, Laravel 10+ 
>>>>>>> 75179b85 (.)
=======
**Compatibilità**: Filament 4.x, Laravel 10+ 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d09cb759 (.)
=======
**Compatibilità**: Filament 3.x, Laravel 10+ 
>>>>>>> 31f5d28f (.)
=======
**Compatibilità**: Filament 4.x, Laravel 10+ 
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 4689a827 (.)
=======
**Compatibilità**: Filament 3.x, Laravel 10+ 
>>>>>>> 6608a1a0 (.)
=======
**Compatibilità**: Filament 4.x, Laravel 10+ 
>>>>>>> 66453ace (.)
=======
>>>>>>> 7325acf3 (.)
=======
**Compatibilità**: Filament 3.x, Laravel 10+ 
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
**Compatibilità**: Filament 4.x, Laravel 10+ 
>>>>>>> 2a97406c (.)
=======
>>>>>>> f2e64178 (.)
=======
**Compatibilità**: Filament 3.x, Laravel 10+ 
>>>>>>> 909e45af (.)
=======
**Compatibilità**: Filament 4.x, Laravel 10+ 
>>>>>>> 4f042b88 (.)
=======
>>>>>>> c4bdacbf (.)
=======
**Compatibilità**: Filament 3.x, Laravel 10+ 
>>>>>>> bb7e77c2 (.)
=======
**Compatibilità**: Filament 4.x, Laravel 10+ 
>>>>>>> 36321fcb (.)
=======
>>>>>>> dceba960 (.)
=======
**Compatibilità**: Filament 3.x, Laravel 10+ 
>>>>>>> b99af5a8 (.)
=======
**Compatibilità**: Filament 4.x, Laravel 10+ 
>>>>>>> 712617d3 (.)
=======
>>>>>>> bd804d67 (.)
=======
**Compatibilità**: Filament 3.x, Laravel 10+ 
>>>>>>> f3086887 (rebase 210)
=======
**Compatibilità**: Filament 4.x, Laravel 10+ 
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 229a065a (rebase 210)
=======
**Compatibilità**: Filament 3.x, Laravel 10+ 
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
**Compatibilità**: Filament 3.x, Laravel 10+ 
>>>>>>> 4fc21b78 (rebase 210)
=======
**Compatibilità**: Filament 4.x, Laravel 10+ 
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
=======
**Compatibilità**: Filament 3.x, Laravel 10+ 
>>>>>>> 54ad93c4 (rebase 210)
=======
**Compatibilità**: Filament 4.x, Laravel 10+ 
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 5aedc39c (rebase 210)
=======
**Compatibilità**: Filament 3.x, Laravel 10+ 
>>>>>>> 6e12a84b (rebase 210)
=======
**Compatibilità**: Filament 4.x, Laravel 10+ 
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 22baa66d (rebase 210)
=======
**Compatibilità**: Filament 3.x, Laravel 10+ 
>>>>>>> 545977c8 (rebase 210)
=======
**Compatibilità**: Filament 4.x, Laravel 10+ 
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 2effe245 (.)
=======
**Compatibilità**: Filament 3.x, Laravel 10+ 
>>>>>>> 69fa7d37 (.)
=======
**Compatibilità**: Filament 4.x, Laravel 10+ 
>>>>>>> fd1fcc4c (.)
=======
>>>>>>> e790eb33 (.)
=======
**Compatibilità**: Filament 3.x, Laravel 10+ 
>>>>>>> eb71492d (.)
=======
**Compatibilità**: Filament 4.x, Laravel 10+ 
>>>>>>> 4f3927d7 (.)
=======
>>>>>>> 3ee54c5d (.)
=======
**Compatibilità**: Filament 3.x, Laravel 10+ 
>>>>>>> 0ebb7b01 (.)
=======
**Compatibilità**: Filament 3.x, Laravel 10+ 
>>>>>>> c8b1c8bf (.)
=======
**Compatibilità**: Filament 4.x, Laravel 10+ 
>>>>>>> 9cf0dc90 (.)
=======
**Compatibilità**: Filament 3.x, Laravel 10+ 
>>>>>>> 75179b85 (.)
=======
**Compatibilità**: Filament 4.x, Laravel 10+ 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d09cb759 (.)
=======
**Compatibilità**: Filament 3.x, Laravel 10+ 
>>>>>>> 31f5d28f (.)
=======
**Compatibilità**: Filament 4.x, Laravel 10+ 
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 4689a827 (.)
=======
**Compatibilità**: Filament 3.x, Laravel 10+ 
>>>>>>> 6608a1a0 (.)
=======
**Compatibilità**: Filament 4.x, Laravel 10+ 
>>>>>>> 66453ace (.)
=======
>>>>>>> 7325acf3 (.)
=======
**Compatibilità**: Filament 3.x, Laravel 10+ 
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
**Compatibilità**: Filament 4.x, Laravel 10+ 
>>>>>>> 2a97406c (.)
=======
>>>>>>> f2e64178 (.)
=======
**Compatibilità**: Filament 3.x, Laravel 10+ 
>>>>>>> 909e45af (.)
=======
**Compatibilità**: Filament 4.x, Laravel 10+ 
>>>>>>> 4f042b88 (.)
=======
>>>>>>> c4bdacbf (.)
=======
**Compatibilità**: Filament 3.x, Laravel 10+ 
>>>>>>> bb7e77c2 (.)
=======
**Compatibilità**: Filament 4.x, Laravel 10+ 
>>>>>>> 36321fcb (.)
=======
>>>>>>> dceba960 (.)
=======
**Compatibilità**: Filament 3.x, Laravel 10+ 
>>>>>>> b99af5a8 (.)
=======
**Compatibilità**: Filament 4.x, Laravel 10+ 
>>>>>>> 712617d3 (.)
=======
>>>>>>> bd804d67 (.)
=======
**Compatibilità**: Filament 3.x, Laravel 10+ 
>>>>>>> f3086887 (rebase 210)
=======
**Compatibilità**: Filament 4.x, Laravel 10+ 
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 229a065a (rebase 210)
=======
**Compatibilità**: Filament 3.x, Laravel 10+ 
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
**Compatibilità**: Filament 3.x, Laravel 10+ 
>>>>>>> 4fc21b78 (rebase 210)
=======
**Compatibilità**: Filament 4.x, Laravel 10+ 
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
=======
**Compatibilità**: Filament 3.x, Laravel 10+ 
>>>>>>> 54ad93c4 (rebase 210)
=======
**Compatibilità**: Filament 4.x, Laravel 10+ 
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 5aedc39c (rebase 210)
=======
**Compatibilità**: Filament 3.x, Laravel 10+ 
>>>>>>> 6e12a84b (rebase 210)
=======
**Compatibilità**: Filament 4.x, Laravel 10+ 
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 22baa66d (rebase 210)
=======
**Compatibilità**: Filament 3.x, Laravel 10+ 
>>>>>>> 545977c8 (rebase 210)
=======
**Compatibilità**: Filament 4.x, Laravel 10+ 
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 2effe245 (.)
=======
**Compatibilità**: Filament 3.x, Laravel 10+ 
>>>>>>> 69fa7d37 (.)
=======
**Compatibilità**: Filament 4.x, Laravel 10+ 
>>>>>>> fd1fcc4c (.)
=======
>>>>>>> e790eb33 (.)
=======
**Compatibilità**: Filament 3.x, Laravel 10+ 
>>>>>>> eb71492d (.)
=======
**Compatibilità**: Filament 4.x, Laravel 10+ 
>>>>>>> 4f3927d7 (.)
=======
>>>>>>> 3ee54c5d (.)
=======
**Compatibilità**: Filament 3.x, Laravel 10+ 
>>>>>>> 0ebb7b01 (.)
=======
**Compatibilità**: Filament 3.x, Laravel 10+ 
>>>>>>> c8b1c8bf (.)
=======
**Compatibilità**: Filament 4.x, Laravel 10+ 
>>>>>>> 9cf0dc90 (.)
=======
**Compatibilità**: Filament 3.x, Laravel 10+ 
>>>>>>> 75179b85 (.)
=======
**Compatibilità**: Filament 4.x, Laravel 10+ 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d09cb759 (.)
=======
**Compatibilità**: Filament 3.x, Laravel 10+ 
>>>>>>> 75179b855 (.)
=======
**Compatibilità**: Filament 4.x, Laravel 10+ 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d09cb759 (.)
=======
**Compatibilità**: Filament 3.x, Laravel 10+ 
>>>>>>> 31f5d28f (.)
=======
**Compatibilità**: Filament 4.x, Laravel 10+ 
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 4689a827 (.)
=======
**Compatibilità**: Filament 3.x, Laravel 10+ 
>>>>>>> 6608a1a0 (.)
=======
**Compatibilità**: Filament 4.x, Laravel 10+ 
>>>>>>> 66453ace (.)
=======
>>>>>>> 7325acf3 (.)
=======
**Compatibilità**: Filament 3.x, Laravel 10+ 
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
**Compatibilità**: Filament 4.x, Laravel 10+ 
>>>>>>> 2a97406c (.)
=======
>>>>>>> f2e64178 (.)
=======
**Compatibilità**: Filament 3.x, Laravel 10+ 
>>>>>>> 909e45af (.)
=======
**Compatibilità**: Filament 4.x, Laravel 10+ 
>>>>>>> 4f042b88 (.)
=======
>>>>>>> c4bdacbf (.)
=======
**Compatibilità**: Filament 3.x, Laravel 10+ 
>>>>>>> bb7e77c2 (.)
=======
**Compatibilità**: Filament 4.x, Laravel 10+ 
>>>>>>> 36321fcb (.)
