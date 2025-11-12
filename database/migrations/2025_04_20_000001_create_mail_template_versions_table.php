<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Xot\Database\Migrations\XotBaseMigration;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
return new class extends XotBaseMigration
{
=======
=======
>>>>>>> 95531e1 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
return new class() extends XotBaseMigration {
>>>>>>> 99ff506 (.)
    public function up(): void
    {
        $this->tableCreate(function (Blueprint $table): void {
            $table->increments('id');
            $table->unsignedInteger('mail_template_id');
            $table->integer('version');
            $table->text('subject')->nullable();
            $table->longText('html_template');
            $table->longText('text_template')->nullable();
            $table->json('metadata')->nullable();
            $table->string('created_by')->nullable();
            $table->text('change_notes')->nullable();

            $table->foreign('mail_template_id')->references('id')->on('mail_templates')->onDelete('cascade');

            $table->unique(['mail_template_id', 'version']);
        });

        $this->tableUpdate(function (Blueprint $table): void {
            $this->updateTimestamps($table, true);
        });
<<<<<<< HEAD
=======
=======
return new class () extends XotBaseMigration {
=======
return new class() extends XotBaseMigration {
>>>>>>> b93ef594b4 (.)
    public function up(): void
    {
        $this->tableCreate(function (Blueprint $table): void {
            $table->increments('id');
            $table->unsignedInteger('mail_template_id');
            $table->integer('version');
            $table->text('subject')->nullable();
            $table->longText('html_template');
            $table->longText('text_template')->nullable();
            $table->json('metadata')->nullable();
            $table->string('created_by')->nullable();
            $table->text('change_notes')->nullable();

            $table->foreign('mail_template_id')->references('id')->on('mail_templates')->onDelete('cascade');

            $table->unique(['mail_template_id', 'version']);
        });

<<<<<<< HEAD
=======
return new class () extends XotBaseMigration {
    public function up(): void
    {
        $this->tableCreate(
            function (Blueprint $table): void {
                $table->increments('id');
                $table->unsignedInteger('mail_template_id');
                $table->integer('version');
                $table->text('subject')->nullable();
                $table->longText('html_template');
                $table->longText('text_template')->nullable();
                $table->json('metadata')->nullable();
                $table->string('created_by')->nullable();
                $table->text('change_notes')->nullable();

                $table->foreign('mail_template_id')
                    ->references('id')
                    ->on('mail_templates')
                    ->onDelete('cascade');

                $table->unique(['mail_template_id', 'version']);
            }
        );

>>>>>>> origin/develop
        $this->tableUpdate(
            function (Blueprint $table): void {
                $this->updateTimestamps($table, true);
            }
        );
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        $this->tableUpdate(function (Blueprint $table): void {
            $this->updateTimestamps($table, true);
        });
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
    }
};
