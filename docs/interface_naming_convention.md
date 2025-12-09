# Convenzione di Naming per le Interfacce 

## Regola Fondamentale

, tutte le interfacce **DEVONO** utilizzare il suffisso `Contract` e **MAI** il suffisso `Interface`.

## Esempi Corretti e Incorretti

```php
// ✅ CORRETTO
interface SmsActionContract
interface WhatsAppProviderActionContract
interface TelegramProviderActionContract

// ❌ ERRATO
interface SmsActionInterface
interface WhatsAppProviderActionInterface
interface TelegramProviderActionInterface
```

## Motivazione

1. **Coerenza con Laravel**: Il framework Laravel utilizza il suffisso `Contract` per le sue interfacce (es. `Illuminate\Contracts\Auth\Authenticatable`).
2. **Chiarezza semantica**: Il termine "Contract" esprime meglio il concetto di un "contratto" che le classi implementatrici devono rispettare.
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli <nome progetto>.
=======
=======
=======
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 75179b85 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> f963d2c0 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli <nome progetto>.
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
=======
>>>>>>> d284d65 (.)
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 75179b85 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
<<<<<<< HEAD
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
<<<<<<< HEAD
>>>>>>> f963d2c0 (.)
=======
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli <nome progetto>.
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
=======
>>>>>>> 82ae73be (.)
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
=======
>>>>>>> b19cd40 (.)
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 75179b85 (.)
4. **Integrazione con tooling**: Gli strumenti di analisi statica e generazione di codice sono configurati per questa convenzione.

## Implementazione

Per garantire la conformità a questa convenzione:

1. Tutte le nuove interfacce devono essere create con il suffisso `Contract`.
2. Le interfacce esistenti con il suffisso `Interface` devono essere rinominate.
3. I riferimenti alle interfacce rinominate devono essere aggiornati in tutto il codice.

## Verifica

Per verificare la corretta implementazione:

```bash

# Cerca interfacce con naming errato
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
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
grep -r "interface.*Interface" --include="*.php" /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules

# Cerca interfacce con naming corretto
grep -r "interface.*Contract" --include="*.php" /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
grep -r "interface.*Interface" --include="*.php" /var/www/html/<nome progetto>/laravel/Modules

# Cerca interfacce con naming corretto
grep -r "interface.*Contract" --include="*.php" /var/www/html/<nome progetto>/laravel/Modules
=======
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> f963d2c0 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 31f5d28f (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> f963d2c0 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
grep -r "interface.*Interface" --include="*.php" /var/www/html/saluteora/laravel/Modules

# Cerca interfacce con naming corretto
grep -r "interface.*Contract" --include="*.php" /var/www/html/saluteora/laravel/Modules
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> 31f5d28f (.)
=======
grep -r "interface.*Interface" --include="*.php" /var/www/html/<nome progetto>/laravel/Modules

# Cerca interfacce con naming corretto
grep -r "interface.*Contract" --include="*.php" /var/www/html/<nome progetto>/laravel/Modules
>>>>>>> bf479cc (.)
<<<<<<< HEAD
>>>>>>> 31f5d28f (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
grep -r "interface.*Interface" --include="*.php" /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules

# Cerca interfacce con naming corretto
grep -r "interface.*Contract" --include="*.php" /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules
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
>>>>>>> d284d65 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> f963d2c0 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
```

## Riferimenti

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- [Laravel Contracts Documentation](https://laravel.com/docs/contracts)
<<<<<<< HEAD
- [PTVX Code Quality Guidelines](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/Modules/Xot/app/Contracts/)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- [<nome progetto> Code Quality Guidelines](/var/www/html/<nome progetto>/laravel/docs/code-quality.md)
- [Laravel Contracts Documentation](https://laravel.com/project_docs/contracts)
- [<nome progetto> Code Quality Guidelines](/var/www/html/<nome progetto>/laravel/project_docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/<nome progetto>/laravel/Modules/Xot/app/Contracts/)
- [<nome progetto> Code Quality Guidelines](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/docs/code-quality.md)- [Laravel Contracts Documentation](https://laravel.com/project_docs/contracts)
- [<nome progetto> Code Quality Guidelines](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/project_docs/code-quality.md)
=======
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
- [Laravel Contracts Documentation](https://laravel.com/docs/contracts)
<<<<<<< HEAD
- [PTVX Code Quality Guidelines](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> 82ae73be (.)
- [Laravel Contracts Documentation](https://laravel.com/docs/contracts)
- [PTVX Code Quality Guidelines](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/Modules/Xot/app/Contracts/)
<<<<<<< HEAD
>>>>>>> f963d2c0 (.)
=======
<<<<<<< HEAD
>>>>>>> 31f5d28f (.)
=======
- [Laravel Contracts Documentation](https://laravel.com/docs/contracts)
- [PTVX Code Quality Guidelines](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 75179b85 (.)
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Laravel Contracts Documentation](https://laravel.com/project_docs/contracts)
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/project_docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
- [SaluteOra Code Quality Guidelines](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/docs/code-quality.md)- [Laravel Contracts Documentation](https://laravel.com/project_docs/contracts)
- [SaluteOra Code Quality Guidelines](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/project_docs/code-quality.md)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
=======
>>>>>>> 31f5d28f (.)
=======
- [<nome progetto> Code Quality Guidelines](/var/www/html/<nome progetto>/laravel/docs/code-quality.md)
- [Laravel Contracts Documentation](https://laravel.com/project_docs/contracts)
- [<nome progetto> Code Quality Guidelines](/var/www/html/<nome progetto>/laravel/project_docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/<nome progetto>/laravel/Modules/Xot/app/Contracts/)
- [<nome progetto> Code Quality Guidelines](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/docs/code-quality.md)- [Laravel Contracts Documentation](https://laravel.com/project_docs/contracts)
- [<nome progetto> Code Quality Guidelines](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/project_docs/code-quality.md)
>>>>>>> bf479cc (.)
<<<<<<< HEAD
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 31f5d28f (.)
- [Modulo Xot Contracts](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Contracts/)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> d284d65 (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 82ae73be (.)
- [Laravel Contracts Documentation](https://laravel.com/project_docs/contracts)
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/project_docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> de02998b (.)
=======
- [Modulo Xot Contracts](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
- [Modulo Xot Contracts](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Contracts/)
>>>>>>> f963d2c0 (.)
=======
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Modulo Xot Contracts](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
