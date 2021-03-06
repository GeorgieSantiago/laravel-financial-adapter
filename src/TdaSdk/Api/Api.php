<?php

namespace G2\FinancialAdapter\TdaSdk\Api;

use G2\FinancialAdapter\TdaSdk\Tdameritrade;

class Api
{
    /**
     * @var Client
     */
    protected $client;

    public function __construct($client)
    {
        $this->client = $client;
    }

    public function client()
    {
        return $this->client;
    }
}
