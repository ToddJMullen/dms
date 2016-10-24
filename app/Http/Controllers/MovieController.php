<?php
/***********************
 *	Project		: DMS
 *	Document	: MovieController.php
 *	@author		: Todd Mullen <ToddJ.Mullen@gmail.com>
 *	Created		: Oct 21, 2016, 1:28:24 PM
 *	Description	:
 *		MovieController
 ***********************/

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Genre;
use App\Actor;

/**
 * MovieController
 */
class MovieController extends Controller
{


/////public methods/////

    public function index()
    {
        $movies = Movie::All();
        $genres = Genre::All();
        $actors = Actor::all();

        return view("movies", compact("movies", "genres", "actors") );

    }


    public function postAddMovie(Request $request)
    {
//        print_r($_POST);
//        return;
        $this->validate( $request, [
           'name' => 'required|unique:movies|max:255',
           'description' => 'required|max:1024',
           'genres' => 'required|max:255|min:2',
            'actors' => 'required|max:255'
        ]);


        $movieName          = $request['name'];
        $movieDescription   = $request['description'];
        $movieGenre         = $request['genres'][0];
        $movieActor         = $request['actors'][0];

        $movie = new Movie();
        $movie->name           = $movieName;
        $movie->description    = $movieDescription;

        $movie->save();

        $genres = new GenreController();
        $genre = $genres->fetchByName( $movieGenre );

        $movie->genres()->attach($genre->id);

        $actors = new ActorController();
        $actor = $actors->fetchByName( $movieActor );
        $movie->actors()->attach($actor->id);

        return redirect()->back()->with('submitted', true);

    }

    public function movieDetails($id)
    {
        $movie = Movie::find($id);
        $genres = $movie->genres->toArray();
        $actors = $movie->actors->toArray();


        return view("movie-detail", compact("movie","genres","actors") );
    }

    public function editMovieDetail($id)
    {
        $movie = Movie::find($id);
        $genres = $movie->genres->toArray();
        $actors = $movie->actors->toArray();

        return view("movie-edit", compact("movie","genres","actors") );
    }

    public function findMovie(Request $request)
    {
        $this->validate($request,[
           'searchFor' => 'required',
           'searchBy' => 'required'
        ]);

        $searchFor = $request['searchFor'];
        $searchBy = $request['searchBy'];
        $movies = [];

        switch( $searchBy ){
            case 'name':
                $movies = Movie::where('name','LIKE', "%$searchFor%")->get();
                break;
            case 'actor':
                $movies = Actor::where('name','LIKE', "%$searchFor%")->get();
                break;
            case 'genre':
                $movies = Genre::where('name','LIKE', "%$searchFor%")->get();
                break;
            default:
                return redirect("home");
        }


        return view("movies-found", compact("movies","searchFor", "searchBy") );

    }



/////private methods/////



}//End MovieController

