<?php

declare(strict_types=1);

namespace Modules\Notify\Contracts;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Model;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Illuminate\Database\Eloquent\Model;
>>>>>>> 75179b8 (.)
=======
use Illuminate\Database\Eloquent\Model;
>>>>>>> 75179b85 (.)
=======
=======
use Illuminate\Database\Eloquent\Model;
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
>>>>>>> 7624f916 (.)
use Illuminate\Support\Collection;

/**
 * phpstan-require-extends Model.
 */
interface CanReceivePushNotifications
{
    /**
     * @return Collection<string>
     */
    public function getMobileDeviceTokens(): Collection;

    /**
     * Get the value of the model's primary key.
     * non si puo usare mixed che cs lo cancella.
<<<<<<< HEAD
     */
    public function getKey(): string|int|null;
     */
    public function getKey(): string|int|null;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     */
    public function getKey(): string|int|null;
=======
=======
>>>>>>> 75179b85 (.)
=======
     */
    public function getKey(): string|int|null;
=======
>>>>>>> c8b1c8bf (.)
>>>>>>> 7624f916 (.)
     *
     * @return string|int|null
     */
    public function getKey();
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
>>>>>>> 7624f916 (.)
}
