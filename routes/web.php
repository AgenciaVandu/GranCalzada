<?php

use App\Http\Controllers\AlmadaController;
use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [LandingController::class, 'index'])->name('index');

Route::get('/conoce-gran-calzada', function () {
    return view('gran-calzada');
})->name('gran.calzada');

Route::get('/almada', [AlmadaController::class, 'index'])->name('almada.index');


Route::get('/miraverde', function () {
    return view('desarrollos.miraverde');
});
Route::get('/modelo-aguamarina', function () {
    return view('desarrollos/modelos-almada/aguamarina');
});
Route::get('/modelo-magenta', function () {
    return view('desarrollos/modelos-almada/magenta');
});
Route::get('/modelo-ambar', function () {
    return view('desarrollos/modelos-almada/ambar');
});
Route::get('/modelo-violeta', function () {
    return view('desarrollos/modelos-almada/violeta');
});
Route::get('/modelo-violeta-plus', function () {
    return view('desarrollos/modelos-almada/violeta-plus');
});

Route::get('/modelo-almendro', function () {
    return view('desarrollos/modelos-miraverde/almendro');
});
Route::get('/modelo-flamboyan-plus', function () {
    return view('desarrollos/modelos-miraverde/flamboyan-plus');
});
Route::get('/modelo-bugambilia-plus', function () {
    return view('desarrollos/modelos-miraverde/bugambilia-plus');
});
Route::get('/modelo-ceiba-plus', function () {
    return view('desarrollos/modelos-miraverde/ceiba-plus');
});

/*
Ruta de Leads miraverde
*/
Route::get('/lead-ceiba-plus', function () {
    return view('desarrollos/modelos-miraverde/conversion/lead-ceiba-plus');
});
Route::get('/lead-bugambilia-plus', function () {
    return view('desarrollos/modelos-miraverde/conversion/lead-bugambilia-plus');
});
Route::get('/lead-almendro', function () {
    return view('desarrollos/modelos-miraverde/conversion/lead-almendro');
});
Route::get('/lead-flamboyan-plus', function () {
    return view('desarrollos/modelos-miraverde/conversion/lead-flamboyan');
});

/*
Ruta de Leads almada
*/
Route::get('/lead-aguamarina', function () {
    return view('desarrollos/modelos-almada/conversion/lead-aguamarina');
});
Route::get('/lead-magenta', function () {
    return view('desarrollos/modelos-almada/conversion/lead-magenta');
});
Route::get('/lead-violeta', function () {
    return view('desarrollos/modelos-almada/conversion/lead-violeta');
});
Route::get('/lead-violeta-plus', function () {
    return view('desarrollos/modelos-almada/conversion/lead-violeta-plus');
});
Route::get('/lead-ambar', function () {
    return view('desarrollos/modelos-almada/conversion/lead-ambar');
});

/*
Página de agradecimiento
*/
Route::get('/gracias-por-registrarte', function () {
    return view('desarrollos/typ');
});
/*
Avances de obra
*/
Route::get('/avances-de-obra', function () {
    return view('avances');
});



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
