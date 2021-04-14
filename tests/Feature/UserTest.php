<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Verifie que l'utilisateur peut appartenir à une équipe
     *
     * @return void
     */
    public function testUserBelongsToATeam(){
        $team = Team::factory()->create();
        $user = User::factory()->create(['team_id' => $team->id]);

        $this->assertEquals(1,$user->team()->count());
    }
}
