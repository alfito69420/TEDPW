<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class EmployeeController extends Controller
{
    //
    public function employees(){
        $response= Http::get("http://localhost:3000/employees");
        $employees = $response->object();
        return view("groceries.admin.employees.index", compact("employees"));
    }
}
