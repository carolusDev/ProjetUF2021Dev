<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChallengeTeamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('challenge_team', function (Blueprint $table) {
            $table->id();
            $table->foreignId("challenge_id")->constrained()->cascadeOnDelete();
            $table->foreignId("team_id")->constrained()->cascadeOnDelete();
            $table->unique(["challenge_id","team_id"]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('challenge_team');
    }
}
