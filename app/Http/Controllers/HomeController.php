<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $products = Product::where('stock', '>', '0')->with('products', 'images', 'categorie')->orderBy('id', 'desc')->get();
        return view('welcome', $products);
        //return view('dashboard');
    }
}
