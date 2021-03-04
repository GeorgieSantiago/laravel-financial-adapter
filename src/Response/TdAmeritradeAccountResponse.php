<?php
namespace G2\FinancialAdapter\Response;

use Illuminate\Http\Resources\Json\JsonResource;
/**
 * @OA\Schema(
 *      title="Response for TDAmeritrade",
 *      description="objects",
 *      type="object"
 * )
 */
class TdAmeritradeAccountResponse extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($item) : array
    {
        return [
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
        ];
    }
}
