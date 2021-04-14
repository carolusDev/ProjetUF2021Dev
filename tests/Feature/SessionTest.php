<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\{Session, Challenge, Team};
use Tests\TestCase;


class SessionTest extends TestCase
{
    use RefreshDatabase;

    public function testSessionHasManyChallenges()
    {
        $session = Session::factory()->create();
        $challenge = Challenge::factory()->create(['session_id' => $session->id]);

        $this->assertTrue($session->challenges->contains($challenge));
        $this->assertEquals(1, $session->challenges->count());
        $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $session->challenges);
        $this->assertInstanceOf('\Illuminate\Database\Eloquent\Relations\HasMany', $session->challenges());

    }

    public function testSessionHasManyTeams()
    {
        $session = Session::factory()->create();
        $team = Team::factory()->create(['session_id' => $session->id]);

        $this->assertTrue($session->teams->contains($team));
        $this->assertEquals(1, $session->teams->count());
        $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $session->teams);
        $this->assertInstanceOf('\Illuminate\Database\Eloquent\Relations\HasMany', $session->teams());

    }
}
