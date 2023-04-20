<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Challenge extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status',
        'budget',
        'platform',
        'platform_content_type',
        'creative_direction',
        'brand_description',
        'geography',
        'audience',
        'brand_id'

    ];    
    
    public function submissions()
    {
        return $this->hasMany(Submission::class);
    }   
    
    public function references()
    {
        return $this->hasMany(ChallengeReference::class);
    }  
    
    public function activities()
    {
        return $this->hasMany(ChallengeActivity::class);
    }      
}
