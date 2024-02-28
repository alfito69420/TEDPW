<?php

use App\Http\Controllers\APIEcommerceContoller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Product;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::get('/products', [APIEcommerceContoller::class => 'products'])->name('api.products.list');

Route::get("/products",function() {
    $products = Product::all();
    return response()->json($products);
});
