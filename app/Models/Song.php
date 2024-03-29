<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;
    
    // Userに対するリレーション
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
