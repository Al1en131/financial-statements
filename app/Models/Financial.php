<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Financial extends Model
{
    use HasFactory;

    protected $fillable = [
        'keterangan',  // Description of the transaction
        'debit',       // Debit amount
        'kredit',      // Credit amount
        'sisa_uang',   // Balance after transaction
    ];
}
