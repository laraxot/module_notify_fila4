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
            Test Invio Telegram
        </x-slot>

        <x-slot name="description">
            Utilizza questo form per testare l'invio di messaggi Telegram tramite diversi provider.
        </x-slot>

        {{ $this->telegramForm }}

        <x-slot name="footer">
            <div class="flex items-center justify-end gap-x-3">
                <x-filament::button wire:click="sendTelegram" type="submit" color="primary">
                    Invia Telegram
                </x-filament::button>
            </div>
        </x-slot>
    </x-filament::section>
</x-filament-panels::page>
