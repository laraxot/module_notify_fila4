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
<<<<<<< HEAD
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
=======
>>>>>>> 3f537838 (.)
=======
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
=======
>>>>>>> d09cb759 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
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
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 9fe1b60e (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 8a8a8e2f (rebase 210)
=======
>>>>>>> b4f93b3a (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 1375c94d (rebase 210)
=======
>>>>>>> f81a620f (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 06e3078e (.)
=======
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
<?php

declare(strict_types=1);

?>
<x-filament-panels::page>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
                    <x-filament::loading-indicator class="h-5 w-5" wire:loading wire:target="sendNotification()" />
                </div>
                <div>
                    <x-filament-panels::form.actions :actions="$this->getNotificationFormActions()" />
                </div>
            </div>
        </x-slot>
    </x-filament::section>
=======
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 54220b28 (rebase 210)
    <div class="space-y-6">
        <div class="bg-white shadow rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <h3 class="text-lg font-medium text-gray-900">
                    Test Invio Notifiche Push
                </h3>
                <p class="mt-1 text-sm text-gray-600">
                    Utilizza questo form per testare l'invio di notifiche push ai dispositivi mobili tramite diversi servizi.
                </p>
<<<<<<< HEAD
<<<<<<< HEAD

                <div class="mt-6">
                    {{ $this->notificationForm }}
                </div>
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 367c6ceb (.)
=======
>>>>>>> 08fd62df (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 6608a1a0 (.)
                <div>
                    <x-filament::actions :actions="$this->getNotificationFormActions()" />
                </div>
            </div>
        </div>
    </div>
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
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> 207ac35e (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
=======
=======
>>>>>>> b93ef594b4 (.)
<x-filament-panels::page>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
    <div class="space-y-6">
        <div class="bg-white shadow rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <h3 class="text-lg font-medium text-gray-900">
                    Test Invio Notifiche Push
                </h3>
                <p class="mt-1 text-sm text-gray-600">
                    Utilizza questo form per testare l'invio di notifiche push ai dispositivi mobili tramite diversi servizi.
                </p>

                <div class="mt-6">
                    {{ $this->notificationForm }}
                </div>
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
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> fbed41ac (.)
=======
>>>>>>> 677a6ab7 (.)
                <div>
                    <x-filament::actions :actions="$this->getNotificationFormActions()" />
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
                </div>
            </div>
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                <div>
                    <x-filament::actions :actions="$this->getNotificationFormActions()" />
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> f963d2c0 (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
                <div>
                    <x-filament::actions :actions="$this->getNotificationFormActions()" />
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> f963d2c0 (.)
=======
                <div>
                    <x-filament::actions :actions="$this->getNotificationFormActions()" />
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
=======
>>>>>>> 367c6ceb (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
=======
>>>>>>> ce26f84e (.)
=======
=======
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
=======
>>>>>>> d13ead25 (.)
=======
=======
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
                <div>
                    <x-filament::actions :actions="$this->getNotificationFormActions()" />
=======
>>>>>>> f74da283 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
                <div>
                    <x-filament::actions :actions="$this->getNotificationFormActions()" />
=======
>>>>>>> f16a5ca4 (rebase 210)
=======
=======
>>>>>>> fbed41ac (.)
=======
>>>>>>> 677a6ab7 (.)
                <div>
                    <x-filament::actions :actions="$this->getNotificationFormActions()" />
=======
<<<<<<< HEAD
>>>>>>> 6ba141fc (.)
=======
                <div>
                    <x-filament::actions :actions="$this->getNotificationFormActions()" />
>>>>>>> c8b1c8bf (.)
=======
<<<<<<< HEAD
                <div>
                    <x-filament::actions :actions="$this->getNotificationFormActions()" />
=======
<<<<<<< HEAD
=======
>>>>>>> bf479cc (.)
<<<<<<< HEAD
>>>>>>> 69fa7d37 (.)
=======
=======
                <div>
                    <x-filament::actions :actions="$this->getNotificationFormActions()" />
=======
=======
>>>>>>> 7cf73d1 (.)
>>>>>>> 677a6ab7 (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 1fd232c7 (.)
                <div>
                    <x-filament::actions :actions="$this->getNotificationFormActions()" />
=======
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> 677a6ab7 (.)
>>>>>>> 11ae5222 (.)
>>>>>>> 62b0c9c (.)
=======
>>>>>>> bf479cc (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 31f5d28f (.)
=======
                <div>
                    <x-filament::actions :actions="$this->getNotificationFormActions()" />
<<<<<<< HEAD
>>>>>>> a404ea71 (.)
                </div>
            </div>
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> d09cb759 (.)
>>>>>>> 11ae5222 (.)
                </div>
            </div>
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
        </x-slot>
    </x-filament::section>
>>>>>>> a12f125f4a (.)
=======
        </div>
    </div>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b93ef594b4 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> d09cb759 (.)
=======
<x-filament-panels::page>
    <x-filament::section>
        <x-slot name="heading">
            Test Invio Notifiche Push
        </x-slot>
=======
>>>>>>> 5fd545e4 (.)

                <div class="mt-6">
                    {{ $this->notificationForm }}
                </div>
                <div>
<<<<<<< HEAD
                    <x-filament-panels::form.actions :actions="$this->getNotificationFormActions()" />
                </div>
            </div>
        </x-slot>
    </x-filament::section>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
        </div>
    </div>
>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
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
=======
        </div>
    </div>
>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
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
=======
>>>>>>> 11ae5222 (.)
=======
>>>>>>> 9777d1b3 (.)
=======
=======
                <div>
                    <x-filament::actions :actions="$this->getNotificationFormActions()" />
>>>>>>> 518c702 (.)
>>>>>>> f963d2c0 (.)
=======
                <div>
                    <x-filament::actions :actions="$this->getNotificationFormActions()" />
>>>>>>> 1fd232c7 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 0db165c (.)
>>>>>>> 367c6ceb (.)
=======
>>>>>>> 08fd62df (.)
=======
>>>>>>> 6608a1a0 (.)
=======
                <div>
                    <x-filament::actions :actions="$this->getNotificationFormActions()" />
>>>>>>> ca10d6ad (.)
=======
>>>>>>> 0db165c (.)
>>>>>>> ce26f84e (.)
=======
>>>>>>> 7d903672 (.)
=======
>>>>>>> 909e45af (.)
=======
                <div>
                    <x-filament::actions :actions="$this->getNotificationFormActions()" />
>>>>>>> a29a4728 (.)
=======
>>>>>>> 0db165c (.)
>>>>>>> d13ead25 (.)
=======
>>>>>>> 3d542a31 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
                <div>
                    <x-filament::actions :actions="$this->getNotificationFormActions()" />
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
                <div>
                    <x-filament::actions :actions="$this->getNotificationFormActions()" />
>>>>>>> 9721a5b2 (.)
=======
>>>>>>> 0db165c (.)
>>>>>>> f74da283 (.)
=======
                <div>
                    <x-filament::actions :actions="$this->getNotificationFormActions()" />
>>>>>>> 599eea9c (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
                <div>
                    <x-filament::actions :actions="$this->getNotificationFormActions()" />
>>>>>>> 1442e291 (rebase 210)
=======
>>>>>>> 0db165c (.)
>>>>>>> f16a5ca4 (rebase 210)
=======
                <div>
                    <x-filament::actions :actions="$this->getNotificationFormActions()" />
>>>>>>> f5a88785 (rebase 210)
=======
>>>>>>> 31bdf6b (.)
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> 62b0c9c (.)
>>>>>>> 23161eb (.)
=======
                <div>
                    <x-filament::actions :actions="$this->getNotificationFormActions()" />
>>>>>>> 5e14ac3 (.)
<<<<<<< HEAD
>>>>>>> fbed41ac (.)
=======
=======
>>>>>>> 0db165c (.)
>>>>>>> 4ad63a5 (.)
>>>>>>> 7cf73d1 (.)
>>>>>>> 677a6ab7 (.)
                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
<x-filament-panels::page>
    <x-filament::section>
        <x-slot name="heading">
            Test Invio Notifiche Push
        </x-slot>
=======
>>>>>>> 54220b28 (rebase 210)

                <div class="mt-6">
                    {{ $this->notificationForm }}
                </div>
                <div>
<<<<<<< HEAD
                    <x-filament-panels::form.actions :actions="$this->getNotificationFormActions()" />
                </div>
            </div>
        </x-slot>
    </x-filament::section>
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
                    <x-filament::actions :actions="$this->getNotificationFormActions()" />
=======
                <div>
                    <x-filament::actions :actions="$this->getNotificationFormActions()" />
=======
>>>>>>> 11ae5222 (.)
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
                    <x-filament::actions :actions="$this->getNotificationFormActions()" />
                </div>
            </div>
        </div>
    </div>
>>>>>>> 54220b28 (rebase 210)
=======
=======
>>>>>>> 8a8a8e2f (rebase 210)
=======
>>>>>>> b4f93b3a (rebase 210)
=======
>>>>>>> 1375c94d (rebase 210)
=======
>>>>>>> f81a620f (.)
=======
>>>>>>> 06e3078e (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
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
                    <x-filament::loading-indicator class="h-5 w-5" wire:loading wire:target="sendNotification()" />
                </div>
                <div>
                    <x-filament-panels::form.actions :actions="$this->getNotificationFormActions()" />
                </div>
            </div>
        </x-slot>
    </x-filament::section>
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 9fe1b60e (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 8a8a8e2f (rebase 210)
=======
>>>>>>> b4f93b3a (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 1375c94d (rebase 210)
=======
>>>>>>> f81a620f (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 06e3078e (.)
=======
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
</x-filament-panels::page>
