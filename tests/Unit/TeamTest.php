<?php

namespace Tests\Unit;


use Illuminate\Support\Facades\Schema;
use PHPUnit\Framework\TestCase;
use App\Models\{User, Team, Session};
class TeamTest extends TestCase
{
    /**
     * Teste les colonnes de la table
     *
     * @throws \PHPUnit\Framework\ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     * @return void
     */
    public function testTeamTableHasExpectedColumns()
    {
        $this->assertTrue(
            Schema::hasColumns('teams',
                [
                    "id", "name", "points", "money_left", "video", "picture",
                    "description", "session_id",
                    "created_at","updated_at"
                ]
            ), 1
        );
    }
    /**
     * Vérifie que le modèle est sauvegardé dans la base de données
     *
     * @return void
     */
    public function testTeamIsSavedInDatabase()
    {
        $team = Team::factory()->create();
        $this->assertDatabaseHas('teams', $team->attributesToArray());
    }

    /**
     * Vérifie qu'une équipe peut être supprimée de la base de données
     * sans échec
     *
     * @depends testTeamIsSavedInDatabase
     * @return void
     */
    public function testTeamIsDeletedFromDatabase() {
        $session = Session::factory()->create();
        $team = Team::factory()->create(["session_id" => $session->id]);
        $user = User::factory()->create(['team_id' => $team->id]);

        $team->delete();
        $this->assertDeleted($team);
    }

    public function testTeamTableThrowsIntegrityConstraintOnNonExistingSessionId(){

        $this->expectException("Illuminate\Database\QueryException");
        $this->expectExceptionCode(23000);
        Team::factory()->create(['session_id' => 0]);
    }
}
