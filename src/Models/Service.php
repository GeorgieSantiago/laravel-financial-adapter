<?php

namespace G2\FinancialAdapter\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $primaryKey = "code";
    protected $fillable = ['name', 'code'];

    public function adapter() : G2\FinancialAdapter\Interfaces\IServiceAdapter
    {
        return config('providers')[$this->code]['adapter'];
    }

    public function auth() : G2\FinancialAdapter\Interfaces\IServiceAdapter
    {
        return config('providers')[$this->code]['auth'];
    }

    public function client()
    {
        return config('providers')[$this->code]['client'];
    }
}
