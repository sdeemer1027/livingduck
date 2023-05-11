<?php

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
    return view('welcome');
});


Route::get('/virtual-pet-duck', [App\Http\Controllers\VirtualPetDuckController::class, 'index'])->name('virtual-pet-duck.index');
Route::post('/virtual-pet-duck/feed/{duck}', [App\Http\Controllers\VirtualPetDuckController::class, 'feed'])->name('virtual-pet-duck.feed');
Route::post('/virtual-pet-duck/play/{duck}', [App\Http\Controllers\VirtualPetDuckController::class, 'play'])->name('virtual-pet-duck.play');
Route::post('/virtual-pet-duck/time-passes/{duck}', [App\Http\Controllers\VirtualPetDuckController::class, 'timePasses'])->name('virtual-pet-duck.time-passes');

Route::delete('/virtual-pet-duck/{duck}', [App\Http\Controllers\VirtualPetDuckController::class, 'destroy'])
    ->name('virtual-pet-duck.destroy');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
