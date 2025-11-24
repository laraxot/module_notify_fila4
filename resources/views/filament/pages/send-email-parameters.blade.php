<?php

declare(strict_types=1);

?>
<x-filament::page>

<<<<<<< HEAD
    <x-filament-schemas::form wire:submit="sendEmail()">
        {{ $this->emailForm }}

        <x-filament::actions :actions="$this->getEmailFormActions()" />

        <x-filament::loading-indicator class="h-5 w-5" wire:loading wire:target="sendEmail()"/>

    </x-filament-schemas::form>
=======
    <x-filament-panels::form wire:submit="sendEmail()">
        {{ $this->emailForm }}

        <x-filament-panels::form.actions :actions="$this->getEmailFormActions()" />

        <x-filament::loading-indicator class="h-5 w-5" wire:loading wire:target="sendEmail()"/>

    </x-filament-panels::form>
>>>>>>> 7148d73 (.)
</x-filament::page>
