<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\{Session, Team, Challenge};
use Tests\TestCase;

class ChallengeTest extends TestCase
{

    use RefreshDatabase;

    public function testChallengeBelongsToASession()
    {
        $session = Session::factory()->create();
        $challenge = Challenge::factory()->create(['session_id' => $session->id]);

        $this->assertInstanceOf(Session::class, $challenge->session);
        $this->assertEquals(1,$challenge->session()->count());
        $this->assertInstanceOf('\Illuminate\Database\Eloquent\Relations\BelongsTo', $challenge->session());
    }

}
