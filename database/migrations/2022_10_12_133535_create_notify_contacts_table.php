<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Notify\Models\Contact;
use Modules\Xot\Database\Migrations\XotBaseMigration;

<<<<<<< HEAD
return new class() extends XotBaseMigration {
    protected null|string $model_class = Contact::class;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
return new class() extends XotBaseMigration {
    protected null|string $model_class = Contact::class;
=======
return new class () extends XotBaseMigration {
    protected ?string $model_class = Contact::class;
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
            if (!$this->hasColumn('token')) {
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
