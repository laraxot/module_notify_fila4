<<<<<<< HEAD
<?php

declare(strict_types=1);

?>
=======
>>>>>>> b19cd40 (.)
<x-filament-panels::page>
    <div class="space-y-6">
        <div class="p-4 bg-white rounded-lg shadow">
            <h3 class="text-lg font-medium text-gray-900">
                {{ __('notify::mail.template.preview.subject') }}
            </h3>
            <p class="mt-1 text-sm text-gray-600">
                {{ $this->record->subject }}
            </p>
        </div>

        <div class="p-4 bg-white rounded-lg shadow">
            <h3 class="text-lg font-medium text-gray-900">
                {{ __('notify::mail.template.preview.body_html') }}
            </h3>
            <div class="mt-1 prose max-w-none">
                {!! $this->record->body_html !!}
            </div>
        </div>

        <div class="p-4 bg-white rounded-lg shadow">
            <h3 class="text-lg font-medium text-gray-900">
                {{ __('notify::mail.template.preview.body_text') }}
            </h3>
            <pre class="mt-1 text-sm text-gray-600 whitespace-pre-wrap">{{ $this->record->body_text }}</pre>
        </div>

        <div class="p-4 bg-white rounded-lg shadow">
            <h3 class="text-lg font-medium text-gray-900">
                {{ __('notify::mail.template.preview.variables') }}
            </h3>
            <div class="mt-1">
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 31f5d28f (.)
=======
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
<<<<<<< HEAD
>>>>>>> 207ac35e (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 367c6ceb (.)
=======
>>>>>>> 08fd62df (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 367c6ceb (.)
=======
>>>>>>> 08fd62df (.)
=======
>>>>>>> 82ae73be (.)
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    @foreach($this->record->variables as $key => $value)
                        <div class="col-span-1">
=======
                <x-filament::grid>
                    @foreach($this->record->variables as $key => $value)
                        <x-filament::grid.column>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
=======
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> d09cb759 (.)
=======
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    @foreach($this->record->variables as $key => $value)
                        <div class="col-span-1">
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 4e2ebfb (.)
=======
=======
>>>>>>> d09cb759 (.)
>>>>>>> b93ef594b4 (.)
=======
                <x-filament::grid>
                    @foreach($this->record->variables as $key => $value)
                        <x-filament::grid.column>
>>>>>>> origin/develop
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    @foreach($this->record->variables as $key => $value)
                        <div class="col-span-1">
>>>>>>> 3f537838 (.)
=======
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    @foreach($this->record->variables as $key => $value)
                        <div class="col-span-1">
>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    @foreach($this->record->variables as $key => $value)
                        <div class="col-span-1">
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    @foreach($this->record->variables as $key => $value)
                        <div class="col-span-1">
>>>>>>> 3f537838 (.)
=======
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    @foreach($this->record->variables as $key => $value)
                        <div class="col-span-1">
>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
                            <div class="p-2 bg-gray-50 rounded">
                                <span class="font-medium">{{ $key }}:</span>
                                <span class="text-gray-600">{{ $value }}</span>
                            </div>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 82ae73be (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
=======
>>>>>>> 9777d1b3 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> d284d65 (.)
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
=======
>>>>>>> 367c6ceb (.)
=======
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
=======
>>>>>>> 367c6ceb (.)
=======
=======
>>>>>>> 75179b85 (.)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    @foreach($this->record->variables as $key => $value)
                        <div class="p-2 bg-gray-50 rounded">
                            <span class="font-medium">{{ $key }}:</span>
                            <span class="text-gray-600">{{ $value }}</span>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 11ae5222 (.)
>>>>>>> 75179b85 (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
=======
>>>>>>> 31f5d28f (.)
>>>>>>> 11ae5222 (.)
>>>>>>> 62b0c9c (.)
=======
>>>>>>> bf479cc (.)
<<<<<<< HEAD
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 0db165c (.)
>>>>>>> 367c6ceb (.)
=======
>>>>>>> 08fd62df (.)
=======
>>>>>>> 11ae5222 (.)
>>>>>>> 75179b85 (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 0db165c (.)
>>>>>>> 367c6ceb (.)
=======
>>>>>>> 08fd62df (.)
=======
>>>>>>> 11ae5222 (.)
>>>>>>> 75179b85 (.)
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-filament-panels::page>
=======
                        </x-filament::grid.column>
                    @endforeach
                </x-filament::grid>
            </div>
        </div>
    </div>
</x-filament-panels::page> 
>>>>>>> b19cd40 (.)
