<?php

namespace G2\FinancialAdapter\Services\Client;

use G2\FinancialAdapter\Services\Interfaces\ITradeClient;
use G2\FinancialAdapter\Services\Client\BaseBuilder;
use G2\FinancialAdapter\Models\Account;
use G2\FinancialAdapter\Models\Service;


abstract class TradeClient implements ITradeClient
{
    /**
     * Pass the configured client builder 
     *
     * @var G2\Financial\Models\Service
     * */
    protected $service;

    /**
    * Pass the configured client builder 
    *
    * @var G2\Financial\Models\ServiceAccount
    * */
    protected $account;
    /**
     * Pass the configured client builder 
     *
     * @var G2\FinancialAdapter\Services\Interfaces\ITradeClient
     * */
    protected $client;

    /*
     * @param IServiceAdapter $builder
     * */
    public function __construct(Service $service, ServiceAccount $account=null)
    {
        $this->service = $service;
        $this->auth = $this->service->auth();
        $this->client = $this->service->client();
        $this->account = $account;
    }
}
