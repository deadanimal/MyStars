<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileCreator extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'summary',
        'description',        
        'profile_id',

        'tiktok_handle',
        'instagram_handle',
        'youtube_handle',
        'twitter_handle',
        'facebook_handle',
    ];            
}
