<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CashFund extends Model
{
    use HasFactory;

    protected $guarded;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function memberCash()
    {
        return $this->hasMany(MemberCash::class, 'cash_fund_id'); // Sesuaikan dengan nama kolom foreign key
    }
}
