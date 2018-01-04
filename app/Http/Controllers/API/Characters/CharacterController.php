<?php

namespace App\Http\Controllers\API\Characters;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Characters\Character;
use App\Http\Resources\Character as CharacterResource;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*
            Get Characters
        */

        $characters = Character::paginate(15);

        /*
            Return Collection of characters as a resource
        */

        return CharacterResource::collection($characters);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /*
            Get Character
        */

        $character = Character::findOrFail($id);

        /*
            Return single character as a resource
        */

        return new CharacterResource($character);
    }
}
