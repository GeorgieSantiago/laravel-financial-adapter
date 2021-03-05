<?php

namespace G2\FinancialAdapter\Integrations\Tdameritrade\Api;

use G2\FinancialAdapter\Integrations\Tdameritrade\Tdameritrade;

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
