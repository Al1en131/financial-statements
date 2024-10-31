<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CashFundInformation extends Model
{
    use HasFactory;

    protected $table = 'cash_fund_informations';

    protected $guarded;

    public function cashFund()
    {
        return $this->belongsTo(CashFund::class);
    }

    public function memberCash()
    {
        return $this->hasMany(MemberCash::class);
    }
    public function getFormattedDateAttribute()
    {
        return Carbon::parse($this->date)->format('Y-m');
    }
}
