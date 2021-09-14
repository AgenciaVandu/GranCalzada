<?php

use App\Http\Controllers\Admin\DevelopmentController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\ConfigurationController;
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
    return view('dashboard');
});

Route::get('/developments', [DevelopmentController::class, 'index'])->name('developments.index');
Route::prefix('configurations')->group(function () {
    Route::get('index', [ConfigurationController::class, 'index'])->name('configurations.index');
    Route::get('videos', [ConfigurationController::class, 'videos'])->name('configurations.videos');
});


Route::post('configurations/videos/file', [VideoController::class, 'upload'])->name('admin.configurations.videos');
