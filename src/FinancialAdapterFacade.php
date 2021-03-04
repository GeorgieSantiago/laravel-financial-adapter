<?php

namespace G2\FinancialAdapter;

use Illuminate\Support\Facades\Facade;

/**
 * @see \G2\FinancialAdapter\Skeleton\SkeletonClass
 */
class FinancialAdapterFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'FinancialAdapter';
    }
}
