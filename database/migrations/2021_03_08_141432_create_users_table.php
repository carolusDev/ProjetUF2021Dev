<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string("name", 100);
            $table->string("first_name", 100);
            $table->date("birthDate");
            $table->string("civility", 30);
            $table->string("password", 250);
            $table->string("country", 100);
            $table->string("zipCode", 50);
            $table->string("city", 100);
            $table->string("phone", 50);
            $table->string("email", 250);
            $table->string("status", 50);
            $table->foreignId("team_id")->nullable()->constrained()->onDelete('set null');
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
        Schema::dropIfExists('users');
    }
}
