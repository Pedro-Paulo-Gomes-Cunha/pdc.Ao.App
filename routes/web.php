<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;


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

Route::post("/entrar.logado",[LoginController::class, 'auth'] )->name("sis.login.teste");

require __DIR__ .'/site.php';
require __DIR__ .'/auth.php';
require __DIR__ .'/admin.php';
require __DIR__ .'/medico.php';
require __DIR__ .'/utente.php';
require __DIR__ .'/consulta.php';







