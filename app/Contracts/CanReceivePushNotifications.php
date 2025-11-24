<?php

declare(strict_types=1);

namespace Modules\Notify\Contracts;

<<<<<<< HEAD
<<<<<<< HEAD
=======
use Illuminate\Database\Eloquent\Model;
>>>>>>> 75179b8 (.)
=======
use Illuminate\Database\Eloquent\Model;
>>>>>>> 7148d73 (.)
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
     */
    public function getKey(): string|int|null;
=======
=======
>>>>>>> 7148d73 (.)
     *
     * @return string|int|null
     */
    public function getKey();
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
>>>>>>> 7148d73 (.)
}
