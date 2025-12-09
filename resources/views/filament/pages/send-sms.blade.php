<?php

declare(strict_types=1);

?>
<x-filament-panels::page>
    <form wire:submit.prevent="sendSMS">
        <x-filament::section>
            <x-slot name="heading">
                Test Invio SMS
            </x-slot>

            <x-slot name="description">
                Utilizza questo form per testare l'invio di messaggi SMS tramite diversi provider.
            </x-slot>

            {{ $this->smsForm }}


                <div class="flex items-center justify-between gap-x-3">
                    <div>
                        <x-filament::loading-indicator class="h-5 w-5" wire:loading wire:target="sendSMS"/>
                    </div>
                    <div>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                        <x-filament-panels::form.actions :actions="$this->getSmsFormActions()" />
=======
                        <x-filament::actions :actions="$this->getSmsFormActions()" />
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> 207ac35e (.)
                        <x-filament::actions :actions="$this->getSmsFormActions()" />
=======
                        <x-filament-panels::form.actions :actions="$this->getSmsFormActions()" />
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======
                        <x-filament::actions :actions="$this->getSmsFormActions()" />
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
                        <x-filament::actions :actions="$this->getSmsFormActions()" />
>>>>>>> 9777d1b3 (.)
                    </div>
                </div>

        </x-filament::section>
    </form>
</x-filament-panels::page>
