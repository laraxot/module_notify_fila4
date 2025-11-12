<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Notify\Models\Contact;
use Modules\Xot\Database\Migrations\XotBaseMigration;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
return new class extends XotBaseMigration
{
    protected ?string $model_class = Contact::class;
=======
return new class() extends XotBaseMigration {
    protected null|string $model_class = Contact::class;
>>>>>>> 99ff506 (.)
=======
=======
>>>>>>> 0f07e6d (.)
=======
return new class() extends XotBaseMigration {
    protected null|string $model_class = Contact::class;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f813254 (.)
return new class() extends XotBaseMigration {
    protected null|string $model_class = Contact::class;
=======
return new class () extends XotBaseMigration {
    protected ?string $model_class = Contact::class;
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
return new class() extends XotBaseMigration {
    protected null|string $model_class = Contact::class;
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
return new class() extends XotBaseMigration {
    protected null|string $model_class = Contact::class;
>>>>>>> e11621f (.)
=======
>>>>>>> a12f125f4a (.)
=======
return new class() extends XotBaseMigration {
    protected null|string $model_class = Contact::class;
>>>>>>> b93ef594b4 (.)
=======
return new class () extends XotBaseMigration {
    protected ?string $model_class = Contact::class;
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // -- CREATE --
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
        $this->tableCreate(function (Blueprint $table): void {
            $table->increments('id');
            $table->uuidMorphs('model');
            $table->string('contact_type')->nullable();
            $table->string('value')->nullable();
            $table->integer('user_id')->nullable();
            $table->timestamp('verified_at')->nullable();
        });
        $this->tableUpdate(function (Blueprint $table): void {
<<<<<<< HEAD
            if (! $this->hasColumn('token')) {
=======
            if (!$this->hasColumn('token')) {
>>>>>>> 99ff506 (.)
                $table->string('token')->nullable();
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
            }
            $this->updateTimestamps(
                table: $table,
                hasSoftDeletes: true,
            );
        });
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
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
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
            }
            $this->updateTimestamps(
                table: $table,
                hasSoftDeletes: true,
            );
        });
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
    }
};
