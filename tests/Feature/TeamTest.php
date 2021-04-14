<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\{Team,User,Session};
use Tests\TestCase;

class TeamTest extends TestCase
{
    use refreshDatabase;

    public function testTeamHasManyUsers(){

        $team = Team::factory()->create();
        $user = User::factory()->create(['team_id' => $team->id]);
        // Méthode 1 : le user existe dans la liste des users de la team
        $this->assertTrue($team->users->contains($user));

        // Méthode 2: Le nombre de users de la team est bien égal à 1 (le jeu de données fourni dans la fonction).
        $this->assertEquals(1, $team->users->count());

        // Méthode 3: Les team sont bien liés à l'utilisateur et sont bien une collection.
        $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $team->users);

        //pour aide : les users sont liés par la bonne relation eloquent.
        $this->assertInstanceOf('Illuminate\Database\Eloquent\Relations\HasMany', $team->users());
    }

    public function testTeamBelongsToManyChallenges(){
        $nb = 3;
        $team = Team::factory()->hasChallenges($nb)->create();
        $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $team->challenges);

        $this->assertInstanceOf('\Illuminate\Database\Eloquent\Relations\BelongsToMany', $team->challenges());
    }

    public function testTeamBelongsToASession(){
        $session = Session::factory()->create();
        $team = Team::factory()->create(['session_id' => $session->id]);

        $this->assertInstanceOf(Session::class, $team->session);

        $this->assertEquals(1, $team->session()->count());

        $this->assertInstanceOf('\Illuminate\Database\Eloquent\Relations\BelongsTo',$team->session());

    }

}
