<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    
    // Userに対するリレーション
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    
    // Pictureに対するリレーション
    public function pictures()   
    {
        return $this->hasMany(Picture::class);  
    }
}
