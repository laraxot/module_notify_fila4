<?php

declare(strict_types=1);

?>
<<<<<<< HEAD
<x-filament::page>
=======
<x-fi<x-filament::page>
>>>>>>> 22f1446 (.)

    <x-filament-schemas::form wire:submit="sendEmail()">
        {{ $this->emailForm }}

        <x-filament::actions :actions="$this->getEmailFormActions()" />

        <x-filament::loading-indicator class="h-5 w-5" wire:loading wire:target="sendEmail()"/>

    </x-filament-schemas::form>
</x-filament::page>
