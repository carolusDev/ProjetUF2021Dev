<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;
    public function challenges(){
        return $this->hasMany(Challenge::class);
    }
    public function teams(){
        return $this->hasMany(Team::class);
    }
}
