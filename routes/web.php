<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\GamesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/floppy', [GamesController::class, 'floppy'])->name('floppy');
Route::get('/solitaire', [GamesController::class, 'solitaire'])->name('solitaire');
Route::get('/chess', [GamesController::class, 'chess'])->name('chess');
Route::get('/shooter', [GamesController::class, 'shooter'])->name('shooter');



Route::get('/platformer', function () {
    return view('games.platformer.platformer');
});

Route::get('/office_save_to_txt', [OfficeController::class,'save_to_txt']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
