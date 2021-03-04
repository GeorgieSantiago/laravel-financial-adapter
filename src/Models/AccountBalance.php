<?php

namespace G2\FinancialAdapter\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountBalance extends Model
{
    
    protected $fillable = [
        'balance_type',
        'accrued_interest',
        'available_funds_non_marginable_trade',
        'bond_value',
        'cash_balance',
        'buying_power',
        'cash_available_for_trading',
        'cash_receipts',
        'day_trading_buying_power',
        'day_trading_buying_power_call',
        'day_trading_equity_call',
        'equity',
        'equity_percentage',
        'liquidation_value',
        'long_margin_value',
        'long_option_market_value',
        'long_stock_value',
        'maintenence_call',
        'maintenence_requirement',
        'margin',
        'margin_equity',
        'money_market_fund',
        'mutual_fund_value',
        'short_margin_value',
        'short_option_margin_value',
        'total_cash',
        'is_in_call',
        'unsettled_cash',
        'pending_deposits',
        'margin_balance',
        'short_balance',
        'account_value',
        'account_id'
    ];
    
    use HasFactory;
}
