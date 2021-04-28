<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ChallengeTeam extends Pivot
{
    public function challenge(){
        return $this->belongsTo(Challenge::class);
    }
    public function team(){
        return $this->belongsTo(Team::class);
    }
}
