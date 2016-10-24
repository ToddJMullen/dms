<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name');
            $table->string('description');
        });


        //create xref lookup tables for movie relations

        //movie genres
//        Schema::create('genre_movie', function(Blueprint $table){
//
//            $table->integer('genre_id')->unsigned()->index();
//            $table->integer('movie_id')->unsigned()->index();
//            $table->timestamps();//just in case
//
//            //if a movie is deleted remove its xrefs
//            $table->foreign('movie_id')->references('id')->on('movies')->onDelete('cascade');
//            //likewise if a particular genre is deleted
//            $table->foreign('genre_id')->references('id')->on('genres')->onDelete('cascade');
//        });


        //movie actors
//        Schema::create('actor_movie', function( Blueprint $table ){
//
//            $table->integer('actor_id')->unsigned()->index();
//            $table->integer('movie_id')->unsigned()->index();
//            $table->timestamps();//just in case
//
//            //label foreign keys & ensure rows referencing deleted foreign entries are also removed
//            $table->foreign('actor_id')->references('id')->on('actors')->onDelete('cascade');
//            $table->foreign('movie_id')->references('id')->on('movies')->onDelete('cascade');
//        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
//        Schema::dropIfExists('genre_movie');
//        Schema::dropIfExists('actor_movie');
    }
}
