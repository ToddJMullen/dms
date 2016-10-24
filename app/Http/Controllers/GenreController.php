<?php
/***********************
 *	Project		: DMS
 *	Document	: GenreController.php
 *	@author		: Todd Mullen <ToddJ.Mullen@gmail.com>
 *	Created		: Oct 22, 2016, 3:39:48 PM
 *	Description	:
 *		GenreController
 ***********************/

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;


/**
 * GenreController
 */
class GenreController extends Controller
{


/////public methods/////

    public function postCreateGenre( Request $request )
    {
        $this->validate( $request, [
           'genre' => 'required|unique:genres|max:25'
        ]);

        $genre = new Genre();
        $genre->name = $request['genre'];

        $genre->save();

        return redirect()->back();
    }

    /**
     *
     * @param string $name
     * @return App\Genre
     */
    public function fetchByName( $name )
    {
        $genre = Genre::firstOrCreate(['name' => $name]);
        $genre->save();
        return $genre;
    }



/////private methods/////



}//End GenreController

