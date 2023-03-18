<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperherosController;

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
})->name('welcome');

Route::get('/heros', [SuperherosController::class, 'index'])->name('heros');
Route::get('/herosmale', [SuperherosController::class, 'male'])->name('herosmale');
Route::get('/herosfemale', [SuperherosController::class, 'female'])->name('herosfemale');

/*Route::get('/herosmale',function(){
    return view('herosmale');

})->name('herosmale');*/

/*Route::get('/herosfemale',function(){
    return view('herosfemale');

})->name('herosfemale');*/