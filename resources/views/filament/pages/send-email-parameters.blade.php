<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
<?php

declare(strict_types=1);

?>
<x-filament::page>

    <x-filament-schemas::form wire:submit="sendEmail()">
        {{ $this->emailForm }}

        <x-filament::actions :actions="$this->getEmailFormActions()" />

        <x-filament::loading-indicator class="h-5 w-5" wire:loading wire:target="sendEmail()"/>

    </x-filament-schemas::form>
<<<<<<< HEAD
=======
<x-filament::page>

    <x-filament-panels::form wire:submit="sendEmail()">
        {{ $this->emailForm }}

        <x-filament-panels::form.actions :actions="$this->getEmailFormActions()" />

        <x-filament::loading-indicator class="h-5 w-5" wire:loading wire:target="sendEmail()"/>

    </x-filament-panels::form>
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
</x-filament::page>
