<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;

class SimpleHome extends Controller
{
    public function index(){

        $products = Product::where('stock','>','0')->orderBy('id', 'desc')->get();
        return view('welcome')->with('products',$products);
    }

    public function item(){
         $items = Product::findOrFail(1);
       
         return view('item')->withdata($items);
    }
    
    public function shop(){
        
        return view('shop');
    }

    public function contact(){
        
        return view('contact');
    }

    public function about(){
        
        return view('about');
    }

    public function checkout(){
        
        return view('checkout');
    }

    public function payment(){
        
        return view('payment');
    }
}
