<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function (Request $request) {
    return response()->json(['success' => true]);
});

Route::post('auth', 'AuthController@makeAppLogin');

/*Route::middleware('auth:api')->group(function () {
    Route::apiResource('doctors', 'API\DoctorController');
});*/


