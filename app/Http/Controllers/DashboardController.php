<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class DashboardController extends Controller
{
    public function index(){

        $products = \App\Product::all();

        $customers = \App\Customer::all(); 

        $orders = \App\Order::all();

        return view('home', ['customers' => $customers, 'products' => $products, 'orders' => $orders]);
    }   
    
}