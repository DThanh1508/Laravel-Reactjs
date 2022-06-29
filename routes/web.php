<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

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
    return view('welcome');
});
Route::get('cars',[CarController::class,'index'])->name('cars.index');
Route::get('cars/create',[CarController::class,'create'])->name('cars.create');
Route::post('cars/',[CarController::class,'store'])->name('cars.store');
Route::get('cars/{id}/edit',[CarController::class,'edit'])->name('cars.edit');
Route::put('cars/{car}',[CarController::class,'update'])->name('cars.update');
Route::get('cars/{car}',[CarController::class,'show'])->name('cars.show');
Route::delete('cars/{car}/delete',[CarController::class,'destroy'])->name('cars.destroy');