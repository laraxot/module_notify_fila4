<?php

declare(strict_types=1);

?>
<x-filament::page>

    <form wire:submit="sendEmail()">
        {{ $this->emailForm }}

        @foreach($this->getEmailFormActions() as $action)
            {{ $action }}
        @endforeach

        <x-filament::loading-indicator class="h-5 w-5" wire:loading wire:target="sendEmail()"/>

    </form>
    <x-filament-actions::modals />
</x-filament::page>
