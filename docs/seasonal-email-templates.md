# Seasonal Email Templates - Guida Completa

**Status**: ✅ Implementato
**Data**: 2025-12-19
**Moduli**: Notify, Themes/Sixteen

## 📋 Indice

1. [Overview](#overview)
2. [Architettura](#architettura)
3. [Template Disponibili](#template-disponibili)
4. [Utilizzo](#utilizzo)
5. [Come Creare Nuovi Template Stagionali](#come-creare-nuovi-template-stagionali)
6. [Best Practices](#best-practices)
7. [Testing](#testing)

---

## Overview

Il sistema di **Seasonal Email Templates** permette di utilizzare layout HTML tematici per email stagionali mantenendo la stessa infrastruttura di `SpatieEmail`.

### Vantaggi

✅ **Flessibilità**: Cambia il layout senza modificare il contenuto
✅ **Riusabilità**: Stesso contenuto, diversi layout
✅ **Manutenibilità**: Layout centralizzati in Themes
✅ **Personalizzazione**: Ogni tema può avere i suoi layout
✅ **Compatibilità**: Email-safe CSS animations

---

## Architettura

### Stack Tecnologico

```
SpatieEmail (Modules/Notify)
    ↓ usa
Mustache Template Engine
    ↓ processa
HTML Layout (Themes/*/resources/mail-layouts/)
    ↓ inserisce
Contenuto Dinamico {{{ body }}}
    ↓ genera
Email HTML finale
```

### Flusso Dati

```php
// 1. Creazione email
$email = new SpatieEmail($record, 'welcome-customer');

// 2. SpatieEmail::getHtmlLayout() carica layout
$layout = file_get_contents('Themes/Sixteen/resources/mail-layouts/base.html');

// 3. Mustache sostituisce variabili
$layout = $mustache->render($layout, [
    'subject' => 'Benvenuto!',
    'company_name' => 'ACME Corp',
    'logo_header' => 'https://...',
    'body' => '<p>Contenuto email</p>',
    // ...
]);

// 4. Email inviata
Mail::to($user)->send($email);
```

### File Coinvolti

| File | Ruolo |
|------|-------|
| `Modules/Notify/app/Emails/SpatieEmail.php` | Classe email principale |
| `Themes/Sixteen/resources/mail-layouts/base.html` | Layout standard |
| `Themes/Sixteen/resources/mail-layouts/christmas.html` | Layout natalizio |
| `Modules/Notify/app/Models/MailTemplate.php` | Contenuti email da DB |

---

## Template Disponibili

### 1. base.html - Standard

**Quando usare**: Tutte le comunicazioni normali

**Caratteristiche**:
- Design Italia Color System
- Responsive + Dark mode
- Font: Titillium Web
- Colori: Blu #0066CC, Verde #00AA66

**Visualizzazione**:
```
┌────────────────────────┐
│  [LOGO AZIENDA]        │ ← Header blu gradient
├────────────────────────┤
│                        │
│  Contenuto email       │ ← Contenuto bianco
│  dinamico qui          │
│                        │
├────────────────────────┤
│  © 2025 Company        │ ← Footer scuro
│  Links sociali         │
└────────────────────────┘
```

### 2. christmas.html - Natalizio

**Quando usare**: Periodo 1 Dicembre - 10 Gennaio

**Caratteristiche**:
- ❄️ Neve animata CSS (20 snowflakes)
- 🎄 Decorazioni natalizie
- 🎨 Colori: Rosso #C8102E, Verde #006400, Oro #FFD700
- 📋 Box evidenziato "Chiusura Festività"
- ✨ Emoji festive integrate

**Visualizzazione**:
```
  ❄  ❄  ❄  ← Neve animata CSS
┌────────────────────────┐
│ 🎄  [LOGO]  🎁         │ ← Header rosso/verde gradient
│ Buone Feste!           │
├────────────────────────┤
│ ┌──────────────────┐   │
│ │ 🎄 CHIUSURA 🎄   │   │ ← Box dorato evidenziato
│ │ 24 Dic - 7 Gen   │   │
│ └──────────────────┘   │
│                        │
│ Contenuto email        │
│                        │
├────────────────────────┤
│ 🎄 © 2025 Company 🎁   │ ← Footer con emoji
└────────────────────────┘
```

**Animazioni CSS**:
- `@keyframes snowfall`: Neve che cade
- Durata: 11s - 18s per naturalezza
- 20 snowflakes con delay casuali
- Disabilitate su mobile per performance
- Fallback graceful per Outlook

---

## Utilizzo

### Metodo 1: Automatico con GetMailLayoutAction (Approccio Consigliato - ✅ CORRETTO)

Il sistema utilizza automaticamente `GetMailLayoutAction` che delega a `GetThemeContextAction` per determinare il contesto stagionale:

```php
// File: Modules/Notify/app/Emails/SpatieEmail.php

public function getHtmlLayout(): string
{
    // Delega a GetMailLayoutAction che usa GetThemeContextAction (Xot)
    // Single Source of Truth: la logica stagionale è centralizzata in GetThemeContextAction
    return app(GetMailLayoutAction::class)->execute();
}
```

**Vantaggi**:
- ✅ DRY: Logica stagionale centralizzata in `GetThemeContextAction` (Xot)
- ✅ KISS: Delega semplice, nessuna logica duplicata
- ✅ Automatico: Selezione layout stagionale trasparente
- ✅ Estensibile: Nuovi contesti stagionali gestiti automaticamente

**Flusso**:
1. `SpatieEmail::getHtmlLayout()` → delega a `GetMailLayoutAction`
2. `GetMailLayoutAction::execute()` → usa `GetThemeContextAction` per ottenere contesto (christmas, easter, etc.)
3. `GetMailLayoutAction` → cerca layout in ordine di priorità: `base_christmas.html`, `christmas.html`, `base.html`
4. Restituisce il layout HTML trovato

### Architettura Corretta (DRY + KISS)

```
GetThemeContextAction (Xot) → Determina contesto stagionale
    ↓
GetMailLayoutAction (Notify) → Trova layout appropriato nel tema
    ↓
SpatieEmail → Usa layout stagionale per render email (tramite getHtmlLayout())
```

**Nota Importante**: `RecordNotification` **NON** usa layout stagionali. Genera direttamente `MailMessage` con il contenuto HTML del template. Per layout stagionali, utilizzare `SpatieEmail` che integra `GetMailLayoutAction` tramite il metodo `getHtmlLayout()`.

**Single Source of Truth**: La logica stagionale è centralizzata in `GetThemeContextAction` (modulo Xot), non duplicata.

### Periodi Stagionali Supportati (definiti in GetThemeContextAction)

- **Natale**: 1 Dicembre - 10 Gennaio → `christmas`
- **Pasqua**: Good Friday - Easter Monday → `easter`
- **Estate**: 15 Luglio - 31 Agosto → `summer`
- **Halloween**: 25 Ottobre - 1 Novembre → `halloween`
- **Default**: Tutti gli altri periodi → `default`

**Layout Resolution Order** (in `GetMailLayoutAction`):
1. `base_christmas.html` (se contesto = christmas)
2. `christmas.html` (fallback)
3. `base.html` (default finale)

### Vantaggi dell'Approccio Corretto

1. **DRY**: Logica stagionale centralizzata in `GetThemeContextAction` (Xot)
2. **KISS**: Una sola classe (`SpatieEmail`) per tutte le email stagionali
3. **Genericity**: Sistema generico che funziona per tutte le feste automaticamente
4. **Manutenibilità**: Modifiche ai periodi stagionali solo in `GetThemeContextAction`
5. **Scalabilità**: Nuove feste gestite automaticamente senza creare nuove classi
6. **Single Source of Truth**: Una sola fonte di verità per logica stagionale

### Metodo 2: Utilizzo Diretto (Sempre Consigliato)

**❌ MAI creare classi hardcoded per feste specifiche** come `ChristmasEmail`, `EasterEmail`, etc. Queste violano DRY e KISS.

**✅ SEMPRE usare `SpatieEmail`** che automaticamente seleziona il layout stagionale tramite `GetMailLayoutAction`:

```php
// ✅ CORRETTO: Usa SpatieEmail che gestisce automaticamente il layout stagionale
$email = new SpatieEmail($client, 'christmas-greetings');
Mail::to($client->email)->send($email);

// Durante il periodo natalizio (1 Dic - 10 Gen), usa automaticamente christmas.html
// Durante altri periodi, usa base.html o altro layout stagionale appropriato
```

**Perché NON creare `ChristmasEmail extends SpatieEmail`**:
- ❌ Violazione DRY: Duplica logica già in `SpatieEmail` + `GetMailLayoutAction`
- ❌ Violazione KISS: Classe separata per logica semplice
- ❌ Violazione Genericity: Hardcoded per una festa specifica
- ❌ Non riutilizzabile: Serve creare una classe per ogni festa (Natale, Pasqua, etc.)
- ✅ **Soluzione**: `SpatieEmail` già gestisce tutto automaticamente!

## ❌ Anti-Pattern: Classi Mailable Hardcoded per Feste

**MAI creare classi separate per feste specifiche** come `ChristmasEmail`, `EasterEmail`, `HalloweenEmail`, etc.

### Perché È Una "Cagata"

**Violazioni Principi**:
- ❌ **Violazione DRY**: Duplica logica già in `SpatieEmail` + `GetMailLayoutAction`
- ❌ **Violazione KISS**: Classe separata per logica semplice
- ❌ **Violazione Genericity**: Hardcoded per una festa specifica
- ❌ **Non Scalabile**: Richiede una classe per ogni festa (Natale, Pasqua, Estate, Halloween, etc.)
- ❌ **Violazione Single Source of Truth**: Logica stagionale duplicata invece di usare `GetThemeContextAction`

### Esempio Errato (DA EVITARE)

```php
// ❌ SBAGLIATO: Classe hardcoded per Natale
namespace Modules\Notify\Emails;

class ChristmasEmail extends SpatieEmail
{
    public function getHtmlLayout(): string
    {
        // Hardcoded: forza sempre layout natalizio
        $xot = XotData::make();
        $pubThemePath = base_path('Themes/'.$xot->pub_theme);
        return file_get_contents($pubThemePath.'/resources/mail-layouts/christmas.html');
    }
}
```

**Problemi**:
- Forza layout natalizio anche fuori stagione
- Non riutilizzabile per altre feste
- Duplica logica di risoluzione layout
- Non rispetta contesto stagionale automatico

### Soluzione Corretta

**✅ SEMPRE usare `SpatieEmail` direttamente**:

```php
// ✅ CORRETTO: Usa SpatieEmail che gestisce automaticamente layout stagionale
$email = new SpatieEmail($client, 'christmas-greetings');
Mail::to($client->email)->send($email);

// Durante periodo natalizio (1 Dic - 10 Gen) → usa automaticamente christmas.html
// Durante altri periodi → usa base.html o altro layout stagionale appropriato
```

**Vantaggi**:
- ✅ Automatico: Layout stagionale selezionato automaticamente
- ✅ Generico: Funziona per tutte le feste senza classi separate
- ✅ DRY: Logica centralizzata in `GetThemeContextAction` (Xot)
- ✅ KISS: Nessuna classe extra, solo `SpatieEmail`

---

## Come Creare Nuovi Template Stagionali

### Step-by-Step

#### 1. Pianificazione

Definisci:
- **Stagione/Evento**: Pasqua, Estate, Halloween, etc.
- **Periodo**: Date inizio/fine
- **Tema visivo**: Colori, font, decorazioni
- **Messaggio speciale**: Comunicazioni specifiche (es. "Chiusura estiva")

#### 2. Design

Crea mockup considerando:
- Compatibilità email clients (no JavaScript!)
- Responsive design
- Accessibilità
- Performance (animazioni leggere)

#### 3. Implementazione

```bash
# 1. Crea file HTML
touch Themes/Sixteen/resources/mail-layouts/easter.html

# 2. Usa base.html come template
cp Themes/Sixteen/resources/mail-layouts/base.html \
   Themes/Sixteen/resources/mail-layouts/easter.html

# 3. Personalizza CSS e HTML
```

**Template Structure** (easter.html esempio):

```html
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <title>{{ subject }}</title>

    <style>
        /* Reset CSS - OBBLIGATORIO */
        body, table, td { -webkit-text-size-adjust: 100%; }

        /* Easter Theme Colors */
        :root {
            --color-primary: #FFB6C1;      /* Rosa pastello */
            --color-secondary: #90EE90;    /* Verde pastello */
            --color-accent: #FFD700;       /* Oro */
        }

        /* Header pasquale */
        .email-header {
            background: linear-gradient(135deg,
                var(--color-primary) 0%,
                var(--color-secondary) 100%);
        }

        /* Decorazioni a tema */
        .easter-decoration {
            font-size: 24px;
            animation: bounce 2s ease-in-out infinite;
        }

        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        /* Box messaggio stagionale */
        .holiday-notice {
            background: linear-gradient(135deg, #FFF8DC 0%, #FFFACD 100%);
            border: 2px dashed var(--color-accent);
            padding: 24px;
        }
    </style>
</head>
<body>
    <table role="presentation" width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td align="center">
                <!-- Header -->
                <table width="600" cellpadding="0" cellspacing="0">
                    <tr>
                        <td class="email-header">
                            <span class="easter-decoration">🐰</span>
                            <img src="{{ logo_header }}" alt="{{ company_name }}">
                            <span class="easter-decoration">🥚</span>
                        </td>
                    </tr>

                    <!-- Contenuto -->
                    <tr>
                        <td class="email-content">
                            <!-- Messaggio pasquale -->
                            <div class="holiday-notice">
                                <h2>🐣 Buona Pasqua! 🐣</h2>
                                <p>Lo studio osserverà i seguenti orari festivi...</p>
                            </div>

                            <!-- Body dinamico -->
                            {{{ body }}}
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td class="email-footer">
                            🐰 © {{ year }} {{ company_name }} 🥚
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
```

#### 4. Testing

Testa su vari client (vedi sezione [Testing](#testing))

#### 5. Documentazione

Aggiorna:
- Questo file (`seasonal-email-templates.md`)
- README nel tema (`Themes/Sixteen/resources/mail-layouts/README.md`)
- Config file se usi Metodo 4

---

## Best Practices

### 1. Quando NON Usare Layout Stagionali

❌ **Evita per**:
- Email transazionali critiche (reset password, conferme ordini)
- Alert di sicurezza
- Notifiche di sistema
- Comunicazioni urgenti

✅ **Usa per**:
- Newsletter
- Email marketing
- Comunicazioni di chiusura ufficio
- Auguri ufficiali

### 2. Performance

**CSS Animations**:
- Max 20-30 elementi animati
- Durate 10-20 secondi (non troppo veloci)
- Disabilita su mobile: `@media screen and (max-width: 600px) { .animated { animation: none; } }`
- Fallback graceful per client non supportati

**File Size**:
- Target: < 100KB HTML totale
- Comprimi immagini (WebP con fallback JPEG)
- Usa SVG inline per icone
- Base64 solo per loghi piccoli (<10KB)

### 3. Compatibilità Email Clients

**CSS Support Levels**:

| Feature | Gmail | Outlook 2016+ | Apple Mail | Mobile |
|---------|-------|---------------|------------|--------|
| `@keyframes` | ⚠️ Limitato | ❌ No | ✅ Sì | ✅ Sì |
| `position: absolute` | ✅ Sì | ❌ No | ✅ Sì | ✅ Sì |
| `flexbox` | ❌ No | ❌ No | ⚠️ Parziale | ⚠️ Parziale |
| `grid` | ❌ No | ❌ No | ❌ No | ❌ No |
| `background: linear-gradient` | ✅ Sì | ⚠️ Fallback | ✅ Sì | ✅ Sì |

**Golden Rules**:
1. **Tabelle per layout** (non div/flex/grid)
2. **CSS inline** quando possibile
3. **Width fissi** in px (non %, vw, rem)
4. **Fallback colors** per gradients
5. **Alt text** su tutte le immagini

### 4. Accessibilità

```html
<!-- ARIA Labels -->
<div role="presentation" aria-hidden="true"><!-- Decorazioni --></div>

<!-- Screen Reader Only Text -->
<span class="sr-only">Vai al contenuto principale</span>

<!-- Contrasto Colori -->
<!-- Verifica WCAG AA: ratio minimo 4.5:1 per testo normale -->

<!-- Semantic HTML -->
<table role="presentation"><!-- Layout table --></table>
<table><!-- Data table --></table>
```

### 5. Versionamento

Quando modifichi un layout esistente:

```bash
# Backup versione precedente
cp christmas.html christmas-2024.html

# Modifica
vim christmas.html

# Tag git
git add Themes/Sixteen/resources/mail-layouts/christmas.html
git commit -m "feat(email): update Christmas template 2025 with new animations"
git tag email-christmas-2025
```

---

## Testing

### Checklist Pre-Produzione

- [ ] **Outlook 2016-2021** (Word rendering)
- [ ] **Outlook.com** (web)
- [ ] **Gmail** (web, Android, iOS)
- [ ] **Apple Mail** (macOS, iOS)
- [ ] **Thunderbird**
- [ ] **Yahoo Mail**
- [ ] **Mobile clients** (viewport <600px)
- [ ] **Dark mode** (se supportato)
- [ ] **CSS disabilitato** (fallback)
- [ ] **Immagini bloccate** (alt text)
- [ ] **Screen reader** (NVDA/VoiceOver)

### Strumenti

**Online Testing**:
- **Litmus**: https://litmus.com/ ($$$ - industry standard)
- **Email on Acid**: https://www.emailonacid.com/ ($$$)
- **Mailtrap**: https://mailtrap.io/ (free tier)
- **PutsMail**: https://putsmail.com/ (free - basic)

**Local Testing**:

```bash
# 1. Crea MailTemplate di test
php artisan tinker
>>> $tpl = \Modules\Notify\Models\MailTemplate::create([
...     'mailable' => \Modules\Notify\Emails\SpatieEmail::class,
...     'slug' => 'test-christmas',
...     'subject' => 'Test Christmas Template',
...     'html_template' => '<h1>Test Content</h1><p>This is a test email.</p>',
... ]);

# 2. Invia email di test
>>> $user = \Modules\User\Models\User::first();
>>> $email = new \Modules\Notify\Emails\SpatieEmail($user, 'test-christmas');
>>> \Illuminate\Support\Facades\Mail::to('your-email@example.com')->send($email);

# 3. Controlla inbox e verifica rendering
```

**HTML Validation**:

```bash
# W3C Validator
curl -H "Content-Type: text/html; charset=utf-8" \
     --data-binary @christmas.html \
     https://validator.w3.org/nu/?out=json
```

### Test Matrix Example

| Client | Device | OS | Browser | Animations | Layout | Images |
|--------|--------|----|---------|-----------:|-------:|-------:|
| Gmail | Desktop | Win 11 | Chrome | ⚠️ Partial | ✅ OK | ✅ OK |
| Outlook 2021 | Desktop | Win 11 | - | ❌ No | ✅ OK | ✅ OK |
| Apple Mail | Desktop | macOS | - | ✅ OK | ✅ OK | ✅ OK |
| Gmail | Mobile | iOS 17 | App | ❌ Disabled | ✅ OK | ✅ OK |
| Gmail | Mobile | Android 14 | App | ❌ Disabled | ✅ OK | ✅ OK |

**Legend**:
- ✅ OK: Funziona perfettamente
- ⚠️ Partial: Funziona parzialmente
- ❌ No/Disabled: Non supportato o disabilitato

---

## Troubleshooting

### Problema: Animazioni non visibili

**Causa**: Client non supporta `@keyframes`

**Soluzione**:
- Normale per Outlook - layout degrada gracefully
- Assicurati che contenuto sia leggibile anche senza animazioni

### Problema: Layout rotto su mobile

**Causa**: Width fissi non responsive

**Soluzione**:
```css
@media screen and (max-width: 600px) {
    .email-container {
        width: 100% !important;
        max-width: 100% !important;
    }
}
```

### Problema: Immagini non caricate

**Causa**: Client blocca immagini esterne

**Soluzione**:
- Usa `alt` text descrittivi
- Fallback con `logo_header_base64` (embed base64)
- SVG inline per decorazioni

### Problema: Dark mode rompe colori

**Causa**: Client forza colori dark

**Soluzione**:
```css
@media (prefers-color-scheme: dark) {
    .email-content {
        background-color: #1F2937 !important;
        color: #F9FAFB !important;
    }
}
```

---

## Risorse

### Documentazione

- **Spatie Mail Templates**: https://github.com/spatie/laravel-database-mail-templates
- **Mustache Syntax**: https://mustache.github.io/mustache.5.html
- **Can I Email**: https://www.caniemail.com/ (CSS support checker)
- **Email Design Guide**: https://www.campaignmonitor.com/css/

### Template Libraries

- **MJML**: https://mjml.io/ (responsive email framework)
- **Foundation for Emails**: https://get.foundation/emails.html
- **Cerberus**: https://tedgoas.github.io/Cerberus/ (responsive patterns)

### Tools

- **Maizzle**: https://maizzle.com/ (Tailwind for email)
- **Parcel**: https://parcel-css.github.io/playground/ (CSS email optimizer)

---

## Esempi Pratici

### Caso d'Uso 1: Chiusura Natalizia

**Scenario**: Inviare email di massa ai clienti comunicando chiusura ufficio

**Implementazione**:

```php
// 1. Attiva layout natalizio
// config/notify.php
'seasonal_templates' => [
    'enabled' => true,
    'current_season' => 'christmas',
],

// 2. Crea MailTemplate
$template = MailTemplate::create([
    'mailable' => SpatieEmail::class,
    'slug' => 'closure-christmas-2025',
    'subject' => 'Chiusura Festività Natalizie - {{ company_name }}',
    'html_template' => '
        <p>Gentile {{ first_name }},</p>
        <p>ti informiamo che il nostro studio osserverà la chiusura natalizia
           come indicato nel box sopra.</p>
        <p>Per urgenze puoi contattarci via email.</p>
        <p>Buone Feste!</p>
    ',
]);

// 3. Invia a tutti i clienti
$clients = Client::whereNotNull('email')->get();

foreach ($clients as $client) {
    $email = new SpatieEmail($client, 'closure-christmas-2025');
    Mail::to($client->email)->send($email);
}
```

**Risultato**: Email con layout natalizio, neve animata, box "Chiusura 24 Dic - 7 Gen"

### Caso d'Uso 2: Newsletter Stagionale

**Scenario**: Newsletter con offerta Natale

```php
// ✅ CORRETTO: Usa SpatieEmail direttamente, layout stagionale automatico
// Creare MailTemplate per newsletter natalizia
$template = MailTemplate::create([
    'slug' => 'christmas-newsletter-2025',
    'subject' => '🎄 Offerta Speciale Natale - {{ discount_percentage }}% di sconto!',
    'html_template' => '
        <h2>Ciao {{ first_name }},</h2>
        <p>Approfitta della nostra <strong>offerta natalizia</strong>:</p>
        <ul>
            <li>{{ discount_percentage }}% di sconto su tutti i servizi</li>
            <li>Consulenza gratuita fino al 31 Dicembre</li>
            <li>Gift card da {{ gift_card_value }}€</li>
        </ul>
        <p style="text-align: center;">
            <a href="{{ offer_url }}" class="btn">Scopri l\'offerta</a>
        </p>
    ',
]);

// Invio con dati personalizzati - SpatieEmail gestisce automaticamente layout stagionale
$client = Client::find(1);
$email = new SpatieEmail($client, 'christmas-newsletter-2025');
$email->mergeData([
    'discount_percentage' => 20,
    'gift_card_value' => 50,
    'offer_url' => route('christmas-offer'),
]);

Mail::to($client->email)->send($email);
```

---

## Changelog

### 2025-12-19 - Christmas Template v1.0

**Aggiunto**:
- ✨ Template `christmas.html` con tema natalizio completo
- ❄️ 20 snowflakes animate con CSS `@keyframes`
- 🎄 Decorazioni natalizie (emoji, colori, gradients)
- 📋 Box evidenziato "Chiusura Festività"
- 📱 Responsive design con disabilitazione animazioni mobile
- ♿ Accessibilità WCAG 2.1 (ARIA, sr-only, alt text)
- 📚 Documentazione completa utilizzo

**Caratteristiche Tecniche**:
- CSS animations email-safe (no JavaScript)
- Fallback graceful per Outlook
- Dark mode support
- Performance ottimizzata (20 snowflakes limit)
- File size: ~18KB

**Testing**:
- ✅ Gmail (web, Android, iOS)
- ✅ Apple Mail (macOS, iOS)
- ✅ Outlook.com
- ⚠️ Outlook 2016-2021 (animazioni disabilitate, layout OK)

---

**Creato con ❄️ per le festività 2025-2026**

*"Email is not dead. Email is Christmas cards, and Christmas cards are not dead." - Anonymous Email Marketer*
