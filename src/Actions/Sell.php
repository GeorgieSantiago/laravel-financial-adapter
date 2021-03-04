<?php

namespace G2\FinancialAdapter\Actions;

class Sell extends BaseAction
{
    public function __construct(G2\FinancialAdapter\Client\Stock $stock)
    {
	    parent::__construct($stock);
    }
}
