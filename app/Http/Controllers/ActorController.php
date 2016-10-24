<?php
/***********************
 *	Project		: DMS
 *	Document	: ActorController.php
 *	@author		: Todd Mullen <ToddJ.Mullen@gmail.com>
 *	Created		: Oct 22, 2016, 3:40:19 PM
 *	Description	:
 *		ActorController
 ***********************/

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;


/**
 * ActorController
 */
class ActorController extends Controller
{


/////public methods/////

    public function postCreateActor( Request $request )
    {
        $this->validate( $request, [
            'name' => "required|unique:actors|max:40"
        ]);

        $actor = new Actor();
        $actor->name = $request['name'];

        $actor->save();
    }


    /**
     *
     * @param string $name
     * @return App\Actor
     */
    public function fetchByName( $name )
    {
        $actor = Actor::firstOrCreate(['name' => $name]);
        $actor->save();
        return $actor;
    }



/////private methods/////



}//End ActorController

