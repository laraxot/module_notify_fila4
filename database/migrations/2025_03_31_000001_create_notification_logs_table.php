<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
return new class extends Migration {
=======
return new class extends Migration
{
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
=======
return new class extends Migration {
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
    /**
     * Esegue la migrazione.
     */
    public function up(): void
    {
        Schema::create('notification_logs', function (Blueprint $table) {
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)

=======
            
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
=======

>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
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
