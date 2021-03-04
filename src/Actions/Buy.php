<?php

namespace G2\FinancialAdapter\Services\Actions;

class Buy extends BaseAction
{
    public function __construct(G2\FinancialAdapter\Services\Client\Stock $stock)
    {
	    parent::__construct($stock);
    }
}