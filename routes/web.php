<?php

use App\Http\Controllers\AlmadaController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\MiraverdeController;
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

Route::get('/conoce-gran-calzada', [LandingController::class, 'grancalzada'])->name('gran.calzada');
/*Ruta del almada*/
Route::prefix('almada')->group(function () {
    Route::get('/', [AlmadaController::class, 'index'])->name('almada.index');
    Route::get('/modelo/{model}', [AlmadaController::class, 'model'])->name('almada.model');
    Route::get('/lead/{model}', [AlmadaController::class, 'lead'])->name('almada.lead');
    Route::get('/masterplan-mobile', [AlmadaController::class,'master'])->name('almada.master');
});
/*Ruta del miraverde*/
Route::prefix('miraverde')->group(function () {
    Route::get('/', [MiraverdeController::class, 'index'])->name('miraverde.index');
    Route::get('/modelo/{model}', [MiraverdeController::class, 'model'])->name('miraverde.model');
    Route::get('/lead/{model}', [MiraverdeController::class, 'lead'])->name('miraverde.lead');
});

/*Avances de obra*/
Route::get('/avances-de-obra', [GaleryController::class, 'index'])->name('galeries.index');
Route::get('/avances-de-obra/{galery}', [GaleryController::class, 'show'])->name('galeries.show');

/*Ruta del blog*/
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/articulo/{post}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/blog/{category}', [BlogController::class, 'postCategory'])->name('blog.postCategory');

/*Página de agradecimiento*/
Route::get('/gracias-por-registrarte', function () {
    return view('desarrollos/typ');
});

/*Validacion de autentificacion para admin*/
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
