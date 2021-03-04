<?php

namespace G2\FinancialAdapter\Actions;

use G2\FinancialAdapter\Services\Interfaces\IActionInterface;

abstract class BaseAction implements IActionInterface
{
    /**
     * Asset to work with
     * @var G2\FinancialAdapter\Services\Client\Stock
     */
    protected $stock;

    public function __construct(G2\FinancialAdapter\Client\Stock $stock)
    {
	    $this->stock = $stock;
    }

    public function handler();
}
