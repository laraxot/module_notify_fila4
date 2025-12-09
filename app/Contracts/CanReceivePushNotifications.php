<?php

declare(strict_types=1);

namespace Modules\Notify\Contracts;

<<<<<<< HEAD
=======
use Illuminate\Database\Eloquent\Model;
>>>>>>> 8bc2fc9f (first)
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
=======
     *
     * @return string|int|null
     */
    public function getKey();
>>>>>>> 8bc2fc9f (first)
}
