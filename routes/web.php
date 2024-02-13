<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

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


//Route::get('/', [SiteController::class, 'index']);


Route::controller(SiteController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/services', 'services');
    Route::get('/products', 'products');
    Route::get('/contact', 'contact');
});

