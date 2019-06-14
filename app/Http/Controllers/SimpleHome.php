<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\Product;
use App\Models\Categorie;

class SimpleHome extends Controller
{
    public function index(){

        $products = Product::where('stock','>','0')->with('user','images','categorie')->take(4)->orderBy('id', 'desc')->get();
        return response()->json($products);
        //return view('welcome')->with('products',$products);
    }

    public function item($id){
         $items = Product::findOrFail($id);
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
