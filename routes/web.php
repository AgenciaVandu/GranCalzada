<?php

use App\Http\Controllers\AlmadaController;
use App\Http\Controllers\GaleryController;
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

Route::prefix('almada')->group(function () {
    Route::get('/', [AlmadaController::class, 'index'])->name('almada.index');
    Route::get('/modelo/{model}', [AlmadaController::class, 'model'])->name('almada.model');
    Route::get('/lead/{model}', [AlmadaController::class, 'lead'])->name('almada.lead');
});

/*Avances de obra*/
Route::get('/avances-de-obra', [GaleryController::class, 'index'])->name('galeries.index');
Route::get('/avances-de-obra/', [GaleryController::class, 'index'])->name('galeries.index');


Route::get('/miraverde', function () {
    return view('desarrollos.miraverde');
})->name('miraverde.index');



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
Página de agradecimiento
*/
Route::get('/gracias-por-registrarte', function () {
    return view('desarrollos/typ');
});
/*


/*
Ruta del blog
*/
Route::get('/blog', function () {
    return view('blog.index');
});

Route::get('/articulo', function () {
    return view('blog.article');
});



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
