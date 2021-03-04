<?php

namespace G2\FinancialAdapter\Services\Interfaces;

use G2\FinancialAdapter\Services\ServiceToken;

interface IServiceAdapter
{
	public function authenticate() : \Illuminate\Http\RedirectResponse;
	public function validate(\Illuminate\Http\Request $request, \G2\FinancialAdapter\Models\Service $service) : IServiceAdapter; 
	public function getClient() : ITradeClient;
}
