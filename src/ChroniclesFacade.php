<?php

namespace Chronicles\Chronicles;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Chronicles\Chronicles\Skeleton\SkeletonClass
 */
class ChroniclesFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'chronicles';
    }
}
