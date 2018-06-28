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
Route::get('/login', function (Request $request) {
    \Auth::login(User::find($request->input('id')) ?? User::find(1));

    return response()->json($request->user());
});

// Routes v1
Route::prefix('v1')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::apiResources([
        'categories' => '\App\Http\Controllers\CategoryController',
    ]);
});
