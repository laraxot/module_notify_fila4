<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
>>>>>>> 510809c6f (.)
=======
>>>>>>> 11b43e822 (.)
<?php

declare(strict_types=1);

?>
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
=======
<<<<<<< HEAD
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> 510809c6f (.)
=======
>>>>>>> 11b43e822 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
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
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 01af324fe (.)
=======
>>>>>>> 53eef8d8d (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f4acf543 (.)
=======
>>>>>>> e438127e (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> fcaebc79 (rebase 210)
=======
>>>>>>> d121e45a (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
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
>>>>>>> ca10d6ad (.)
=======
>>>>>>> ce26f84e (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 59182545 (rebase 210)
=======
>>>>>>> 1fd613a6 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d38aa9d2 (rebase 210)
=======
>>>>>>> 098285fb (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> e42e3233 (rebase 210)
=======
>>>>>>> 9e7ba5b6 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4df23e8b (rebase 210)
=======
>>>>>>> 43c0079b (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 677a6ab7 (.)
=======
>>>>>>> b1f2dd4c (.)
<<<<<<< HEAD
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
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 08fd62df (.)
=======
>>>>>>> ca10d6ad (.)
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 9721a5b2 (.)
=======
>>>>>>> f74da283 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 599eea9c (.)
=======
>>>>>>> 1442e291 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f16a5ca4 (rebase 210)
=======
>>>>>>> f5a88785 (rebase 210)
=======
>>>>>>> 10292b60a (.)
=======
=======
>>>>>>> 207ac35e (.)
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> 510809c6f (.)
=======
=======
>>>>>>> a404ea71 (.)
>>>>>>> c4282a934 (.)
=======
>>>>>>> 2ba4e5540 (.)
=======
=======
>>>>>>> 08fd62df (.)
>>>>>>> 08ae27d78 (.)
=======
>>>>>>> 8c6d84fe6 (.)
=======
>>>>>>> 2d4267d82 (.)
=======
=======
>>>>>>> 7d903672 (.)
>>>>>>> 21e1a74cb (.)
=======
>>>>>>> 753ea7aca (.)
=======
=======
>>>>>>> f4acf543 (.)
>>>>>>> 8e45d5fca (.)
=======
>>>>>>> 5ec7f2640 (.)
=======
=======
>>>>>>> a29a4728 (.)
>>>>>>> fdad57c30 (.)
=======
>>>>>>> bf251cdf0 (.)
=======
=======
>>>>>>> 3d542a31 (.)
>>>>>>> 7aeb7d968 (.)
=======
>>>>>>> 275b7ad99 (.)
=======
=======
>>>>>>> 9721a5b2 (.)
>>>>>>> b215d516b (.)
=======
>>>>>>> 307d90282 (.)
=======
=======
>>>>>>> 599eea9c (.)
>>>>>>> 7f1ff51b1 (.)
=======
>>>>>>> f957fb24b (.)
=======
=======
>>>>>>> f16a5ca4 (rebase 210)
>>>>>>> 5e6beab99 (.)
=======
>>>>>>> 84881298a (.)
=======
=======
>>>>>>> fcaebc79 (rebase 210)
>>>>>>> 252fa579e (.)
=======
>>>>>>> 0dca0b341 (.)
=======
=======
>>>>>>> d7824f6f (rebase 210)
>>>>>>> 885fba235 (.)
=======
>>>>>>> 21a6fa9bc (.)
=======
=======
>>>>>>> 59182545 (rebase 210)
>>>>>>> 04a0e77d5 (.)
=======
>>>>>>> e1ed1c5b3 (.)
=======
=======
>>>>>>> d38aa9d2 (rebase 210)
>>>>>>> 610b999f1 (.)
=======
>>>>>>> 03b8d18d8 (.)
=======
=======
>>>>>>> e42e3233 (rebase 210)
>>>>>>> 2a700966d (.)
=======
>>>>>>> ff78f10a5 (.)
=======
=======
>>>>>>> 4df23e8b (rebase 210)
>>>>>>> 8e64ed49f (.)
=======
>>>>>>> 39a0b1e3f (.)
=======
=======
>>>>>>> 677a6ab7 (.)
>>>>>>> 8ffdc1974 (.)
=======
>>>>>>> 2bc960928 (.)
=======
>>>>>>> 8134673e1 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 10292b60a (.)
=======
>>>>>>> 510809c6f (.)
>>>>>>> b19cd40 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bf5d31b0f (.)
>>>>>>> a12f125f4a (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> d09cb759 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> bce3ff15 (.)
=======
=======
>>>>>>> 7d765981 (.)
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> bce3ff15 (.)
=======
>>>>>>> d13d18db0 (.)
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    @foreach($this->record->variables as $key => $value)
                        <div class="col-span-1">
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> d13d18db0 (.)
>>>>>>> 4e2ebfb (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
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
=======
=======
>>>>>>> d09cb759 (.)
>>>>>>> a12f125f4a (.)
=======
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    @foreach($this->record->variables as $key => $value)
                        <div class="col-span-1">
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 510809c6f (.)
>>>>>>> b93ef594b4 (.)
=======
                <x-filament::grid>
                    @foreach($this->record->variables as $key => $value)
                        <x-filament::grid.column>
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 510809c6f (.)
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
<<<<<<< HEAD
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> bf5d31b0f (.)
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    @foreach($this->record->variables as $key => $value)
                        <div class="col-span-1">
>>>>>>> 4e2ebfb (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bf5d31b0f (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
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
<<<<<<< HEAD
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
>>>>>>> 75179b855 (.)
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
>>>>>>> laraxot/develop
=======
>>>>>>> 1487fe812 (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
>>>>>>> 10292b60a (.)
=======
>>>>>>> bf5d31b0f (.)
=======
=======
>>>>>>> d09cb759 (.)
>>>>>>> 510809c6f (.)
=======
>>>>>>> 11b43e822 (.)
=======
>>>>>>> d13d18db0 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
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
>>>>>>> 1487fe812 (.)
=======
=======
>>>>>>> 82ae73be (.)
>>>>>>> 10292b60a (.)
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
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> 510809c6f (.)
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 510809c6f (.)
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
<<<<<<< HEAD
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> d13ead25 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
=======
=======
>>>>>>> 4df23e8b (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
=======
>>>>>>> f16a5ca4 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
=======
=======
>>>>>>> d121e45a (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
=======
>>>>>>> 59182545 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> 75179b855 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
=======
>>>>>>> f4acf543 (.)
<<<<<<< HEAD
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
>>>>>>> laraxot/develop
=======
>>>>>>> 1487fe812 (.)
=======
>>>>>>> 510809c6f (.)
=======
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
>>>>>>> e2f1a4045 (.)
=======
>>>>>>> 2ba4e5540 (.)
=======
=======
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
>>>>>>> 01af324fe (.)
=======
>>>>>>> 2d4267d82 (.)
=======
=======
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
>>>>>>> 53eef8d8d (.)
=======
>>>>>>> 8e45d5fca (.)
=======
>>>>>>> 13aa25113 (.)
=======
=======
=======
>>>>>>> d13ead25 (.)
>>>>>>> bf251cdf0 (.)
=======
>>>>>>> 7aae79847 (.)
=======
=======
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
>>>>>>> 47bbf2b1c (.)
=======
>>>>>>> 307d90282 (.)
=======
=======
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
>>>>>>> 74eb2e964 (.)
=======
>>>>>>> 5e6beab99 (.)
=======
=======
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
>>>>>>> 0a5473e16 (.)
=======
>>>>>>> 0dca0b341 (.)
=======
=======
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
>>>>>>> 6ad5224fb (.)
=======
>>>>>>> 04a0e77d5 (.)
=======
=======
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
>>>>>>> 1c96b91fe (.)
=======
>>>>>>> 03b8d18d8 (.)
=======
=======
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
>>>>>>> ad905ce9c (.)
=======
>>>>>>> 8e64ed49f (.)
=======
=======
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
>>>>>>> c7d5eaf96 (.)
=======
>>>>>>> 8ffdc1974 (.)
=======
=======
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
>>>>>>> a2f3c239e (.)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    @foreach($this->record->variables as $key => $value)
                        <div class="p-2 bg-gray-50 rounded">
                            <span class="font-medium">{{ $key }}:</span>
                            <span class="text-gray-600">{{ $value }}</span>
<<<<<<< HEAD
                        </div>
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 23cbbaf5 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> eb71492d (.)
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> e2f1a4045 (.)
=======
=======
>>>>>>> 6608a1a0 (.)
>>>>>>> 01af324fe (.)
=======
>>>>>>> 53eef8d8d (.)
=======
=======
>>>>>>> 909e45af (.)
>>>>>>> 13aa25113 (.)
=======
>>>>>>> 7aae79847 (.)
=======
=======
>>>>>>> b99af5a8 (.)
>>>>>>> 47bbf2b1c (.)
=======
>>>>>>> 74eb2e964 (.)
=======
=======
>>>>>>> 3d462363 (rebase 210)
<<<<<<< HEAD
>>>>>>> 0a5473e16 (.)
=======
=======
>>>>>>> 54ad93c4 (rebase 210)
<<<<<<< HEAD
>>>>>>> 6ad5224fb (.)
=======
=======
>>>>>>> 6e12a84b (rebase 210)
>>>>>>> 1c96b91fe (.)
=======
>>>>>>> ad905ce9c (.)
=======
=======
>>>>>>> 69fa7d37 (.)
>>>>>>> c7d5eaf96 (.)
=======
>>>>>>> a2f3c239e (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 0a5473e16 (.)
=======
>>>>>>> 6ad5224fb (.)
=======
>>>>>>> 1c96b91fe (.)
=======
>>>>>>> ad905ce9c (.)
=======
>>>>>>> c7d5eaf96 (.)
=======
>>>>>>> a2f3c239e (.)
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
<<<<<<< HEAD
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b1f2dd4c (.)
=======
>>>>>>> eb71492d (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 11ae5222 (.)
>>>>>>> 75179b855 (.)
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
>>>>>>> laraxot/develop
=======
>>>>>>> 1487fe812 (.)
=======
>>>>>>> 510809c6f (.)
                        </div>
=======
>>>>>>> 11b43e822 (.)
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
>>>>>>> 8ffdc1974 (.)
=======
=======
>>>>>>> b1f2dd4c (.)
>>>>>>> 2bc960928 (.)
=======
>>>>>>> a2f3c239e (.)
=======
=======
>>>>>>> f9ec4f86 (.)
>>>>>>> 8134673e1 (.)
=======
>>>>>>> d13d18db0 (.)
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-filament-panels::page>
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 301ad8b44 (.)
=======
=======
                        </x-filament::grid.column>
=======
>>>>>>> b93ef594b4 (.)
                    @endforeach
                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD
</x-filament-panels::page> 
>>>>>>> a12f125f4a (.)
=======
</x-filament-panels::page>
>>>>>>> b93ef594b4 (.)
>>>>>>> 510809c6f (.)
=======
                        </x-filament::grid.column>
                    @endforeach
                </x-filament::grid>
            </div>
        </div>
    </div>
</x-filament-panels::page> 
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 10292b60a (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> 510809c6f (.)
=======
>>>>>>> 11b43e822 (.)
