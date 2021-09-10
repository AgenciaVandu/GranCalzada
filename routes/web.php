<?php

use App\Http\Livewire\Slider;
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

Route::get('/', function () {
    return view('index');
});
Route::get('/conoce-gran-calzada', function () {
    return view('gran-calzada');
});
Route::get('/almada', function () {
    return view('desarrollos/almada');
});
Route::get('/miraverde', function () {
    return view('desarrollos/miraverde');
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




Route::get('/slider', Slider::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
