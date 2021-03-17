<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string("AdminName", 100);
            $table->string("AdminFname", 100);
            $table->date("AdminDateOfBirth");
            $table->string("AdminCivi", 30);
            $table->string("AdminPassWord", 250);
            $table->string("AdminCountry", 100);
            $table->string("AdminPostalCode", 50);
            $table->string("AdminCity", 100);
            $table->string("AdminPhoneNumber", 50);
            $table->string("AdminEmail", 250);
            $table->string("AdminStatus", 50);
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
        Schema::dropIfExists('admins');
    }
}
