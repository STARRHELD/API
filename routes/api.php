<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/*
    List Characters
*/

Route::get('characters', 'API\Characters\CharacterController@index');

/*
    List Single Character
*/

Route::get('character/{id}', 'API\Characters\CharacterController@show');

/*
    List Auctions
*/

Route::get('auctions', 'API\Characters\AuctionController@index');

/*
    List Single Auction
*/

Route::get('auction/{id}', 'API\Characters\AuctionController@show');
