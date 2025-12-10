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
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 9cf0dc90 (.)
<<<<<<< HEAD
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
>>>>>>> c8b1c8bf (.)
>>>>>>> 7ceb00286 (.)
=======
>>>>>>> 379ffe3f3 (.)
=======
>>>>>>> a55aa5e96 (.)
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
grep -L "name=\"description\"" /var/www/html/<nome progetto>/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/<nome progetto>/laravel/Modules/*/resources/views/filament/pages/*.blade.php
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
grep -L "name=\"description\"" /var/www/html/<nome progetto>/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/<nome progetto>/laravel/Modules/*/resources/views/filament/pages/*.blade.php
=======
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> c8b1c8bf (.)
<<<<<<< HEAD
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
=======
>>>>>>> 1487fe812 (.)
=======
=======
>>>>>>> 4fc21b78 (rebase 210)
>>>>>>> 43dd68f4b (.)
=======
>>>>>>> 7ceb00286 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1487fe812 (.)
=======
>>>>>>> 43dd68f4b (.)
=======
>>>>>>> 7ceb00286 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 01af324fe (.)
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 6608a1a0 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 53eef8d8d (.)
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 23cbbaf5 (.)
=======
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c7d5eaf96 (.)
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 69fa7d37 (.)
=======
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 7aae79847 (.)
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> bb7e77c2 (.)
=======
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 74eb2e964 (.)
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> f3086887 (rebase 210)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> e2f1a4045 (.)
=======
>>>>>>> 01af324fe (.)
=======
>>>>>>> 53eef8d8d (.)
=======
>>>>>>> 13aa25113 (.)
=======
>>>>>>> 7aae79847 (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
>>>>>>> 74eb2e964 (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 3d462363 (rebase 210)
=======
<<<<<<< HEAD
>>>>>>> 0a5473e16 (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 54ad93c4 (rebase 210)
=======
<<<<<<< HEAD
>>>>>>> 6ad5224fb (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> 1c96b91fe (.)
=======
>>>>>>> ad905ce9c (.)
=======
>>>>>>> c7d5eaf96 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> e2f1a4045 (.)
=======
>>>>>>> 01af324fe (.)
=======
>>>>>>> 53eef8d8d (.)
=======
>>>>>>> 13aa25113 (.)
=======
>>>>>>> 7aae79847 (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
>>>>>>> 74eb2e964 (.)
=======
>>>>>>> 0a5473e16 (.)
=======
>>>>>>> 6ad5224fb (.)
=======
>>>>>>> 1c96b91fe (.)
=======
>>>>>>> ad905ce9c (.)
=======
>>>>>>> c7d5eaf96 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 12a7e2462 (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> f963d2c0 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 23cbbaf5 (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> febe79e3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 998e6866b (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 2a97406c (.)
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f957fb24b (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 1442e291 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b85076e48 (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> fdb24863 (rebase 210)
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 21a6fa9bc (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 9d3810d0 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 7a142b4f5 (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> eb62d6cf (rebase 210)
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ff78f10a5 (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 9e7ba5b6 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> fea359347 (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 36ac4fc1 (.)
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4bec160e6 (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> ee18dd92 (.)
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> fdad57c30 (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> a29a4728 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 36136dcfa (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 4f042b88 (.)
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 252fa579e (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> fcaebc79 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 9c45d9bd (rebase 210)
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 610b999f1 (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> d38aa9d2 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c31e900eb (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 8c8937e7 (rebase 210)
<<<<<<< HEAD
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
<<<<<<< HEAD
=======
>>>>>>> fbed41ac (.)
=======
>>>>>>> c8b1c8bf (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 379ffe3f3 (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 9cf0dc90 (.)
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8c6d84fe6 (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> ca10d6ad (.)
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 275b7ad99 (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> c7a4727b (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b99af5a8 (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 9721a5b2 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 731b801a8 (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 712617d3 (.)
<<<<<<< HEAD
=======
>>>>>>> f3086887 (rebase 210)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 1442e291 (rebase 210)
>>>>>>> laraxot/develop
=======
>>>>>>> 1487fe812 (.)
=======
>>>>>>> 12a7e2462 (.)
=======
=======
>>>>>>> 31f5d28f (.)
>>>>>>> e2f1a4045 (.)
=======
>>>>>>> c4282a934 (.)
=======
>>>>>>> 4bec160e6 (.)
=======
>>>>>>> 01af324fe (.)
=======
>>>>>>> 8c6d84fe6 (.)
=======
>>>>>>> 138485550 (.)
=======
=======
>>>>>>> 23cbbaf5 (.)
>>>>>>> 53eef8d8d (.)
=======
>>>>>>> 753ea7aca (.)
=======
>>>>>>> 998e6866b (.)
=======
>>>>>>> 13aa25113 (.)
=======
>>>>>>> fdad57c30 (.)
=======
>>>>>>> 36136dcfa (.)
=======
>>>>>>> 7aae79847 (.)
=======
>>>>>>> 275b7ad99 (.)
=======
=======
>>>>>>> b99af5a8 (.)
>>>>>>> 47bbf2b1c (.)
=======
>>>>>>> b215d516b (.)
=======
>>>>>>> 731b801a8 (.)
=======
>>>>>>> 74eb2e964 (.)
=======
>>>>>>> f957fb24b (.)
=======
>>>>>>> b85076e48 (.)
=======
>>>>>>> 0a5473e16 (.)
=======
>>>>>>> 252fa579e (.)
=======
=======
>>>>>>> 4fc21b78 (rebase 210)
>>>>>>> 43dd68f4b (.)
=======
>>>>>>> ce1853afd (.)
=======
>>>>>>> 6ad5224fb (.)
=======
>>>>>>> 21a6fa9bc (.)
=======
>>>>>>> 7a142b4f5 (.)
=======
>>>>>>> 1c96b91fe (.)
=======
>>>>>>> 610b999f1 (.)
=======
>>>>>>> c31e900eb (.)
=======
>>>>>>> ad905ce9c (.)
=======
>>>>>>> ff78f10a5 (.)
=======
>>>>>>> fea359347 (.)
=======
>>>>>>> c7d5eaf96 (.)
=======
>>>>>>> 7ceb00286 (.)
=======
>>>>>>> 379ffe3f3 (.)
=======
grep -L "name=\"description\"" /var/www/html/<nome progetto>/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/<nome progetto>/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> a55aa5e96 (.)
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
=======
>>>>>>> 998e6866b (.)
=======
>>>>>>> 36136dcfa (.)
=======
>>>>>>> 43dd68f4b (.)
=======
>>>>>>> ce1853afd (.)
=======
>>>>>>> 7a142b4f5 (.)
=======
>>>>>>> c31e900eb (.)
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 2a97406c (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 731b801a8 (.)
=======
>>>>>>> b85076e48 (.)
=======
>>>>>>> fea359347 (.)
=======
>>>>>>> 7ceb00286 (.)
=======
>>>>>>> 379ffe3f3 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> 712617d3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> 712617d3 (.)
>>>>>>> laraxot/develop
=======
>>>>>>> 301ad8b44 (.)
=======
>>>>>>> 998e6866b (.)
=======
=======
>>>>>>> 4f042b88 (.)
>>>>>>> 36136dcfa (.)
=======
>>>>>>> 731b801a8 (.)
=======
=======
>>>>>>> fdb24863 (rebase 210)
>>>>>>> b85076e48 (.)
=======
>>>>>>> 43dd68f4b (.)
=======
=======
>>>>>>> 9c45d9bd (rebase 210)
>>>>>>> ce1853afd (.)
=======
>>>>>>> 7a142b4f5 (.)
=======
=======
>>>>>>> 8c8937e7 (rebase 210)
>>>>>>> c31e900eb (.)
=======
>>>>>>> fea359347 (.)
=======
=======
>>>>>>> c8b1c8bf (.)
>>>>>>> 7ceb00286 (.)
=======
>>>>>>> 379ffe3f3 (.)
=======
>>>>>>> a55aa5e96 (.)
