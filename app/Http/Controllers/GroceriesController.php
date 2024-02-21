<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class GroceriesController extends Controller
{
    public function index()
    {
        return view('groceries.index');
    }

    public function shop(){
        $categories = Category::all();
        $product = Product::all();
        return view("groceries.shop", compact('categories','product') );
    }

    public function login()
    {
        return view('groceries.login');
    }

    public function register()
    {
        return view('groceries.register');
    }

    public function detail()
    {
        $product_detail = Product::all();
        return view('groceries.detail');
    }

    public function contact()
    {
        //$product_detail = Product::all();
        return view('groceries.contact');
    }


}
