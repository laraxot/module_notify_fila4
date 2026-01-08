<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

<<<<<<< HEAD
return new class extends Migration
{
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
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> de02998b (.)
return new class extends Migration {
=======
return new class extends Migration
{
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
return new class extends Migration {
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
return new class extends Migration {
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
return new class extends Migration {
>>>>>>> 9777d1b3 (.)
=======
return new class extends Migration {
=======
=======
return new class extends Migration {
=======
>>>>>>> d09cb759 (.)
=======
return new class extends Migration {
=======
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
return new class extends Migration {
=======
return new class extends Migration
{
>>>>>>> a12f125f4a (.)
=======
return new class extends Migration {
>>>>>>> b93ef594b4 (.)
=======
return new class extends Migration
{
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
return new class extends Migration {
>>>>>>> 3f537838 (.)
=======
return new class extends Migration {
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
return new class extends Migration {
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
return new class extends Migration {
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
return new class extends Migration {
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
<<<<<<< HEAD
>>>>>>> 75cb51873 (.)
=======
=======
=======
return new class extends Migration {
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
return new class extends Migration {
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
>>>>>>> c0f3d67cc (.)
=======
=======
return new class extends Migration {
>>>>>>> 2941b0bd (.)
=======
return new class extends Migration
{
=======
return new class extends Migration {
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
>>>>>>> cf20697a6 (.)
    /**
     * Esegue la migrazione.
     */
    public function up(): void
    {
        Schema::create('notification_logs', function (Blueprint $table): void {
            $table->id();
            $table->string('notifiable_type');
            $table->unsignedBigInteger('notifiable_id');
            $table->string('title');
            $table->text('content');
            $table->json('channels');
            $table->json('data')->nullable();
            $table->timestamp('sent_at');
            $table->string('status'); // sent, failed, pending
            $table->text('error')->nullable();
            $table->timestamps();
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
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> de02998b (.)

=======
            
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======

=======
>>>>>>> d09cb759 (.)
=======

=======
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
            
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
            
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> 75cb51873 (.)
=======
=======
=======

>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======

>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
>>>>>>> c0f3d67cc (.)
            $table->index(['notifiable_type', 'notifiable_id']);
            $table->index('status');
            $table->index('sent_at');
        });
    }

    /**
     * Annulla la migrazione.
     */
    public function down(): void
    {
        Schema::dropIfExists('notification_logs');
    }
};
