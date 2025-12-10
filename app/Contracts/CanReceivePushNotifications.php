<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Modules\Notify\Contracts;

<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
use Illuminate\Database\Eloquent\Model;
>>>>>>> 75179b85 (.)
=======
use Illuminate\Database\Eloquent\Model;
>>>>>>> 75179b855 (.)
>>>>>>> laraxot/develop
=======
=======
use Illuminate\Database\Eloquent\Model;
>>>>>>> 75179b8 (.)
>>>>>>> 7ceb00286 (.)
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b855 (.)
>>>>>>> laraxot/develop
=======
     */
    public function getKey(): string|int|null;
=======
>>>>>>> 7ceb00286 (.)
     *
     * @return string|int|null
     */
    public function getKey();
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b855 (.)
>>>>>>> laraxot/develop
=======
>>>>>>> 75179b8 (.)
>>>>>>> 7ceb00286 (.)
}
=======
>>>>>>> 301ad8b44 (.)
