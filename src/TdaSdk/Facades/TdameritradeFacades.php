<?php

namespace G2\FinancialAdapter\TdaSdk\Facades;

use Illuminate\Support\Facades\Facade;

class TdameritradeFacades extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'tdameritrade';
    }
}
