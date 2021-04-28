<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Team extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'points',
        'money_left',
        'video',
        'picture',
        'description'

    ];

    public function session(){
        return $this->belongsTo(Session::class);
    }
    public function users(){
        return $this->hasMany(User::class);
    }
    public function challenges(){
        return $this->belongsToMany(Challenge::class);
    }

}
