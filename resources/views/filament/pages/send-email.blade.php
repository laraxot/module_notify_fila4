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
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<x-filament-panels::page>
    <x-filament::section>
        <x-slot name="heading">
            Test Invio Email
        </x-slot>

        <x-slot name="description">
            Utilizza questo form per testare l'invio di email tramite diversi provider e configurazioni.
        </x-slot>

        
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
        <x-filament-schemas::form wire:submit="sendEmail()">
            {{ $this->emailForm }}
            {{ $error_message ?? '--' }}
            <x-filament::actions :actions="$this->getEmailFormActions()" />
    
            <x-filament::loading-indicator class="h-5 w-5" wire:loading wire:target="sendEmail()"/>
    
        </x-filament-schemas::form>
<<<<<<< HEAD
=======
=======
        <x-filament-panels::form wire:submit="sendEmail()">
=======
        <x-filament-schemas::form wire:submit="sendEmail()">
>>>>>>> b93ef594b4 (.)
            {{ $this->emailForm }}
            {{ $error_message ?? '--' }}
            <x-filament::actions :actions="$this->getEmailFormActions()" />
    
            <x-filament::loading-indicator class="h-5 w-5" wire:loading wire:target="sendEmail()"/>
    
<<<<<<< HEAD
        </x-filament-panels::form>
>>>>>>> a12f125f4a (.)
=======
        </x-filament-schemas::form>
>>>>>>> b93ef594b4 (.)
=======
        <x-filament-panels::form wire:submit="sendEmail()">
            {{ $this->emailForm }}
            {{ $error_message ?? '--' }}
            <x-filament-panels::form.actions :actions="$this->getEmailFormActions()" />
    
            <x-filament::loading-indicator class="h-5 w-5" wire:loading wire:target="sendEmail()"/>
    
        </x-filament-panels::form>
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
    </x-filament::section>
</x-filament-panels::page>
