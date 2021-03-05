<?php

namespace G2\FinancialAdapter;
//Adapter
use G2\FinancialAdapter\Models\Service;
use G2\FinancialAdapter\Models\ServiceAccount;
use G2\FinancialAdapter\Client\TradeClient;
//Services
use G2\FinancialAdapter\TdAmeritrade;

class FinancialAdapter
{
    public static function Connect($code, ServiceAccount $account=null)
    {
        if( is_null($account) )
        {
            return Service::where("code", $code)
                ->first()
                ->redirect();
        }

        $service = $account->service();
        $adapter = $service->adapter();
        $adapter->swapTokens();
        return $adapter;
    }
}

