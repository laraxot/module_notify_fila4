<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
<?php

declare(strict_types=1);

?>
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
<x-filament::page>

    <x-filament-schemas::form wire:submit="sendEmail()">
        {{ $this->emailForm }}

        <x-filament::actions :actions="$this->getEmailFormActions()" />

        <x-filament::loading-indicator class="h-5 w-5" wire:loading wire:target="sendEmail()"/>

    </x-filament-schemas::form>
<<<<<<< HEAD
=======
=======
=======
>>>>>>> b93ef594b4 (.)
<x-filament::page>

    <x-filament-schemas::form wire:submit="sendEmail()">
        {{ $this->emailForm }}

        <x-filament::actions :actions="$this->getEmailFormActions()" />

        <x-filament::loading-indicator class="h-5 w-5" wire:loading wire:target="sendEmail()"/>

<<<<<<< HEAD
    </x-filament-panels::form>
>>>>>>> a12f125f4a (.)
=======
    </x-filament-schemas::form>
>>>>>>> b93ef594b4 (.)
=======
<x-filament::page>

    <x-filament-panels::form wire:submit="sendEmail()">
        {{ $this->emailForm }}

        <x-filament-panels::form.actions :actions="$this->getEmailFormActions()" />

        <x-filament::loading-indicator class="h-5 w-5" wire:loading wire:target="sendEmail()"/>

    </x-filament-panels::form>
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
</x-filament::page>
