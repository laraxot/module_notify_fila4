<?php

declare(strict_types=1);

?>
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
=======
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
<<<<<<< HEAD
>>>>>>> 207ac35e (.)
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    @foreach($this->record->variables as $key => $value)
                        <div class="col-span-1">
=======
                <x-filament::grid>
                    @foreach($this->record->variables as $key => $value)
                        <x-filament::grid.column>
>>>>>>> b19cd40 (.)
=======
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    @foreach($this->record->variables as $key => $value)
                        <div class="col-span-1">
>>>>>>> 4e2ebfb (.)
                            <div class="p-2 bg-gray-50 rounded">
                                <span class="font-medium">{{ $key }}:</span>
                                <span class="text-gray-600">{{ $value }}</span>
                            </div>
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
=======
>>>>>>> 9777d1b3 (.)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    @foreach($this->record->variables as $key => $value)
                        <div class="p-2 bg-gray-50 rounded">
                            <span class="font-medium">{{ $key }}:</span>
                            <span class="text-gray-600">{{ $value }}</span>
<<<<<<< HEAD
>>>>>>> 11ae5222 (.)
>>>>>>> 75179b85 (.)
=======
>>>>>>> 9777d1b3 (.)
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-filament-panels::page>
