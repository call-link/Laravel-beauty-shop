<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function index(){
        $products = Product::all() ; # all records in table products

        return  view('index' , compact('products')) ; # Redirect to index page 
    }

    public function create(){
        // return view('products.create') ;
        var_dump('create products') ;
    }

    public function store(Request $request){
        var_dump($request->all()) ;
    }
}
