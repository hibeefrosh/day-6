<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PageController;

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

Route::redirect('/', '/login');

// Authentication routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
// Page A (Nigeria)
Route::get('/page-a', [PageController::class, 'indexa'])->name('page.a')->middleware('checkLocation:Nigeria');

// Page B (Ghana)
Route::get('/page-b', [PageController::class, 'indexb'])->name('page.b')->middleware('checkLocation:Ghana');

// Page C (United States)
Route::get('/page-c', [PageController::class, 'indexc'])->name('page.c')->middleware('checkLocation:United States');

// Page D (Other Countries)
Route::get('/page-d', [PageController::class, 'indexd'])->name('page.d')->middleware('auth');
