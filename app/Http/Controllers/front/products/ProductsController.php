<?php

namespace App\Http\Controllers\front\products;

use App\models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    public function index(){
        $products=Product::all();
        return view('front.products.list',compact('products'));
    }
    
}
