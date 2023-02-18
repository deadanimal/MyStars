<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cashout extends Model
{
    use HasFactory;

    protected $fillable = [
        'wallet_id',
        'user_id',
        'status',
        'amount',
    ];     
}
