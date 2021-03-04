<?php

namespace G2\FinancialAdapter\Interfaces;

use G2\FinancialAdapter\Services\Client\Stock;
use G2\FinancialAdapter\Services\Interfaces\IAction;


interface ITradeClient
{
	public function getAccounts();
	public function trade(Stock $stock, IAction $action);
}
