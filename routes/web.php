<?php

use App\Http\Controllers\FondopalenqueController;
use App\Http\Controllers\InteriorespalenqueController;
use App\Http\Controllers\LocalpalenqueController;
use App\Http\Controllers\SociospalenqueController;

use App\Http\Controllers\FondoviaplazaController;
use App\Http\Controllers\InterioresviaplazaController;
use App\Http\Controllers\LocalviaplazaController;
use App\Http\Controllers\SociosviaplazaController;

use App\Http\Controllers\FondopinotepaController;
use App\Http\Controllers\InteriorespinotepaController;
use App\Http\Controllers\LocalpinotepaController;
use App\Http\Controllers\SociospinotepaController;

use App\Http\Controllers\LocalvillafloresController;
use App\Http\Controllers\FondovillafloresController;
use App\Http\Controllers\SociosvillafloresController;
use App\Http\Controllers\InterioresvillafloresController;


use App\Http\Controllers\LocalcomitanController;
use App\Http\Controllers\FondocomitanController;
use App\Http\Controllers\SocioscomitanController;
use App\Http\Controllers\InteriorescomitanController;

use App\Http\Controllers\LocaltonalaController;
use App\Http\Controllers\FondotonalaController;
use App\Http\Controllers\SociostonalaController;
use App\Http\Controllers\InteriorestonalaController;

use App\Http\Controllers\PaginaController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\ScinicioController;
use App\Http\Controllers\InterioresiniciosController;


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

Route::get('/', function () {
    return view('index');
});
Route::get('/villaflores', function () {
    return view('villaflores');
});
Route::get('/pinotepa', function () {
    return view('pinotepa');
});
Route::get('/comitan', function () {
    return view('comitan');
});
Route::get('/tonala', function () {
    return view('tonala');
});
Route::get('/ciudadhidalgo', function () {
    return view('ciudadhidalgo');
});
Route::get('/palenque', function () {
    return view('palenque');
});
Route::get('/gracias', function () {
    return view('gracias');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/editor/menu', function () {
        return view('editor.menu');
    })->name('menu');

    Route::get('/comitan/comitan', function () {
        return view('comitan.comitan');
    })->name('menu_comitan');

    Route::get('/tonala/tonala', function () {
        return view('tonala.tonala');
    })->name('menu_tonala');

    Route::get('/villaflores/vfs', function () {
        return view('villaflores.vfs');
    })->name('menu_vfs');

    Route::get('/pinotepa/pnts', function () {
        return view('pinotepa.pnts');
    })->name('menu_pnts');

    Route::get('/viaplaza/vps', function () {
        return view('viaplaza.vps');
    })->name('menu_vps');

    Route::get('/palenque/plqs', function () {
        return view('palenque.plqs');
    })->name('menu_plqs');
});

Route::get('/index', [IndexController::class, 'showInAnotherView']);
Route::resource('editor/inicio', IndexController::class);
Route::resource('editor/socios_inicio', ScinicioController::class);
Route::resource('pinotepa/interiores_inicios', InterioresiniciosController::class);

Route::resource('comitan/local', LocalcomitanController::class);
Route::resource('comitan/fondo', FondocomitanController::class);
Route::resource('comitan/socios', SocioscomitanController::class);
Route::resource('comitan/interiores', InteriorescomitanController::class);

Route::resource('tonala/fondo_tonala', FondotonalaController::class);
Route::resource('tonala/local_tonala', LocaltonalaController::class);
Route::resource('tonala/socios_tonala', SociostonalaController::class);
Route::resource('tonala/interiores_tonala', InteriorestonalaController::class);

Route::resource('villaflores/fondo_vfs', FondovillafloresController::class);
Route::resource('villaflores/socios_vfs', SociosvillafloresController::class);
Route::resource('villaflores/interiores_vfs', InterioresvillafloresController::class);
Route::resource('villaflores/local_vfs', LocalvillafloresController::class);

Route::resource('pinotepa/interiores_pnts', InteriorespinotepaController::class);
Route::resource('pinotepa/socios_pnts', SociospinotepaController::class);
Route::resource('pinotepa/local_pnts', LocalpinotepaController::class);
Route::resource('pinotepa/fondo_pnts', FondopinotepaController::class);

Route::resource('viaplaza/fondo_vps', FondoviaplazaController::class);
Route::resource('viaplaza/interiores_vps', InterioresviaplazaController::class);
Route::resource('viaplaza/socios_vps', SociosviaplazaController::class);
Route::resource('viaplaza/local_vps', LocalviaplazaController::class);

Route::resource('palenque/fondo_plqs', FondopalenqueController::class);
Route::resource('palenque/interiores_plqs', InteriorespalenqueController::class);
Route::resource('palenque/socios_plqs', SociospalenqueController::class);
Route::resource('palenque/local_plqs', LocalpalenqueController::class);


Route::resource('/', PaginaController::class);
Route::get('/index', [PaginaController::class, 'index']);
Route::get('/comitan', [PaginaController::class, 'comitan']);
Route::get('/tonala', [PaginaController::class, 'tonala']);
Route::get('/villaflores', [PaginaController::class, 'villaflores']);
Route::get('/pinotepa', [PaginaController::class, 'pinotepa']);
Route::get('/ciudadhidalgo', [PaginaController::class, 'viaplaza']);
Route::get('/palenque', [PaginaController::class, 'palenque']);