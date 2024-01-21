<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all() ; # all records in table products

        return  view('index' , compact('products')) ; # Redirect to index page 
    }

    public function create(){
        return view('products.create') ;
    }

    public function store(Request $request){
        Product::create($request->all()) ;
        return Redirect()->route('product.create')->with('alert' , 'Create Product Is Succsessfully .') ;
    }
}
