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
            $table->string("UserName", 100);
            $table->string("UserFname", 100);
            $table->date("UserDateOfBirth");
            $table->string("UserCivi", 30);
            $table->string("UserPassWord", 250);
            $table->string("UserCountry", 100);
            $table->string("UserPostalCode", 50);
            $table->string("UserCity", 100);
            $table->string("UserPhoneNumber", 50);
            $table->string("UserEmail", 250);
            $table->string("UserStatus", 50);
            $table->string("UserTeam", 250);
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
