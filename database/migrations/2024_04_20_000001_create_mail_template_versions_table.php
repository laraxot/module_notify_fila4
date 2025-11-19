<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Xot\Database\Migrations\XotBaseMigration;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
return new class extends XotBaseMigration
{
=======
=======
>>>>>>> 82ae73b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
return new class() extends XotBaseMigration {
>>>>>>> 75179b8 (.)
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
    }
};
