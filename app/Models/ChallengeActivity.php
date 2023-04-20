<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChallengeActivity extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'challenge_id'
    ];      
}
