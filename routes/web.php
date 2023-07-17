<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', SiteController::class);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/banners', [BannerController::class, 'index'])->name('banners.index');
    Route::put('/banners', [BannerController::class, 'update'])->name('banners.update');

    Route::get('/sobre', [AboutController::class, 'index'])->name('about.index');
    Route::put('/sobre', [AboutController::class, 'update'])->name('about.update');

    Route::get('servicos', [ServiceController::class, 'index'])->name('services.index');
    Route::get('servicos/{id}', [ServiceController::class, 'show'])->name('services.show');
    Route::get('servicos/{id}/editar', [ServiceController::class, 'edit'])->name('services.edit');
    Route::put('servicos/{id}', [ServiceController::class, 'update'])->name('services.update');
});

require __DIR__.'/auth.php';
