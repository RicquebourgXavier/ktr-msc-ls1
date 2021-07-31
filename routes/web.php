<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BusinesscardController;
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

Route::get('/dashboard',[BusinesscardController::class, 'index'] )->middleware(['auth'])->name('dashboard');

Route::view('/profile','profile')->middleware(['auth'])->name('profile');

Route::view('/library','library')->middleware(['auth'])->name('library');

Route::post('/profile',[UserController::class, 'update'])->middleware(['auth']);

Route::post('/library',[BusinesscardController::class, 'store'])->middleware(['auth']);

require __DIR__.'/auth.php';
