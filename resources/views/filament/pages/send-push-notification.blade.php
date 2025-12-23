<?php

declare(strict_types=1);

?>
<x-filament-panels::page>
    <x-filament::section>
        <x-slot name="heading">
            Test Invio Notifiche Push
        </x-slot>

        <x-slot name="description">
            Utilizza questo form per testare l'invio di notifiche push ai dispositivi mobili tramite diversi servizi.
        </x-slot>

        {{ $this->notificationForm }}

        <x-slot name="footer">
            <div class="flex items-center justify-between gap-x-3">
                <div>
                    <x-filament::loading-indicator class="h-5 w-5" wire:loading wire:target="sendNotification" />
                </div>
<<<<<<< HEAD
                <div>
                    <x-filament::actions :actions="$this->getNotificationFormActions()" />
=======

                <div class="mt-6 flex items-center justify-between gap-x-3">
                    <div>
                        <div class="inline-flex items-center" wire:loading wire:target="sendNotification()">
                            <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                            Invio in corso...
                        </div>
                    </div>
                    <div class="flex gap-3">
                        @foreach($this->getNotificationFormActions() as $action)
                            {{ $action }}
                        @endforeach
                    </div>
>>>>>>> 0db165c (.)
                </div>
            </div>
        </x-slot>
    </x-filament::section>
</x-filament-panels::page>
