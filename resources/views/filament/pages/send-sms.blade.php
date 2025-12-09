<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
<?php

declare(strict_types=1);

?>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 207ac35e (.)
                        <x-filament::actions :actions="$this->getSmsFormActions()" />
=======
                        <x-filament-panels::form.actions :actions="$this->getSmsFormActions()" />
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
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
=======
                        <x-filament::actions :actions="$this->getSmsFormActions()" />
=======
                        <x-filament::actions :actions="$this->getSmsFormActions()" />
>>>>>>> d09cb759 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                        <x-filament::actions :actions="$this->getSmsFormActions()" />
=======
                        <x-filament-panels::form.actions :actions="$this->getSmsFormActions()" />
>>>>>>> a12f125f4a (.)
=======
                        <x-filament::actions :actions="$this->getSmsFormActions()" />
>>>>>>> b93ef594b4 (.)
=======
                        <x-filament-panels::form.actions :actions="$this->getSmsFormActions()" />
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
                        <x-filament::actions :actions="$this->getSmsFormActions()" />
>>>>>>> 3f537838 (.)
=======
                        <x-filament::actions :actions="$this->getSmsFormActions()" />
=======
                        <x-filament-panels::form.actions :actions="$this->getSmsFormActions()" />
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
                        <x-filament::actions :actions="$this->getSmsFormActions()" />
>>>>>>> 75179b85 (.)
=======
                        <x-filament::actions :actions="$this->getSmsFormActions()" />
=======
                        <x-filament-panels::form.actions :actions="$this->getSmsFormActions()" />
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
                        <x-filament::actions :actions="$this->getSmsFormActions()" />
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
                        <x-filament::actions :actions="$this->getSmsFormActions()" />
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
                    </div>
                </div>

        </x-filament::section>
    </form>
</x-filament-panels::page>
