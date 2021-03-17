<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Schema;
use PHPUnit\Framework\TestCase;
use App\Models\{User, Team, Session, Challenge};

class SessionTest extends TestCase
{ use RefreshDatabase;

    /**
     * Teste les colonnes de la table
     *
     * @return void
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     * @throws \PHPUnit\Framework\ExpectationFailedException
     */
    public function testSessionTableHasExpectedColumns()
    {
        $this->assertTrue(
            Schema::hasColumns('sessions',
                [
                    "id", "name", "start_date", "end_date","dotation",
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
    public function testSessionIsSavedInDatabase()
    {
        $sesh = Session::factory()->create();
        $this->assertDatabaseHas('session', $sesh->attributesToArray());
    }

    /**
     * Vérifie qu'une session peut être supprimée de la base de données
     * sans échec
     *
     * @depends testSessionIsSavedInDatabase
     * @return void
     */
    public function testSessionIsDeletedFromDatabase()
    {
        $session = Session::factory()->create();
        $chall = Challenge::factory()->create(["session_id" => $session->id]);

        $chall->delete();
        $this->assertDeleted($chall);
    }

}
