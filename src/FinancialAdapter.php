<?php

namespace G2\FinancialAdapter;
//Adapter
use G2\FinancialAdapter\Models\Service;
use G2\FinancialAdapter\Client\TradeClient;
//Services
use G2\FinancialAdapter\TdAmeritrade;

class FinancialAdapter
{
    public static function Connect(ServiceAccount $account=null)
    {
        $service = $account->service();
        if( is_null($account) )
        {
            $auth = $service->auth();
            return $auth->authenticate();
        }

        $adapter = $service->adapter();
        $adapter->swapTokens();
        return $adapter;
    }
}

