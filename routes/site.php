<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{SiteController,AuthController };


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



Route::controller(SiteController::class)->group(function(){
        Route::get('/', 'index')->name('sis.index');
       
});

Route::view('/login', 'authentication.login')->name('login.form');

Route::post('/auth', [AuthController::class, 'authentication'])->name('login.auth');




