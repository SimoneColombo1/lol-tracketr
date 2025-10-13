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
Route::get('/games/{game}', [GamesController::class, 'show'])->name('admin.games.show');
