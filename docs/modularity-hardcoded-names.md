<<<<<<< HEAD
# Regola Critica: Mai Hardcodare Nomi di Progetto nei Moduli Riutilizzabili

## Problema Identificato

<<<<<<< HEAD
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
Durante l'audit del modulo `Notify`, è stato identificato un **errore critico di architettura**: l'utilizzo di stringhe hardcoded con nomi di progetto specifici (es. "<nome progetto>", "salutemo") in un modulo che deve essere riutilizzabile in progetti diversi.
>>>>>>> 75179b855 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> febe79e3 (.)
Durante l'audit del modulo `Notify`, è stato identificato un **errore critico di architettura**: l'utilizzo di stringhe hardcoded con nomi di progetto specifici (es. "saluteora", "salutemo") in un modulo che deve essere riutilizzabile in progetti diversi.

## Impatto del Problema

### Violazioni Architetturali
1. **Principio di Modularità**: Il modulo Notify non è più indipendente
2. **Principio di Riutilizzabilità**: Impossibile utilizzare in altri progetti senza modifiche
3. **Principio di Separazione**: Il modulo conosce il progetto che lo utilizza
4. **Debito Tecnico**: Necessità di refactoring per ogni nuovo progetto

### Esempi di Violazioni Trovate
```php
// ❌ ERRORE CRITICO - Stringhe hardcoded
<<<<<<< HEAD
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
'subject' => 'Benvenuto su ',
'content' => 'Grazie per esserti registrato su ',
'clinic_name' => 'Studio Dentistico ',
'webhook' => 'https://api.<nome progetto>.com/webhooks',
'author' => 'Team PTVX',
'path' => '/var/www/html/_bases/base_ptvx_fila3_mono/public_html/images/',
>>>>>>> 75179b855 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> febe79e3 (.)
'subject' => 'Benvenuto su SaluteOra',
'content' => 'Grazie per esserti registrato su SaluteOra',
'clinic_name' => 'Studio Dentistico SaluteOra',
'webhook' => 'https://api.saluteora.com/webhooks',
'author' => 'Team SaluteOra',
'path' => '/var/www/html/saluteora/public_html/images/',
<<<<<<< HEAD
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
'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/',
>>>>>>> 75179b855 (.)
=======
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
'subject' => 'Benvenuto su ',
'content' => 'Grazie per esserti registrato su ',
'clinic_name' => 'Studio Dentistico ',
'webhook' => 'https://api.<nome progetto>.com/webhooks',
'author' => 'Team PTVX',
'path' => '/var/www/html/_bases/base_ptvx_fila3_mono/public_html/images/',
'subject' => 'Benvenuto su <nome progetto>',
'content' => 'Grazie per esserti registrato su <nome progetto>',
'clinic_name' => 'Studio Dentistico <nome progetto>',
'webhook' => 'https://api.<nome progetto>.com/webhooks',
'author' => 'Team <nome progetto>',
'path' => '/var/www/html/<nome progetto>/public_html/images/',
'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/',
>>>>>>> bf479cc (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> febe79e3 (.)
```

## Soluzioni Implementate

### 1. File di Configurazione Centralizzato
```php
// Modules/Notify/config/notify.php
return [
    'company' => [
        'name' => env('COMPANY_NAME', 'Default Company'),
        'team' => env('COMPANY_TEAM', 'Default Team'),
        'webhook_base' => env('WEBHOOK_BASE_URL', 'https://api.example.com'),
        'clinic_name' => env('CLINIC_NAME', 'Default Clinic'),
    ],
    'test_data' => [
        'default_subject' => 'Benvenuto su {{company_name}}',
        'default_content' => 'Grazie per esserti registrato al nostro servizio.',
    ],
];
```

### 2. Helper per Sostituzione Variabili
```php
// Modules/Notify/app/Helpers/ConfigHelper.php
class ConfigHelper
{
    public static function replaceTemplateVariables(array $data): array
    {
        // Sostituisce {{company_name}} con il valore configurato
    }
}
```

### 3. Pattern per Test Modulari
```php
// ✅ CORRETTO - Dati configurabili
$testData = ConfigHelper::getTestData();
$notificationData = [
    'subject' => $testData['default_subject'],
    'content' => $testData['default_content'],
];
```

## Regole Assolute

### Moduli che DEVONO essere Generici
- **Notify**: Sistema di notifiche per qualsiasi progetto
- **User**: Gestione utenti per qualsiasi progetto  
- **UI**: Componenti UI per qualsiasi progetto
- **Xot**: Base framework per qualsiasi progetto
- **Geo**: Gestione geografica per qualsiasi progetto
- **Media**: Gestione media per qualsiasi progetto

### Moduli Specifici del Progetto
<<<<<<< HEAD
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
- ****: Solo per progetto 
>>>>>>> 75179b855 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> febe79e3 (.)
- **SaluteOra**: Solo per progetto SaluteOra
- **SaluteMo**: Solo per progetto SaluteMo
- **Patient**: Solo per progetti sanitari specifici

## Checklist Pre-Commit

Prima di ogni commit, verificare:

- [ ] Nessuna stringa hardcoded con nomi di progetto specifici
- [ ] Tutti i test utilizzano dati generici o configurabili
- [ ] Factory e seeder sono generici e riutilizzabili
- [ ] Configurazioni sono centralizzate e configurabili
- [ ] Traduzioni non contengono nomi di progetto specifici
- [ ] Path e URL sono configurabili o relativi

## Test di Conformità

Eseguire regolarmente:
```bash
# Cerca stringhe hardcoded nei moduli generici
<<<<<<< HEAD
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
grep -r "<nome progetto>\|salutemo" laravel/Modules/Notify/ --include="*.php"
grep -r "<nome progetto>\|salutemo" laravel/Modules/User/ --include="*.php"
grep -r "<nome progetto>\|salutemo" laravel/Modules/UI/ --include="*.php"
grep -r "<nome progetto>\|salutemo" laravel/Modules/Xot/ --include="*.php"
>>>>>>> 75179b855 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> febe79e3 (.)
grep -r "saluteora\|salutemo" laravel/Modules/Notify/ --include="*.php"
grep -r "saluteora\|salutemo" laravel/Modules/User/ --include="*.php"
grep -r "saluteora\|salutemo" laravel/Modules/UI/ --include="*.php"
grep -r "saluteora\|salutemo" laravel/Modules/Xot/ --include="*.php"
```

## Configurazione per Progetti

### Variabili d'Ambiente
```env
<<<<<<< HEAD
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
COMPANY_NAME=
COMPANY_TEAM=Team 
WEBHOOK_BASE_URL=https://api.<nome progetto>.com
CLINIC_NAME=Studio Dentistico 
REPOSITORY_URL=https://github.com/<nome progetto>/notify
>>>>>>> 75179b855 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> febe79e3 (.)
COMPANY_NAME=SaluteOra
COMPANY_TEAM=Team SaluteOra
WEBHOOK_BASE_URL=https://api.saluteora.com
CLINIC_NAME=Studio Dentistico SaluteOra
REPOSITORY_URL=https://github.com/saluteora/notify
```

### Override per Progetti Specifici
Ogni progetto può personalizzare i valori tramite variabili d'ambiente senza modificare il codice del modulo.

## Filosofia e Principi

### Approccio Modulare
- **Indipendenza**: Ogni modulo è un'entità autonoma
- **Configurabilità**: Tutto deve essere configurabile
- **Riutilizzabilità**: Un modulo deve funzionare ovunque
- **Separazione**: I moduli non conoscono i progetti
- **Scalabilità**: Crescita senza limiti di progetto

### Benefici della Correzione
1. **Modularità Vera**: Moduli completamente indipendenti
2. **Riutilizzabilità**: Funzionamento in qualsiasi progetto
3. **Manutenibilità**: Configurazione centralizzata
4. **Scalabilità**: Facile aggiunta di nuovi progetti
5. **Qualità**: Rispetto dei principi architetturali

## Documentazione Correlata

- [Testing Guidelines](testing-guidelines.md)
- [ConfigHelper Documentation](config-helper.md)
- [Configuration Guide](configuration-guide.md)

---

**Questa correzione è CRITICA per mantenere l'architettura modulare del sistema. Ogni violazione deve essere corretta immediatamente.**
=======
>>>>>>> 5fd545e4 (.)
