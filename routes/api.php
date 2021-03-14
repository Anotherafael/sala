<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\SessionController;
use App\Http\Controllers\API\UserController;

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

Route::group(['prefix' => 'v1', 'namespace' => 'API'], function () {
    Route::group(['prefix' => 'auth'], function () {
        Route::post('login', [SessionController::class, 'store']);
    });
    
    Route::group(['prefix' => 'user'], function () {
        Route::post('create', [UserController::class, 'store']);
        Route::get('readall', [UserController::class, 'readAll']);
        Route::get('readone/{id}', [UserController::class, 'readOne']);
        Route::delete('delete/{id}', [UserController::class, 'destroy']);
        Route::put('update/{id}', [UserController::class, 'update']);
    });



});