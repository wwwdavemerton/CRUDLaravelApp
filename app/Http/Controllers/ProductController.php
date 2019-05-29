<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class ProductController extends Controller
{
    public function index(){

        $products = Product::all(); 

        return view('products.index', ['products' => $products]);
    }

    public function create(){

        return view('products.create');
    }    
    
    public function store(){

        $product = new Product();

        $product->product_name = request('product_name');
        $product->product_description = request('product_description');
        $product->product_price = request('product_price');
        $product->product_quantity = request('product_quantity');

        $product->save();

        return redirect('/products');

    }

    public function show(){

    }
    

    public function edit($id){       

        $product = Product::find($id);

        return view('products.edit', compact('product'));
    }

    public function update($id){

        $product = Product::find($id);

        $product->product_name = request('product_name');
        $product->product_description = request('product_description');
        $product->product_price = request('product_price');
        $product->product_quantity = request('product_quantity');

        $product->save();

        return redirect('/products');


    }

    public function destroy($id){

        Product::find($id)->delete();

        return redirect('/products');
    }
}

