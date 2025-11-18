<?php

declare(strict_types=1);

namespace Modules\Notify\Providers;

use Modules\Xot\Providers\XotBaseRouteServiceProvider;

class RouteServiceProvider extends XotBaseRouteServiceProvider
{
<<<<<<< HEAD
<<<<<<< HEAD
    public string $name = 'Notify';

=======
>>>>>>> 8bc2fc9f (first)
=======
    public string $name = 'Notify';

>>>>>>> 20a3d3b (.)
    /**
     * The module namespace to assume when generating URLs to actions.
     */
    protected string $moduleNamespace = 'Modules\Notify\Http\Controllers';

    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;
<<<<<<< HEAD
<<<<<<< HEAD
=======

    public string $name = 'Notify';
>>>>>>> 8bc2fc9f (first)
=======
>>>>>>> 20a3d3b (.)
}
