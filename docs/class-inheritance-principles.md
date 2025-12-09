<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
# Principi di Ereditarietà nelle Classi <nome progetto>
=======
# Principi di Ereditarietà nelle Classi 
# Principi di Ereditarietà nelle Classi SaluteOra
>>>>>>> 75179b85 (.)
=======
# Principi di Ereditarietà nelle Classi SaluteOra
>>>>>>> f963d2c0 (.)
=======
# Principi di Ereditarietà nelle Classi SaluteOra
=======
# Principi di Ereditarietà nelle Classi SaluteOra
>>>>>>> 31f5d28f (.)
=======
# Principi di Ereditarietà nelle Classi SaluteOra
>>>>>>> 31f5d28f (.)
=======
# Principi di Ereditarietà nelle Classi SaluteOra
>>>>>>> 31f5d28f (.)
=======
# Principi di Ereditarietà nelle Classi SaluteOra
>>>>>>> 6608a1a0 (.)
=======
# Principi di Ereditarietà nelle Classi SaluteOra
>>>>>>> 23cbbaf5 (.)
=======
# Principi di Ereditarietà nelle Classi SaluteOra
>>>>>>> 909e45af (.)
=======
# Principi di Ereditarietà nelle Classi SaluteOra
>>>>>>> bb7e77c2 (.)
=======
# Principi di Ereditarietà nelle Classi 
# Principi di Ereditarietà nelle Classi <nome progetto>
>>>>>>> bf479cc (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 31f5d28f (.)
=======
# Principi di Ereditarietà nelle Classi SaluteOra
>>>>>>> a404ea71 (.)
=======
# Principi di Ereditarietà nelle Classi 
# Principi di Ereditarietà nelle Classi SaluteOra
>>>>>>> 75179b85 (.)
=======
# Principi di Ereditarietà nelle Classi SaluteOra
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
# Principi di Ereditarietà nelle Classi SaluteOra
>>>>>>> a404ea71 (.)
=======
# Principi di Ereditarietà nelle Classi 
# Principi di Ereditarietà nelle Classi SaluteOra
>>>>>>> 75179b85 (.)
=======
# Principi di Ereditarietà nelle Classi SaluteOra
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
# Principi di Ereditarietà nelle Classi SaluteOra
>>>>>>> a404ea71 (.)
=======
# Principi di Ereditarietà nelle Classi 
# Principi di Ereditarietà nelle Classi SaluteOra
>>>>>>> 75179b85 (.)
=======
# Principi di Ereditarietà nelle Classi SaluteOra
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
# Principi di Ereditarietà nelle Classi SaluteOra
>>>>>>> a404ea71 (.)
=======
# Principi di Ereditarietà nelle Classi SaluteOra
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
# Principi di Ereditarietà nelle Classi SaluteOra
>>>>>>> ca10d6ad (.)
=======
# Principi di Ereditarietà nelle Classi SaluteOra
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
# Principi di Ereditarietà nelle Classi SaluteOra
>>>>>>> febe79e3 (.)
=======
# Principi di Ereditarietà nelle Classi SaluteOra
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
# Principi di Ereditarietà nelle Classi SaluteOra
>>>>>>> a29a4728 (.)
=======
# Principi di Ereditarietà nelle Classi SaluteOra
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)

## Regola Fondamentale: No Duplicate Declarations

Le classi che estendono altre classi  **NON devono ridichiarare** interfacce, trait o metodi già presenti nella classe genitore, a meno che non ne modifichino il comportamento.

## Esempi Corretti vs Errati

### ❌ Errato: Duplicazione di Interfacce/Trait

```php
// Classe base
abstract class XotBasePage extends Page implements HasForms
{
    use InteractsWithForms;
    // ...
}

// Classe figlia - ERRATO
class SendSmsPage extends XotBasePage implements HasForms // ⚠️ Duplicato!
{
    use InteractsWithForms; // ⚠️ Duplicato!
    // ...
}
```

### ✅ Corretto: Nessuna Duplicazione

```php
// Classe base
abstract class XotBasePage extends Page implements HasForms
{
    use InteractsWithForms;
    // ...
}

// Classe figlia - CORRETTO
class SendSmsPage extends XotBasePage
{
    // Non ridichiarare interfacce o trait già definiti nella classe base
    // ...
}
```

## Motivazioni

1. **Principio DRY (Don't Repeat Yourself)**:
   - Evita duplicazione del codice
   - Riduce il rischio di incoerenze quando la classe base cambia
   - Migliora la leggibilità
   - Facilita la manutenzione

2. **Chiarezza Contrattuale**:
   - Le implementazioni delle interfacce/trait sono gestite dalla classe base
   - Evita confusione sul "contratto" che la classe deve rispettare
   - Rende più chiara la gerarchia delle classi

3. **Ottimizzazione**:
   - Evita overhead di dichiarazioni ridondanti
   - Riduce la dimensione del codice
   - Semplifica l'analisi statica

## Eccezioni

L'unico caso in cui è accettabile ridichiarare un'interfaccia è quando:

1. Si sovrascrive il comportamento dell'interfaccia in modo significativo, modificando i metodi ereditati
2. È necessario esplicitare che la classe implementa un'interfaccia specifica per motivi di documentazione

## Verifica del Codice

Per identificare dichiarazioni duplicate, usare:

```bash

# Trova classi che estendono XotBasePage e implementano HasForms
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
grep -r --include="*.php" "extends XotBasePage implements HasForms" /var/www/html/<nome progetto>/laravel/Modules/
=======
grep -r --include="*.php" "extends XotBasePage implements HasForms" /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/
grep -r --include="*.php" "extends XotBasePage implements HasForms" /var/www/html/saluteora/laravel/Modules/
grep -r --include="*.php" "extends XotBasePage implements HasForms" /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/
>>>>>>> 75179b85 (.)
=======
grep -r --include="*.php" "extends XotBasePage implements HasForms" /var/www/html/saluteora/laravel/Modules/
>>>>>>> f963d2c0 (.)
=======
grep -r --include="*.php" "extends XotBasePage implements HasForms" /var/www/html/saluteora/laravel/Modules/
=======
grep -r --include="*.php" "extends XotBasePage implements HasForms" /var/www/html/saluteora/laravel/Modules/
>>>>>>> 31f5d28f (.)
=======
grep -r --include="*.php" "extends XotBasePage implements HasForms" /var/www/html/saluteora/laravel/Modules/
>>>>>>> 31f5d28f (.)
=======
grep -r --include="*.php" "extends XotBasePage implements HasForms" /var/www/html/saluteora/laravel/Modules/
>>>>>>> 31f5d28f (.)
=======
grep -r --include="*.php" "extends XotBasePage implements HasForms" /var/www/html/saluteora/laravel/Modules/
>>>>>>> 6608a1a0 (.)
=======
grep -r --include="*.php" "extends XotBasePage implements HasForms" /var/www/html/saluteora/laravel/Modules/
>>>>>>> 23cbbaf5 (.)
=======
grep -r --include="*.php" "extends XotBasePage implements HasForms" /var/www/html/saluteora/laravel/Modules/
>>>>>>> 909e45af (.)
=======
grep -r --include="*.php" "extends XotBasePage implements HasForms" /var/www/html/saluteora/laravel/Modules/
>>>>>>> bb7e77c2 (.)
=======
grep -r --include="*.php" "extends XotBasePage implements HasForms" /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/
grep -r --include="*.php" "extends XotBasePage implements HasForms" /var/www/html/<nome progetto>/laravel/Modules/
grep -r --include="*.php" "extends XotBasePage implements HasForms" /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/
>>>>>>> bf479cc (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 31f5d28f (.)
=======
grep -r --include="*.php" "extends XotBasePage implements HasForms" /var/www/html/saluteora/laravel/Modules/
>>>>>>> a404ea71 (.)
=======
grep -r --include="*.php" "extends XotBasePage implements HasForms" /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/
grep -r --include="*.php" "extends XotBasePage implements HasForms" /var/www/html/saluteora/laravel/Modules/
grep -r --include="*.php" "extends XotBasePage implements HasForms" /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/
>>>>>>> 75179b85 (.)
=======
grep -r --include="*.php" "extends XotBasePage implements HasForms" /var/www/html/saluteora/laravel/Modules/
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
grep -r --include="*.php" "extends XotBasePage implements HasForms" /var/www/html/saluteora/laravel/Modules/
>>>>>>> a404ea71 (.)
=======
grep -r --include="*.php" "extends XotBasePage implements HasForms" /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/
grep -r --include="*.php" "extends XotBasePage implements HasForms" /var/www/html/saluteora/laravel/Modules/
grep -r --include="*.php" "extends XotBasePage implements HasForms" /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/
>>>>>>> 75179b85 (.)
=======
grep -r --include="*.php" "extends XotBasePage implements HasForms" /var/www/html/saluteora/laravel/Modules/
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
grep -r --include="*.php" "extends XotBasePage implements HasForms" /var/www/html/saluteora/laravel/Modules/
>>>>>>> a404ea71 (.)
=======
grep -r --include="*.php" "extends XotBasePage implements HasForms" /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/
grep -r --include="*.php" "extends XotBasePage implements HasForms" /var/www/html/saluteora/laravel/Modules/
grep -r --include="*.php" "extends XotBasePage implements HasForms" /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/
>>>>>>> 75179b85 (.)
=======
grep -r --include="*.php" "extends XotBasePage implements HasForms" /var/www/html/saluteora/laravel/Modules/
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
grep -r --include="*.php" "extends XotBasePage implements HasForms" /var/www/html/saluteora/laravel/Modules/
>>>>>>> a404ea71 (.)
=======
grep -r --include="*.php" "extends XotBasePage implements HasForms" /var/www/html/saluteora/laravel/Modules/
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
grep -r --include="*.php" "extends XotBasePage implements HasForms" /var/www/html/saluteora/laravel/Modules/
>>>>>>> ca10d6ad (.)
=======
grep -r --include="*.php" "extends XotBasePage implements HasForms" /var/www/html/saluteora/laravel/Modules/
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
grep -r --include="*.php" "extends XotBasePage implements HasForms" /var/www/html/saluteora/laravel/Modules/
>>>>>>> febe79e3 (.)
=======
grep -r --include="*.php" "extends XotBasePage implements HasForms" /var/www/html/saluteora/laravel/Modules/
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
grep -r --include="*.php" "extends XotBasePage implements HasForms" /var/www/html/saluteora/laravel/Modules/
>>>>>>> a29a4728 (.)
=======
grep -r --include="*.php" "extends XotBasePage implements HasForms" /var/www/html/saluteora/laravel/Modules/
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
```

## Riferimenti

- [PSR-1: Basic Coding Standard](https://www.php-fig.org/psr/psr-1/)
- [SOLID Principles](https://en.wikipedia.org/wiki/SOLID)
- [DRY Principle](https://en.wikipedia.org/wiki/Don%27t_repeat_yourself)
- [PHP OOP Best Practices](https://phptherightway.com/#object-oriented-programming)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> 4f042b88 (.)
