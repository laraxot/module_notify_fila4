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
# Azioni SMS

## Interfaccia

Tutte le azioni di invio SMS devono implementare l'interfaccia `SmsActionInterface`:

```php
namespace Modules\Notify\Contracts\SMS;

interface SmsActionInterface
{
    /**
     * Esegue l'invio dell'SMS
     *
     * @param SmsData $smsData I dati del messaggio SMS
     * @return array Risultato dell'operazione
     * @throws \Exception In caso di errore durante l'invio
     */
    public function execute(SmsData $smsData): array;
}
```

## Struttura

Le azioni SMS sono organizzate secondo questa struttura:

1. **Contratti**: Le interfacce sono definite in `app/Contracts/SMS/`
2. **Implementazioni**: Le azioni concrete sono in `app/Actions/SMS/`
3. **Regole**:
   - Ogni azione deve implementare `SmsActionInterface`
   - Il metodo `execute()` deve accettare solo `SmsData`
   - Deve restituire un array con i dettagli dell'operazione
   - Deve gestire e loggare gli errori appropriatamente

## Provider Supportati

- Netfun
- Altri provider da aggiungere...

## Esempio di Utilizzo

```php
$smsData = new SmsData(
    to: '+393331234567',
    body: 'Il tuo codice OTP è: 123456',
<<<<<<< HEAD
    from: '<nome progetto>'
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
    from: '<nome progetto>'
=======
    from: ''
    from: 'SaluteOra'
>>>>>>> 75179b85 (.)
=======
    from: 'SaluteOra'
>>>>>>> f963d2c0 (.)
=======
    from: 'SaluteOra'
=======
    from: 'SaluteOra'
>>>>>>> 31f5d28f (.)
=======
    from: 'SaluteOra'
>>>>>>> 31f5d28f (.)
=======
    from: 'SaluteOra'
>>>>>>> 31f5d28f (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
    from: 'SaluteOra'
>>>>>>> 6608a1a0 (.)
=======
    from: 'SaluteOra'
>>>>>>> 23cbbaf5 (.)
=======
    from: 'SaluteOra'
>>>>>>> 909e45af (.)
=======
    from: 'SaluteOra'
>>>>>>> bb7e77c2 (.)
=======
    from: 'SaluteOra'
>>>>>>> b99af5a8 (.)
=======
    from: 'SaluteOra'
>>>>>>> f3086887 (rebase 210)
=======
    from: 'SaluteOra'
>>>>>>> 3d462363 (rebase 210)
=======
<<<<<<< HEAD
<<<<<<< HEAD
    from: 'SaluteOra'
>>>>>>> 54ad93c4 (rebase 210)
=======
    from: 'SaluteOra'
>>>>>>> 6e12a84b (rebase 210)
=======
<<<<<<< HEAD
<<<<<<< HEAD
    from: 'SaluteOra'
>>>>>>> 545977c8 (rebase 210)
=======
    from: 'SaluteOra'
>>>>>>> 69fa7d37 (.)
=======
    from: 'SaluteOra'
>>>>>>> 31f5d28f (.)
=======
    from: 'SaluteOra'
>>>>>>> 6608a1a0 (.)
=======
    from: 'SaluteOra'
>>>>>>> 23cbbaf5 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
    from: 'SaluteOra'
>>>>>>> 909e45af (.)
=======
    from: 'SaluteOra'
>>>>>>> bb7e77c2 (.)
=======
    from: 'SaluteOra'
>>>>>>> b99af5a8 (.)
=======
    from: 'SaluteOra'
>>>>>>> f3086887 (rebase 210)
=======
    from: 'SaluteOra'
>>>>>>> 3d462363 (rebase 210)
=======
    from: 'SaluteOra'
>>>>>>> 54ad93c4 (rebase 210)
=======
    from: 'SaluteOra'
>>>>>>> 6e12a84b (rebase 210)
=======
    from: 'SaluteOra'
>>>>>>> 545977c8 (rebase 210)
=======
    from: 'SaluteOra'
>>>>>>> 69fa7d37 (.)
=======
    from: 'SaluteOra'
>>>>>>> 31f5d28f (.)
=======
    from: 'SaluteOra'
>>>>>>> 6608a1a0 (.)
=======
    from: 'SaluteOra'
>>>>>>> 23cbbaf5 (.)
=======
    from: 'SaluteOra'
>>>>>>> 909e45af (.)
=======
    from: 'SaluteOra'
>>>>>>> bb7e77c2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
    from: 'SaluteOra'
>>>>>>> b99af5a8 (.)
=======
    from: 'SaluteOra'
>>>>>>> f3086887 (rebase 210)
=======
<<<<<<< HEAD
=======
>>>>>>> e2f1a4045 (.)
=======
    from: 'SaluteOra'
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 01af324fe (.)
=======
>>>>>>> 53eef8d8d (.)
=======
    from: 'SaluteOra'
>>>>>>> 909e45af (.)
=======
>>>>>>> 13aa25113 (.)
=======
>>>>>>> 7aae79847 (.)
=======
    from: 'SaluteOra'
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
>>>>>>> 74eb2e964 (.)
=======
>>>>>>> 0a5473e16 (.)
=======
    from: 'SaluteOra'
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 6ad5224fb (.)
=======
>>>>>>> 1c96b91fe (.)
=======
    from: 'SaluteOra'
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> ad905ce9c (.)
    from: ''
    from: '<nome progetto>'
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
>>>>>>> 31f5d28f (.)
=======
    from: 'SaluteOra'
>>>>>>> a404ea71 (.)
=======
    from: ''
    from: 'SaluteOra'
>>>>>>> 75179b85 (.)
=======
    from: 'SaluteOra'
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
    from: 'SaluteOra'
>>>>>>> a404ea71 (.)
=======
    from: ''
    from: 'SaluteOra'
>>>>>>> 75179b85 (.)
=======
    from: 'SaluteOra'
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
    from: 'SaluteOra'
>>>>>>> a404ea71 (.)
=======
    from: ''
    from: 'SaluteOra'
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
    from: 'SaluteOra'
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
    from: 'SaluteOra'
>>>>>>> a404ea71 (.)
=======
    from: 'SaluteOra'
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
    from: 'SaluteOra'
>>>>>>> ca10d6ad (.)
=======
    from: 'SaluteOra'
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
    from: 'SaluteOra'
>>>>>>> febe79e3 (.)
=======
    from: 'SaluteOra'
>>>>>>> 2a97406c (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 909e45af (.)
=======
    from: 'SaluteOra'
>>>>>>> a29a4728 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
    from: 'SaluteOra'
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
    from: 'SaluteOra'
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
    from: 'SaluteOra'
>>>>>>> 9721a5b2 (.)
=======
    from: 'SaluteOra'
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
    from: 'SaluteOra'
>>>>>>> 1442e291 (rebase 210)
=======
    from: 'SaluteOra'
>>>>>>> fdb24863 (rebase 210)
<<<<<<< HEAD
=======
>>>>>>> 3d462363 (rebase 210)
=======
    from: 'SaluteOra'
>>>>>>> fcaebc79 (rebase 210)
=======
    from: ''
    from: 'SaluteOra'
>>>>>>> 4fc21b78 (rebase 210)
=======
    from: 'SaluteOra'
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
    from: 'SaluteOra'
>>>>>>> 9d3810d0 (rebase 210)
=======
    from: 'SaluteOra'
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
    from: 'SaluteOra'
>>>>>>> d38aa9d2 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
    from: 'SaluteOra'
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
<<<<<<< HEAD
=======
    from: 'SaluteOra'
>>>>>>> 9e7ba5b6 (rebase 210)
=======
    from: 'SaluteOra'
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
    from: ''
    from: 'SaluteOra'
>>>>>>> c8b1c8bf (.)
=======
    from: 'SaluteOra'
>>>>>>> 9cf0dc90 (.)
=======
    from: ''
    from: 'SaluteOra'
>>>>>>> 75179b85 (.)
=======
    from: 'SaluteOra'
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
    from: 'SaluteOra'
>>>>>>> a404ea71 (.)
=======
    from: 'SaluteOra'
>>>>>>> ee18dd92 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6608a1a0 (.)
=======
    from: 'SaluteOra'
>>>>>>> ca10d6ad (.)
<<<<<<< HEAD
=======
    from: 'SaluteOra'
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
    from: 'SaluteOra'
>>>>>>> febe79e3 (.)
=======
    from: 'SaluteOra'
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
    from: 'SaluteOra'
>>>>>>> a29a4728 (.)
=======
    from: 'SaluteOra'
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
    from: 'SaluteOra'
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
    from: 'SaluteOra'
>>>>>>> 9721a5b2 (.)
=======
    from: 'SaluteOra'
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
    from: 'SaluteOra'
>>>>>>> 1442e291 (rebase 210)
=======
    from: 'SaluteOra'
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
    from: 'SaluteOra'
>>>>>>> fcaebc79 (rebase 210)
=======
    from: ''
    from: 'SaluteOra'
>>>>>>> 4fc21b78 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
    from: 'SaluteOra'
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
    from: 'SaluteOra'
>>>>>>> 9d3810d0 (rebase 210)
=======
    from: 'SaluteOra'
>>>>>>> eb62d6cf (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6e12a84b (rebase 210)
=======
    from: 'SaluteOra'
>>>>>>> d38aa9d2 (rebase 210)
=======
    from: 'SaluteOra'
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
    from: 'SaluteOra'
>>>>>>> 9e7ba5b6 (rebase 210)
=======
    from: 'SaluteOra'
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
    from: ''
    from: 'SaluteOra'
>>>>>>> c8b1c8bf (.)
=======
    from: 'SaluteOra'
>>>>>>> 9cf0dc90 (.)
=======
    from: ''
    from: 'SaluteOra'
>>>>>>> 75179b85 (.)
=======
    from: 'SaluteOra'
>>>>>>> f963d2c0 (.)
=======
    from: ''
    from: 'SaluteOra'
>>>>>>> 75179b855 (.)
=======
    from: 'SaluteOra'
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
    from: 'SaluteOra'
>>>>>>> a404ea71 (.)
=======
    from: 'SaluteOra'
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
    from: 'SaluteOra'
>>>>>>> ca10d6ad (.)
=======
    from: 'SaluteOra'
>>>>>>> 66453ace (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 23cbbaf5 (.)
=======
    from: 'SaluteOra'
>>>>>>> febe79e3 (.)
<<<<<<< HEAD
=======
    from: 'SaluteOra'
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
    from: 'SaluteOra'
>>>>>>> a29a4728 (.)
=======
    from: 'SaluteOra'
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
    from: 'SaluteOra'
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
    from: 'SaluteOra'
>>>>>>> 9721a5b2 (.)
=======
    from: 'SaluteOra'
>>>>>>> 712617d3 (.)
<<<<<<< HEAD
=======
>>>>>>> f3086887 (rebase 210)
=======
    from: 'SaluteOra'
>>>>>>> 1442e291 (rebase 210)
>>>>>>> laraxot/develop
=======
>>>>>>> 1487fe812 (.)
=======
=======
    from: 'SaluteOra'
>>>>>>> f963d2c0 (.)
>>>>>>> 12a7e2462 (.)
=======
>>>>>>> e2f1a4045 (.)
=======
=======
    from: 'SaluteOra'
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
    from: 'SaluteOra'
>>>>>>> 4f042b88 (.)
>>>>>>> 36136dcfa (.)
=======
>>>>>>> 7aae79847 (.)
=======
=======
    from: 'SaluteOra'
>>>>>>> c7a4727b (.)
>>>>>>> 275b7ad99 (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
=======
    from: 'SaluteOra'
>>>>>>> 9721a5b2 (.)
>>>>>>> b215d516b (.)
=======
>>>>>>> 731b801a8 (.)
=======
>>>>>>> 74eb2e964 (.)
=======
=======
    from: 'SaluteOra'
>>>>>>> 1442e291 (rebase 210)
>>>>>>> f957fb24b (.)
=======
>>>>>>> b85076e48 (.)
=======
>>>>>>> 0a5473e16 (.)
=======
=======
    from: 'SaluteOra'
>>>>>>> fcaebc79 (rebase 210)
>>>>>>> 252fa579e (.)
=======
>>>>>>> 43dd68f4b (.)
=======
=======
    from: 'SaluteOra'
>>>>>>> 9c45d9bd (rebase 210)
>>>>>>> ce1853afd (.)
=======
>>>>>>> 6ad5224fb (.)
=======
=======
    from: 'SaluteOra'
>>>>>>> 9d3810d0 (rebase 210)
>>>>>>> 21a6fa9bc (.)
=======
>>>>>>> 7a142b4f5 (.)
=======
=======
>>>>>>> 6e12a84b (rebase 210)
>>>>>>> 1c96b91fe (.)
=======
>>>>>>> 610b999f1 (.)
=======
=======
    from: 'SaluteOra'
>>>>>>> 8c8937e7 (rebase 210)
>>>>>>> c31e900eb (.)
=======
>>>>>>> ad905ce9c (.)
);

$action = new SendNetfunSMSAction();
$result = $action->execute($smsData);
```

## Best Practices

1. **Validazione**:
   - Validare sempre i dati in ingresso
   - Verificare il formato del numero di telefono
   - Controllare la lunghezza del messaggio

2. **Gestione Errori**:
   - Usare try/catch per gestire le eccezioni
   - Loggare gli errori con dettagli
   - Implementare retry per fallimenti temporanei

3. **Performance**:
   - Utilizzare le code per l'invio
   - Implementare rate limiting
   - Monitorare l'uso dell'API

4. **Sicurezza**:
   - Validare l'input degli utenti
   - Sanitizzare i messaggi
   - Proteggere le chiavi API
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
