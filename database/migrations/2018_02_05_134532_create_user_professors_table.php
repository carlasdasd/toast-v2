<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfessorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_professors', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('professor_number')->unique();

            $table->foreign('professor_number')->references('id_number')->on('users');

            $table->string('last_name');
            $table->string('first_name');
            $table->string('middle_name');
            $table->date('birthdate');
            $table->binary('display_image');
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
        Schema::dropIfExists('user_professors');
    }
}
