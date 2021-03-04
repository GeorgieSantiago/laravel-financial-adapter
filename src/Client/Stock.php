<?php

namespace G2\FinancialAdapter\Services\Client;

use Money\Money;

class Stock extends Money 
{
    protected $marketSymbol;

    public function __construct(Money\Currency $currency, int $value, string $symbol) 
    {
        $this->marketSymbol = $symbol;
        parent::__construct($value, $currency);	
    }
}
