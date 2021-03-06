<?php

use Illuminate\Http\Request;
use App\Models\User;

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

// Connexions
Route::match(['get', 'post'], '/login/{reference}', 'LoginController@login');

// Routes v1
Route::prefix('v1')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::apiResources([
        'users'             => '\App\Http\Controllers\UserController',
        'categories'        => '\App\Http\Controllers\CategoryController',
        'infrastructures'   => '\App\Http\Controllers\InfrastructureController',
        'materials'         => '\App\Http\Controllers\MaterialController',
        'locations'         => '\App\Http\Controllers\LocationController',
    ]);
});
