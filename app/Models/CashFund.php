<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CashFund extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'cash_fund_name'];

    public function cashFundInformations()
    {
        return $this->hasMany(CashFundInformation::class);
    }
}
