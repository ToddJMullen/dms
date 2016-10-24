<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actors', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name');
        });


        //movie actors
        Schema::create('actor_movie', function( Blueprint $table ){

            $table->integer('actor_id')->unsigned()->index();
            $table->integer('movie_id')->unsigned()->index();
            $table->timestamps();//just in case

            //label foreign keys & ensure rows referencing deleted foreign entries are also removed
            $table->foreign('actor_id')->references('id')->on('actors')->onDelete('cascade');
            $table->foreign('movie_id')->references('id')->on('movies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actors');
        Schema::dropIfExists('actor_movie');
    }
}
