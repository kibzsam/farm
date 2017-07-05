<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBreedregistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('breedregisters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('animalno');
            $table->string('breedate');
            $table->string('bullassigned');
            $table->string('method');
            $table->string('calvdate');
            $table->string('comment');
            $table->string('status');
            $table->string('user_id');
            $table->integer('animal_record_id')->unsigned()->nullable();
            $table->foreign('animal_record_id')->references('id')->on('animal_records');
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
        Schema::dropIfExists('breedregisters');
    }
}
