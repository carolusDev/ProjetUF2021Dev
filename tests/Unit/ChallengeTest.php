<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Schema;
use PHPUnit\Framework\TestCase;

class ChallengeTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Teste les colonnes de la table
     *
     * @return void
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     * @throws \PHPUnit\Framework\ExpectationFailedException
     */
    public function testChallengeTableHasExpectedColumns()
    {
        $this->assertTrue(
            Schema::hasColumns('users',
                [
                    "id", "title", "description", "value", "session_id",
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
    public function testChallengeIsSavedInDatabase()
    {
        $chall = Challenge::factory()->create();
        $this->assertDatabaseHas('challenges', $chall->attributesToArray());
    }

    /**
     * Vérifie qu'un challenge peut être supprimé de la base de données
     * sans échec
     *
     * @depends testChallengeIsSavedInDatabase
     * @return void
     */
    public function testChallengeIsDeletedFromDatabase()
    {
        $session = Session::factory()->create();
        $chall = Challenge::factory()->create(["session_id" => $session->id]);

        $chall->delete();
        $this->assertDeleted($chall);
    }

}
