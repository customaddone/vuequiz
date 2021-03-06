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

Route::group(['middleware' => 'api'], function() {
  Route::get("/items", "ItemsController@index");
  Route::post("/items", "ItemsController@store");
  Route::post("/items/{id}", "ItemsController@edit");
  Route::delete('/items/{id}', 'ItemsController@destroy');

  Route::get("/explanations/{item_id}", "ExplanationsController@index");
  Route::post("/explanations", "ExplanationsController@store");
  Route::post("/explanations/{id}", "ExplanationsController@edit");
  Route::delete('/explanations/{id}', 'ExplanationsController@destroy');

  Route::get("/items/items10", "ItemsController@items10");

  Route::get("/authUser", "ItemsController@authUser");
});
