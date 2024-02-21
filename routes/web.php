<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\GroceriesController;
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


/*Route::controller(GroceriesController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/shop', 'shop');
    Route::get('/register', 'register');
    Route::get('/login', 'login');
});*/

Route::get('/', [GroceriesController::class, 'index'])->name("index");
Route::get('/shop', [GroceriesController::class, 'shop'])->name("shop");
Route::get('/register', [GroceriesController::class, 'register'])->name("register");
Route::get('/login', [GroceriesController   ::class, 'login'])->name("login");
Route::get('/shop/detail', [GroceriesController   ::class, 'detail'])->name("detail");

//  
Route::resource('/contact', ContactController::class);


