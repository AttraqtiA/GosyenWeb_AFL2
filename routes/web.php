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

Route::view('/', 'index', [
    "carousel_1" => "office 3.png",
    "carousel_2" => "team 2_cropped.jpg",
    "carousel_3" => "team 1_cropped.jpg",
    "active_1" => "text-white rounded md:bg-transparent md:text-sky-700 md:p-0 md:dark:text-sky-500",
]);

Route::get('/clients', [ClientController::class, 'index']);

Route::get('/teams', [TeamController::class, 'index']);

Route::get('/gallery', [GalleryController::class, 'index']);

Route::get('/services', [ServiceController::class, 'index']);

Route::get('/services/{service_id}', [ServiceController::class, 'show']);

Route::view('/contact_us', 'contact');
