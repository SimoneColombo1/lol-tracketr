<?php

use App\Http\Controllers\Admin\GamesController;
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

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/games', [GamesController::class, 'index'])->name('admin.games.index');
Route::get('/games/create', [GamesController::class, 'create'])->name('admin.games.create');
Route::post('games/store', [GamesController::class, 'store'])->name('admin.games.store');
Route::get('/games/edit/{game}', [GamesController::class, 'edit'])->name('admin.games.edit');
Route::put('games/{game}', [GamesController::class, 'update'])->name('admin.games.update');
Route::get('/games/{game}', [GamesController::class, 'show'])->name('admin.games.show');
Route::delete('games/{game}', [GamesController::class, 'destroy'])->name('admin.games.destroy');
