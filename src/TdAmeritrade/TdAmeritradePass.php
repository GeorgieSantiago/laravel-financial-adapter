<?php

namespace G2\FinancialAdapter\TdAmeritrade;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Mackensiealvarezz\Tdameritrade\Tdameritrade;
use G2\FinancialAdapter\Client\{ TradeAccount, TradeClient, BaseBuilder };
use G2\FinancialAdapter\Interfaces\{ IServiceAdapter, ITradeClient };
use G2\FinancialAdapter\Models\ServiceAccount;
use G2\FinancialAdapter\Models\Service;


class TdAmeritradePass
{

	public function __construct(ServiceAccount $account)
	{
		$this->account = $account;
	}

    public static function authenticate() : RedirectResponse
    {
	    return Tdameritrade::redirectOAuth();
    }

    public function update() {
		$this->account->fill([
			'account_type' => $external['type'],
			'account_external_id' => $external['accountId'] ?? null,
			'is_day_trader' => $external['isDayTrader'] ?? null,
			'is_closing_only_restricted' => $external['isClosingOnlyRestricted'] ?? null,
			'service_account_id' => $serviceAccount->id
		]);

		$item = $external['balance'];

	    $this->account->balance()->fill([
			'balance_type' => $item['balanceType'] ?? "",
			'accrued_interest' => $item['accruedInterest'] ?? null,
			'available_funds_non_marginable_trade' => $item['availableFundsNonMarginableTrade'] ?? null,
			'bond_value' => $item['bondValue'] ?? null,
			'cash_balance' => $item['cashBalance'] ?? null,
			'buying_power' => $item['buyingPower'] ?? null,
			'cash_available_for_trading' => $item['cashAvailableForTrading'] ?? null,
			'cash_receipts' => $item['cashReceipts'] ?? null,
			'day_trading_buying_power' => $item['dayTradingBuyingPower'] ?? null,
			'day_trading_buying_power_call' => $item['dayTradingBuyingPowerCall'] ?? null,
			'day_trading_equity_call' => $item['dayTradingEquityCall'] ?? null,
			'equity' => $item['equity'] ?? null,
			'equity_percentage' => $item['equityPercentage'] ?? null,
			'liquidation_value' => $item['liquidationValue'] ?? null,
			'long_margin_value' => $item['longMarginValue'] ?? null,
			'long_option_market_value' => $item['longOptionMarketValue'] ?? null,
			'long_stock_value' => $item['longStockValue'] ?? null,
			'maintenence_call' => $item['maintenanceCall'] ?? null,
			'maintenence_requirement' => $item['maintenanceRequirement'] ?? null,
			'margin' => $item['margin'] ?? null,
			'margin_equity' => $item['marginEquity'] ?? null,
			'money_market_fund' => $item['moneyMarketFund'] ?? null,
			'mutual_fund_value' => $item['mutualFundValue'] ?? null,
			'short_margin_value' => $item['shortMarginValue'] ?? null,
			'short_option_margin_value' => $item['shortOptionMarketValue'] ?? null,
			'total_cash' => $item['totalCash'] ?? null,
			'is_in_call' => $item['isInCall'] ?? null,
			'unsettled_cash' => null,
			'pending_deposits' => $item['pendingDeposits'] ?? null,
			'margin_balance' => $item['marginBalance'] ?? null,
			'short_balance' => $item['shortBalance'] ?? null,
			'account_value' => $item['accountValue'] ?? null,
		]);
    }
}
