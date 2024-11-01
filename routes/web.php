<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PhotoController;

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
})->name('welcome');

Route::get('/about', function () {
    return view('about'); // The view should be in resources/views/about.blade.php
})->name('about');

Route::get('/activities', function () {
    return view('activities'); 
})->name('activities');

Route::get('/live', function () {
    return view('live'); 
})->name('live');



Route::get('/dashboard', [HomeController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');
Route::get('/user', [UserController::class, 'index']);
Route::resource('photos', PhotoController::class);
