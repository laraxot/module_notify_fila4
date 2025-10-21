<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

/**
 * Base MorphPivot for Notify module.
 *
 * Extends XotBaseMorphPivot which provides all standard properties and casts.
 *
 * @see \Modules\Xot\Models\XotBaseMorphPivot
 */
abstract class BaseMorphPivot extends \Modules\Xot\Models\XotBaseMorphPivot
{
    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'notify';
}
