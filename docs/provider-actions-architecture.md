<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
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
>>>>>>> 2a97406c (.)
=======
>>>>>>> 4f042b88 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 712617d3 (.)
=======
>>>>>>> fdb24863 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 66453ace (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> 712617d3 (.)
=======
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> 9c45d9bd (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 8c8937e7 (rebase 210)
<<<<<<< HEAD
=======
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 75179b855 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 66453ace (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> 712617d3 (.)
>>>>>>> laraxot/develop
=======
>>>>>>> 2a97406c (.)
>>>>>>> 998e6866b (.)
=======
>>>>>>> 36136dcfa (.)
=======
=======
>>>>>>> 712617d3 (.)
>>>>>>> 731b801a8 (.)
=======
>>>>>>> b85076e48 (.)
=======
=======
>>>>>>> 4fc21b78 (rebase 210)
>>>>>>> 43dd68f4b (.)
=======
>>>>>>> ce1853afd (.)
=======
=======
>>>>>>> eb62d6cf (rebase 210)
>>>>>>> 7a142b4f5 (.)
=======
>>>>>>> c31e900eb (.)
=======
>>>>>>> fea359347 (.)
# Architettura delle Azioni dei Provider in Notify

## Struttura e Principi Fondamentali

Le azioni dei provider in Notify seguono il pattern di Spatie Queueable Actions e sono progettate per supportare molteplici provider mantenendo un'interfaccia comune e consistente.

### 1. Interfaccia Comune

Tutte le azioni di invio SMS devono implementare `SmsProviderActionInterface` per garantire un'interfaccia unificata:

```php
interface SmsProviderActionInterface
{
    public function execute(SmsData $smsData): array;
}
```

Questo assicura che qualsiasi client possa utilizzare qualsiasi provider senza modificare il codice di utilizzo.

### 2. Posizione delle Azioni

Le azioni specifiche dei provider SMS si trovano nella directory:
<<<<<<< HEAD
- `/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Actions/SMS/`
=======
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- `/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Actions/SMS/`
=======
- `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Actions/SMS/`
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
- `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 75179b85 (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> f963d2c0 (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 31f5d28f (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 31f5d28f (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 31f5d28f (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 6608a1a0 (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 23cbbaf5 (.)
=======
<<<<<<< HEAD
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 909e45af (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> bb7e77c2 (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> b99af5a8 (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> f3086887 (rebase 210)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 3d462363 (rebase 210)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 54ad93c4 (rebase 210)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 6e12a84b (rebase 210)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 545977c8 (rebase 210)
=======
<<<<<<< HEAD
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 69fa7d37 (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 31f5d28f (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 6608a1a0 (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 23cbbaf5 (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 909e45af (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> bb7e77c2 (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> b99af5a8 (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> f3086887 (rebase 210)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 3d462363 (rebase 210)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 54ad93c4 (rebase 210)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 6e12a84b (rebase 210)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 545977c8 (rebase 210)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 69fa7d37 (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 31f5d28f (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 6608a1a0 (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 23cbbaf5 (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 909e45af (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> bb7e77c2 (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> b99af5a8 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> f3086887 (rebase 210)
=======
<<<<<<< HEAD
=======
>>>>>>> e2f1a4045 (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 01af324fe (.)
=======
>>>>>>> 53eef8d8d (.)
=======
>>>>>>> 13aa25113 (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> 7aae79847 (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 74eb2e964 (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 3d462363 (rebase 210)
=======
<<<<<<< HEAD
>>>>>>> 0a5473e16 (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 54ad93c4 (rebase 210)
=======
<<<<<<< HEAD
>>>>>>> 6ad5224fb (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> 1c96b91fe (.)
=======
>>>>>>> ad905ce9c (.)
- `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Actions/SMS/`
- `/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Actions/SMS/`
- `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> bf479cc (.)
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
>>>>>>> e2f1a4045 (.)
=======
>>>>>>> 01af324fe (.)
=======
>>>>>>> 53eef8d8d (.)
=======
>>>>>>> 13aa25113 (.)
=======
>>>>>>> 7aae79847 (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
>>>>>>> 74eb2e964 (.)
=======
>>>>>>> 0a5473e16 (.)
=======
>>>>>>> 6ad5224fb (.)
=======
>>>>>>> 1c96b91fe (.)
=======
>>>>>>> ad905ce9c (.)
>>>>>>> 31f5d28f (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> a404ea71 (.)
=======
- `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Actions/SMS/`
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
- `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 75179b85 (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> a404ea71 (.)
=======
- `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Actions/SMS/`
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
- `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 75179b85 (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> a404ea71 (.)
=======
- `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Actions/SMS/`
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
- `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> a404ea71 (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> ca10d6ad (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> febe79e3 (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> a29a4728 (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 4f042b88 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bb7e77c2 (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 9721a5b2 (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 1442e291 (rebase 210)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> fdb24863 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3d462363 (rebase 210)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> fcaebc79 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 43dd68f4b (.)
=======
- `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Actions/SMS/`
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
- `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 4fc21b78 (rebase 210)
<<<<<<< HEAD
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 9d3810d0 (rebase 210)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> d38aa9d2 (rebase 210)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 9e7ba5b6 (rebase 210)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
- `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Actions/SMS/`
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
- `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> c8b1c8bf (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 9cf0dc90 (.)
=======
- `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Actions/SMS/`
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
- `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 75179b85 (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> a404ea71 (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> ee18dd92 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6608a1a0 (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> ca10d6ad (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> febe79e3 (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> a29a4728 (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> c7a4727b (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b99af5a8 (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 9721a5b2 (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 1442e291 (rebase 210)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> fcaebc79 (rebase 210)
=======
- `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Actions/SMS/`
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
- `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 4fc21b78 (rebase 210)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 9c45d9bd (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 9d3810d0 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> d38aa9d2 (rebase 210)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 8c8937e7 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 545977c8 (rebase 210)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 9e7ba5b6 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
- `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Actions/SMS/`
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
- `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> c8b1c8bf (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 9cf0dc90 (.)
=======
- `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Actions/SMS/`
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
- `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 75179b85 (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> f963d2c0 (.)
=======
- `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Actions/SMS/`
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
- `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 75179b855 (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> a404ea71 (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> ca10d6ad (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> febe79e3 (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 2a97406c (.)
<<<<<<< HEAD
=======
>>>>>>> 909e45af (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> a29a4728 (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 9721a5b2 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 1442e291 (rebase 210)
>>>>>>> laraxot/develop
=======
>>>>>>> 1487fe812 (.)
=======
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> f963d2c0 (.)
>>>>>>> 12a7e2462 (.)
=======
>>>>>>> e2f1a4045 (.)
=======
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> a404ea71 (.)
>>>>>>> c4282a934 (.)
=======
>>>>>>> 4bec160e6 (.)
=======
=======
>>>>>>> 6608a1a0 (.)
>>>>>>> 01af324fe (.)
=======
>>>>>>> 8c6d84fe6 (.)
=======
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 66453ace (.)
>>>>>>> 138485550 (.)
=======
>>>>>>> 53eef8d8d (.)
=======
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> febe79e3 (.)
>>>>>>> 753ea7aca (.)
=======
>>>>>>> 998e6866b (.)
=======
>>>>>>> 13aa25113 (.)
=======
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> a29a4728 (.)
>>>>>>> fdad57c30 (.)
=======
>>>>>>> 36136dcfa (.)
=======
=======
>>>>>>> bb7e77c2 (.)
>>>>>>> 7aae79847 (.)
=======
>>>>>>> 275b7ad99 (.)
=======
=======
>>>>>>> b99af5a8 (.)
>>>>>>> 47bbf2b1c (.)
=======
>>>>>>> b215d516b (.)
=======
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 712617d3 (.)
>>>>>>> 731b801a8 (.)
=======
>>>>>>> 74eb2e964 (.)
=======
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 1442e291 (rebase 210)
>>>>>>> f957fb24b (.)
=======
>>>>>>> b85076e48 (.)
=======
=======
>>>>>>> 3d462363 (rebase 210)
>>>>>>> 0a5473e16 (.)
=======
>>>>>>> 252fa579e (.)
=======
>>>>>>> 43dd68f4b (.)
=======
>>>>>>> ce1853afd (.)
=======
=======
>>>>>>> 54ad93c4 (rebase 210)
>>>>>>> 6ad5224fb (.)
=======
>>>>>>> 21a6fa9bc (.)
=======
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> eb62d6cf (rebase 210)
>>>>>>> 7a142b4f5 (.)
=======
>>>>>>> 1c96b91fe (.)
=======
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> d38aa9d2 (rebase 210)
>>>>>>> 610b999f1 (.)
=======
>>>>>>> c31e900eb (.)
=======
=======
>>>>>>> 545977c8 (rebase 210)
>>>>>>> ad905ce9c (.)
=======
>>>>>>> ff78f10a5 (.)
=======
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 36ac4fc1 (.)
>>>>>>> fea359347 (.)

### 3. Convenzioni di Nomenclatura

- Le azioni devono essere nominate seguendo il pattern `Send{Provider}SMSAction`
- Esempio: `SendNetfunSMSAction`, `SendTwilioSMSAction`, ecc.

## Data Transfer Objects

### Principale: `SmsData`

La classe `SmsData` è l'interfaccia comune che tutte le azioni di provider devono accettare:

```php
class SmsData extends Data
{
    public string $from;    // Mittente
    public string $to;      // Destinatario
    public string $body;    // Corpo del messaggio
}
```

### DTOs Specifici dei Provider

I provider possono avere anche DTOs specifici che estendono `SmsData` con proprietà aggiuntive:

```php
class NetfunSmsData extends Data
{
    public string $recipient;    // Equivalente a 'to' in SmsData
    public string $message;      // Equivalente a 'body' in SmsData
    public string $sender;       // Equivalente a 'from' in SmsData
    public ?string $reference;   // Proprietà specifica di Netfun
    public ?string $scheduledDate; // Proprietà specifica di Netfun
}
```

## Adattamento tra SmsData e DTOs Specifici

Le azioni di provider devono sempre:

1. **Accettare `SmsData` nel metodo `execute()`**:
   ```php
   public function execute(SmsData $smsData): array
   ```

2. **Adattare internamente `SmsData` ai propri DTOs specifici** se necessario:
   ```php
   // All'interno di SendNetfunSMSAction
   $netfunData = new NetfunSmsData(
       recipient: $smsData->to,
       message: $smsData->body,
       sender: $smsData->from,
       reference: null,
       scheduledDate: null
   );
   ```

## Gestione delle Configurazioni

Le azioni devono recuperare le configurazioni specifiche del provider dal percorso corretto:

```php
// Configurazioni specifiche del provider
$token = config('sms.drivers.provider_name.token');

// Configurazioni globali a livello di root
$debug = config('sms.debug', false);
```

## Risultato dell'Esecuzione

Tutte le azioni devono restituire un array con almeno i seguenti campi:

```php
return [
    'success' => true|false,  // Successo o fallimento
    'message_id' => '...',    // ID del messaggio (se disponibile)
    'reference' => '...',     // Riferimento per il tracciamento
    // Altri campi specifici del provider...
];
```

## Gestione degli Errori

Tutte le azioni devono gestire correttamente gli errori:

1. Log appropriati degli errori
2. Lancio di eccezioni in caso di errori critici
3. Restituzione di un array con `'success' => false` in caso di errori non critici
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 998e6866b (.)
=======
>>>>>>> 36136dcfa (.)
=======
>>>>>>> 43dd68f4b (.)
=======
>>>>>>> ce1853afd (.)
=======
>>>>>>> 7a142b4f5 (.)
=======
>>>>>>> c31e900eb (.)
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 2a97406c (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> 712617d3 (.)
=======
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 66453ace (.)
=======
>>>>>>> 731b801a8 (.)
=======
>>>>>>> b85076e48 (.)
=======
>>>>>>> fea359347 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> 712617d3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 75179b855 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 66453ace (.)
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> 712617d3 (.)
>>>>>>> laraxot/develop
=======
>>>>>>> 301ad8b44 (.)
=======
>>>>>>> 998e6866b (.)
=======
=======
>>>>>>> 4f042b88 (.)
>>>>>>> 36136dcfa (.)
=======
>>>>>>> 731b801a8 (.)
=======
=======
>>>>>>> fdb24863 (rebase 210)
>>>>>>> b85076e48 (.)
=======
>>>>>>> 43dd68f4b (.)
=======
=======
>>>>>>> 9c45d9bd (rebase 210)
>>>>>>> ce1853afd (.)
=======
>>>>>>> 7a142b4f5 (.)
=======
=======
>>>>>>> 8c8937e7 (rebase 210)
>>>>>>> c31e900eb (.)
=======
>>>>>>> fea359347 (.)
