<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'uuid',
        'username',
        'profile_type',
        'profile_picture',
        'user_id',
        'status'
    ];      

    public function user()
    {
        return $this->belongsTo(User::class);
    }    
    
    public function manager()
    {
        return $this->belongsTo(Profile::class, 'manager_id');
    }       
}
