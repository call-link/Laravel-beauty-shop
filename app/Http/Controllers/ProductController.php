<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all(); # all records in table products

        return  view('index', compact('products')); # Redirect to index page 
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(StoreProductRequest $request)
    {
        Product::create($request->all());
        return Redirect()->route('product.create')->with('alert', 'Create Product Is Succsessfully .');
    }
    public function show(Request $request , int $id){
        $product = Product::find($id) ;
        return view('products.show' , compact('product')) ;
    }
}
