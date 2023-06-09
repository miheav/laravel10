<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {

    return Inertia::render('Dashboard', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);

})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/house', function () {
    return Inertia::render('House');
})->middleware(['auth', 'verified'])->name('house');


Route::get('/VillageList', [\App\Http\Controllers\VillageController::class, 'villageList'])->middleware(['auth', 'verified'])->name('villageList');
Route::get('/village/{id}', [\App\Http\Controllers\VillageController::class, 'village'])->middleware(['auth', 'verified'])->name('village');

Route::get('/HouseList', [\App\Http\Controllers\HouseController::class, 'HouseList'])->middleware(['auth', 'verified'])->name('houseList');
Route::get('/house/{id}', [\App\Http\Controllers\HouseController::class, 'house'])->middleware(['auth', 'verified'])->name('house');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
