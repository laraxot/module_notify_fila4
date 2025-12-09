<?php

declare(strict_types=1);

?>
<x-filament-panels::page>
    <x-filament::section>
        <x-slot name="heading">
            Test Invio Email
        </x-slot>

        <x-slot name="description">
            Utilizza questo form per testare l'invio di email tramite diversi provider e configurazioni.
        </x-slot>

        
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        <x-filament-panels::form wire:submit="sendEmail()">
            {{ $this->emailForm }}
            {{ $error_message ?? '--' }}
            <x-filament-panels::form.actions :actions="$this->getEmailFormActions()" />
    
            <x-filament::loading-indicator class="h-5 w-5" wire:loading wire:target="sendEmail()"/>
    
        </x-filament-panels::form>
=======
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
        <x-filament-schemas::form wire:submit="sendEmail()">
            {{ $this->emailForm }}
            {{ $error_message ?? '--' }}
            <x-filament::actions :actions="$this->getEmailFormActions()" />
    
            <x-filament::loading-indicator class="h-5 w-5" wire:loading wire:target="sendEmail()"/>
    
        </x-filament-schemas::form>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> 207ac35e (.)
=======
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
>>>>>>> d09cb759 (.)
=======
        <x-filament-panels::form wire:submit="sendEmail()">
            {{ $this->emailForm }}
            {{ $error_message ?? '--' }}
            <x-filament-panels::form.actions :actions="$this->getEmailFormActions()" />
    
            <x-filament::loading-indicator class="h-5 w-5" wire:loading wire:target="sendEmail()"/>
    
        </x-filament-panels::form>
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
    </x-filament::section>
</x-filament-panels::page>
