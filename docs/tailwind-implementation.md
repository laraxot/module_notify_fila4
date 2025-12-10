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
# Implementazione Tailwind CSS nel Modulo Notify

## 1. Configurazione Base

### 1.1 Installazione
```bash

# Installazione dipendenze
npm install -D tailwindcss postcss autoprefixer

# Inizializzazione Tailwind
npx tailwindcss init -p
```

### 1.2 Configurazione Tailwind
```javascript
// tailwind.config.js
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./Modules/Notify/resources/**/*.blade.php",
  ],
  theme: {
    extend: {
      colors: {
        'notify': {
          primary: '#3B82F6',
          secondary: '#6B7280',
          success: '#10B981',
          danger: '#EF4444',
          warning: '#F59E0B',
          info: '#3B82F6',
        }
      },
      spacing: {
        '128': '32rem',
        '144': '36rem',
      },
      borderRadius: {
        '4xl': '2rem',
      }
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/typography'),
    require('@tailwindcss/aspect-ratio'),
  ],
}
```

## 2. Componenti Email

### 2.1 Layout Base
```php
// resources/views/vendor/notifications/email/base.blade.php
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
    </style>
</head>
<body class="bg-gray-100 font-sans">
    <div class="min-h-screen py-6 flex flex-col justify-center sm:py-12">
        <div class="relative py-3 sm:max-w-xl sm:mx-auto">
            <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>
```

### 2.2 Componenti Riutilizzabili
```php
// resources/views/components/email/button.blade.php
@props(['url', 'color' => 'primary'])

<a href="{{ $url }}" 
   class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-notify-{{ $color }} hover:bg-notify-{{ $color }}-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-notify-{{ $color }}-500">
    {{ $slot }}
</a>

// resources/views/components/email/header.blade.php
<header class="bg-white shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-gray-900">
            {{ $slot }}
        </h1>
    </div>
</header>

// resources/views/components/email/footer.blade.php
<footer class="bg-gray-50">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <p class="text-center text-base text-gray-500">
            {{ $slot }}
        </p>
    </div>
</footer>
```

## 3. Template Email

### 3.1 Template Benvenuto
```php
// resources/views/vendor/notifications/email/welcome.blade.php
@extends('notifications::email.base')

@section('content')
<div class="space-y-6">
    <x-email.header>
        Benvenuto in {{ config('app.name') }}
    </x-email.header>

    <div class="prose prose-sm text-gray-500">
        <p>Ciao {{ $user->name }},</p>
        <p>Grazie per esserti registrato. Siamo entusiasti di averti con noi!</p>
    </div>

    <div class="flex justify-center">
        <x-email.button :url="route('dashboard')">
            Vai alla Dashboard
        </x-email.button>
    </div>

    <x-email.footer>
        © {{ date('Y') }} {{ config('app.name') }}. Tutti i diritti riservati.
    </x-email.footer>
</div>
@endsection
```

### 3.2 Template Notifica Appuntamento
```php
// resources/views/vendor/notifications/email/appointment.blade.php
@extends('notifications::email.base')

@section('content')
<div class="space-y-6">
    <x-email.header>
        Conferma Appuntamento
    </x-email.header>

    <div class="bg-notify-info-50 border-l-4 border-notify-info p-4">
        <div class="flex">
            <div class="flex-shrink-0">
                <svg class="h-5 w-5 text-notify-info" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                </svg>
            </div>
            <div class="ml-3">
                <p class="text-sm text-notify-info-700">
                    Il tuo appuntamento è stato confermato per il {{ $appointment->date->format('d/m/Y H:i') }}
                </p>
            </div>
        </div>
    </div>

    <div class="prose prose-sm text-gray-500">
        <p>Gentile {{ $appointment->user->name }},</p>
        <p>Ti confermiamo il tuo appuntamento con il dott. {{ $appointment->doctor->name }}.</p>
    </div>

    <div class="flex justify-center space-x-4">
        <x-email.button :url="route('appointments.show', $appointment)" color="primary">
            Dettagli Appuntamento
        </x-email.button>
        <x-email.button :url="route('appointments.cancel', $appointment)" color="danger">
            Annulla Appuntamento
        </x-email.button>
    </div>

    <x-email.footer>
        © {{ date('Y') }} {{ config('app.name') }}. Tutti i diritti riservati.
    </x-email.footer>
</div>
@endsection
```

## 4. Utility Classes

### 4.1 Spacing e Layout
```html
<!-- Margini e Padding -->
<div class="m-4 p-4"> <!-- Margine e padding di 1rem -->
<div class="mx-auto my-4"> <!-- Margine orizzontale auto, verticale 1rem -->
<div class="space-y-4"> <!-- Spazio verticale tra elementi figli -->

<!-- Flexbox -->
<div class="flex items-center justify-between">
<div class="flex-1"> <!-- Elemento che occupa spazio disponibile -->
<div class="flex-shrink-0"> <!-- Elemento che non si restringe -->

<!-- Grid -->
<div class="grid grid-cols-3 gap-4">
<div class="col-span-2"> <!-- Occupa 2 colonne -->
```

### 4.2 Typography
```html
<!-- Dimensioni testo -->
<h1 class="text-4xl">Titolo Grande</h1>
<p class="text-base">Testo normale</p>
<span class="text-sm">Testo piccolo</span>

<!-- Peso font -->
<p class="font-bold">Testo in grassetto</p>
<p class="font-medium">Testo medio</p>
<p class="font-normal">Testo normale</p>

<!-- Colori testo -->
<p class="text-gray-900">Testo scuro</p>
<p class="text-gray-500">Testo grigio</p>
<p class="text-notify-primary">Testo primario</p>
```

### 4.3 Responsive Design
```html
<!-- Breakpoints -->
<div class="w-full md:w-1/2 lg:w-1/3">
<div class="hidden md:block"> <!-- Visibile solo da md in su -->
<div class="flex flex-col md:flex-row"> <!-- Colonna su mobile, riga da md in su -->

<!-- Container -->
<div class="container mx-auto px-4 sm:px-6 lg:px-8">
```

## 5. Best Practices

### 5.1 Performance
- Utilizzare `@apply` per classi ripetute
- Minimizzare l'uso di classi dinamiche
- Implementare il purge CSS in produzione

```php
// resources/css/app.css
@layer components {
    .btn-primary {
        @apply inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-notify-primary hover:bg-notify-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-notify-primary-500;
    }
}
```

### 5.2 Accessibilità
```html
<!-- Focus states -->
<button class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-notify-primary-500">
    Click me
</button>

<!-- Screen reader text -->
<span class="sr-only">Descrizione per screen reader</span>

<!-- ARIA labels -->
<button aria-label="Chiudi" class="...">
    <svg>...</svg>
</button>
```

### 5.3 Dark Mode
```html
<!-- Supporto dark mode -->
<div class="bg-white dark:bg-gray-800">
    <h1 class="text-gray-900 dark:text-white">Titolo</h1>
    <p class="text-gray-500 dark:text-gray-400">Testo</p>
</div>
```

## 6. Testing

### 6.1 Visual Testing
```php
// tests/Feature/EmailTemplateTest.php
class EmailTemplateTest extends TestCase
{
    public function test_welcome_email_renders_correctly()
    {
        $user = User::factory()->create();
        
        $view = view('notifications::email.welcome', [
            'user' => $user
        ])->render();
        
        $this->assertStringContainsString('Benvenuto', $view);
        $this->assertStringContainsString($user->name, $view);
        $this->assertStringContainsString('bg-white', $view);
    }
}
```

### 6.2 Responsive Testing
```php
// tests/Feature/EmailResponsiveTest.php
class EmailResponsiveTest extends TestCase
{
    public function test_email_is_responsive()
    {
        $view = view('notifications::email.appointment', [
            'appointment' => Appointment::factory()->create()
        ])->render();
        
        $this->assertStringContainsString('sm:max-w-xl', $view);
        $this->assertStringContainsString('md:flex-row', $view);
    }
}
```

## Note
- Tutti i collegamenti sono relativi
- La documentazione è mantenuta in italiano
- I collegamenti sono bidirezionali quando appropriato
- Ogni sezione ha il suo README.md specifico

## Contribuire
Per contribuire alla documentazione, seguire le [Linee Guida](../../../docs/linee-guida-documentazione.md) e le [Regole dei Collegamenti](../../../docs/regole_collegamenti_documentazione.md).

## Collegamenti Completi
<<<<<<< HEAD
Per una lista completa di tutti i collegamenti tra i README.md, consultare il file [README_links.md](../../../docs/README_links.md). 
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
=======
>>>>>>> 31f5d28f (.)
=======
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
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 3d462363 (rebase 210)
=======
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
Per una lista completa di tutti i collegamenti tra i README.md, consultare il file [README_links.md](../../../docs/README_links.md). Per contribuire alla documentazione, seguire le [Linee Guida](../../../project_docs/linee-guida-documentazione.md) e le [Regole dei Collegamenti](../../../project_docs/regole_collegamenti_documentazione.md).

## Collegamenti Completi
Per una lista completa di tutti i collegamenti tra i README.md, consultare il file [README_links.md](../../../project_docs/README_links.md). 
>>>>>>> bf479cc (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> febe79e3 (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 9721a5b2 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 1442e291 (rebase 210)
Per una lista completa di tutti i collegamenti tra i README.md, consultare il file [README_links.md](../../../docs/README_links.md). 
Per contribuire alla documentazione, seguire le [Linee Guida](../../../project_docs/linee-guida-documentazione.md) e le [Regole dei Collegamenti](../../../project_docs/regole_collegamenti_documentazione.md).
>>>>>>> fbed41ac (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b855 (.)
=======
>>>>>>> 1487fe812 (.)
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
Per una lista completa di tutti i collegamenti tra i README.md, consultare il file [README_links.md](../../../docs/README_links.md). Per contribuire alla documentazione, seguire le [Linee Guida](../../../project_docs/linee-guida-documentazione.md) e le [Regole dei Collegamenti](../../../project_docs/regole_collegamenti_documentazione.md).

## Collegamenti Completi
Per una lista completa di tutti i collegamenti tra i README.md, consultare il file [README_links.md](../../../project_docs/README_links.md). 
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 1487fe812 (.)
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
>>>>>>> a404ea71 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> febe79e3 (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 9721a5b2 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 1442e291 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> fcaebc79 (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 9d3810d0 (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
=======
<<<<<<< HEAD
>>>>>>> d38aa9d2 (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 9e7ba5b6 (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
>>>>>>> 1487fe812 (.)
=======
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
<<<<<<< HEAD
>>>>>>> c4282a934 (.)
=======
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
<<<<<<< HEAD
>>>>>>> 4bec160e6 (.)
=======
=======
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
<<<<<<< HEAD
>>>>>>> 01af324fe (.)
=======
=======
>>>>>>> ca10d6ad (.)
>>>>>>> 8c6d84fe6 (.)
Per una lista completa di tutti i collegamenti tra i README.md, consultare il file [README_links.md](../../../docs/README_links.md). 
Per contribuire alla documentazione, seguire le [Linee Guida](../../../project_docs/linee-guida-documentazione.md) e le [Regole dei Collegamenti](../../../project_docs/regole_collegamenti_documentazione.md).
>>>>>>> fbed41ac (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
=======
=======
>>>>>>> 31f5d28f (.)
>>>>>>> e2f1a4045 (.)
Per una lista completa di tutti i collegamenti tra i README.md, consultare il file [README_links.md](../../../docs/README_links.md). Per contribuire alla documentazione, seguire le [Linee Guida](../../../project_docs/linee-guida-documentazione.md) e le [Regole dei Collegamenti](../../../project_docs/regole_collegamenti_documentazione.md).

## Collegamenti Completi
Per una lista completa di tutti i collegamenti tra i README.md, consultare il file [README_links.md](../../../project_docs/README_links.md). 
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
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
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> febe79e3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> c7a4727b (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 9721a5b2 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 1442e291 (rebase 210)
<<<<<<< HEAD
=======
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> fcaebc79 (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 9d3810d0 (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> d38aa9d2 (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 9e7ba5b6 (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> 12a7e2462 (.)
=======
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
>>>>>>> e2f1a4045 (.)
=======
>>>>>>> 138485550 (.)
=======
=======
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
>>>>>>> 53eef8d8d (.)
=======
>>>>>>> 753ea7aca (.)
=======
=======
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
>>>>>>> 13aa25113 (.)
=======
>>>>>>> fdad57c30 (.)
=======
=======
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
>>>>>>> 7aae79847 (.)
=======
>>>>>>> 275b7ad99 (.)
=======
=======
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
>>>>>>> 47bbf2b1c (.)
=======
>>>>>>> b215d516b (.)
=======
=======
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
>>>>>>> 74eb2e964 (.)
=======
>>>>>>> f957fb24b (.)
Per una lista completa di tutti i collegamenti tra i README.md, consultare il file [README_links.md](../../../docs/README_links.md). 
=======
>>>>>>> 5fd545e4 (.)
=======
Per una lista completa di tutti i collegamenti tra i README.md, consultare il file [README_links.md](../../../docs/README_links.md). 
>>>>>>> 2a97406c (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
Per una lista completa di tutti i collegamenti tra i README.md, consultare il file [README_links.md](../../../docs/README_links.md). 
>>>>>>> 4f042b88 (.)
=======
Per una lista completa di tutti i collegamenti tra i README.md, consultare il file [README_links.md](../../../docs/README_links.md). 
>>>>>>> 712617d3 (.)
=======
Per una lista completa di tutti i collegamenti tra i README.md, consultare il file [README_links.md](../../../docs/README_links.md). 
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
Per una lista completa di tutti i collegamenti tra i README.md, consultare il file [README_links.md](../../../docs/README_links.md). 
>>>>>>> 4fc21b78 (rebase 210)
=======
Per una lista completa di tutti i collegamenti tra i README.md, consultare il file [README_links.md](../../../docs/README_links.md). 
>>>>>>> 9c45d9bd (rebase 210)
=======
Per una lista completa di tutti i collegamenti tra i README.md, consultare il file [README_links.md](../../../docs/README_links.md). 
>>>>>>> eb62d6cf (rebase 210)
=======
Per una lista completa di tutti i collegamenti tra i README.md, consultare il file [README_links.md](../../../docs/README_links.md). 
>>>>>>> 8c8937e7 (rebase 210)
=======
Per una lista completa di tutti i collegamenti tra i README.md, consultare il file [README_links.md](../../../docs/README_links.md). 
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> fbed41ac (.)
=======
Per una lista completa di tutti i collegamenti tra i README.md, consultare il file [README_links.md](../../../docs/README_links.md). 
>>>>>>> c8b1c8bf (.)
=======
Per una lista completa di tutti i collegamenti tra i README.md, consultare il file [README_links.md](../../../docs/README_links.md). 
>>>>>>> 9cf0dc90 (.)
=======
Per una lista completa di tutti i collegamenti tra i README.md, consultare il file [README_links.md](../../../docs/README_links.md). 
>>>>>>> 75179b85 (.)
=======
Per una lista completa di tutti i collegamenti tra i README.md, consultare il file [README_links.md](../../../docs/README_links.md). 
>>>>>>> f963d2c0 (.)
=======
Per una lista completa di tutti i collegamenti tra i README.md, consultare il file [README_links.md](../../../docs/README_links.md). 
>>>>>>> ee18dd92 (.)
=======
Per una lista completa di tutti i collegamenti tra i README.md, consultare il file [README_links.md](../../../docs/README_links.md). 
>>>>>>> 66453ace (.)
=======
>>>>>>> 5fd545e4 (.)
=======
Per una lista completa di tutti i collegamenti tra i README.md, consultare il file [README_links.md](../../../docs/README_links.md). 
>>>>>>> 2a97406c (.)
=======
Per una lista completa di tutti i collegamenti tra i README.md, consultare il file [README_links.md](../../../docs/README_links.md). 
>>>>>>> 4f042b88 (.)
=======
Per una lista completa di tutti i collegamenti tra i README.md, consultare il file [README_links.md](../../../docs/README_links.md). 
>>>>>>> 712617d3 (.)
<<<<<<< HEAD
=======
Per una lista completa di tutti i collegamenti tra i README.md, consultare il file [README_links.md](../../../docs/README_links.md). 
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
Per una lista completa di tutti i collegamenti tra i README.md, consultare il file [README_links.md](../../../docs/README_links.md). 
>>>>>>> 4fc21b78 (rebase 210)
=======
Per una lista completa di tutti i collegamenti tra i README.md, consultare il file [README_links.md](../../../docs/README_links.md). 
>>>>>>> 9c45d9bd (rebase 210)
=======
Per una lista completa di tutti i collegamenti tra i README.md, consultare il file [README_links.md](../../../docs/README_links.md). 
>>>>>>> eb62d6cf (rebase 210)
=======
Per una lista completa di tutti i collegamenti tra i README.md, consultare il file [README_links.md](../../../docs/README_links.md). 
>>>>>>> 8c8937e7 (rebase 210)
=======
Per una lista completa di tutti i collegamenti tra i README.md, consultare il file [README_links.md](../../../docs/README_links.md). 
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> fbed41ac (.)
=======
Per una lista completa di tutti i collegamenti tra i README.md, consultare il file [README_links.md](../../../docs/README_links.md). 
>>>>>>> c8b1c8bf (.)
=======
Per una lista completa di tutti i collegamenti tra i README.md, consultare il file [README_links.md](../../../docs/README_links.md). 
>>>>>>> 9cf0dc90 (.)
=======
Per una lista completa di tutti i collegamenti tra i README.md, consultare il file [README_links.md](../../../docs/README_links.md). 
>>>>>>> 75179b85 (.)
=======
Per una lista completa di tutti i collegamenti tra i README.md, consultare il file [README_links.md](../../../docs/README_links.md). 
>>>>>>> f963d2c0 (.)
=======
Per una lista completa di tutti i collegamenti tra i README.md, consultare il file [README_links.md](../../../docs/README_links.md). 
>>>>>>> 75179b855 (.)
=======
Per una lista completa di tutti i collegamenti tra i README.md, consultare il file [README_links.md](../../../docs/README_links.md). 
>>>>>>> f963d2c0 (.)
=======
Per una lista completa di tutti i collegamenti tra i README.md, consultare il file [README_links.md](../../../docs/README_links.md). 
>>>>>>> ee18dd92 (.)
=======
Per una lista completa di tutti i collegamenti tra i README.md, consultare il file [README_links.md](../../../docs/README_links.md). 
>>>>>>> 66453ace (.)
=======
>>>>>>> 5fd545e4 (.)
=======
Per una lista completa di tutti i collegamenti tra i README.md, consultare il file [README_links.md](../../../docs/README_links.md). 
>>>>>>> 2a97406c (.)
=======
Per una lista completa di tutti i collegamenti tra i README.md, consultare il file [README_links.md](../../../docs/README_links.md). 
>>>>>>> 4f042b88 (.)
=======
Per una lista completa di tutti i collegamenti tra i README.md, consultare il file [README_links.md](../../../docs/README_links.md). 
>>>>>>> 712617d3 (.)
>>>>>>> laraxot/develop
=======
>>>>>>> 301ad8b44 (.)
=======
>>>>>>> 998e6866b (.)
=======
=======
Per una lista completa di tutti i collegamenti tra i README.md, consultare il file [README_links.md](../../../docs/README_links.md). 
>>>>>>> 4f042b88 (.)
>>>>>>> 36136dcfa (.)
=======
>>>>>>> 731b801a8 (.)
