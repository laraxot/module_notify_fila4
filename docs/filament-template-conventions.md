<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
# Convenzioni per Template Blade di Filament 

## Struttura Standard dei Template di Pagina

Ogni template di pagina Filament  **DEVE** seguire questa struttura standardizzata per garantire coerenza nell'interfaccia utente e nelle funzionalità.

## Elementi Obbligatori

Ogni template di pagina Filament deve includere:

1. **Tag radice**: `<x-filament-panels::page>`
2. **Sezione principale**: `<x-filament::section>`
3. **Tre slot** all'interno della sezione:
   - `heading`: Titolo della pagina
   - `description`: Breve descrizione della funzionalità della pagina
   - `footer`: Pulsanti di azione o altre funzionalità di navigazione

## Esempio Completo e Corretto

```blade
<x-filament-panels::page>
    <x-filament::section>
        <x-slot name="heading">
            Test Invio [Tipo di Messaggio]
        </x-slot>

        <x-slot name="description">
            Utilizza questo form per testare l'invio di [tipo di messaggio] tramite diversi provider.
        </x-slot>

        {{ $this->nomeForm }}

        <x-slot name="footer">
            <div class="flex items-center justify-end gap-x-3">
                <x-filament::button wire:click="methodName" type="submit" color="primary">
                    Invia [Tipo di Messaggio]
                </x-filament::button>
            </div>
        </x-slot>
    </x-filament::section>
</x-filament-panels::page>
```

## Elementi Opzionali ma Consigliati

1. **Indicatore di caricamento**:
   ```blade
   <x-filament::loading-indicator class="h-5 w-5" wire:loading wire:target="methodName"/>
   ```

2. **Gestione degli errori**:
   ```blade
   {{ $error_message ?? '--' }}
   ```

## Rischi di Non Conformità

Non seguire queste convenzioni può portare a:

1. **Inconsistenza UI**: Esperienza utente incoerente tra le diverse pagine
2. **Funzionalità mancanti**: Elementi obbligatori come i pulsanti di azione potrebbero essere assenti
3. **Accessibilità ridotta**: Mancanza di descrizioni può impattare l'accessibilità
4. **Manutenibilità difficoltosa**: Strutture non standard sono più difficili da mantenere

## Verifica di Conformità

Per verificare che tutti i template seguano queste convenzioni:

```bash
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
grep -L "name=\"description\"" /var/www/html/<nome progetto>/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/<nome progetto>/laravel/Modules/*/resources/views/filament/pages/*.blade.php
=======
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b855 (.)
grep -L "name=\"description\"" /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"description\"" /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/*/resources/views/filament/pages/*.blade.php
<<<<<<< HEAD
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
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> f963d2c0 (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 31f5d28f (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 31f5d28f (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 31f5d28f (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 6608a1a0 (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 23cbbaf5 (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 909e45af (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> bb7e77c2 (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> b99af5a8 (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> f3086887 (rebase 210)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 3d462363 (rebase 210)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 54ad93c4 (rebase 210)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 6e12a84b (rebase 210)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 545977c8 (rebase 210)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 69fa7d37 (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 31f5d28f (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 6608a1a0 (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 23cbbaf5 (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 909e45af (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> bb7e77c2 (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> b99af5a8 (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> f3086887 (rebase 210)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 3d462363 (rebase 210)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 54ad93c4 (rebase 210)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 6e12a84b (rebase 210)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 545977c8 (rebase 210)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 69fa7d37 (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 31f5d28f (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 6608a1a0 (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 23cbbaf5 (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 909e45af (.)
=======
grep -L "name=\"description\"" /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"description\"" /var/www/html/<nome progetto>/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/<nome progetto>/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"description\"" /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> bf479cc (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 31f5d28f (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> a404ea71 (.)
=======
>>>>>>> 75179b85 (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> a404ea71 (.)
=======
>>>>>>> 75179b85 (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> a404ea71 (.)
=======
>>>>>>> 75179b85 (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> a404ea71 (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> ca10d6ad (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> febe79e3 (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> a29a4728 (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 9721a5b2 (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 1442e291 (rebase 210)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> fcaebc79 (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 9d3810d0 (rebase 210)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> d38aa9d2 (rebase 210)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 9e7ba5b6 (rebase 210)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
>>>>>>> c8b1c8bf (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> 75179b85 (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> a404ea71 (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> ca10d6ad (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> febe79e3 (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> a29a4728 (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 9721a5b2 (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 1442e291 (rebase 210)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> fcaebc79 (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 9d3810d0 (rebase 210)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> d38aa9d2 (rebase 210)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 9e7ba5b6 (rebase 210)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
>>>>>>> c8b1c8bf (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> 75179b85 (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 75179b855 (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> a404ea71 (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> ca10d6ad (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> febe79e3 (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
```

## Riferimenti

- [Filament UI Components](https://filamentphp.com/docs/panels/components)
- [Laravel Blade Templates](https://laravel.com/docs/blade)
- [Accessibilità Web](https://www.w3.org/WAI/fundamentals/accessibility-intro/)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> 712617d3 (.)
=======
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
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
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> 712617d3 (.)
=======
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
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
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 2a97406c (.)
