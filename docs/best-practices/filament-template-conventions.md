<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> f2e64178 (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> 1487fe812 (.)
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> 2e9bd58c3 (.)
=======
>>>>>>> 23f115647 (.)
=======
>>>>>>> a115e2aad (.)
=======
>>>>>>> 848f79b79 (.)
=======
>>>>>>> 3e757cee2 (.)
=======
>>>>>>> 43dd68f4b (.)
=======
>>>>>>> c188e2a18 (.)
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
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> f3086887 (rebase 210)
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
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
=======
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
grep -L "name=\"description\"" /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 1487fe812 (.)
=======
grep -L "name=\"description\"" /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 43dd68f4b (.)
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"description\"" /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/*/resources/views/filament/pages/*.blade.php
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b855 (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> f3086887 (rebase 210)
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
>>>>>>> 31f5d28f (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> a404ea71 (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 4689a827 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> ca10d6ad (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> febe79e3 (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> f2e64178 (.)
=======
>>>>>>> 909e45af (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> a29a4728 (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> c4bdacbf (.)
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
>>>>>>> bd804d67 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 1442e291 (rebase 210)
=======
>>>>>>> 1487fe812 (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 510809c6f (.)
=======
>>>>>>> e2f1a4045 (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> c4282a934 (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> 01af324fe (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 8c6d84fe6 (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 2e9bd58c3 (.)
=======
>>>>>>> 53eef8d8d (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 753ea7aca (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 23f115647 (.)
=======
>>>>>>> 13aa25113 (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> fdad57c30 (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> a115e2aad (.)
=======
>>>>>>> 7aae79847 (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 275b7ad99 (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> b215d516b (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 848f79b79 (.)
=======
>>>>>>> 74eb2e964 (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> f957fb24b (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 3e757cee2 (.)
=======
>>>>>>> 0a5473e16 (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> 252fa579e (.)
=======
>>>>>>> 43dd68f4b (.)
=======
grep -L "name=\"description\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
grep -L "name=\"footer\"" /var/www/html/saluteora/laravel/Modules/*/resources/views/filament/pages/*.blade.php
>>>>>>> c188e2a18 (.)
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
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> 1487fe812 (.)
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> 2e9bd58c3 (.)
=======
>>>>>>> 23f115647 (.)
=======
>>>>>>> a115e2aad (.)
=======
>>>>>>> 848f79b79 (.)
=======
>>>>>>> 3e757cee2 (.)
=======
>>>>>>> 43dd68f4b (.)
=======
>>>>>>> c188e2a18 (.)
