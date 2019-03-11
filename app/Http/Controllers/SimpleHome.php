<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimpleHome extends Controller
{
    public function index(){

        return view('welcome');
    }

    public function item(){

        return view('item');
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
