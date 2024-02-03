<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtenteController;


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

Route::controller(UtenteController::class)->group(function(){
    Route::prefix("sis/")->group(function(){
        
        Route::get("form/utente", "formUtente")->name('sis.form.utente');
        Route::post('registrar/utente', 'storeAccountUtente')->name('sis.store.utente');

        Route::get('registro.clinico', 'registroClinico')->name('sis.resgistro.clinico');
    });

    Route::post('criar', 'criarUtente')->name('sis.criar.utente');
});


