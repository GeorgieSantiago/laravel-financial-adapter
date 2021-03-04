<?php

namespace G2\FinancialAdapter\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\{ BelongsTo, HasOne, HasMany };
use G2\FinancialAdapter\Services\Client\TradeBuilder;

class ServiceAccount extends Model
{
    protected $fillable = ['user_id', 'service_id', 'auth_code', 'access_token', 'refresh_token', 'expires_at', 'external_id'];

    /**
     * Query account user
     *
     * @return HasMany
     */
    public function user() : BelongsTo
    {
        return $this->belongsTo('G2\FinancialAdapter\Models\User');
    }

    /**
     * Query account service provider
     *
     * @return HasMany
     */
    public function service() : HasOne
    {
        return $this->hasOne('G2\FinancialAdapter\Models\Service', 'id', 'service_id');
    }

    public function accounts() : HasMany
    {
        return $this->hasMany('G2\FinancialAdapter\Models\Account');
    }
}
