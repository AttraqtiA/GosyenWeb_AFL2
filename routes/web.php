<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ServiceController;

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

// Route::view('/', 'index');

Route::get('/', [ServiceController::class, 'index']);

Route::get('/teams', [TeamController::class, 'index']);

Route::get('/clients', [ClientController::class, 'index']);

Route::get('/galleries', [GalleryController::class, 'index']);

Route::get('/services', [ServiceController::class, 'index']);

Route::get('/services/{service_id}', [ServiceController::class, 'show']);

Route::view('/contact_us', 'contact');
