<?php

namespace G2\FinancialAdapter\TdAmeritrade;

use G2\FinancialAdapter\Models\Account;
use G2\FinancialAdapter\Client\TradeClient;
use G2\FinancialAdapter\Client\Stock;
use G2\FinancialAdapter\Interfaces\IAction;
use G2\FinancialAdapter\Response\TdAmeritradeAccountResponse;
use G2\FinancialAdapter\Integrations\Tdameritrade\Tdameritrade;
use G2\FinancialAdapter\Exceptions\ExternalTokenExpiredException;
use Illuminate\Support\Carbon;

class TdAmeritradeAdapter extends TradeClient
{
	/**
	 * Pass the third party library client
	 *
	 * @var Tdameritrade $client
	 * */
	public function __construct(Service $service, ServiceAccount $account)
	{
		parent::__construct($service, $account);
	}

	public function getAccounts()
	{
		//fetch account
		$data = $this->client->accounts()->list('positions');
		return $data;
	}

	public function getHistory($marketSymbol)
	{
        try {
			return $this->client->getWithAuth('/marketdata/' . $marketSymbol . '/pricehistory', []);
	    } catch(\Exception $e) {
			dd($e);
		}
	}

	public function getPrice($marketSymbol)
	{
		$response = $this->client->price()->quote($marketSymbol);
		return $response;

	}

	public function swapTokens($tokens=null) : ServiceAccount
	{
		if( !is_null($tokens) )
		{
			$this->account = ServiceAccount::updateOrCreate([
				'user_id'    => auth()->id(),
				'service_id' => $this->service->id,
				'auth_code'  => $this->authCode,
				'access_token' => $this->accessToken,
				'refresh_token' => $this->refreshToken
			]);	
			return $this->account;
		}
		$tokens = $this->client->refreshToken();
        $this->account->fill($tokens);
        $this->account->save();
		return $this->account;
	}

	public function trade(Stock $stock, IAction $action)
	{

	}

	public function getOrders(string $orderId)
	{

	}
}
