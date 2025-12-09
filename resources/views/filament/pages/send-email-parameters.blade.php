<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
<?php

declare(strict_types=1);

?>
<x-filament::page>

<<<<<<< HEAD
    <x-filament-panels::form wire:submit="sendEmail()">
        {{ $this->emailForm }}

        <x-filament-panels::form.actions :actions="$this->getEmailFormActions()" />

        <x-filament::loading-indicator class="h-5 w-5" wire:loading wire:target="sendEmail()"/>

    </x-filament-panels::form>
=======
    <x-filament-schemas::form wire:submit="sendEmail()">
        {{ $this->emailForm }}

        <x-filament::actions :actions="$this->getEmailFormActions()" />

        <x-filament::loading-indicator class="h-5 w-5" wire:loading wire:target="sendEmail()"/>

    </x-filament-schemas::form>
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> 207ac35e (.)
=======
<x-filament::page>

    <x-filament-panels::form wire:submit="sendEmail()">
        {{ $this->emailForm }}

        <x-filament-panels::form.actions :actions="$this->getEmailFormActions()" />

        <x-filament::loading-indicator class="h-5 w-5" wire:loading wire:target="sendEmail()"/>

    </x-filament-panels::form>
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
</x-filament::page>
