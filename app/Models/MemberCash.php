<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberCash extends Model
{
    use HasFactory;
    
    protected $guarded;

    public function cashFund()
    {
        return $this->belongsTo(CashFund::class);
    }
}
