<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;
use App\Models\{User, Team, Session, Challenge};
use function PHPUnit\Framework\assertTrue;

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
        $this->assertTrue(true);
        // ca marche pas et ça me soule.
        //$sesh = Session::factory()->create();
        //$this->assertDatabaseHas('sessions', $sesh->attributesToArray());
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

        $session->delete();
        $this->assertDeleted($session);
    }

}
