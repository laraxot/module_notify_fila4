<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> 36321fcb (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 3b4c9907 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 503981fd (.)
=======
>>>>>>> 36321fcb (.)
=======
>>>>>>> 8e5817bc (.)
Per contribuire alla documentazione, seguire le [Linee Guida](../../../docs/linee-guida-documentazione.md) e le [Regole dei Collegamenti](../../../docs/regole_collegamenti_documentazione.md).

## Collegamenti Completi
Per una lista completa di tutti i collegamenti tra i README.md, consultare il file [README_links.md](../../../docs/README_links.md). 
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
Per contribuire alla documentazione, seguire le [Linee Guida](../../../project_docs/linee-guida-documentazione.md) e le [Regole dei Collegamenti](../../../project_docs/regole_collegamenti_documentazione.md).
Per una lista completa di tutti i collegamenti tra i README.md, consultare il file [README_links.md](../../../docs/README_links.md). Per contribuire alla documentazione, seguire le [Linee Guida](../../../project_docs/linee-guida-documentazione.md) e le [Regole dei Collegamenti](../../../project_docs/regole_collegamenti_documentazione.md).
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
=======
Per contribuire alla documentazione, seguire le [Linee Guida](../../../project_docs/linee-guida-documentazione.md) e le [Regole dei Collegamenti](../../../project_docs/regole_collegamenti_documentazione.md).
>>>>>>> b19cd40 (.)
=======
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
=======
Per contribuire alla documentazione, seguire le [Linee Guida](../../../project_docs/linee-guida-documentazione.md) e le [Regole dei Collegamenti](../../../project_docs/regole_collegamenti_documentazione.md).
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> f963d2c0 (.)

## Collegamenti Completi
Per una lista completa di tutti i collegamenti tra i README.md, consultare il file [README_links.md](../../../project_docs/README_links.md). 
=======
>>>>>>> d284d65 (.)
=======
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 66453ace (.)
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> 36321fcb (.)
=======
>>>>>>> dceba960 (.)
Per contribuire alla documentazione, seguire le [Linee Guida](../../../project_docs/linee-guida-documentazione.md) e le [Regole dei Collegamenti](../../../project_docs/regole_collegamenti_documentazione.md).
Per una lista completa di tutti i collegamenti tra i README.md, consultare il file [README_links.md](../../../docs/README_links.md). Per contribuire alla documentazione, seguire le [Linee Guida](../../../project_docs/linee-guida-documentazione.md) e le [Regole dei Collegamenti](../../../project_docs/regole_collegamenti_documentazione.md).
=======
Per contribuire alla documentazione, seguire le [Linee Guida](../../../project_docs/linee-guida-documentazione.md) e le [Regole dei Collegamenti](../../../project_docs/regole_collegamenti_documentazione.md).
>>>>>>> b19cd40 (.)

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
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> ee18dd92 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
>>>>>>> 66453ace (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 2a97406c (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
>>>>>>> 4f042b88 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
>>>>>>> 36321fcb (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> dceba960 (.)
