<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;

class SaleController extends Controller
{
    public function index()
    {
        return view('/sales/index');
    }
    
    public function home()
    {
        return view('/sales/home');
    }
    
    public function sell()
    {
        return view('/sales/sell');
    }
}
