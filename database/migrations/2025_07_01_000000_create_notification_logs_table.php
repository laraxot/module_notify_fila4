<?php

declare(strict_types=1);

<<<<<<< HEAD
=======

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
=======
=======
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);


=======
>>>>>>> a12f125f4a (.)
>>>>>>> f813254 (.)
=======
declare(strict_types=1);


<<<<<<< HEAD
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
=======
>>>>>>> f5f1cb1 (.)
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
return new class extends Migration
{
=======
return new class extends Migration {
>>>>>>> 99ff506 (.)
=======
=======
>>>>>>> 0f07e6d (.)
=======
return new class extends Migration {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f813254 (.)
return new class extends Migration {
=======
return new class extends Migration
{
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
return new class extends Migration {
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
return new class extends Migration {
>>>>>>> e11621f (.)
=======
>>>>>>> a12f125f4a (.)
=======
return new class extends Migration {
>>>>>>> b93ef594b4 (.)
=======
return new class extends Migration
{
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
=======
return new class extends Migration {
>>>>>>> f5f1cb1 (.)
    /**
     * Run the migrations.
     */
    public function up(): void
    {
<<<<<<< HEAD
        if (! Schema::hasTable('notification_logs')) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        if (!Schema::hasTable('notification_logs')) {
>>>>>>> 99ff506 (.)
            Schema::create('notification_logs', function (Blueprint $table) {
=======
            Schema::create('notification_logs', function (Blueprint $table): void {
>>>>>>> 05bc3ad (.)
=======
            Schema::create('notification_logs', function (Blueprint $table) {
>>>>>>> ab15d0e (.)
=======
            Schema::create('notification_logs', function (Blueprint $table): void {
>>>>>>> c42c734 (.)
                $table->id();
                $table->string('notifiable_type');
                $table->unsignedBigInteger('notifiable_id');
                $table->string('type');
                $table->string('channel');
                $table->string('recipient');
                $table->string('subject')->nullable();
                $table->text('message')->nullable();
                $table->string('status')->default('pending');
                $table->timestamp('sent_at')->nullable();
                $table->timestamp('read_at')->nullable();
                $table->text('error_message')->nullable();
                $table->json('metadata')->nullable();
                $table->timestamps();

                $table->index(['notifiable_type', 'notifiable_id']);
                $table->index('channel');
                $table->index('status');
                $table->index('sent_at');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notification_logs');
    }
};
