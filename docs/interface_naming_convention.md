<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> fd1fcc4c (.)
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
>>>>>>> fd1fcc4c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
=======
>>>>>>> b19cd40 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
>>>>>>> 161887a2 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
=======
>>>>>>> b19cd40 (.)
>>>>>>> e7a9a2bf (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
=======
>>>>>>> b19cd40 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
>>>>>>> ba564870 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
=======
>>>>>>> b19cd40 (.)
>>>>>>> 9cdf6146 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
=======
>>>>>>> b19cd40 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
>>>>>>> 7c39b1fe (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
=======
>>>>>>> b19cd40 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
>>>>>>> 888799d0 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
=======
>>>>>>> b19cd40 (.)
>>>>>>> 6d08c01b (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
=======
>>>>>>> b19cd40 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
>>>>>>> c6c33175 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
=======
>>>>>>> b19cd40 (.)
>>>>>>> 8e5817bc (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
=======
>>>>>>> b19cd40 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
>>>>>>> 7a2f131f (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
=======
>>>>>>> b19cd40 (.)
>>>>>>> 51182e3c (rebase 210)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
=======
>>>>>>> b19cd40 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
>>>>>>> 4e2ebfb (.)
>>>>>>> cb85c538 (rebase 210)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
>>>>>>> 1c0eb9c7 (rebase 210)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
=======
>>>>>>> b19cd40 (.)
>>>>>>> a9bf0423 (rebase 210)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
=======
>>>>>>> b19cd40 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
>>>>>>> 4d253d2c (rebase 210)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
=======
>>>>>>> b19cd40 (.)
>>>>>>> b4f93b3a (rebase 210)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
=======
>>>>>>> b19cd40 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
>>>>>>> 4e2ebfb (.)
>>>>>>> 1375c94d (rebase 210)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
>>>>>>> 52cd5f85 (rebase 210)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
=======
>>>>>>> b19cd40 (.)
>>>>>>> c5c038f2 (rebase 210)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
=======
>>>>>>> b19cd40 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
>>>>>>> 4e2ebfb (.)
>>>>>>> 030c9674 (rebase 210)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
>>>>>>> bb00ab64 (rebase 210)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
=======
>>>>>>> b19cd40 (.)
>>>>>>> 77edd94a (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
=======
>>>>>>> b19cd40 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
>>>>>>> 4e2ebfb (.)
>>>>>>> eea68ec9 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
>>>>>>> 59916c8f (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
=======
>>>>>>> b19cd40 (.)
>>>>>>> 9cdf6146 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
=======
>>>>>>> b19cd40 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
>>>>>>> 7c39b1fe (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
=======
>>>>>>> b19cd40 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
>>>>>>> 888799d0 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
=======
>>>>>>> b19cd40 (.)
>>>>>>> 6d08c01b (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
=======
>>>>>>> b19cd40 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
>>>>>>> c6c33175 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
=======
>>>>>>> b19cd40 (.)
>>>>>>> 8e5817bc (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
=======
>>>>>>> b19cd40 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
>>>>>>> 7a2f131f (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
=======
>>>>>>> b19cd40 (.)
>>>>>>> 51182e3c (rebase 210)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
=======
>>>>>>> b19cd40 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
>>>>>>> 4e2ebfb (.)
>>>>>>> cb85c538 (rebase 210)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
>>>>>>> 1c0eb9c7 (rebase 210)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
=======
>>>>>>> b19cd40 (.)
>>>>>>> a9bf0423 (rebase 210)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
=======
>>>>>>> b19cd40 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
>>>>>>> 4d253d2c (rebase 210)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
=======
>>>>>>> b19cd40 (.)
>>>>>>> b4f93b3a (rebase 210)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
=======
>>>>>>> b19cd40 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
>>>>>>> 4e2ebfb (.)
>>>>>>> 1375c94d (rebase 210)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
>>>>>>> 52cd5f85 (rebase 210)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
=======
>>>>>>> b19cd40 (.)
>>>>>>> c5c038f2 (rebase 210)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
=======
>>>>>>> b19cd40 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
>>>>>>> 4e2ebfb (.)
>>>>>>> 030c9674 (rebase 210)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
>>>>>>> bb00ab64 (rebase 210)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
=======
>>>>>>> b19cd40 (.)
>>>>>>> 77edd94a (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
=======
>>>>>>> b19cd40 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
>>>>>>> 4e2ebfb (.)
>>>>>>> eea68ec9 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
>>>>>>> 59916c8f (.)
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
>>>>>>> 4689a827 (.)
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
=======
>>>>>>> d284d65 (.)
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> ee18dd92 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli <nome progetto>.
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
=======
>>>>>>> 7325acf3 (.)
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
=======
>>>>>>> d284d65 (.)
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 66453ace (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli <nome progetto>.
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
=======
>>>>>>> f2e64178 (.)
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
=======
>>>>>>> d284d65 (.)
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 2a97406c (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli <nome progetto>.
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
=======
>>>>>>> c4bdacbf (.)
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
=======
>>>>>>> d284d65 (.)
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 4f042b88 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli <nome progetto>.
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
=======
>>>>>>> bd804d67 (.)
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
=======
>>>>>>> d284d65 (.)
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 712617d3 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli <nome progetto>.
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
=======
>>>>>>> 229a065a (rebase 210)
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
=======
>>>>>>> d284d65 (.)
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> fdb24863 (rebase 210)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli <nome progetto>.
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
=======
=======
>>>>>>> 9fe1b60e (rebase 210)
=======
>>>>>>> 8a8a8e2f (rebase 210)
=======
>>>>>>> efb0f8d9 (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
=======
>>>>>>> d284d65 (.)
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 4fc21b78 (rebase 210)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
<<<<<<< HEAD
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
<<<<<<< HEAD
>>>>>>> 9c45d9bd (rebase 210)
=======
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli <nome progetto>.
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
=======
>>>>>>> 5aedc39c (rebase 210)
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
=======
>>>>>>> d284d65 (.)
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> eb62d6cf (rebase 210)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli <nome progetto>.
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
=======
=======
>>>>>>> 22baa66d (rebase 210)
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
=======
>>>>>>> d284d65 (.)
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 8c8937e7 (rebase 210)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli <nome progetto>.
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
=======
=======
>>>>>>> 2effe245 (.)
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
=======
>>>>>>> d284d65 (.)
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 36ac4fc1 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli <nome progetto>.
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
=======
>>>>>>> e790eb33 (.)
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
=======
>>>>>>> d284d65 (.)
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> fd1fcc4c (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli <nome progetto>.
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli <nome progetto>.
>>>>>>> cca10a64 (.)
=======
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
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
>>>>>>> c8b1c8bf (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
<<<<<<< HEAD
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
<<<<<<< HEAD
>>>>>>> 9cf0dc90 (.)
=======
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
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
>>>>>>> e7a9a2bf (.)
=======
>>>>>>> 9d67cabd (.)
=======
>>>>>>> ba564870 (.)
=======
>>>>>>> 7325acf3 (.)
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
=======
>>>>>>> d284d65 (.)
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> ee18dd92 (.)
=======
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli <nome progetto>.
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
<<<<<<< HEAD
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
<<<<<<< HEAD
>>>>>>> 66453ace (.)
=======
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli <nome progetto>.
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
=======
>>>>>>> f2e64178 (.)
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
=======
>>>>>>> d284d65 (.)
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 2a97406c (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli <nome progetto>.
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
=======
>>>>>>> c4bdacbf (.)
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
=======
>>>>>>> d284d65 (.)
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 4f042b88 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli <nome progetto>.
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
=======
>>>>>>> bd804d67 (.)
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
=======
>>>>>>> d284d65 (.)
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 712617d3 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli <nome progetto>.
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
=======
>>>>>>> 229a065a (rebase 210)
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
=======
>>>>>>> d284d65 (.)
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> fdb24863 (rebase 210)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli <nome progetto>.
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
=======
=======
>>>>>>> 9fe1b60e (rebase 210)
=======
>>>>>>> 8a8a8e2f (rebase 210)
=======
>>>>>>> efb0f8d9 (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
=======
>>>>>>> d284d65 (.)
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 4fc21b78 (rebase 210)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
<<<<<<< HEAD
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
<<<<<<< HEAD
>>>>>>> 9c45d9bd (rebase 210)
=======
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli <nome progetto>.
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
=======
>>>>>>> 5aedc39c (rebase 210)
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
=======
>>>>>>> d284d65 (.)
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> eb62d6cf (rebase 210)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli <nome progetto>.
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
=======
=======
>>>>>>> 22baa66d (rebase 210)
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
=======
>>>>>>> d284d65 (.)
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 8c8937e7 (rebase 210)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli <nome progetto>.
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
=======
=======
>>>>>>> 2effe245 (.)
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
=======
>>>>>>> d284d65 (.)
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 36ac4fc1 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli <nome progetto>.
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
=======
>>>>>>> e790eb33 (.)
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
=======
>>>>>>> d284d65 (.)
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> fd1fcc4c (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli <nome progetto>.
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli <nome progetto>.
>>>>>>> cca10a64 (.)
=======
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
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
>>>>>>> c8b1c8bf (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
=======
>>>>>>> b19cd40 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
>>>>>>> 4e2ebfb (.)
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 9cf0dc90 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 75179b85 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> f963d2c0 (.)
=======
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli .
3. **Standardizzazione**: Questa convenzione è applicata in modo coerente in tutti i moduli SaluteOra.
>>>>>>> 75179b855 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> e7a9a2bf (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
=======
>>>>>>> ba564870 (.)
=======
>>>>>>> 66453ace (.)
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 9cdf6146 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 7c39b1fe (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 6d08c01b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> c6c33175 (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> 8e5817bc (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 7a2f131f (.)
=======
>>>>>>> 712617d3 (.)
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> 51182e3c (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> cb85c538 (rebase 210)
=======
>>>>>>> 1c0eb9c7 (rebase 210)
=======
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 229a065a (rebase 210)
=======
>>>>>>> a9bf0423 (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
=======
>>>>>>> 4d253d2c (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> 9fe1b60e (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 8a8a8e2f (rebase 210)
=======
>>>>>>> efb0f8d9 (rebase 210)
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
=======
>>>>>>> b4f93b3a (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 1375c94d (rebase 210)
=======
>>>>>>> 52cd5f85 (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> c5c038f2 (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 030c9674 (rebase 210)
=======
>>>>>>> bb00ab64 (rebase 210)
=======
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 22baa66d (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 77edd94a (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> eea68ec9 (.)
=======
>>>>>>> 59916c8f (.)
=======
>>>>>>> fd1fcc4c (.)
=======
>>>>>>> e790eb33 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> 9cf0dc90 (.)
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
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> e7a9a2bf (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
=======
>>>>>>> ba564870 (.)
=======
>>>>>>> 66453ace (.)
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 9cdf6146 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 7c39b1fe (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 6d08c01b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> c6c33175 (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> 8e5817bc (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 7a2f131f (.)
=======
>>>>>>> 712617d3 (.)
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> 51182e3c (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> cb85c538 (rebase 210)
=======
>>>>>>> 1c0eb9c7 (rebase 210)
=======
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 229a065a (rebase 210)
=======
>>>>>>> a9bf0423 (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
=======
>>>>>>> 4d253d2c (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> 9fe1b60e (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 8a8a8e2f (rebase 210)
=======
>>>>>>> efb0f8d9 (rebase 210)
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
=======
>>>>>>> b4f93b3a (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 1375c94d (rebase 210)
=======
>>>>>>> 52cd5f85 (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> c5c038f2 (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 030c9674 (rebase 210)
=======
>>>>>>> bb00ab64 (rebase 210)
=======
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 22baa66d (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 77edd94a (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> eea68ec9 (.)
=======
>>>>>>> 59916c8f (.)
=======
>>>>>>> fd1fcc4c (.)
=======
>>>>>>> e790eb33 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> 9cf0dc90 (.)
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
>>>>>>> 75179b855 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> cca10a64 (.)
grep -r "interface.*Interface" --include="*.php" /var/www/html/<nome progetto>/laravel/Modules

# Cerca interfacce con naming corretto
grep -r "interface.*Contract" --include="*.php" /var/www/html/<nome progetto>/laravel/Modules
<<<<<<< HEAD
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
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> ee18dd92 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> e7a9a2bf (.)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
=======
>>>>>>> ba564870 (.)
=======
>>>>>>> 66453ace (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> 9cdf6146 (.)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 7c39b1fe (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> 2a97406c (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
>>>>>>> 909e45af (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> 6d08c01b (.)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> c6c33175 (.)
=======
>>>>>>> 4f042b88 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
>>>>>>> bb7e77c2 (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> 8e5817bc (.)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 7a2f131f (.)
=======
>>>>>>> 712617d3 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> 51182e3c (rebase 210)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> cb85c538 (rebase 210)
=======
>>>>>>> 1c0eb9c7 (rebase 210)
=======
>>>>>>> fdb24863 (rebase 210)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 229a065a (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> a9bf0423 (rebase 210)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
=======
>>>>>>> 4d253d2c (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> 9fe1b60e (rebase 210)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 8a8a8e2f (rebase 210)
=======
>>>>>>> efb0f8d9 (rebase 210)
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 9f8e680a (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> b4f93b3a (rebase 210)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 1375c94d (rebase 210)
=======
>>>>>>> 52cd5f85 (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> c5c038f2 (rebase 210)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 030c9674 (rebase 210)
=======
>>>>>>> bb00ab64 (rebase 210)
=======
>>>>>>> 8c8937e7 (rebase 210)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 22baa66d (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 2effe245 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> 77edd94a (.)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> eea68ec9 (.)
=======
>>>>>>> 59916c8f (.)
=======
>>>>>>> fd1fcc4c (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> e790eb33 (.)
=======
>>>>>>> eb71492d (.)
=======
>>>>>>> c8b1c8bf (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> 9cf0dc90 (.)
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
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> ee18dd92 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> e7a9a2bf (.)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
=======
>>>>>>> ba564870 (.)
=======
>>>>>>> 66453ace (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> 9cdf6146 (.)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 7c39b1fe (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> 2a97406c (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
>>>>>>> 909e45af (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> 6d08c01b (.)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> c6c33175 (.)
=======
>>>>>>> 4f042b88 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
>>>>>>> bb7e77c2 (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> 8e5817bc (.)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 7a2f131f (.)
=======
>>>>>>> 712617d3 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> 51182e3c (rebase 210)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> cb85c538 (rebase 210)
=======
>>>>>>> 1c0eb9c7 (rebase 210)
=======
>>>>>>> fdb24863 (rebase 210)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 229a065a (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> a9bf0423 (rebase 210)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
=======
>>>>>>> 4d253d2c (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> 9fe1b60e (rebase 210)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 8a8a8e2f (rebase 210)
=======
>>>>>>> efb0f8d9 (rebase 210)
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 9f8e680a (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> b4f93b3a (rebase 210)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 1375c94d (rebase 210)
=======
>>>>>>> 52cd5f85 (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> c5c038f2 (rebase 210)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 030c9674 (rebase 210)
=======
>>>>>>> bb00ab64 (rebase 210)
=======
>>>>>>> 8c8937e7 (rebase 210)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 22baa66d (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 2effe245 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> 77edd94a (.)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> eea68ec9 (.)
=======
>>>>>>> 59916c8f (.)
=======
>>>>>>> fd1fcc4c (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> e790eb33 (.)
=======
>>>>>>> eb71492d (.)
=======
>>>>>>> c8b1c8bf (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> 9cf0dc90 (.)
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
>>>>>>> 75179b855 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 31f5d28f (.)
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
>>>>>>> eb71492d (.)
=======
=======
>>>>>>> cca10a64 (.)
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
>>>>>>> f3086887 (rebase 210)
=======
=======
>>>>>>> 3d462363 (rebase 210)
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
=======
>>>>>>> eb71492d (.)
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
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> e7a9a2bf (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
=======
>>>>>>> ba564870 (.)
=======
>>>>>>> 66453ace (.)
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> 9cdf6146 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 7c39b1fe (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> 6d08c01b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> c6c33175 (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> 8e5817bc (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 7a2f131f (.)
=======
>>>>>>> 712617d3 (.)
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 51182e3c (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> cb85c538 (rebase 210)
=======
>>>>>>> 1c0eb9c7 (rebase 210)
=======
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 229a065a (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> a9bf0423 (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
=======
>>>>>>> 4d253d2c (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> 9fe1b60e (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 8a8a8e2f (rebase 210)
=======
>>>>>>> efb0f8d9 (rebase 210)
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> b4f93b3a (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 1375c94d (rebase 210)
=======
>>>>>>> 52cd5f85 (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> c5c038f2 (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 030c9674 (rebase 210)
=======
>>>>>>> bb00ab64 (rebase 210)
=======
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 22baa66d (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> 77edd94a (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> eea68ec9 (.)
=======
>>>>>>> 59916c8f (.)
=======
>>>>>>> fd1fcc4c (.)
=======
>>>>>>> e790eb33 (.)
=======
>>>>>>> eb71492d (.)
=======
>>>>>>> cca10a64 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> 9cf0dc90 (.)
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
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> e7a9a2bf (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
=======
>>>>>>> ba564870 (.)
=======
>>>>>>> 66453ace (.)
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> 9cdf6146 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 7c39b1fe (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
>>>>>>> 6d08c01b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> c6c33175 (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> 8e5817bc (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 7a2f131f (.)
=======
>>>>>>> 712617d3 (.)
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 51182e3c (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> cb85c538 (rebase 210)
=======
>>>>>>> 1c0eb9c7 (rebase 210)
=======
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 229a065a (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> a9bf0423 (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
=======
>>>>>>> 4d253d2c (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> 9fe1b60e (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 8a8a8e2f (rebase 210)
=======
>>>>>>> efb0f8d9 (rebase 210)
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> b4f93b3a (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 1375c94d (rebase 210)
=======
>>>>>>> 52cd5f85 (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> c5c038f2 (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 030c9674 (rebase 210)
=======
>>>>>>> bb00ab64 (rebase 210)
=======
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 22baa66d (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> 77edd94a (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> eea68ec9 (.)
=======
>>>>>>> 59916c8f (.)
=======
>>>>>>> fd1fcc4c (.)
=======
>>>>>>> e790eb33 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
=======
>>>>>>> cca10a64 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> 9cf0dc90 (.)
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
>>>>>>> 75179b855 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> ee18dd92 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> e7a9a2bf (.)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
=======
>>>>>>> ba564870 (.)
=======
>>>>>>> 66453ace (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> 9cdf6146 (.)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 7c39b1fe (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> 2a97406c (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> 6d08c01b (.)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> c6c33175 (.)
=======
>>>>>>> 4f042b88 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> 8e5817bc (.)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 7a2f131f (.)
=======
>>>>>>> 712617d3 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> 51182e3c (rebase 210)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> cb85c538 (rebase 210)
=======
>>>>>>> 1c0eb9c7 (rebase 210)
=======
>>>>>>> fdb24863 (rebase 210)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 229a065a (rebase 210)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> a9bf0423 (rebase 210)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
=======
>>>>>>> 4d253d2c (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> 9fe1b60e (rebase 210)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 8a8a8e2f (rebase 210)
=======
>>>>>>> efb0f8d9 (rebase 210)
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 9f8e680a (rebase 210)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> b4f93b3a (rebase 210)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 1375c94d (rebase 210)
=======
>>>>>>> 52cd5f85 (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 5aedc39c (rebase 210)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> c5c038f2 (rebase 210)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 030c9674 (rebase 210)
=======
>>>>>>> bb00ab64 (rebase 210)
=======
>>>>>>> 8c8937e7 (rebase 210)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 22baa66d (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 2effe245 (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> 77edd94a (.)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> eea68ec9 (.)
=======
>>>>>>> 59916c8f (.)
=======
>>>>>>> fd1fcc4c (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> e790eb33 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> 9cf0dc90 (.)
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
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> ee18dd92 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> e7a9a2bf (.)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
=======
>>>>>>> ba564870 (.)
=======
>>>>>>> 66453ace (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> 9cdf6146 (.)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 7c39b1fe (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> 2a97406c (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> 6d08c01b (.)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> c6c33175 (.)
=======
>>>>>>> 4f042b88 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> 8e5817bc (.)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 7a2f131f (.)
=======
>>>>>>> 712617d3 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> 51182e3c (rebase 210)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> cb85c538 (rebase 210)
=======
>>>>>>> 1c0eb9c7 (rebase 210)
=======
>>>>>>> fdb24863 (rebase 210)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 229a065a (rebase 210)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> a9bf0423 (rebase 210)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
=======
>>>>>>> 4d253d2c (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> 9fe1b60e (rebase 210)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 8a8a8e2f (rebase 210)
=======
>>>>>>> efb0f8d9 (rebase 210)
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 9f8e680a (rebase 210)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> b4f93b3a (rebase 210)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 1375c94d (rebase 210)
=======
>>>>>>> 52cd5f85 (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 5aedc39c (rebase 210)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> c5c038f2 (rebase 210)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 030c9674 (rebase 210)
=======
>>>>>>> bb00ab64 (rebase 210)
=======
>>>>>>> 8c8937e7 (rebase 210)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 22baa66d (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 2effe245 (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> 77edd94a (.)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> eea68ec9 (.)
=======
>>>>>>> 59916c8f (.)
=======
>>>>>>> fd1fcc4c (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> e790eb33 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> 9cf0dc90 (.)
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
>>>>>>> 75179b855 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> f963d2c0 (.)
=======
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
- [Laravel Contracts Documentation](https://laravel.com/docs/contracts)
<<<<<<< HEAD
- [PTVX Code Quality Guidelines](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/Modules/Xot/app/Contracts/)
<<<<<<< HEAD
>>>>>>> f963d2c0 (.)
=======
<<<<<<< HEAD
>>>>>>> 31f5d28f (.)
=======
=======
>>>>>>> e7a9a2bf (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
=======
>>>>>>> ba564870 (.)
- [Laravel Contracts Documentation](https://laravel.com/docs/contracts)
<<<<<<< HEAD
- [PTVX Code Quality Guidelines](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/Modules/Xot/app/Contracts/)
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> 9cdf6146 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 7c39b1fe (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
- [Laravel Contracts Documentation](https://laravel.com/docs/contracts)
<<<<<<< HEAD
- [PTVX Code Quality Guidelines](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/Modules/Xot/app/Contracts/)
<<<<<<< HEAD
>>>>>>> f963d2c0 (.)
=======
<<<<<<< HEAD
>>>>>>> 31f5d28f (.)
=======
=======
>>>>>>> 6d08c01b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> c6c33175 (.)
- [Laravel Contracts Documentation](https://laravel.com/docs/contracts)
<<<<<<< HEAD
- [PTVX Code Quality Guidelines](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/Modules/Xot/app/Contracts/)
<<<<<<< HEAD
>>>>>>> ee18dd92 (.)
=======
<<<<<<< HEAD
>>>>>>> 6608a1a0 (.)
=======
=======
>>>>>>> 8e5817bc (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 7a2f131f (.)
- [Laravel Contracts Documentation](https://laravel.com/docs/contracts)
<<<<<<< HEAD
- [PTVX Code Quality Guidelines](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/Modules/Xot/app/Contracts/)
<<<<<<< HEAD
>>>>>>> 66453ace (.)
=======
<<<<<<< HEAD
>>>>>>> 23cbbaf5 (.)
=======
=======
>>>>>>> 51182e3c (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> cb85c538 (rebase 210)
=======
>>>>>>> 1c0eb9c7 (rebase 210)
- [Laravel Contracts Documentation](https://laravel.com/docs/contracts)
<<<<<<< HEAD
- [PTVX Code Quality Guidelines](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/Modules/Xot/app/Contracts/)
<<<<<<< HEAD
>>>>>>> 2a97406c (.)
=======
<<<<<<< HEAD
>>>>>>> 909e45af (.)
=======
=======
>>>>>>> a9bf0423 (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
=======
>>>>>>> 4d253d2c (rebase 210)
=======
>>>>>>> 9fe1b60e (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 8a8a8e2f (rebase 210)
=======
>>>>>>> efb0f8d9 (rebase 210)
- [Laravel Contracts Documentation](https://laravel.com/docs/contracts)
<<<<<<< HEAD
- [PTVX Code Quality Guidelines](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/Modules/Xot/app/Contracts/)
<<<<<<< HEAD
>>>>>>> 4f042b88 (.)
=======
<<<<<<< HEAD
>>>>>>> bb7e77c2 (.)
=======
=======
>>>>>>> b4f93b3a (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 1375c94d (rebase 210)
=======
>>>>>>> 52cd5f85 (rebase 210)
- [Laravel Contracts Documentation](https://laravel.com/docs/contracts)
<<<<<<< HEAD
- [PTVX Code Quality Guidelines](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/Modules/Xot/app/Contracts/)
<<<<<<< HEAD
>>>>>>> 712617d3 (.)
=======
<<<<<<< HEAD
>>>>>>> f3086887 (rebase 210)
=======
=======
>>>>>>> c5c038f2 (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 030c9674 (rebase 210)
=======
>>>>>>> bb00ab64 (rebase 210)
- [Laravel Contracts Documentation](https://laravel.com/docs/contracts)
<<<<<<< HEAD
- [PTVX Code Quality Guidelines](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/Modules/Xot/app/Contracts/)
<<<<<<< HEAD
>>>>>>> fdb24863 (rebase 210)
=======
<<<<<<< HEAD
>>>>>>> 3d462363 (rebase 210)
=======
- [Laravel Contracts Documentation](https://laravel.com/docs/contracts)
<<<<<<< HEAD
- [PTVX Code Quality Guidelines](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/Modules/Xot/app/Contracts/)
<<<<<<< HEAD
>>>>>>> 4fc21b78 (rebase 210)
=======
=======
>>>>>>> 77edd94a (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> eea68ec9 (.)
=======
>>>>>>> 59916c8f (.)
- [Laravel Contracts Documentation](https://laravel.com/docs/contracts)
<<<<<<< HEAD
- [PTVX Code Quality Guidelines](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/Modules/Xot/app/Contracts/)
<<<<<<< HEAD
>>>>>>> 9c45d9bd (rebase 210)
=======
<<<<<<< HEAD
>>>>>>> 54ad93c4 (rebase 210)
=======
=======
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> eb62d6cf (rebase 210)
=======
<<<<<<< HEAD
>>>>>>> 6e12a84b (rebase 210)
=======
=======
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
- [Laravel Contracts Documentation](https://laravel.com/docs/contracts)
<<<<<<< HEAD
- [PTVX Code Quality Guidelines](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/Modules/Xot/app/Contracts/)
<<<<<<< HEAD
>>>>>>> 8c8937e7 (rebase 210)
=======
<<<<<<< HEAD
>>>>>>> 545977c8 (rebase 210)
=======
=======
>>>>>>> e7a9a2bf (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
=======
>>>>>>> ba564870 (.)
- [Laravel Contracts Documentation](https://laravel.com/docs/contracts)
<<<<<<< HEAD
- [PTVX Code Quality Guidelines](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/Modules/Xot/app/Contracts/)
<<<<<<< HEAD
>>>>>>> 36ac4fc1 (.)
=======
<<<<<<< HEAD
>>>>>>> 69fa7d37 (.)
=======
=======
>>>>>>> 9cdf6146 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 7c39b1fe (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
- [Laravel Contracts Documentation](https://laravel.com/docs/contracts)
<<<<<<< HEAD
- [PTVX Code Quality Guidelines](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/Modules/Xot/app/Contracts/)
<<<<<<< HEAD
>>>>>>> fd1fcc4c (.)
=======
<<<<<<< HEAD
>>>>>>> eb71492d (.)
=======
=======
>>>>>>> 6d08c01b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> c6c33175 (.)
- [Laravel Contracts Documentation](https://laravel.com/docs/contracts)
<<<<<<< HEAD
- [PTVX Code Quality Guidelines](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/Modules/Xot/app/Contracts/)
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)
=======
=======
>>>>>>> 8e5817bc (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 7a2f131f (.)
- [Laravel Contracts Documentation](https://laravel.com/docs/contracts)
<<<<<<< HEAD
- [PTVX Code Quality Guidelines](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/Modules/Xot/app/Contracts/)
<<<<<<< HEAD
>>>>>>> 9cf0dc90 (.)
=======
=======
>>>>>>> 51182e3c (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> cb85c538 (rebase 210)
=======
>>>>>>> 1c0eb9c7 (rebase 210)
- [Laravel Contracts Documentation](https://laravel.com/docs/contracts)
<<<<<<< HEAD
- [PTVX Code Quality Guidelines](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/Modules/Xot/app/Contracts/)
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> a9bf0423 (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
=======
>>>>>>> 4d253d2c (rebase 210)
=======
>>>>>>> 9fe1b60e (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 8a8a8e2f (rebase 210)
=======
>>>>>>> efb0f8d9 (rebase 210)
- [Laravel Contracts Documentation](https://laravel.com/docs/contracts)
<<<<<<< HEAD
- [PTVX Code Quality Guidelines](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/Modules/Xot/app/Contracts/)
<<<<<<< HEAD
>>>>>>> f963d2c0 (.)
=======
<<<<<<< HEAD
>>>>>>> 31f5d28f (.)
=======
=======
>>>>>>> b4f93b3a (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 1375c94d (rebase 210)
=======
>>>>>>> 52cd5f85 (rebase 210)
- [Laravel Contracts Documentation](https://laravel.com/docs/contracts)
<<<<<<< HEAD
- [PTVX Code Quality Guidelines](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/Modules/Xot/app/Contracts/)
<<<<<<< HEAD
>>>>>>> ee18dd92 (.)
=======
<<<<<<< HEAD
>>>>>>> 6608a1a0 (.)
=======
=======
>>>>>>> c5c038f2 (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 030c9674 (rebase 210)
=======
>>>>>>> bb00ab64 (rebase 210)
- [Laravel Contracts Documentation](https://laravel.com/docs/contracts)
<<<<<<< HEAD
- [PTVX Code Quality Guidelines](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/Modules/Xot/app/Contracts/)
<<<<<<< HEAD
>>>>>>> 66453ace (.)
=======
<<<<<<< HEAD
>>>>>>> 23cbbaf5 (.)
=======
- [Laravel Contracts Documentation](https://laravel.com/docs/contracts)
<<<<<<< HEAD
- [PTVX Code Quality Guidelines](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/Modules/Xot/app/Contracts/)
<<<<<<< HEAD
>>>>>>> 2a97406c (.)
=======
<<<<<<< HEAD
>>>>>>> 909e45af (.)
=======
=======
>>>>>>> 77edd94a (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> eea68ec9 (.)
=======
>>>>>>> 59916c8f (.)
- [Laravel Contracts Documentation](https://laravel.com/docs/contracts)
<<<<<<< HEAD
- [PTVX Code Quality Guidelines](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/Modules/Xot/app/Contracts/)
<<<<<<< HEAD
>>>>>>> 4f042b88 (.)
=======
<<<<<<< HEAD
>>>>>>> bb7e77c2 (.)
=======
=======
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 712617d3 (.)
=======
<<<<<<< HEAD
>>>>>>> f3086887 (rebase 210)
=======
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
- [Laravel Contracts Documentation](https://laravel.com/docs/contracts)
- [PTVX Code Quality Guidelines](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/Modules/Xot/app/Contracts/)
>>>>>>> fdb24863 (rebase 210)
=======
<<<<<<< HEAD
>>>>>>> 3d462363 (rebase 210)
=======
- [Laravel Contracts Documentation](https://laravel.com/docs/contracts)
- [PTVX Code Quality Guidelines](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 4fc21b78 (rebase 210)
=======
- [Laravel Contracts Documentation](https://laravel.com/docs/contracts)
- [PTVX Code Quality Guidelines](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 9c45d9bd (rebase 210)
=======
<<<<<<< HEAD
>>>>>>> 54ad93c4 (rebase 210)
=======
- [Laravel Contracts Documentation](https://laravel.com/docs/contracts)
- [PTVX Code Quality Guidelines](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/Modules/Xot/app/Contracts/)
>>>>>>> eb62d6cf (rebase 210)
=======
<<<<<<< HEAD
>>>>>>> 6e12a84b (rebase 210)
=======
- [Laravel Contracts Documentation](https://laravel.com/docs/contracts)
- [PTVX Code Quality Guidelines](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 8c8937e7 (rebase 210)
=======
<<<<<<< HEAD
>>>>>>> 545977c8 (rebase 210)
=======
- [Laravel Contracts Documentation](https://laravel.com/docs/contracts)
- [PTVX Code Quality Guidelines](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 36ac4fc1 (.)
=======
<<<<<<< HEAD
>>>>>>> 69fa7d37 (.)
=======
- [Laravel Contracts Documentation](https://laravel.com/docs/contracts)
- [PTVX Code Quality Guidelines](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/Modules/Xot/app/Contracts/)
>>>>>>> fd1fcc4c (.)
=======
<<<<<<< HEAD
>>>>>>> eb71492d (.)
=======
- [Laravel Contracts Documentation](https://laravel.com/docs/contracts)
- [PTVX Code Quality Guidelines](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/Modules/Xot/app/Contracts/)
>>>>>>> c8b1c8bf (.)
=======
- [Laravel Contracts Documentation](https://laravel.com/docs/contracts)
- [PTVX Code Quality Guidelines](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 9cf0dc90 (.)
=======
- [Laravel Contracts Documentation](https://laravel.com/docs/contracts)
- [PTVX Code Quality Guidelines](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 75179b85 (.)
=======
- [Laravel Contracts Documentation](https://laravel.com/docs/contracts)
- [PTVX Code Quality Guidelines](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/Modules/Xot/app/Contracts/)
>>>>>>> f963d2c0 (.)
=======
- [Laravel Contracts Documentation](https://laravel.com/docs/contracts)
- [PTVX Code Quality Guidelines](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/_bases/base_ptvx_fila3_mono/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 75179b855 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
- [Modulo Xot Contracts](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Contracts/)
<<<<<<< HEAD
>>>>>>> 207ac35e (.)
=======
- [Modulo Xot Contracts](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Contracts/)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 207ac35e (.)
=======
- [Modulo Xot Contracts](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Contracts/)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce89c8bb (.)
=======
=======
=======
=======
>>>>>>> cca10a64 (.)
- [<nome progetto> Code Quality Guidelines](/var/www/html/<nome progetto>/laravel/docs/code-quality.md)
- [Laravel Contracts Documentation](https://laravel.com/project_docs/contracts)
- [<nome progetto> Code Quality Guidelines](/var/www/html/<nome progetto>/laravel/project_docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/<nome progetto>/laravel/Modules/Xot/app/Contracts/)
- [<nome progetto> Code Quality Guidelines](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/docs/code-quality.md)- [Laravel Contracts Documentation](https://laravel.com/project_docs/contracts)
- [<nome progetto> Code Quality Guidelines](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/project_docs/code-quality.md)
<<<<<<< HEAD
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
=======
>>>>>>> cca10a64 (.)
- [Modulo Xot Contracts](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Contracts/)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> eea68ec9 (.)
=======
=======
=======
>>>>>>> 69fa7d37 (.)
=======
- [<nome progetto> Code Quality Guidelines](/var/www/html/<nome progetto>/laravel/docs/code-quality.md)
- [Laravel Contracts Documentation](https://laravel.com/project_docs/contracts)
- [<nome progetto> Code Quality Guidelines](/var/www/html/<nome progetto>/laravel/project_docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/<nome progetto>/laravel/Modules/Xot/app/Contracts/)
- [<nome progetto> Code Quality Guidelines](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/docs/code-quality.md)- [Laravel Contracts Documentation](https://laravel.com/project_docs/contracts)
- [<nome progetto> Code Quality Guidelines](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/project_docs/code-quality.md)
>>>>>>> bf479cc (.)
<<<<<<< HEAD
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 69fa7d37 (.)
- [Modulo Xot Contracts](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Contracts/)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 030c9674 (rebase 210)
=======
=======
=======
- [<nome progetto> Code Quality Guidelines](/var/www/html/<nome progetto>/laravel/docs/code-quality.md)
- [Laravel Contracts Documentation](https://laravel.com/project_docs/contracts)
- [<nome progetto> Code Quality Guidelines](/var/www/html/<nome progetto>/laravel/project_docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/<nome progetto>/laravel/Modules/Xot/app/Contracts/)
- [<nome progetto> Code Quality Guidelines](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/docs/code-quality.md)- [Laravel Contracts Documentation](https://laravel.com/project_docs/contracts)
- [<nome progetto> Code Quality Guidelines](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/project_docs/code-quality.md)
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
- [Modulo Xot Contracts](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Contracts/)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1375c94d (rebase 210)
=======
=======
=======
- [<nome progetto> Code Quality Guidelines](/var/www/html/<nome progetto>/laravel/docs/code-quality.md)
- [Laravel Contracts Documentation](https://laravel.com/project_docs/contracts)
- [<nome progetto> Code Quality Guidelines](/var/www/html/<nome progetto>/laravel/project_docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/<nome progetto>/laravel/Modules/Xot/app/Contracts/)
- [<nome progetto> Code Quality Guidelines](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/docs/code-quality.md)- [Laravel Contracts Documentation](https://laravel.com/project_docs/contracts)
- [<nome progetto> Code Quality Guidelines](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/project_docs/code-quality.md)
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
- [Modulo Xot Contracts](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Contracts/)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 8a8a8e2f (rebase 210)
=======
- [Modulo Xot Contracts](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Contracts/)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 460b8f5b (rebase 210)
=======
=======
=======
- [<nome progetto> Code Quality Guidelines](/var/www/html/<nome progetto>/laravel/docs/code-quality.md)
- [Laravel Contracts Documentation](https://laravel.com/project_docs/contracts)
- [<nome progetto> Code Quality Guidelines](/var/www/html/<nome progetto>/laravel/project_docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/<nome progetto>/laravel/Modules/Xot/app/Contracts/)
- [<nome progetto> Code Quality Guidelines](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/docs/code-quality.md)- [Laravel Contracts Documentation](https://laravel.com/project_docs/contracts)
- [<nome progetto> Code Quality Guidelines](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/project_docs/code-quality.md)
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
- [Modulo Xot Contracts](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Contracts/)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> cb85c538 (rebase 210)
=======
=======
=======
- [<nome progetto> Code Quality Guidelines](/var/www/html/<nome progetto>/laravel/docs/code-quality.md)
- [Laravel Contracts Documentation](https://laravel.com/project_docs/contracts)
- [<nome progetto> Code Quality Guidelines](/var/www/html/<nome progetto>/laravel/project_docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/<nome progetto>/laravel/Modules/Xot/app/Contracts/)
- [<nome progetto> Code Quality Guidelines](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/docs/code-quality.md)- [Laravel Contracts Documentation](https://laravel.com/project_docs/contracts)
- [<nome progetto> Code Quality Guidelines](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/project_docs/code-quality.md)
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
- [Modulo Xot Contracts](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Contracts/)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e0d9c9be (.)
=======
=======
=======
- [<nome progetto> Code Quality Guidelines](/var/www/html/<nome progetto>/laravel/docs/code-quality.md)
- [Laravel Contracts Documentation](https://laravel.com/project_docs/contracts)
- [<nome progetto> Code Quality Guidelines](/var/www/html/<nome progetto>/laravel/project_docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/<nome progetto>/laravel/Modules/Xot/app/Contracts/)
- [<nome progetto> Code Quality Guidelines](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/docs/code-quality.md)- [Laravel Contracts Documentation](https://laravel.com/project_docs/contracts)
- [<nome progetto> Code Quality Guidelines](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/project_docs/code-quality.md)
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
- [Modulo Xot Contracts](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Contracts/)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6b6b9e41 (.)
=======
=======
=======
- [<nome progetto> Code Quality Guidelines](/var/www/html/<nome progetto>/laravel/docs/code-quality.md)
- [Laravel Contracts Documentation](https://laravel.com/project_docs/contracts)
- [<nome progetto> Code Quality Guidelines](/var/www/html/<nome progetto>/laravel/project_docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/<nome progetto>/laravel/Modules/Xot/app/Contracts/)
- [<nome progetto> Code Quality Guidelines](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/docs/code-quality.md)- [Laravel Contracts Documentation](https://laravel.com/project_docs/contracts)
- [<nome progetto> Code Quality Guidelines](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/project_docs/code-quality.md)
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
- [Modulo Xot Contracts](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Contracts/)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 4d2eb53e (.)
=======
- [Modulo Xot Contracts](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Contracts/)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 80f054e0 (.)
=======
=======
=======
- [<nome progetto> Code Quality Guidelines](/var/www/html/<nome progetto>/laravel/docs/code-quality.md)
- [Laravel Contracts Documentation](https://laravel.com/project_docs/contracts)
- [<nome progetto> Code Quality Guidelines](/var/www/html/<nome progetto>/laravel/project_docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/<nome progetto>/laravel/Modules/Xot/app/Contracts/)
- [<nome progetto> Code Quality Guidelines](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/docs/code-quality.md)- [Laravel Contracts Documentation](https://laravel.com/project_docs/contracts)
- [<nome progetto> Code Quality Guidelines](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/project_docs/code-quality.md)
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
- [Modulo Xot Contracts](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Contracts/)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 9d67cabd (.)
=======
=======
=======
- [<nome progetto> Code Quality Guidelines](/var/www/html/<nome progetto>/laravel/docs/code-quality.md)
- [Laravel Contracts Documentation](https://laravel.com/project_docs/contracts)
- [<nome progetto> Code Quality Guidelines](/var/www/html/<nome progetto>/laravel/project_docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/<nome progetto>/laravel/Modules/Xot/app/Contracts/)
- [<nome progetto> Code Quality Guidelines](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/docs/code-quality.md)- [Laravel Contracts Documentation](https://laravel.com/project_docs/contracts)
- [<nome progetto> Code Quality Guidelines](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/project_docs/code-quality.md)
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
- [Modulo Xot Contracts](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Contracts/)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 011072e4 (.)
=======
=======
=======
- [<nome progetto> Code Quality Guidelines](/var/www/html/<nome progetto>/laravel/docs/code-quality.md)
- [Laravel Contracts Documentation](https://laravel.com/project_docs/contracts)
- [<nome progetto> Code Quality Guidelines](/var/www/html/<nome progetto>/laravel/project_docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/<nome progetto>/laravel/Modules/Xot/app/Contracts/)
- [<nome progetto> Code Quality Guidelines](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/docs/code-quality.md)- [Laravel Contracts Documentation](https://laravel.com/project_docs/contracts)
- [<nome progetto> Code Quality Guidelines](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/project_docs/code-quality.md)
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
- [Modulo Xot Contracts](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Contracts/)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 207ac35e (.)
=======
- [Modulo Xot Contracts](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Contracts/)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce89c8bb (.)
=======
=======
=======
=======
>>>>>>> cca10a64 (.)
- [<nome progetto> Code Quality Guidelines](/var/www/html/<nome progetto>/laravel/docs/code-quality.md)
- [Laravel Contracts Documentation](https://laravel.com/project_docs/contracts)
- [<nome progetto> Code Quality Guidelines](/var/www/html/<nome progetto>/laravel/project_docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/<nome progetto>/laravel/Modules/Xot/app/Contracts/)
- [<nome progetto> Code Quality Guidelines](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/docs/code-quality.md)- [Laravel Contracts Documentation](https://laravel.com/project_docs/contracts)
- [<nome progetto> Code Quality Guidelines](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/project_docs/code-quality.md)
<<<<<<< HEAD
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
=======
>>>>>>> cca10a64 (.)
- [Modulo Xot Contracts](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Contracts/)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> eea68ec9 (.)
=======
=======
=======
>>>>>>> 69fa7d37 (.)
=======
- [<nome progetto> Code Quality Guidelines](/var/www/html/<nome progetto>/laravel/docs/code-quality.md)
- [Laravel Contracts Documentation](https://laravel.com/project_docs/contracts)
- [<nome progetto> Code Quality Guidelines](/var/www/html/<nome progetto>/laravel/project_docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/<nome progetto>/laravel/Modules/Xot/app/Contracts/)
- [<nome progetto> Code Quality Guidelines](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/docs/code-quality.md)- [Laravel Contracts Documentation](https://laravel.com/project_docs/contracts)
- [<nome progetto> Code Quality Guidelines](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/project_docs/code-quality.md)
>>>>>>> bf479cc (.)
<<<<<<< HEAD
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 69fa7d37 (.)
- [Modulo Xot Contracts](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Contracts/)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 030c9674 (rebase 210)
=======
=======
=======
- [<nome progetto> Code Quality Guidelines](/var/www/html/<nome progetto>/laravel/docs/code-quality.md)
- [Laravel Contracts Documentation](https://laravel.com/project_docs/contracts)
- [<nome progetto> Code Quality Guidelines](/var/www/html/<nome progetto>/laravel/project_docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/<nome progetto>/laravel/Modules/Xot/app/Contracts/)
- [<nome progetto> Code Quality Guidelines](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/docs/code-quality.md)- [Laravel Contracts Documentation](https://laravel.com/project_docs/contracts)
- [<nome progetto> Code Quality Guidelines](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/project_docs/code-quality.md)
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
- [Modulo Xot Contracts](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Contracts/)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1375c94d (rebase 210)
=======
=======
=======
- [<nome progetto> Code Quality Guidelines](/var/www/html/<nome progetto>/laravel/docs/code-quality.md)
- [Laravel Contracts Documentation](https://laravel.com/project_docs/contracts)
- [<nome progetto> Code Quality Guidelines](/var/www/html/<nome progetto>/laravel/project_docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/<nome progetto>/laravel/Modules/Xot/app/Contracts/)
- [<nome progetto> Code Quality Guidelines](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/docs/code-quality.md)- [Laravel Contracts Documentation](https://laravel.com/project_docs/contracts)
- [<nome progetto> Code Quality Guidelines](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/project_docs/code-quality.md)
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
- [Modulo Xot Contracts](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Contracts/)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 8a8a8e2f (rebase 210)
=======
- [Modulo Xot Contracts](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Contracts/)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 460b8f5b (rebase 210)
=======
=======
=======
- [<nome progetto> Code Quality Guidelines](/var/www/html/<nome progetto>/laravel/docs/code-quality.md)
- [Laravel Contracts Documentation](https://laravel.com/project_docs/contracts)
- [<nome progetto> Code Quality Guidelines](/var/www/html/<nome progetto>/laravel/project_docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/<nome progetto>/laravel/Modules/Xot/app/Contracts/)
- [<nome progetto> Code Quality Guidelines](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/docs/code-quality.md)- [Laravel Contracts Documentation](https://laravel.com/project_docs/contracts)
- [<nome progetto> Code Quality Guidelines](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/project_docs/code-quality.md)
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
- [Modulo Xot Contracts](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Contracts/)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> cb85c538 (rebase 210)
=======
=======
=======
- [<nome progetto> Code Quality Guidelines](/var/www/html/<nome progetto>/laravel/docs/code-quality.md)
- [Laravel Contracts Documentation](https://laravel.com/project_docs/contracts)
- [<nome progetto> Code Quality Guidelines](/var/www/html/<nome progetto>/laravel/project_docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/<nome progetto>/laravel/Modules/Xot/app/Contracts/)
- [<nome progetto> Code Quality Guidelines](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/docs/code-quality.md)- [Laravel Contracts Documentation](https://laravel.com/project_docs/contracts)
- [<nome progetto> Code Quality Guidelines](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/project_docs/code-quality.md)
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
- [Modulo Xot Contracts](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Contracts/)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e0d9c9be (.)
=======
=======
=======
- [<nome progetto> Code Quality Guidelines](/var/www/html/<nome progetto>/laravel/docs/code-quality.md)
- [Laravel Contracts Documentation](https://laravel.com/project_docs/contracts)
- [<nome progetto> Code Quality Guidelines](/var/www/html/<nome progetto>/laravel/project_docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/<nome progetto>/laravel/Modules/Xot/app/Contracts/)
- [<nome progetto> Code Quality Guidelines](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/docs/code-quality.md)- [Laravel Contracts Documentation](https://laravel.com/project_docs/contracts)
- [<nome progetto> Code Quality Guidelines](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/project_docs/code-quality.md)
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
- [Modulo Xot Contracts](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Contracts/)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6b6b9e41 (.)
=======
=======
=======
- [<nome progetto> Code Quality Guidelines](/var/www/html/<nome progetto>/laravel/docs/code-quality.md)
- [Laravel Contracts Documentation](https://laravel.com/project_docs/contracts)
- [<nome progetto> Code Quality Guidelines](/var/www/html/<nome progetto>/laravel/project_docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/<nome progetto>/laravel/Modules/Xot/app/Contracts/)
- [<nome progetto> Code Quality Guidelines](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/docs/code-quality.md)- [Laravel Contracts Documentation](https://laravel.com/project_docs/contracts)
- [<nome progetto> Code Quality Guidelines](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/project_docs/code-quality.md)
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
- [Modulo Xot Contracts](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Contracts/)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 4d2eb53e (.)
=======
- [Modulo Xot Contracts](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Contracts/)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 80f054e0 (.)
=======
=======
=======
- [<nome progetto> Code Quality Guidelines](/var/www/html/<nome progetto>/laravel/docs/code-quality.md)
- [Laravel Contracts Documentation](https://laravel.com/project_docs/contracts)
- [<nome progetto> Code Quality Guidelines](/var/www/html/<nome progetto>/laravel/project_docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/<nome progetto>/laravel/Modules/Xot/app/Contracts/)
- [<nome progetto> Code Quality Guidelines](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/docs/code-quality.md)- [Laravel Contracts Documentation](https://laravel.com/project_docs/contracts)
- [<nome progetto> Code Quality Guidelines](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/project_docs/code-quality.md)
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
- [Modulo Xot Contracts](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Contracts/)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 9d67cabd (.)
=======
=======
=======
- [<nome progetto> Code Quality Guidelines](/var/www/html/<nome progetto>/laravel/docs/code-quality.md)
- [Laravel Contracts Documentation](https://laravel.com/project_docs/contracts)
- [<nome progetto> Code Quality Guidelines](/var/www/html/<nome progetto>/laravel/project_docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/<nome progetto>/laravel/Modules/Xot/app/Contracts/)
- [<nome progetto> Code Quality Guidelines](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/docs/code-quality.md)- [Laravel Contracts Documentation](https://laravel.com/project_docs/contracts)
- [<nome progetto> Code Quality Guidelines](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/project_docs/code-quality.md)
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
- [Modulo Xot Contracts](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Contracts/)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 011072e4 (.)
=======
=======
=======
- [<nome progetto> Code Quality Guidelines](/var/www/html/<nome progetto>/laravel/docs/code-quality.md)
- [Laravel Contracts Documentation](https://laravel.com/project_docs/contracts)
- [<nome progetto> Code Quality Guidelines](/var/www/html/<nome progetto>/laravel/project_docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/<nome progetto>/laravel/Modules/Xot/app/Contracts/)
- [<nome progetto> Code Quality Guidelines](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/docs/code-quality.md)- [Laravel Contracts Documentation](https://laravel.com/project_docs/contracts)
- [<nome progetto> Code Quality Guidelines](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/project_docs/code-quality.md)
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
- [Modulo Xot Contracts](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Contracts/)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 207ac35e (.)
=======
=======
=======
- [<nome progetto> Code Quality Guidelines](/var/www/html/<nome progetto>/laravel/docs/code-quality.md)
- [Laravel Contracts Documentation](https://laravel.com/project_docs/contracts)
- [<nome progetto> Code Quality Guidelines](/var/www/html/<nome progetto>/laravel/project_docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/<nome progetto>/laravel/Modules/Xot/app/Contracts/)
- [<nome progetto> Code Quality Guidelines](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/docs/code-quality.md)- [Laravel Contracts Documentation](https://laravel.com/project_docs/contracts)
- [<nome progetto> Code Quality Guidelines](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/project_docs/code-quality.md)
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
- [Modulo Xot Contracts](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Contracts/)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 207ac35e (.)
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
=======
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> de02998b (.)
=======
=======
>>>>>>> e7a9a2bf (.)
=======
=======
>>>>>>> 9cdf6146 (.)
=======
=======
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 6d08c01b (.)
=======
=======
>>>>>>> 8e5817bc (.)
=======
=======
>>>>>>> 51182e3c (rebase 210)
=======
=======
>>>>>>> a9bf0423 (rebase 210)
=======
=======
>>>>>>> 9fe1b60e (rebase 210)
=======
=======
>>>>>>> b4f93b3a (rebase 210)
=======
=======
>>>>>>> c5c038f2 (rebase 210)
=======
=======
>>>>>>> 77edd94a (.)
=======
=======
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> de02998b (.)
=======
=======
>>>>>>> e7a9a2bf (.)
=======
=======
>>>>>>> 9cdf6146 (.)
=======
=======
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 6d08c01b (.)
=======
=======
>>>>>>> 8e5817bc (.)
=======
=======
>>>>>>> 51182e3c (rebase 210)
=======
=======
>>>>>>> a9bf0423 (rebase 210)
=======
=======
>>>>>>> 9fe1b60e (rebase 210)
=======
=======
>>>>>>> b4f93b3a (rebase 210)
=======
=======
>>>>>>> c5c038f2 (rebase 210)
=======
=======
>>>>>>> 77edd94a (.)
=======
=======
>>>>>>> 2fc60436 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> d09cb759 (.)
=======
- [SaluteOra Code Quality Guidelines](/var/www/html/saluteora/laravel/docs/code-quality.md)
- [Modulo Xot Contracts](/var/www/html/saluteora/laravel/Modules/Xot/app/Contracts/)
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
>>>>>>> d09cb759 (.)
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
>>>>>>> d09cb759 (.)
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
>>>>>>> d09cb759 (.)
=======
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
- [Modulo Xot Contracts](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Contracts/)
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> e7a9a2bf (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
=======
>>>>>>> ba564870 (.)
=======
- [Modulo Xot Contracts](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 66453ace (.)
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 9cdf6146 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 7c39b1fe (.)
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
- [Modulo Xot Contracts](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 2a97406c (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 6d08c01b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> c6c33175 (.)
=======
- [Modulo Xot Contracts](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 4f042b88 (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> 8e5817bc (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 7a2f131f (.)
=======
- [Modulo Xot Contracts](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 712617d3 (.)
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> 51182e3c (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> cb85c538 (rebase 210)
=======
>>>>>>> 1c0eb9c7 (rebase 210)
=======
- [Modulo Xot Contracts](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Contracts/)
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 229a065a (rebase 210)
=======
>>>>>>> a9bf0423 (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
=======
>>>>>>> 4d253d2c (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
- [Modulo Xot Contracts](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> 9fe1b60e (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 8a8a8e2f (rebase 210)
=======
>>>>>>> efb0f8d9 (rebase 210)
=======
- [Modulo Xot Contracts](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
=======
>>>>>>> b4f93b3a (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 1375c94d (rebase 210)
=======
>>>>>>> 52cd5f85 (rebase 210)
=======
- [Modulo Xot Contracts](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Contracts/)
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> c5c038f2 (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 030c9674 (rebase 210)
=======
>>>>>>> bb00ab64 (rebase 210)
=======
- [Modulo Xot Contracts](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 22baa66d (rebase 210)
=======
- [Modulo Xot Contracts](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 77edd94a (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> eea68ec9 (.)
=======
>>>>>>> 59916c8f (.)
=======
- [Modulo Xot Contracts](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Contracts/)
>>>>>>> fd1fcc4c (.)
=======
>>>>>>> e790eb33 (.)
=======
- [Modulo Xot Contracts](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Contracts/)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
- [Modulo Xot Contracts](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 9cf0dc90 (.)
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
>>>>>>> d09cb759 (.)
=======
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
- [Modulo Xot Contracts](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Contracts/)
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> e7a9a2bf (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
=======
>>>>>>> ba564870 (.)
=======
- [Modulo Xot Contracts](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 66453ace (.)
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 9cdf6146 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 7c39b1fe (.)
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
- [Modulo Xot Contracts](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 2a97406c (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 6d08c01b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> c6c33175 (.)
=======
- [Modulo Xot Contracts](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 4f042b88 (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> 8e5817bc (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 7a2f131f (.)
=======
- [Modulo Xot Contracts](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 712617d3 (.)
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> 51182e3c (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> cb85c538 (rebase 210)
=======
>>>>>>> 1c0eb9c7 (rebase 210)
=======
- [Modulo Xot Contracts](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Contracts/)
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 229a065a (rebase 210)
=======
>>>>>>> a9bf0423 (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
=======
>>>>>>> 4d253d2c (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
- [Modulo Xot Contracts](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> 9fe1b60e (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 8a8a8e2f (rebase 210)
=======
>>>>>>> efb0f8d9 (rebase 210)
=======
- [Modulo Xot Contracts](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
=======
>>>>>>> b4f93b3a (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 1375c94d (rebase 210)
=======
>>>>>>> 52cd5f85 (rebase 210)
=======
- [Modulo Xot Contracts](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Contracts/)
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> c5c038f2 (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 030c9674 (rebase 210)
=======
>>>>>>> bb00ab64 (rebase 210)
=======
- [Modulo Xot Contracts](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 22baa66d (rebase 210)
=======
- [Modulo Xot Contracts](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 77edd94a (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> eea68ec9 (.)
=======
>>>>>>> 59916c8f (.)
=======
- [Modulo Xot Contracts](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Contracts/)
>>>>>>> fd1fcc4c (.)
=======
>>>>>>> e790eb33 (.)
=======
- [Modulo Xot Contracts](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Contracts/)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
- [Modulo Xot Contracts](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 9cf0dc90 (.)
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
>>>>>>> d09cb759 (.)
=======
- [Modulo Xot Contracts](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/app/Contracts/)
>>>>>>> 75179b855 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
