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
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli <nome progetto>.
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
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli <nome progetto>.
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 75179b85 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> f963d2c0 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 31f5d28f (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 31f5d28f (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 31f5d28f (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 6608a1a0 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 23cbbaf5 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 909e45af (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> bb7e77c2 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> b99af5a8 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> f3086887 (rebase 210)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 3d462363 (rebase 210)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 54ad93c4 (rebase 210)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 6e12a84b (rebase 210)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 545977c8 (rebase 210)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 69fa7d37 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 31f5d28f (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 6608a1a0 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 23cbbaf5 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 909e45af (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> bb7e77c2 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> b99af5a8 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> f3086887 (rebase 210)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 3d462363 (rebase 210)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 54ad93c4 (rebase 210)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 6e12a84b (rebase 210)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 545977c8 (rebase 210)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 69fa7d37 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 31f5d28f (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 6608a1a0 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 23cbbaf5 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 909e45af (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> bb7e77c2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> b99af5a8 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> f3086887 (rebase 210)
=======
<<<<<<< HEAD
=======
>>>>>>> e2f1a4045 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 01af324fe (.)
=======
>>>>>>> 53eef8d8d (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 909e45af (.)
=======
>>>>>>> 13aa25113 (.)
=======
>>>>>>> 7aae79847 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
>>>>>>> 74eb2e964 (.)
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli <nome progetto>.
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
>>>>>>> 31f5d28f (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> a404ea71 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 75179b85 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> a404ea71 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 75179b85 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> a404ea71 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> a404ea71 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> ca10d6ad (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> febe79e3 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 2a97406c (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 909e45af (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> a29a4728 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 9721a5b2 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 1442e291 (rebase 210)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> fcaebc79 (rebase 210)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 4fc21b78 (rebase 210)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 9d3810d0 (rebase 210)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> d38aa9d2 (rebase 210)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 9e7ba5b6 (rebase 210)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
>>>>>>> fbed41ac (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> c8b1c8bf (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 9cf0dc90 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 75179b85 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> a404ea71 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> ee18dd92 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6608a1a0 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> ca10d6ad (.)
<<<<<<< HEAD
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> febe79e3 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> a29a4728 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 9721a5b2 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 1442e291 (rebase 210)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> fcaebc79 (rebase 210)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 4fc21b78 (rebase 210)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 9d3810d0 (rebase 210)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> d38aa9d2 (rebase 210)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 9e7ba5b6 (rebase 210)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
>>>>>>> fbed41ac (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> c8b1c8bf (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 9cf0dc90 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 75179b85 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> f963d2c0 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 75179b855 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> a404ea71 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> ca10d6ad (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 66453ace (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 23cbbaf5 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> febe79e3 (.)
<<<<<<< HEAD
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> a29a4728 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 9721a5b2 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 712617d3 (.)
<<<<<<< HEAD
=======
>>>>>>> f3086887 (rebase 210)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 1442e291 (rebase 210)
>>>>>>> laraxot/develop
=======
>>>>>>> 1487fe812 (.)
=======
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> f963d2c0 (.)
>>>>>>> 12a7e2462 (.)
=======
>>>>>>> e2f1a4045 (.)
=======
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> a404ea71 (.)
>>>>>>> c4282a934 (.)
=======
>>>>>>> 4bec160e6 (.)
=======
=======
>>>>>>> 6608a1a0 (.)
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
=======
>>>>>>> 909e45af (.)
>>>>>>> 13aa25113 (.)
=======
>>>>>>> fdad57c30 (.)
=======
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 4f042b88 (.)
>>>>>>> 36136dcfa (.)
=======
>>>>>>> 7aae79847 (.)
=======
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> c7a4727b (.)
>>>>>>> 275b7ad99 (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 9721a5b2 (.)
>>>>>>> b215d516b (.)
=======
>>>>>>> 731b801a8 (.)
=======
>>>>>>> 74eb2e964 (.)
=======
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 1442e291 (rebase 210)
>>>>>>> f957fb24b (.)
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
>>>>>>> laraxot/develop
=======
>>>>>>> 1487fe812 (.)
=======
>>>>>>> 12a7e2462 (.)
=======
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
>>>>>>> 47bbf2b1c (.)
=======
>>>>>>> b215d516b (.)
=======
>>>>>>> 731b801a8 (.)
=======
>>>>>>> 74eb2e964 (.)
=======
>>>>>>> f957fb24b (.)
grep -r "interface.*Interface" --include="*.php" /var/www/html/<nome progetto>/laravel/Modules

# Cerca interfacce con naming corretto
grep -r "interface.*Contract" --include="*.php" /var/www/html/<nome progetto>/laravel/Modules
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> fbed41ac (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b855 (.)
=======
>>>>>>> 1487fe812 (.)
grep -r "interface.*Interface" --include="*.php" /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules

# Cerca interfacce con naming corretto
grep -r "interface.*Contract" --include="*.php" /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> fbed41ac (.)
=======
>>>>>>> 1487fe812 (.)
=======
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
<<<<<<< HEAD
>>>>>>> a404ea71 (.)
=======
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> febe79e3 (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 9721a5b2 (.)
=======
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 1442e291 (rebase 210)
=======
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
>>>>>>> 1487fe812 (.)
=======
=======
>>>>>>> f963d2c0 (.)
<<<<<<< HEAD
>>>>>>> 12a7e2462 (.)
=======
=======
>>>>>>> 31f5d28f (.)
<<<<<<< HEAD
>>>>>>> e2f1a4045 (.)
=======
=======
>>>>>>> ee18dd92 (.)
>>>>>>> 4bec160e6 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)
=======
=======
>>>>>>> 4bec160e6 (.)
=======
=======
>>>>>>> 31f5d28f (.)
>>>>>>> 1487fe812 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b855 (.)
=======
>>>>>>> 12a7e2462 (.)
=======
>>>>>>> e2f1a4045 (.)
=======
=======
>>>>>>> 31f5d28f (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 6608a1a0 (.)
=======
=======
>>>>>>> 23cbbaf5 (.)
=======
=======
>>>>>>> 909e45af (.)
=======
=======
>>>>>>> bb7e77c2 (.)
=======
=======
>>>>>>> b99af5a8 (.)
=======
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
>>>>>>> 1487fe812 (.)
=======
=======
=======
>>>>>>> 31f5d28f (.)
>>>>>>> e2f1a4045 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 712617d3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> a404ea71 (.)
=======
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> febe79e3 (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 9721a5b2 (.)
=======
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 1442e291 (rebase 210)
=======
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> fcaebc79 (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 9d3810d0 (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> d38aa9d2 (rebase 210)
=======
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 9e7ba5b6 (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> 01af324fe (.)
=======
=======
>>>>>>> 66453ace (.)
>>>>>>> 138485550 (.)
=======
>>>>>>> 53eef8d8d (.)
=======
=======
>>>>>>> 2a97406c (.)
>>>>>>> 998e6866b (.)
=======
>>>>>>> 13aa25113 (.)
=======
=======
>>>>>>> 4f042b88 (.)
>>>>>>> 36136dcfa (.)
=======
>>>>>>> 7aae79847 (.)
=======
=======
>>>>>>> b99af5a8 (.)
>>>>>>> 47bbf2b1c (.)
=======
>>>>>>> 731b801a8 (.)
=======
=======
>>>>>>> f3086887 (rebase 210)
>>>>>>> 74eb2e964 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 01af324fe (.)
=======
>>>>>>> 138485550 (.)
=======
>>>>>>> 53eef8d8d (.)
=======
>>>>>>> 998e6866b (.)
=======
>>>>>>> 13aa25113 (.)
=======
>>>>>>> 36136dcfa (.)
=======
>>>>>>> 7aae79847 (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
>>>>>>> 731b801a8 (.)
=======
>>>>>>> 74eb2e964 (.)
=======
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> 31f5d28f (.)
=======
=======
>>>>>>> 6608a1a0 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 23cbbaf5 (.)
=======
=======
>>>>>>> 909e45af (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> bb7e77c2 (.)
=======
=======
>>>>>>> b99af5a8 (.)
=======
=======
>>>>>>> f3086887 (rebase 210)
=======
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
=======
>>>>>>> 6e12a84b (rebase 210)
=======
=======
>>>>>>> 545977c8 (rebase 210)
=======
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> 31f5d28f (.)
=======
=======
>>>>>>> 6608a1a0 (.)
=======
=======
>>>>>>> 23cbbaf5 (.)
=======
=======
>>>>>>> 909e45af (.)
=======
=======
>>>>>>> bb7e77c2 (.)
=======
=======
>>>>>>> b99af5a8 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> f3086887 (rebase 210)
=======
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
=======
>>>>>>> 6e12a84b (rebase 210)
=======
=======
>>>>>>> 545977c8 (rebase 210)
=======
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> 01af324fe (.)
=======
=======
=======
>>>>>>> 23cbbaf5 (.)
>>>>>>> 53eef8d8d (.)
=======
>>>>>>> 13aa25113 (.)
=======
=======
=======
>>>>>>> bb7e77c2 (.)
>>>>>>> 7aae79847 (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
=======
=======
>>>>>>> f3086887 (rebase 210)
>>>>>>> 74eb2e964 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 31f5d28f (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 23cbbaf5 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 69fa7d37 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 69fa7d37 (.)
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
<<<<<<< HEAD
=======
>>>>>>> e2f1a4045 (.)
=======
=======
>>>>>>> 6608a1a0 (.)
>>>>>>> 01af324fe (.)
=======
>>>>>>> 53eef8d8d (.)
=======
=======
>>>>>>> 909e45af (.)
>>>>>>> 13aa25113 (.)
=======
>>>>>>> 7aae79847 (.)
=======
=======
>>>>>>> b99af5a8 (.)
>>>>>>> 47bbf2b1c (.)
=======
>>>>>>> 74eb2e964 (.)
grep -r "interface.*Interface" --include="*.php" /var/www/html/<nome progetto>/laravel/Modules

# Cerca interfacce con naming corretto
grep -r "interface.*Contract" --include="*.php" /var/www/html/<nome progetto>/laravel/Modules
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> fbed41ac (.)
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
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 69fa7d37 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 31f5d28f (.)
=======
grep -r "interface.*Interface" --include="*.php" /var/www/html/saluteora/laravel/Modules

# Cerca interfacce con naming corretto
grep -r "interface.*Contract" --include="*.php" /var/www/html/saluteora/laravel/Modules
>>>>>>> a404ea71 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
grep -r "interface.*Interface" --include="*.php" /var/www/html/saluteora/laravel/Modules

# Cerca interfacce con naming corretto
grep -r "interface.*Contract" --include="*.php" /var/www/html/saluteora/laravel/Modules
>>>>>>> a404ea71 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
grep -r "interface.*Interface" --include="*.php" /var/www/html/saluteora/laravel/Modules

# Cerca interfacce con naming corretto
grep -r "interface.*Contract" --include="*.php" /var/www/html/saluteora/laravel/Modules
>>>>>>> a404ea71 (.)
=======
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c4282a934 (.)
=======
grep -r "interface.*Interface" --include="*.php" /var/www/html/saluteora/laravel/Modules

# Cerca interfacce con naming corretto
grep -r "interface.*Contract" --include="*.php" /var/www/html/saluteora/laravel/Modules
>>>>>>> a404ea71 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
grep -r "interface.*Interface" --include="*.php" /var/www/html/saluteora/laravel/Modules

# Cerca interfacce con naming corretto
grep -r "interface.*Contract" --include="*.php" /var/www/html/saluteora/laravel/Modules
>>>>>>> ca10d6ad (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 753ea7aca (.)
=======
grep -r "interface.*Interface" --include="*.php" /var/www/html/saluteora/laravel/Modules

# Cerca interfacce con naming corretto
grep -r "interface.*Contract" --include="*.php" /var/www/html/saluteora/laravel/Modules
>>>>>>> febe79e3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> fdad57c30 (.)
=======
grep -r "interface.*Interface" --include="*.php" /var/www/html/saluteora/laravel/Modules

# Cerca interfacce con naming corretto
grep -r "interface.*Contract" --include="*.php" /var/www/html/saluteora/laravel/Modules
>>>>>>> a29a4728 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 275b7ad99 (.)
=======
grep -r "interface.*Interface" --include="*.php" /var/www/html/saluteora/laravel/Modules

# Cerca interfacce con naming corretto
grep -r "interface.*Contract" --include="*.php" /var/www/html/saluteora/laravel/Modules
>>>>>>> c7a4727b (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b99af5a8 (.)
=======
grep -r "interface.*Interface" --include="*.php" /var/www/html/saluteora/laravel/Modules

# Cerca interfacce con naming corretto
grep -r "interface.*Contract" --include="*.php" /var/www/html/saluteora/laravel/Modules
>>>>>>> 9721a5b2 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f957fb24b (.)
=======
grep -r "interface.*Interface" --include="*.php" /var/www/html/saluteora/laravel/Modules

# Cerca interfacce con naming corretto
grep -r "interface.*Contract" --include="*.php" /var/www/html/saluteora/laravel/Modules
>>>>>>> 1442e291 (rebase 210)
<<<<<<< HEAD
=======
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
grep -r "interface.*Interface" --include="*.php" /var/www/html/saluteora/laravel/Modules

# Cerca interfacce con naming corretto
grep -r "interface.*Contract" --include="*.php" /var/www/html/saluteora/laravel/Modules
>>>>>>> fcaebc79 (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
grep -r "interface.*Interface" --include="*.php" /var/www/html/saluteora/laravel/Modules

# Cerca interfacce con naming corretto
grep -r "interface.*Contract" --include="*.php" /var/www/html/saluteora/laravel/Modules
>>>>>>> 9d3810d0 (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
grep -r "interface.*Interface" --include="*.php" /var/www/html/saluteora/laravel/Modules

# Cerca interfacce con naming corretto
grep -r "interface.*Contract" --include="*.php" /var/www/html/saluteora/laravel/Modules
>>>>>>> d38aa9d2 (rebase 210)
=======
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
grep -r "interface.*Interface" --include="*.php" /var/www/html/saluteora/laravel/Modules

# Cerca interfacce con naming corretto
grep -r "interface.*Contract" --include="*.php" /var/www/html/saluteora/laravel/Modules
>>>>>>> 9e7ba5b6 (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> ee18dd92 (.)
=======
<<<<<<< HEAD
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> 66453ace (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> febe79e3 (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> c7a4727b (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 9721a5b2 (.)
=======
>>>>>>> 712617d3 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 1442e291 (rebase 210)
=======
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> fcaebc79 (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 9d3810d0 (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> d38aa9d2 (rebase 210)
=======
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 9e7ba5b6 (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
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
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> ee18dd92 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> 66453ace (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> febe79e3 (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> c7a4727b (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 9721a5b2 (.)
=======
>>>>>>> 712617d3 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 1442e291 (rebase 210)
>>>>>>> laraxot/develop
=======
>>>>>>> 1487fe812 (.)
=======
=======
>>>>>>> f963d2c0 (.)
>>>>>>> 12a7e2462 (.)
=======
>>>>>>> e2f1a4045 (.)
=======
>>>>>>> c4282a934 (.)
=======
=======
>>>>>>> ee18dd92 (.)
>>>>>>> 4bec160e6 (.)
=======
>>>>>>> 6608a1a0 (.)
>>>>>>> 01af324fe (.)
=======
>>>>>>> 8c6d84fe6 (.)
=======
=======
>>>>>>> 66453ace (.)
>>>>>>> 138485550 (.)
=======
>>>>>>> 53eef8d8d (.)
=======
>>>>>>> 753ea7aca (.)
=======
=======
>>>>>>> 2a97406c (.)
>>>>>>> 998e6866b (.)
=======
>>>>>>> 13aa25113 (.)
=======
>>>>>>> fdad57c30 (.)
=======
=======
>>>>>>> 4f042b88 (.)
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
=======
>>>>>>> 712617d3 (.)
>>>>>>> 731b801a8 (.)
=======
>>>>>>> 74eb2e964 (.)
=======
>>>>>>> f957fb24b (.)
```

## Riferimenti

- [Laravel Contracts Documentation](https://laravel.com/docs/contracts)
<<<<<<< HEAD
- [<nome progetto> Code Quality Guidelines](/var/www/html/<nome progetto>/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/<nome progetto>/laravel/Modules/Xot/app/Contracts/)
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
- [<nome progetto> Code Quality Guidelines](/var/www/html/<nome progetto>/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/<nome progetto>/laravel/Modules/Xot/app/Contracts/)
=======
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
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
=======
>>>>>>> 1487fe812 (.)
- [PTVX Code Quality Guidelines](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/Modules/Xot/app/Contracts/)
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
- [SaluteOra Code Quality Guidelines](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Contracts/)
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 75179b85 (.)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> f963d2c0 (.)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 31f5d28f (.)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 31f5d28f (.)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 31f5d28f (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 01af324fe (.)
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 6608a1a0 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 53eef8d8d (.)
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 23cbbaf5 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 13aa25113 (.)
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 909e45af (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 7aae79847 (.)
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> bb7e77c2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 47bbf2b1c (.)
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> b99af5a8 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 74eb2e964 (.)
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> f3086887 (rebase 210)
=======
<<<<<<< HEAD
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 3d462363 (rebase 210)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 54ad93c4 (rebase 210)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 6e12a84b (rebase 210)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 545977c8 (rebase 210)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 69fa7d37 (.)
=======
=======
>>>>>>> fbed41ac (.)
=======
>>>>>>> 13aa25113 (.)
=======
>>>>>>> 7aae79847 (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
>>>>>>> 74eb2e964 (.)
- [PTVX Code Quality Guidelines](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/Modules/Xot/app/Contracts/)
- [Modulo Xot Contracts](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Contracts/)
<<<<<<< HEAD
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
=======
>>>>>>> 13aa25113 (.)
=======
>>>>>>> 7aae79847 (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
>>>>>>> 74eb2e964 (.)
>>>>>>> 31f5d28f (.)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> a404ea71 (.)
=======
>>>>>>> 75179b85 (.)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> a404ea71 (.)
=======
>>>>>>> 75179b85 (.)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> a404ea71 (.)
=======
>>>>>>> 75179b85 (.)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> a404ea71 (.)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> ca10d6ad (.)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> febe79e3 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 2a97406c (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 909e45af (.)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> a29a4728 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 36136dcfa (.)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 4f042b88 (.)
<<<<<<< HEAD
=======
>>>>>>> bb7e77c2 (.)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 9721a5b2 (.)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 1442e291 (rebase 210)
<<<<<<< HEAD
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> fcaebc79 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 9d3810d0 (rebase 210)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> d38aa9d2 (rebase 210)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 9e7ba5b6 (rebase 210)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
>>>>>>> c8b1c8bf (.)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> 75179b85 (.)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> f963d2c0 (.)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 6608a1a0 (.)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 23cbbaf5 (.)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 909e45af (.)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> bb7e77c2 (.)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> b99af5a8 (.)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> f3086887 (rebase 210)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 3d462363 (rebase 210)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 54ad93c4 (rebase 210)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 6e12a84b (rebase 210)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 545977c8 (rebase 210)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 69fa7d37 (.)
=======
=======
>>>>>>> fbed41ac (.)
- [PTVX Code Quality Guidelines](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/Modules/Xot/app/Contracts/)
- [Modulo Xot Contracts](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Contracts/)
<<<<<<< HEAD
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
>>>>>>> 31f5d28f (.)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> a404ea71 (.)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> ca10d6ad (.)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> febe79e3 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> a29a4728 (.)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 275b7ad99 (.)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> c7a4727b (.)
<<<<<<< HEAD
=======
>>>>>>> b99af5a8 (.)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 9721a5b2 (.)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 1442e291 (rebase 210)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> fcaebc79 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 9d3810d0 (rebase 210)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> d38aa9d2 (rebase 210)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 9e7ba5b6 (rebase 210)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
>>>>>>> c8b1c8bf (.)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> 75179b85 (.)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 75179b855 (.)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> f963d2c0 (.)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 6608a1a0 (.)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 23cbbaf5 (.)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 909e45af (.)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> bb7e77c2 (.)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> b99af5a8 (.)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> f3086887 (rebase 210)
=======
=======
>>>>>>> e2f1a4045 (.)
=======
>>>>>>> 01af324fe (.)
=======
>>>>>>> 53eef8d8d (.)
- [PTVX Code Quality Guidelines](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/Modules/Xot/app/Contracts/)
- [<nome progetto> Code Quality Guidelines](/var/www/html/<nome progetto>/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/<nome progetto>/laravel/Modules/Xot/app/Contracts/)
- [<nome progetto> Code Quality Guidelines](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Contracts/)
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
=======
>>>>>>> e2f1a4045 (.)
=======
>>>>>>> 01af324fe (.)
=======
>>>>>>> 53eef8d8d (.)
>>>>>>> 31f5d28f (.)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> a404ea71 (.)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> ca10d6ad (.)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> febe79e3 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
<<<<<<< HEAD
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> a29a4728 (.)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b215d516b (.)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 9721a5b2 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 731b801a8 (.)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 712617d3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f3086887 (rebase 210)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 1442e291 (rebase 210)
>>>>>>> laraxot/develop
=======
>>>>>>> 301ad8b44 (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
>>>>>>> 1487fe812 (.)
=======
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> f963d2c0 (.)
<<<<<<< HEAD
>>>>>>> 12a7e2462 (.)
=======
=======
>>>>>>> 31f5d28f (.)
<<<<<<< HEAD
>>>>>>> e2f1a4045 (.)
=======
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> a404ea71 (.)
<<<<<<< HEAD
>>>>>>> c4282a934 (.)
=======
=======
>>>>>>> 75179b85 (.)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> a404ea71 (.)
=======
>>>>>>> 75179b85 (.)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> a404ea71 (.)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> ee18dd92 (.)
<<<<<<< HEAD
>>>>>>> 4bec160e6 (.)
=======
=======
>>>>>>> 6608a1a0 (.)
<<<<<<< HEAD
>>>>>>> 01af324fe (.)
=======
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> ca10d6ad (.)
<<<<<<< HEAD
>>>>>>> 8c6d84fe6 (.)
=======
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 66453ace (.)
<<<<<<< HEAD
>>>>>>> 138485550 (.)
=======
=======
>>>>>>> 23cbbaf5 (.)
<<<<<<< HEAD
>>>>>>> 53eef8d8d (.)
=======
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
>>>>>>> febe79e3 (.)
>>>>>>> 753ea7aca (.)
=======
>>>>>>> 998e6866b (.)
=======
=======
>>>>>>> 909e45af (.)
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
>>>>>>> 47bbf2b1c (.)
=======
>>>>>>> b215d516b (.)
=======
>>>>>>> 731b801a8 (.)
=======
=======
>>>>>>> f3086887 (rebase 210)
>>>>>>> 74eb2e964 (.)
=======
>>>>>>> f957fb24b (.)
