<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CampaignAttachment extends Model
{
    use HasFactory;

    protected $fillable = [
        'link',        
        'campaign_id',
        'user_id',
    ];      

    public function campaign()
    {
        return $this->belongsTo(Campaign::class);
    }      
}
