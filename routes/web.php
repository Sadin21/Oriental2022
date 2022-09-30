<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrientalController;

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

Route::get('/', [OrientalController::class, 'index']);
Route::get('/profil', [OrientalController::class, 'profil'])->name('profil');
Route::get('/booking', [OrientalController::class, 'booking'])->name('booking');

