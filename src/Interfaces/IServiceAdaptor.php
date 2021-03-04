<?php

namespace G2\FinancialAdapter\Interfaces;

interface IServiceAdapter
{
	public function authenticate() : \Illuminate\Http\RedirectResponse;
//	public function validate(\Illuminate\Http\Request $request, \G2\FinancialAdapter\Models\Service $service) : IServiceAdapter; 
	public function getClient() : ITradeClient;
}
