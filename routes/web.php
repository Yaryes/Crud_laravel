<?php
use App\Http\Controllers\EquiposControllers;
use App\Http\Controllers\PosicionesController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::view('/', 'welcome')->name('home');
Route::get('/equipos', [EquiposControllers::class, 'index'])->name('equipos');
Route::get('/posiciones', [PosicionesController::class, 'index'])->name('posiciones');
Route::view('/quienes-somos', 'quienes-somos')->name('quienes-somos');