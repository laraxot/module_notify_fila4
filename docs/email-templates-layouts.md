<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 4f3927d7 (.)
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
# Template Email e Layout - Modulo Notify

## Scopo
Documentazione dei template email utilizzati dal modulo Notify, con collegamenti ai layout del tema One e best practices DRY/KISS.

## Integrazione con Tema One

### Layout Disponibili
Il modulo Notify utilizza i layout email definiti nel tema One:

- **base.html**: Layout generico con variabili Mustache
- **base-it.html**: Layout localizzato italiano
- **basev1-it.html**: Layout migliorato secondo principi DRY/KISS ✨

### Classe SpatieEmail
Il mailable `Modules/Notify/Emails/SpatieEmail.php` gestisce:
- Caricamento dinamico dei layout dal tema attivo
- Popolamento variabili: `site_url`, `logo_header`, `logo_header_base64`, `body`, `subject`
- Integrazione con sistema di template Spatie

## Variabili Template

### Variabili Standard
```mustache
{{ subject }}           # Oggetto email
{{ preheader }}         # Testo anteprima client (nascosto)
{{{ body }}}           # Contenuto HTML principale
{{ site_url }}         # URL base del sito
{{ logo_header }}      # URL logo (preferito)
{{ logo_header_base64 }} # Logo base64 (fallback)
```

### Variabili Personalizzate
Il modulo Notify può estendere le variabili disponibili tramite:
- Configurazione mail template
- Dati dinamici da modelli
- Variabili di contesto specifiche

## Best Practice DRY/KISS

### Principi Applicati
- **DRY**: Template riutilizzabili tra diverse notifiche
- **KISS**: Struttura semplice e compatibile con tutti i client email
- **Modularità**: Separazione tra layout (tema) e contenuto (modulo)

### Regole di Compatibilità
- Struttura tabelle per massima compatibilità
- CSS inline essenziale + reset nel `<style>`
- Supporto responsive ottimizzato
- Dark mode con fallback sicuri

## Miglioramenti basev1-it.html

### Novità Implementate
- **Semantic HTML**: `role="presentation"` per tabelle layout
- **Accessibilità**: `lang="it"`, alt text significativi
- **Performance**: CSS centralizzato (DRY), meno duplicazione
- **Responsive**: Media queries ottimizzate
- **Dark Mode**: Supporto migliorato con variabili CSS

### Struttura Ottimizzata
```html
<!-- Preheader per migliorare open rate -->
<div style="display:none;">{{ preheader }}</div>

<!-- Container principale -->
<table class="email-wrapper">
  <tr>
    <td class="email-container">
      <!-- Header, Body, Footer -->
    </td>
  </tr>
</table>
```

## Utilizzo nel Modulo Notify

### Configurazione Layout
```php
// In SpatieEmail.php
protected function getHtmlLayout(): string
{
    $theme = config('app.theme', 'One');
    $layout = base_path("Themes/{$theme}/resources/mail-layouts/basev1-it.html");
    
    return file_get_contents($layout);
}
```

### Template Email Personalizzati
```php
// Creazione template con layout specifico
MailTemplate::create([
    'slug' => 'appointment-confirmation',
    'subject' => 'Conferma Appuntamento - {{ patient_name }}',
    'body' => view('notify::emails.appointment-confirmation', $data)->render(),
    'layout' => 'basev1-it', // Specifica layout migliorato
]);
```

## Collegamenti Bidirezionali

### Documentazione Correlata
- **Tema One**: `/Themes/One/docs/email_templates.md`
- **Modulo Notify**: Questo documento
- **SpatieEmail**: `docs/spatie-email/`
- **Mail Templates**: `docs/mail-templates/`

### Flusso di Lavoro
1. **Layout** definiti nel tema One
2. **Contenuto** gestito dal modulo Notify
3. **Variabili** popolate da SpatieEmail
4. **Rendering** finale tramite Mustache

## Roadmap

### Prossimi Miglioramenti
- [ ] Supporto template multilingua automatico
- [ ] Editor WYSIWYG integrato con preview layout
- [ ] Sistema di versioning template
- [ ] Analytics apertura/click integrati

### Refactor Pianificati
- [ ] Unificazione naming convention (kebab-case)
- [ ] Consolidamento documentazione duplicata
- [ ] Ottimizzazione performance rendering

## Note Tecniche

### Compatibilità Client Email
- **Gmail**: Supporto completo con fallback SVG
- **Outlook**: Struttura tabelle ottimizzata
- **Apple Mail**: Dark mode nativo
- **Mobile**: Responsive design avanzato

### Performance
- CSS centralizzato riduce dimensioni email
- Preheader migliora deliverability
- Immagini ottimizzate con fallback

---

**Ultimo aggiornamento**: 2025-08-08  
**Versione**: 1.0  
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
=======
**Compatibilità**: Laravel 12.x, Filament 3.x, Spatie Mail Templates
>>>>>>> 75179b85 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
>>>>>>> f963d2c0 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
=======
**Compatibilità**: Laravel 12.x, Filament 3.x, Spatie Mail Templates
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
>>>>>>> 3f537838 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
=======
**Compatibilità**: Laravel 12.x, Filament 3.x, Spatie Mail Templates
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
>>>>>>> a404ea71 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 3.x, Spatie Mail Templates
>>>>>>> 75179b85 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
>>>>>>> f963d2c0 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
=======
**Compatibilità**: Laravel 12.x, Filament 3.x, Spatie Mail Templates
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
>>>>>>> 3f537838 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
=======
**Compatibilità**: Laravel 12.x, Filament 3.x, Spatie Mail Templates
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
>>>>>>> a404ea71 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 3.x, Spatie Mail Templates
>>>>>>> 75179b85 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
>>>>>>> f963d2c0 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
=======
**Compatibilità**: Laravel 12.x, Filament 3.x, Spatie Mail Templates
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
>>>>>>> 3f537838 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
=======
**Compatibilità**: Laravel 12.x, Filament 3.x, Spatie Mail Templates
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
>>>>>>> a404ea71 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 3.x, Spatie Mail Templates
>>>>>>> 75179b85 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
>>>>>>> f963d2c0 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
=======
**Compatibilità**: Laravel 12.x, Filament 3.x, Spatie Mail Templates
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
>>>>>>> 3f537838 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
=======
**Compatibilità**: Laravel 12.x, Filament 3.x, Spatie Mail Templates
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
>>>>>>> a404ea71 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
>>>>>>> ee18dd92 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
=======
**Compatibilità**: Laravel 12.x, Filament 3.x, Spatie Mail Templates
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
>>>>>>> 2941b0bd (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
=======
**Compatibilità**: Laravel 12.x, Filament 3.x, Spatie Mail Templates
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
>>>>>>> ca10d6ad (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
>>>>>>> 66453ace (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
=======
**Compatibilità**: Laravel 12.x, Filament 3.x, Spatie Mail Templates
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
>>>>>>> 4c323e61 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
=======
**Compatibilità**: Laravel 12.x, Filament 3.x, Spatie Mail Templates
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
>>>>>>> febe79e3 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
>>>>>>> 2a97406c (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
=======
**Compatibilità**: Laravel 12.x, Filament 3.x, Spatie Mail Templates
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
>>>>>>> 98d837b9 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
=======
**Compatibilità**: Laravel 12.x, Filament 3.x, Spatie Mail Templates
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
>>>>>>> a29a4728 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
>>>>>>> 4f042b88 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
=======
**Compatibilità**: Laravel 12.x, Filament 3.x, Spatie Mail Templates
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
>>>>>>> 4e4a7796 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
=======
**Compatibilità**: Laravel 12.x, Filament 3.x, Spatie Mail Templates
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
>>>>>>> c7a4727b (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
=======
**Compatibilità**: Laravel 12.x, Filament 3.x, Spatie Mail Templates
>>>>>>> d284d65 (.)
>>>>>>> dceba960 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
>>>>>>> 9d84f153 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
=======
**Compatibilità**: Laravel 12.x, Filament 3.x, Spatie Mail Templates
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
>>>>>>> 9721a5b2 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
>>>>>>> 712617d3 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
=======
**Compatibilità**: Laravel 12.x, Filament 3.x, Spatie Mail Templates
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
>>>>>>> 116df547 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
=======
**Compatibilità**: Laravel 12.x, Filament 3.x, Spatie Mail Templates
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
>>>>>>> 1442e291 (rebase 210)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
>>>>>>> fdb24863 (rebase 210)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
=======
**Compatibilità**: Laravel 12.x, Filament 3.x, Spatie Mail Templates
>>>>>>> d284d65 (.)
>>>>>>> 229a065a (rebase 210)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
>>>>>>> 84082535 (rebase 210)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
=======
**Compatibilità**: Laravel 12.x, Filament 3.x, Spatie Mail Templates
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
>>>>>>> fcaebc79 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
**Compatibilità**: Laravel 12.x, Filament 3.x, Spatie Mail Templates
>>>>>>> 4fc21b78 (rebase 210)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
>>>>>>> 9c45d9bd (rebase 210)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
=======
**Compatibilità**: Laravel 12.x, Filament 3.x, Spatie Mail Templates
>>>>>>> d284d65 (.)
>>>>>>> 9f8e680a (rebase 210)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
>>>>>>> 7ffa94fc (rebase 210)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
=======
**Compatibilità**: Laravel 12.x, Filament 3.x, Spatie Mail Templates
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
>>>>>>> 9d3810d0 (rebase 210)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
>>>>>>> eb62d6cf (rebase 210)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
=======
**Compatibilità**: Laravel 12.x, Filament 3.x, Spatie Mail Templates
>>>>>>> d284d65 (.)
>>>>>>> 5aedc39c (rebase 210)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
>>>>>>> 82e5ee2d (rebase 210)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
=======
**Compatibilità**: Laravel 12.x, Filament 3.x, Spatie Mail Templates
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
>>>>>>> d38aa9d2 (rebase 210)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
>>>>>>> 8c8937e7 (rebase 210)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
=======
**Compatibilità**: Laravel 12.x, Filament 3.x, Spatie Mail Templates
>>>>>>> d284d65 (.)
>>>>>>> 22baa66d (rebase 210)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
>>>>>>> 5b50927d (rebase 210)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
=======
**Compatibilità**: Laravel 12.x, Filament 3.x, Spatie Mail Templates
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
>>>>>>> 9e7ba5b6 (rebase 210)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
>>>>>>> 36ac4fc1 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
=======
**Compatibilità**: Laravel 12.x, Filament 3.x, Spatie Mail Templates
>>>>>>> d284d65 (.)
>>>>>>> 2effe245 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
>>>>>>> d45a0226 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
=======
**Compatibilità**: Laravel 12.x, Filament 3.x, Spatie Mail Templates
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
>>>>>>> fbed41ac (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
>>>>>>> fd1fcc4c (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
=======
**Compatibilità**: Laravel 12.x, Filament 3.x, Spatie Mail Templates
>>>>>>> d284d65 (.)
>>>>>>> e790eb33 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
>>>>>>> cb5f23b0 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
=======
**Compatibilità**: Laravel 12.x, Filament 3.x, Spatie Mail Templates
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
>>>>>>> f9ec4f86 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
>>>>>>> 4f3927d7 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
=======
**Compatibilità**: Laravel 12.x, Filament 3.x, Spatie Mail Templates
>>>>>>> d284d65 (.)
>>>>>>> 3ee54c5d (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
>>>>>>> 4b544042 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
=======
**Compatibilità**: Laravel 12.x, Filament 3.x, Spatie Mail Templates
>>>>>>> bf479cc (.)
>>>>>>> 0ebb7b01 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
>>>>>>> cccb594f (.)
=======
**Compatibilità**: Laravel 12.x, Filament 3.x, Spatie Mail Templates
>>>>>>> c8b1c8bf (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
>>>>>>> 9cf0dc90 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 3.x, Spatie Mail Templates
>>>>>>> 75179b85 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
>>>>>>> f963d2c0 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
=======
**Compatibilità**: Laravel 12.x, Filament 3.x, Spatie Mail Templates
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
>>>>>>> 3f537838 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
=======
**Compatibilità**: Laravel 12.x, Filament 3.x, Spatie Mail Templates
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
>>>>>>> a404ea71 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
>>>>>>> ee18dd92 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
=======
**Compatibilità**: Laravel 12.x, Filament 3.x, Spatie Mail Templates
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
>>>>>>> 2941b0bd (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
=======
**Compatibilità**: Laravel 12.x, Filament 3.x, Spatie Mail Templates
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
>>>>>>> ca10d6ad (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
>>>>>>> 66453ace (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
=======
**Compatibilità**: Laravel 12.x, Filament 3.x, Spatie Mail Templates
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
>>>>>>> 4c323e61 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
=======
**Compatibilità**: Laravel 12.x, Filament 3.x, Spatie Mail Templates
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
>>>>>>> febe79e3 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
>>>>>>> 2a97406c (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
=======
**Compatibilità**: Laravel 12.x, Filament 3.x, Spatie Mail Templates
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
>>>>>>> 98d837b9 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
=======
**Compatibilità**: Laravel 12.x, Filament 3.x, Spatie Mail Templates
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
>>>>>>> a29a4728 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
>>>>>>> 4f042b88 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
=======
**Compatibilità**: Laravel 12.x, Filament 3.x, Spatie Mail Templates
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
>>>>>>> 4e4a7796 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
=======
**Compatibilità**: Laravel 12.x, Filament 3.x, Spatie Mail Templates
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
>>>>>>> c7a4727b (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
=======
**Compatibilità**: Laravel 12.x, Filament 3.x, Spatie Mail Templates
>>>>>>> d284d65 (.)
>>>>>>> dceba960 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
>>>>>>> 9d84f153 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
=======
**Compatibilità**: Laravel 12.x, Filament 3.x, Spatie Mail Templates
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
>>>>>>> 9721a5b2 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
>>>>>>> 712617d3 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
=======
**Compatibilità**: Laravel 12.x, Filament 3.x, Spatie Mail Templates
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
>>>>>>> 116df547 (.)
=======
**Compatibilità**: Laravel 12.x, Filament 4.x, Spatie Mail Templates
=======
**Compatibilità**: Laravel 12.x, Filament 3.x, Spatie Mail Templates
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
