<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',        
        'status',
        'platform',
        'reference_link',
        'caption',
        'brand_introduction',
        'creative_direction',
        'user_id',
    ];  
    
    public function attachments()
    {
        return $this->hasMany(CampaignAttachment::class);
    }  

}
