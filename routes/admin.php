<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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
Route::controller(AdminController::class)->group(function(){
    Route::prefix('sis')->group(function(){
        Route::get('admin/dashboard', 'adminDashobrd')->name('sis.admin.dashboard');
    });

    Route::get('listar/utilizadores', 'listarUtilizador')->name('sis.admin.listar.utilizador');

    Route::get('listar/utentes', 'getUtentes')->name('sis.admin.listar.utentes');

    Route::get('listar/especialidades', 'getEspecialidades')->name('sis.admin.listar.especialidades');
    Route::post('criar.especialidades', 'storeEspecialidade')->name('sis.admin.store.especialidade');
    Route::delete('eliminar.especialidades/{id}', 'destroyEspecialidade')->name('admin.delete.especialidade');


    Route::get('listar/medicos', 'getMedicos')->name('sis.admin.listar.medicos');
    Route::post('registrar.medico', 'storeMedico')->name('sis.admin.criar.medico');
    Route::delete('eliminar.medico/{id}', 'destroyMedico')->name('sis.admin.eliminar.medico');







});





