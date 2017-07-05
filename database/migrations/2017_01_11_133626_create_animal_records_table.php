<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimalRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animal_records', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('animal');
            $table->integer('animalno');
            $table->string('animalname');
            $table->string('animaltype');
            $table->string('animalage');
            $table->string('gender');
            $table->string('herd');
            $table->string('birthdate');
            $table->string('purchasedate');
            $table->string('breed');
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animal_records');
    }
}
