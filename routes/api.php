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

Route::prefix('/v1')->group(function() {
    Route::get('/', function() {
        return ['name' => 'simplegame.api', 'version' => 'v1.0'];
    });

    Route::post('users/login', 'ApiAuthController@auth');

    Route::middleware('token')->group(function() {
        Route::post('users/list', 'ApiUserController@list');

        Route::post('games/new', 'ApiGameController@new');

        Route::post('games/list', 'ApiGameController@list');

        Route::post('games/play', 'ApiGameController@play');

        Route::post('games/state', 'ApiGameController@state');

        Route::post('chat/global', 'ApiChatController@update');
    });
});
