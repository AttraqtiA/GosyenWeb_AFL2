<?php

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
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

// Route::view('/', 'index');

Route::get('/', [ServiceController::class,'index']);

Route::get('/clients', [ClientController::class,'index']);

Route::get('/teams', [TeamController::class,'index']);

Route::get('/gallery', [GalleryController::class,'index']);

Route::view('/contact_us', 'contact');
