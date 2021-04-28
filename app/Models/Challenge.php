<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Challenge extends Model
{
    use HasFactory;
    public function session(){
        return $this->belongsTo(Session::class);
    }
    public function teams(){
        return $this->belongsToMany(Team::class);
    }
}
