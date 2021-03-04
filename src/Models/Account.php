<?php

namespace G2\FinancialAdapter\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $fillable = [
        'account_name',
        'account_type',
        'account_external_id',
        'is_day_trader',
        'is_closing_only_restricted',
        'service_account_id'
    ];

    public function serviceAccount() : HasOne
    {
        return $this->hasOne('G2\FinancialAdapter\Models\ServiceAccount', 'id', 'service_account_id');
    }
}
