<?php

namespace Tests\Unit;

use App\Models;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Teste les colonnes de la table
     *
     * @throws \PHPUnit\Framework\ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     * @return void
     */
    public function testUserTableHasExpectedColumns()
    {
        $this->assertTrue(
            Schema::hasColumns('users',
                [
                    "id", "name", "first_name", "birthdate", "civility", "password",
                    "country", "zipcode", "city", "phone", "email", "status", "team_id",
                    "created_at", "updated_at"
                ]
            ), 1
        );
    }

    /**
     * Vérifie que le modèle est sauvegardé dans la base de données
     *
     * @return void
     */
    public function testUserIsSavedInDatabase()
    {
        $user = User::factory()->create();
        $this->assertDatabaseHas('users', $user->attributesToArray());
    }

    /**
     * Vérifie qu'un utilisateur peut être supprimé de la base de données
     * sans échec
     *
     * @depends testUserIsSavedInDatabase
     * @return void
     */
    public function testUserIsDeletedFromDatabase() {
        $user = User::factory()->create();
        $user->team = Team::factory()->create();

        $user->delete();
        $this->assertDeleted($user);
    }

}
