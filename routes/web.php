<?php

use App\Http\Controllers\CommentsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\GroceriesController;
use App\Http\Controllers\ProductsController;
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
Route::get('/login', [GroceriesController::class, 'login'])->name("login");

//
Route::resource('/contact', ContactController::class);

//
Route::get('/detail-product/{id}', [GroceriesController::class, 'show'])->name('detail');

//
Route::post('/comments', 'App\Http\Controllers\CommentsController@store')->name('comments.store');
//Route::resource('/comments', CommentsController::class);
//Route::post('/comments', 'CommentsController@store');

Route::get('/admin', [ProductsController::class, 'index'])->name('index');

//Route::get('/employees', [EmployeeController::class, 'index'])->name('index');
Route::get("/admin/employees/index", [EmployeeController::class, 'employees'])->name("admin.employees.index");
