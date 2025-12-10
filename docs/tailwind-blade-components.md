<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 909e45af (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> 36321fcb (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 712617d3 (.)
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
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> 36321fcb (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 712617d3 (.)
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
>>>>>>> 75179b855 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> 2a97406c (.)
# Esempi Pratici: Blade Components Tailwind per <nome progetto>

Questa guida mostra come creare Blade component riutilizzabili, accessibili e responsive usando pattern Tailwind CSS, secondo le best practice Webcrunch e le regole <nome progetto>.

---

## 1. Button Component

**resources/views/components/button.blade.php**
```blade
@props([
    'type' => 'button',
    'color' => 'primary',
    'size' => 'md',
])
<button
    type="{{ $type }}"
    {{ $attributes->merge([
        'class' => "inline-flex items-center justify-center font-medium rounded transition focus:outline-none focus:ring-2 focus:ring-offset-2
            " . ($color === 'primary' ? 'bg-blue-600 text-white hover:bg-blue-700' : 'bg-gray-200 text-gray-900 hover:bg-gray-300') .
            " " . ($size === 'sm' ? 'px-3 py-1.5 text-sm' : ($size === 'lg' ? 'px-6 py-3 text-lg' : 'px-4 py-2 text-base'))
    ]) }}
>
    {{ $slot }}
</button>
```

**Esempio di utilizzo:**
```blade
<x-button color="primary" size="lg">Azione</x-button>
```

---

## 2. Card Component

**resources/views/components/card.blade.php**
```blade
@props([
    'title' => null,
    'footer' => null,
])
<div class="bg-white shadow rounded-lg p-6">
    @if($title)
        <div class="text-lg font-semibold mb-2">{{ $title }}</div>
    @endif
    <div>{{ $slot }}</div>
    @if($footer)
        <div class="mt-4 border-t pt-2 text-sm text-gray-500">{{ $footer }}</div>
    @endif
</div>
```

**Esempio di utilizzo:**
```blade
<x-card title="Titolo Card" footer="Footer opzionale">
    Contenuto della card...
</x-card>
```

---

## 3. Navbar Responsive

**resources/views/components/navbar.blade.php**
```blade
<nav class="bg-white border-b">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between h-16">
        <div class="flex items-center">
            <a href="/" class="text-xl font-bold text-blue-700"><nome progetto></a>
        </div>
        <div class="hidden md:flex space-x-4">
            {{ $slot }}
        </div>
        <div class="md:hidden">
            <!-- Mobile menu button -->
            <button type="button" class="text-gray-500 hover:text-blue-700 focus:outline-none">
                <!-- Icona hamburger -->
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </div>
</nav>
```

**Esempio di utilizzo:**
```blade
<x-navbar>
    <a href="#" class="text-gray-700 hover:text-blue-700">Home</a>
    <a href="#" class="text-gray-700 hover:text-blue-700">Notifiche</a>
    <a href="#" class="text-gray-700 hover:text-blue-700">Impostazioni</a>
</x-navbar>
```

---

## 4. Alert Component

**resources/views/components/alert.blade.php**
```blade
@props([
    'type' => 'info',
])
@php
    $base = 'rounded p-4 mb-4';
    $types = [
        'info' => 'bg-blue-50 text-blue-800 border-blue-200',
        'success' => 'bg-green-50 text-green-800 border-green-200',
        'warning' => 'bg-yellow-50 text-yellow-800 border-yellow-200',
        'error' => 'bg-red-50 text-red-800 border-red-200',
    ];
@endphp
<div class="{{ $base . ' ' . ($types[$type] ?? $types['info']) }} border">
    {{ $slot }}
</div>
```

**Esempio di utilizzo:**
```blade
<x-alert type="success">Operazione completata con successo!</x-alert>
```

---

## 5. Card con Glow Effect (JS + Tailwind)

**resources/views/components/glow-card.blade.php**
```blade
<div class="relative group overflow-hidden rounded-lg shadow-lg bg-white p-6">
    <div class="absolute inset-0 pointer-events-none transition-opacity duration-300 opacity-0 group-hover:opacity-100" style="background: radial-gradient(circle at var(--x,50%) var(--y,50%), rgba(59,130,246,0.15), transparent 70%);"></div>
    <div class="relative z-10">
        {{ $slot }}
    </div>
</div>
<script>
document.querySelectorAll('.group').forEach(card => {
    card.addEventListener('mousemove', e => {
        const rect = card.getBoundingClientRect();
        card.style.setProperty('--x', `${((e.clientX - rect.left) / rect.width * 100).toFixed(2)}%`);
        card.style.setProperty('--y', `${((e.clientY - rect.top) / rect.height * 100).toFixed(2)}%`);
    });
});
</script>
```

**Esempio di utilizzo:**
```blade
<x-glow-card>
    <div class="text-lg font-bold">Glow Effect Card</div>
    <p>Card interattiva con effetto glow al passaggio del mouse.</p>
</x-glow-card>
```

---

## Best Practice
- Tutti i componenti sono accessibili, responsive e personalizzabili.
- Usare sempre slot e attributi per espandibilità.
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> 31f5d28f (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> 31f5d28f (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> 31f5d28f (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> 31f5d28f (.)
=======
>>>>>>> ee18dd92 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 66453ace (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> 23cbbaf5 (.)
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
=======
>>>>>>> 5fd545e4 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> 2a97406c (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
=======
>>>>>>> fbed41ac (.)
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> 909e45af (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> 4f042b88 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
=======
>>>>>>> fbed41ac (.)
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> bb7e77c2 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> 36321fcb (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> b99af5a8 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> 712617d3 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> f3086887 (rebase 210)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> fdb24863 (rebase 210)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> 4fc21b78 (rebase 210)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> 9c45d9bd (rebase 210)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> 54ad93c4 (rebase 210)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> eb62d6cf (rebase 210)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> 6e12a84b (rebase 210)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> 8c8937e7 (rebase 210)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> 545977c8 (rebase 210)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> 36ac4fc1 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> 69fa7d37 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> c8b1c8bf (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> 9cf0dc90 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> 75179b85 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> f963d2c0 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> 31f5d28f (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> ee18dd92 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> 6608a1a0 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> 66453ace (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> 2a97406c (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> 909e45af (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> 4f042b88 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> bb7e77c2 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> 36321fcb (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> b99af5a8 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> 712617d3 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> f3086887 (rebase 210)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> fdb24863 (rebase 210)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> 4fc21b78 (rebase 210)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> 9c45d9bd (rebase 210)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> 54ad93c4 (rebase 210)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> eb62d6cf (rebase 210)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> 6e12a84b (rebase 210)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> 8c8937e7 (rebase 210)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> 545977c8 (rebase 210)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> 36ac4fc1 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> 69fa7d37 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> c8b1c8bf (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> 9cf0dc90 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> 75179b85 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> f963d2c0 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> 75179b855 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> f963d2c0 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> 31f5d28f (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> ee18dd92 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> 6608a1a0 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> 66453ace (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> 2a97406c (.)
