<?php

use App\Http\Controllers\HeroController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PlayerController;
use App\Models\Player;

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
    return view('welcome');
});

Route::get('/teams', [TeamController::class, 'team'])->name('teams');
Route::get('team/create', [TeamController::class, 'create'])->name('teams');
Route::post('team/create', [TeamController::class, 'store'])->name('teams');
Route::get('/teams/{team}', [TeamController::class, 'edit'])->name('teams.edit');
Route::put('/teams/{team}', [TeamController::class, 'update'])->name('teams.update');
Route::delete('/teams/delete/{team}', [TeamController::class, 'delete']);


Route::get('/players', [PlayerController::class, 'player'])->name('players');
Route::get('player/create', [PlayerController::class, 'create'])->name('players');
Route::post('player/create', [PlayerController::class, 'store'])->name('players');
Route::get('/players/{player}', [PlayerController::class, 'edit'])->name('players.edit');
Route::put('/players/{player}', [PlayerController::class, 'update'])->name('players.update');
Route::delete('/players/delete/{player}', [PlayerController::class, 'delete']);


Route::get('/heroes', [HeroController::class, 'hero'])->name('heroes');
Route::get('hero/create', [HeroController::class, 'create'])->name('heroes');
Route::post('hero/create', [HeroController::class, 'store'])->name('heroes');
Route::get('/heroes/{hero}', [HeroController::class, 'edit'])->name('heroes.edit');
Route::put('/heroes/{hero}', [HeroController::class, 'update'])->name('heroes.update');
Route::delete('/heroes/delete/{hero}', [HeroController::class, 'delete']);

