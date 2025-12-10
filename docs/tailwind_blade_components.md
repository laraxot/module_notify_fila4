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
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
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
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> 75179b85 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
>>>>>>> f963d2c0 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
>>>>>>> 3f537838 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
>>>>>>> a404ea71 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> 75179b85 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
>>>>>>> f963d2c0 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
>>>>>>> 3f537838 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
>>>>>>> a404ea71 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> 75179b85 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
>>>>>>> f963d2c0 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
>>>>>>> 3f537838 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
>>>>>>> a404ea71 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
>>>>>>> 1487fe812 (.)
=======
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
>>>>>>> f963d2c0 (.)
<<<<<<< HEAD
>>>>>>> 12a7e2462 (.)
=======
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
>>>>>>> 510809c6f (.)
=======
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
>>>>>>> 3f537838 (.)
<<<<<<< HEAD
>>>>>>> 11b43e822 (.)
=======
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
<<<<<<< HEAD
>>>>>>> e2f1a4045 (.)
=======
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
>>>>>>> a404ea71 (.)
<<<<<<< HEAD
>>>>>>> c4282a934 (.)
=======
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
>>>>>>> ee18dd92 (.)
>>>>>>> 4bec160e6 (.)
- Integrare test di rendering e validazione accessibilità.
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> 75179b85 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
>>>>>>> f963d2c0 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
>>>>>>> 3f537838 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
>>>>>>> a404ea71 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> 75179b85 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
>>>>>>> f963d2c0 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
>>>>>>> 3f537838 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
>>>>>>> a404ea71 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> 75179b85 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
>>>>>>> f963d2c0 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
>>>>>>> 3f537838 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
>>>>>>> a404ea71 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> 75179b85 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
>>>>>>> f963d2c0 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
>>>>>>> 3f537838 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
>>>>>>> a404ea71 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
>>>>>>> ee18dd92 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
>>>>>>> 2941b0bd (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
>>>>>>> ca10d6ad (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
>>>>>>> 66453ace (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2e9bd58c3 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
>>>>>>> 4c323e61 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
>>>>>>> febe79e3 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
>>>>>>> 2941b0bd (.)
>>>>>>> a070a65a5 (.)
=======
>>>>>>> 01af324fe (.)
=======
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
>>>>>>> ca10d6ad (.)
>>>>>>> 8c6d84fe6 (.)
=======
>>>>>>> 138485550 (.)
=======
>>>>>>> 2e9bd58c3 (.)
=======
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
>>>>>>> 4c323e61 (.)
>>>>>>> 37beb5238 (.)
=======
>>>>>>> 53eef8d8d (.)
=======
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
>>>>>>> febe79e3 (.)
>>>>>>> 753ea7aca (.)
- Integrare test di rendering e validazione accessibilità.
=======
>>>>>>> 5fd545e4 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f2e64178 (.)
<<<<<<< HEAD
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> 4e4a7796 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> c7a4727b (.)
=======
>>>>>>> dceba960 (.)
=======
>>>>>>> 9d84f153 (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 9721a5b2 (.)
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> 116df547 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 1442e291 (rebase 210)
=======
>>>>>>> 229a065a (rebase 210)
=======
>>>>>>> 84082535 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> fcaebc79 (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
=======
>>>>>>> 7ffa94fc (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 9d3810d0 (rebase 210)
=======
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> 82e5ee2d (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> d38aa9d2 (rebase 210)
=======
>>>>>>> 22baa66d (rebase 210)
=======
>>>>>>> 5b50927d (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 9e7ba5b6 (rebase 210)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> d45a0226 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> f9ec4f86 (.)
=======
>>>>>>> 3ee54c5d (.)
=======
>>>>>>> 4b544042 (.)
=======
>>>>>>> 0ebb7b01 (.)
=======
>>>>>>> cccb594f (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 4c323e61 (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> febe79e3 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> 4e4a7796 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> c7a4727b (.)
=======
>>>>>>> dceba960 (.)
=======
>>>>>>> 9d84f153 (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 9721a5b2 (.)
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> 116df547 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 1442e291 (rebase 210)
=======
>>>>>>> 229a065a (rebase 210)
=======
>>>>>>> 84082535 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> fcaebc79 (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
=======
>>>>>>> 7ffa94fc (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 9d3810d0 (rebase 210)
=======
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> 82e5ee2d (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> d38aa9d2 (rebase 210)
=======
>>>>>>> 22baa66d (rebase 210)
=======
>>>>>>> 5b50927d (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 9e7ba5b6 (rebase 210)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> d45a0226 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> f9ec4f86 (.)
=======
>>>>>>> 3ee54c5d (.)
=======
>>>>>>> 4b544042 (.)
=======
>>>>>>> 0ebb7b01 (.)
=======
>>>>>>> cccb594f (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 4c323e61 (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> febe79e3 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> 4e4a7796 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> c7a4727b (.)
=======
>>>>>>> dceba960 (.)
=======
>>>>>>> 9d84f153 (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 9721a5b2 (.)
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> 116df547 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 1442e291 (rebase 210)
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> 2a97406c (.)
=======
=======
>>>>>>> e790eb33 (.)
=======
>>>>>>> cb5f23b0 (.)
=======
>>>>>>> eb71492d (.)
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
- Integrare test di rendering e validazione accessibilità.
>>>>>>> 4f042b88 (.)
=======
=======
>>>>>>> e790eb33 (.)
=======
>>>>>>> cb5f23b0 (.)
=======
>>>>>>> eb71492d (.)
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
- Integrare test di rendering e validazione accessibilità.
>>>>>>> 712617d3 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> 4fc21b78 (rebase 210)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> 9c45d9bd (rebase 210)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> eb62d6cf (rebase 210)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> 8c8937e7 (rebase 210)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> 36ac4fc1 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> fd1fcc4c (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> 4f3927d7 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> c8b1c8bf (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> 9cf0dc90 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> 75179b85 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> f963d2c0 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> ee18dd92 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> 66453ace (.)
=======
>>>>>>> 5fd545e4 (.)
=======
=======
=======
>>>>>>> f2e64178 (.)
>>>>>>> 23f115647 (.)
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
=======
>>>>>>> 8c19c8df2 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> 4e4a7796 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> c7a4727b (.)
=======
>>>>>>> dceba960 (.)
=======
>>>>>>> 9d84f153 (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 9721a5b2 (.)
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> 116df547 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 1442e291 (rebase 210)
=======
>>>>>>> 229a065a (rebase 210)
=======
>>>>>>> 84082535 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> fcaebc79 (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
=======
>>>>>>> 7ffa94fc (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 9d3810d0 (rebase 210)
=======
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> 82e5ee2d (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> d38aa9d2 (rebase 210)
=======
>>>>>>> 22baa66d (rebase 210)
=======
>>>>>>> 5b50927d (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
- Integrare test di rendering e validazione accessibilità.
>>>>>>> 2a97406c (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> 4f042b88 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 731b801a8 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> 712617d3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b85076e48 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> fdb24863 (rebase 210)
<<<<<<< HEAD
=======
>>>>>>> 54220b28 (rebase 210)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> 4fc21b78 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ce1853afd (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> 9c45d9bd (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 7a142b4f5 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> eb62d6cf (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c31e900eb (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> 8c8937e7 (rebase 210)
<<<<<<< HEAD
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> 36ac4fc1 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> fd1fcc4c (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> 4f3927d7 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> c8b1c8bf (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> 9cf0dc90 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> 75179b85 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> f963d2c0 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/project_docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> 75179b855 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> f963d2c0 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> ee18dd92 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> 66453ace (.)
=======
>>>>>>> 5fd545e4 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> 2a97406c (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> 4f042b88 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> 712617d3 (.)
>>>>>>> laraxot/develop
=======
>>>>>>> 301ad8b44 (.)
=======
- Documentare ogni componente in `/docs` e `/Themes/One/docs/`.
- Integrare test di rendering e validazione accessibilità.
>>>>>>> 2a97406c (.)
>>>>>>> 998e6866b (.)
=======
>>>>>>> 36136dcfa (.)
=======
>>>>>>> 731b801a8 (.)
=======
>>>>>>> b85076e48 (.)
=======
>>>>>>> 43dd68f4b (.)
=======
>>>>>>> ce1853afd (.)
=======
>>>>>>> 7a142b4f5 (.)
=======
>>>>>>> c31e900eb (.)
