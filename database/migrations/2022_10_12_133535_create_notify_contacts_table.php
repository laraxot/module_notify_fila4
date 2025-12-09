<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Notify\Models\Contact;
use Modules\Xot\Database\Migrations\XotBaseMigration;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
return new class() extends XotBaseMigration {
    protected null|string $model_class = Contact::class;
=======
return new class () extends XotBaseMigration {
    protected ?string $model_class = Contact::class;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
=======
return new class() extends XotBaseMigration {
    protected null|string $model_class = Contact::class;
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // -- CREATE --
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
        $this->tableCreate(function (Blueprint $table): void {
            $table->increments('id');
            $table->uuidMorphs('model');
            $table->string('contact_type')->nullable();
            $table->string('value')->nullable();
            $table->integer('user_id')->nullable();
            $table->timestamp('verified_at')->nullable();
        });
        $this->tableUpdate(function (Blueprint $table): void {
            if (!$this->hasColumn('token')) {
                $table->string('token')->nullable();
            }
            $this->updateTimestamps(
                table: $table,
                hasSoftDeletes: true,
            );
        });
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
        $this->tableCreate(
            function (Blueprint $table): void {
                $table->increments('id');
                $table->uuidMorphs('model');
                $table->string('contact_type')->nullable();
                $table->string('value')->nullable();
                $table->integer('user_id')->nullable();
                $table->timestamp('verified_at')->nullable();
            }
        );
        $this->tableUpdate(
            function (Blueprint $table): void {
                if (! $this->hasColumn('token')) {
                    $table->string('token')->nullable();
                }
                $this->updateTimestamps(table: $table, hasSoftDeletes: true);
            }
        );
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
    }
};
