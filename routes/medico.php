<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicoController;


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

Route::controller(MedicoController::class)->group(function(){
    Route::prefix('sis')->group(function(){
        Route::get('medico.dashboar', 'medicoDashboard')->name('sis.medico.dashboard');
    });
});


