<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinancialStatement extends Model
{
    use HasFactory;

    protected $guarded;

    public function financial()
    {
        return $this->belongsTo(Financial::class);
    }
}
