<?php

use App\Http\Controllers\AirportController;
use App\Http\Controllers\FlightController;
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



Route::get('/', [AirportController::class, 'index']);


Route::get('/airports', [AirportController::class,'index'])->name('airports.index');
Route::get('/airports/create', [AirportController::class,'create'])->name('airports.create');
Route::post('/airports', [AirportController::class,'store'])->name('airports.store');
Route::get('/airports/{airport}', [AirportController::class,'show'])->name('airports.show');
Route::get('/airports/{airport}/edit', [AirportController::class,'edit'])->name('airports.edit');
Route::put('/airports/{airport}', [AirportController::class,'update'])->name('airports.update');
Route::delete('/airports/{airport}', [AirportController::class,'destroy'])->name('airports.destroy');

// Route::resource('airports', AirportController::class);
Route::resource('flights', FlightController::class);
