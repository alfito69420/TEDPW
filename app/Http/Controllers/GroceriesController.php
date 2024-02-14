<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GroceriesController extends Controller
{
    public function index(){
        return view("groceries.index");
    }
    public function shop(){ 
        return view("groceries.shop");
    }   

    public function register(){
        return view("groceries.register");
    }

    public function login(){
        return view("groceries.login");
    }

    public function about(){
        return view("groceries.about");
    }

    public function cart(){
        return view("groceries.cart");
    }

    public function checkout(){
        return view("groceries.checkout");
    }

    public function contact(){
        return view("groceries.contact");
    }

    public function detailproduct(){
        return view("groceries.detailproduct");
    }

    public function faq(){
        return view("groceries.faq");
    }

    public function privacy(){
        return view("groceries.privacy");
    }

    public function setting(){
        return view("groceries.setting");
    }

    public function terms(){
        return view("groceries.terms");
    }

    public function transaction(){
        return view("groceries.transaction");
    }
}
