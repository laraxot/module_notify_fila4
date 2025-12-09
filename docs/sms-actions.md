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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
    from: 'SaluteOra'
>>>>>>> 54ad93c4 (rebase 210)
=======
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
