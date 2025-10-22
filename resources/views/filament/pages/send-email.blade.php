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
    <x-filament::section>
        <x-slot name="heading">
            Test Invio Email
        </x-slot>

        <x-slot name="description">
            Utilizza questo form per testare l'invio di email tramite diversi provider e configurazioni.
        </x-slot>

        
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
        <x-filament-schemas::form wire:submit="sendEmail()">
            {{ $this->emailForm }}
            {{ $error_message ?? '--' }}
            <x-filament::actions :actions="$this->getEmailFormActions()" />
    
            <x-filament::loading-indicator class="h-5 w-5" wire:loading wire:target="sendEmail()"/>
    
        </x-filament-schemas::form>
<<<<<<< HEAD
=======
        <x-filament-panels::form wire:submit="sendEmail()">
            {{ $this->emailForm }}
            {{ $error_message ?? '--' }}
            <x-filament-panels::form.actions :actions="$this->getEmailFormActions()" />
    
            <x-filament::loading-indicator class="h-5 w-5" wire:loading wire:target="sendEmail()"/>
    
        </x-filament-panels::form>
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
    </x-filament::section>
</x-filament-panels::page>
