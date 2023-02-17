<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\InventoriController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//

Route::Resource('/inventoris', InventoriController::class);

// $router->get('inventoris', 'InventoriController@index');
// $router->get('inventoris/{id}', 'InventoriController@show');
// $router->post('inventoris/create', 'InventoriController@store');
// $router->put('inventoris/update{id}', 'InventoriController@update');
// $router->delete('inventoris/delete{id}', 'InventoriController@destroy');


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', 'App\Http\Controllers\API\UserController@register');
Route::post('login', 'App\Http\Controllers\API\UserController@login');
