<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGenresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genres', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name');
        });


        //create xref lookup tables for movie relations

        //movie genres
        Schema::create('genre_movie', function(Blueprint $table){

            $table->integer('genre_id')->unsigned()->index();
            $table->integer('movie_id')->unsigned()->index();
            $table->timestamps();//just in case

            //if a movie is deleted remove its xrefs
            $table->foreign('movie_id')->references('id')->on('movies')->onDelete('cascade');
            //likewise if a particular genre is deleted
            $table->foreign('genre_id')->references('id')->on('genres')->onDelete('cascade');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('genres');
        Schema::dropIfExists('genre_movie');
    }
}
