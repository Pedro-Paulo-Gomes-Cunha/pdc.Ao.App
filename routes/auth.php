<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(AuthController::class)->group(function(){

    Route::prefix("sis")->group(function(){
        Route::get("/form.login", "login")->name("sis.form.login");
        Route::post("/logar", "authentication")->name("sis.login");
        Route::get("/logout", "logout")->name("sis.logout");

    });
});



