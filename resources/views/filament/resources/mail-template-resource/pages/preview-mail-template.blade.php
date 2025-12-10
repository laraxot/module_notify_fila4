<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
<?php

declare(strict_types=1);

?>
<<<<<<< HEAD
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
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
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    @foreach($this->record->variables as $key => $value)
                        <div class="col-span-1">
                <x-filament::grid>
                    @foreach($this->record->variables as $key => $value)
                        <x-filament::grid.column>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    @foreach($this->record->variables as $key => $value)
                        <div class="col-span-1">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    @foreach($this->record->variables as $key => $value)
                        <div class="col-span-1">
                <x-filament::grid>
                    @foreach($this->record->variables as $key => $value)
                        <x-filament::grid.column>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    @foreach($this->record->variables as $key => $value)
                        <div class="col-span-1">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    @foreach($this->record->variables as $key => $value)
                        <div class="col-span-1">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    @foreach($this->record->variables as $key => $value)
                        <div class="col-span-1">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    @foreach($this->record->variables as $key => $value)
                        <div class="col-span-1">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    @foreach($this->record->variables as $key => $value)
                        <div class="col-span-1">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    @foreach($this->record->variables as $key => $value)
                        <div class="col-span-1">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    @foreach($this->record->variables as $key => $value)
                        <div class="col-span-1">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    @foreach($this->record->variables as $key => $value)
                        <div class="col-span-1">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    @foreach($this->record->variables as $key => $value)
                        <div class="col-span-1">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    @foreach($this->record->variables as $key => $value)
                        <div class="col-span-1">
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
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 31f5d28f (.)
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
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> eb71492d (.)
=======
>>>>>>> 31f5d28f (.)
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
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> eb71492d (.)
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
>>>>>>> d09cb759 (.)
=======
<<<<<<< HEAD
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
>>>>>>> ca10d6ad (.)
=======
>>>>>>> ce26f84e (.)
=======
>>>>>>> 7d903672 (.)
=======
>>>>>>> febe79e3 (.)
=======
>>>>>>> f4acf543 (.)
=======
>>>>>>> e438127e (.)
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> d13ead25 (.)
=======
>>>>>>> 3d542a31 (.)
=======
>>>>>>> c7a4727b (.)
=======
>>>>>>> 9721a5b2 (.)
=======
>>>>>>> f74da283 (.)
=======
>>>>>>> 599eea9c (.)
=======
>>>>>>> 1442e291 (rebase 210)
=======
>>>>>>> f16a5ca4 (rebase 210)
=======
>>>>>>> f5a88785 (rebase 210)
=======
>>>>>>> fcaebc79 (rebase 210)
=======
>>>>>>> d121e45a (rebase 210)
=======
>>>>>>> d7824f6f (rebase 210)
=======
>>>>>>> 9d3810d0 (rebase 210)
=======
>>>>>>> 59182545 (rebase 210)
=======
>>>>>>> 1fd613a6 (rebase 210)
=======
>>>>>>> d38aa9d2 (rebase 210)
=======
>>>>>>> 098285fb (rebase 210)
=======
>>>>>>> e42e3233 (rebase 210)
=======
>>>>>>> 9e7ba5b6 (rebase 210)
=======
>>>>>>> 4df23e8b (rebase 210)
=======
>>>>>>> 43c0079b (rebase 210)
=======
>>>>>>> 677a6ab7 (.)
=======
>>>>>>> b1f2dd4c (.)
=======
>>>>>>> f9ec4f86 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2fc60436 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 207ac35 (.)
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
=======
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
>>>>>>> ca10d6ad (.)
=======
>>>>>>> ce26f84e (.)
=======
>>>>>>> 7d903672 (.)
=======
>>>>>>> febe79e3 (.)
=======
>>>>>>> f4acf543 (.)
=======
>>>>>>> e438127e (.)
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> d13ead25 (.)
=======
>>>>>>> 3d542a31 (.)
=======
>>>>>>> c7a4727b (.)
=======
>>>>>>> 9721a5b2 (.)
=======
>>>>>>> f74da283 (.)
=======
>>>>>>> 599eea9c (.)
=======
>>>>>>> 1442e291 (rebase 210)
=======
>>>>>>> f16a5ca4 (rebase 210)
=======
>>>>>>> f5a88785 (rebase 210)
=======
>>>>>>> fcaebc79 (rebase 210)
=======
>>>>>>> d121e45a (rebase 210)
=======
>>>>>>> d7824f6f (rebase 210)
=======
>>>>>>> 9d3810d0 (rebase 210)
=======
>>>>>>> 59182545 (rebase 210)
=======
>>>>>>> 1fd613a6 (rebase 210)
=======
>>>>>>> d38aa9d2 (rebase 210)
=======
>>>>>>> 098285fb (rebase 210)
=======
>>>>>>> e42e3233 (rebase 210)
=======
>>>>>>> 9e7ba5b6 (rebase 210)
=======
>>>>>>> 4df23e8b (rebase 210)
=======
>>>>>>> 43c0079b (rebase 210)
=======
>>>>>>> 677a6ab7 (.)
=======
>>>>>>> b1f2dd4c (.)
=======
>>>>>>> f9ec4f86 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
>>>>>>> 2fc60436 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 207ac35 (.)
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> bce3ff15 (.)
=======
=======
>>>>>>> 7d765981 (.)
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    @foreach($this->record->variables as $key => $value)
                        <div class="col-span-1">
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 4e2ebfb (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> bce3ff15 (.)
=======
=======
>>>>>>> 7d765981 (.)
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    @foreach($this->record->variables as $key => $value)
                        <div class="col-span-1">
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
>>>>>>> b93ef594b4 (.)
=======
                <x-filament::grid>
                    @foreach($this->record->variables as $key => $value)
                        <x-filament::grid.column>
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 207ac35e (.)
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    @foreach($this->record->variables as $key => $value)
                        <div class="col-span-1">
>>>>>>> 4e2ebfb (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
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
>>>>>>> fbed41ac (.)
=======
>>>>>>> bce3ff15 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    @foreach($this->record->variables as $key => $value)
                        <div class="col-span-1">
>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
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
>>>>>>> fbed41ac (.)
=======
>>>>>>> bce3ff15 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
<<<<<<< HEAD
>>>>>>> 7624f916 (.)
=======
=======
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    @foreach($this->record->variables as $key => $value)
                        <div class="col-span-1">
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
>>>>>>> c5a0a4b2 (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
<<<<<<< HEAD
>>>>>>> 1b6ddbbc (.)
=======
=======
>>>>>>> 207ac35e (.)
>>>>>>> 6e2169a3 (.)
                            <div class="p-2 bg-gray-50 rounded">
                                <span class="font-medium">{{ $key }}:</span>
                                <span class="text-gray-600">{{ $value }}</span>
                            </div>
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
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
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
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
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
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
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
=======
>>>>>>> ce26f84e (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
=======
>>>>>>> f4acf543 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
=======
>>>>>>> d13ead25 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
=======
>>>>>>> f74da283 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
=======
>>>>>>> f16a5ca4 (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
=======
=======
>>>>>>> d121e45a (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
=======
>>>>>>> 59182545 (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
=======
=======
>>>>>>> 098285fb (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
=======
=======
>>>>>>> 4df23e8b (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
=======
>>>>>>> 677a6ab7 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
=======
=======
=======
>>>>>>> c8b1c8bf (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 82ae73b (.)
=======
<<<<<<< HEAD
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce89c8bb (.)
=======
=======
>>>>>>> 9777d1b (.)
>>>>>>> 58816034 (.)
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
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
=======
>>>>>>> ce26f84e (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
=======
>>>>>>> f4acf543 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
=======
>>>>>>> d13ead25 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
=======
>>>>>>> f74da283 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
=======
>>>>>>> f16a5ca4 (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
=======
=======
>>>>>>> d121e45a (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
=======
>>>>>>> 59182545 (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
=======
=======
>>>>>>> 098285fb (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
=======
=======
>>>>>>> 4df23e8b (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
=======
>>>>>>> 677a6ab7 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
=======
=======
=======
>>>>>>> c8b1c8bf (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 82ae73b (.)
=======
<<<<<<< HEAD
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> ce89c8bb (.)
=======
=======
>>>>>>> 9777d1b (.)
>>>>>>> 58816034 (.)
<<<<<<< HEAD
>>>>>>> 7624f916 (.)
=======
=======
=======
>>>>>>> 75179b85 (.)
>>>>>>> c5a0a4b2 (.)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    @foreach($this->record->variables as $key => $value)
                        <div class="p-2 bg-gray-50 rounded">
                            <span class="font-medium">{{ $key }}:</span>
                            <span class="text-gray-600">{{ $value }}</span>
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 31f5d28f (.)
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
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> eb71492d (.)
=======
>>>>>>> 31f5d28f (.)
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
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> eb71492d (.)
>>>>>>> 11ae5222 (.)
>>>>>>> 62b0c9c (.)
=======
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> 0db165c (.)
>>>>>>> ce26f84e (.)
=======
>>>>>>> 7d903672 (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> febe79e3 (.)
=======
>>>>>>> 0db165c (.)
>>>>>>> f4acf543 (.)
=======
>>>>>>> e438127e (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> 0db165c (.)
>>>>>>> d13ead25 (.)
=======
>>>>>>> 3d542a31 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 9721a5b2 (.)
=======
>>>>>>> 0db165c (.)
>>>>>>> f74da283 (.)
=======
>>>>>>> 599eea9c (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 1442e291 (rebase 210)
=======
>>>>>>> 0db165c (.)
>>>>>>> f16a5ca4 (rebase 210)
=======
>>>>>>> f5a88785 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> fcaebc79 (rebase 210)
=======
>>>>>>> 0db165c (.)
>>>>>>> d121e45a (rebase 210)
=======
>>>>>>> d7824f6f (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 9d3810d0 (rebase 210)
=======
>>>>>>> 0db165c (.)
>>>>>>> 59182545 (rebase 210)
=======
>>>>>>> 1fd613a6 (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> d38aa9d2 (rebase 210)
=======
>>>>>>> 0db165c (.)
>>>>>>> 098285fb (rebase 210)
=======
>>>>>>> e42e3233 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 9e7ba5b6 (rebase 210)
=======
>>>>>>> 0db165c (.)
>>>>>>> 4df23e8b (rebase 210)
=======
>>>>>>> 43c0079b (rebase 210)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
>>>>>>> 0db165c (.)
>>>>>>> 677a6ab7 (.)
=======
>>>>>>> b1f2dd4c (.)
=======
>>>>>>> eb71492d (.)
=======
>>>>>>> f9ec4f86 (.)
=======
>>>>>>> cca10a64 (.)
=======
>>>>>>> 08fd62d (.)
>>>>>>> bce3ff15 (.)
=======
>>>>>>> 7d765981 (.)
=======
>>>>>>> 11ae5222 (.)
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 11ae5222 (.)
>>>>>>> 75179b8 (.)
=======
>>>>>>> 9777d1b (.)
>>>>>>> 58816034 (.)
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
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> 0db165c (.)
>>>>>>> ce26f84e (.)
=======
>>>>>>> 7d903672 (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> febe79e3 (.)
=======
>>>>>>> 0db165c (.)
>>>>>>> f4acf543 (.)
=======
>>>>>>> e438127e (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> 0db165c (.)
>>>>>>> d13ead25 (.)
=======
>>>>>>> 3d542a31 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 9721a5b2 (.)
=======
>>>>>>> 0db165c (.)
>>>>>>> f74da283 (.)
=======
>>>>>>> 599eea9c (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 1442e291 (rebase 210)
=======
>>>>>>> 0db165c (.)
>>>>>>> f16a5ca4 (rebase 210)
=======
>>>>>>> f5a88785 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> fcaebc79 (rebase 210)
=======
>>>>>>> 0db165c (.)
>>>>>>> d121e45a (rebase 210)
=======
>>>>>>> d7824f6f (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 9d3810d0 (rebase 210)
=======
>>>>>>> 0db165c (.)
>>>>>>> 59182545 (rebase 210)
=======
>>>>>>> 1fd613a6 (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> d38aa9d2 (rebase 210)
=======
>>>>>>> 0db165c (.)
>>>>>>> 098285fb (rebase 210)
=======
>>>>>>> e42e3233 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 9e7ba5b6 (rebase 210)
=======
>>>>>>> 0db165c (.)
>>>>>>> 4df23e8b (rebase 210)
=======
>>>>>>> 43c0079b (rebase 210)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
>>>>>>> 0db165c (.)
>>>>>>> 677a6ab7 (.)
=======
>>>>>>> b1f2dd4c (.)
=======
>>>>>>> eb71492d (.)
=======
>>>>>>> f9ec4f86 (.)
=======
>>>>>>> cca10a64 (.)
=======
>>>>>>> 08fd62d (.)
>>>>>>> bce3ff15 (.)
=======
>>>>>>> 7d765981 (.)
=======
>>>>>>> 11ae5222 (.)
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 11ae5222 (.)
>>>>>>> 75179b8 (.)
=======
>>>>>>> 9777d1b (.)
>>>>>>> 58816034 (.)
<<<<<<< HEAD
>>>>>>> 7624f916 (.)
=======
=======
>>>>>>> 11ae5222 (.)
>>>>>>> 75179b85 (.)
>>>>>>> c5a0a4b2 (.)
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-filament-panels::page>
<<<<<<< HEAD
=======
                        </x-filament::grid.column>
                    @endforeach
                </x-filament::grid>
            </div>
        </div>
    </div>
</x-filament-panels::page> 
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
