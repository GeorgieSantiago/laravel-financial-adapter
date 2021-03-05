<?php

namespace G2\FinancialAdapter\Models;

use Illuminate\Database\Eloquent\Model;
use ServiceAccount;

class Service extends Model
{
    protected $fillable = ['name', 'code'];

    public function adapter() : G2\FinancialAdapter\Interfaces\IServiceAdapter
    {
        $adapter = config("FinancialAdapter")["services"][$this->code]["adapter"];
        return new $adapter;
    }

    public function auth(ServiceAccount $account) : G2\FinancialAdapter\Interfaces\IServiceAdapter
    {
        $auth = config("FinancialAdapter")["services"][$this->code]["auth"];
        return new $auth($account);
    }

    public function client()
    {
        $client = config("FinancialAdapter")['services'][$this->code]['client'];
        return new $client;
    }

    public function redirect()
    {
        $auth = config("FinancialAdapter")["services"][$this->code]["auth"];
        return $auth::authenticate();
    }
}
