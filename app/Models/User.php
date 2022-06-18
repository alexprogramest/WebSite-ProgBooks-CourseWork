<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model{
    use HasFactory;

    public function premiumType(){
        return $this->belongsTo(PremiumType::class);
    }
    
    public function books(){
        return $this->belongsToMany(Book::class);
    }
}
