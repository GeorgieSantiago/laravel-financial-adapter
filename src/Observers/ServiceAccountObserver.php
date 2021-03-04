<?php

namespace G2\FinancialAdapter\Observers;

use G2\FinancialAdapter\Services\Client\TradeBuilder;
use G2\FinancialAdapter\Models\ServiceAccount;

class ServiceAccountObserver
{

   /**
    * Handle the account "index" event.
    *
    * @param  \G2\FinancialAdapter\Models\ServiceAccount  $account
    * @return void
    */
    public function index(ServiceAccount $serviceAccount)
    {
        $serviceAccount->service()->update();
    }

    /**
     * Handle the account "created" event.
     *
     * @param  \G2\FinancialAdapter\Models\ServiceAccount  $account
     * @return void
     */
    public function created(ServiceAccount $serviceAccount)
    {
        $serviceAccount->service()->update();
    }
}
