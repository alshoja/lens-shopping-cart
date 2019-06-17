<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\Product;
use App\Models\Categorie;
use App\Models\Testimonial;
use App\Models\Editorspic;
use App\Models\FirstFooterFeature;

class SimpleHome extends Controller
{
    public function index(){

        $products = Product::where('stock','>','0')->with('user','images','categorie')->take(4)->orderBy('id', 'desc')->get();
        $product_slider = Product::where('stock','>','0')->with('user','images','categorie')->take(8)->orderBy('id', 'desc')->get();
        $testimonials = Testimonial::all();
        $editorsPic = Editorspic::where('is_active','=','1')->take(2)->orderBy('id', 'desc')->get();
        $first_feature = FirstFooterFeature::where('feature_div','=','1')->take(3)->orderBy('id', 'desc')->get();
        $second_feature = FirstFooterFeature::where('feature_div','=','2')->take(4)->orderBy('id', 'desc')->get();

        //return response()->json($products);
        return view('welcome', compact('products','product_slider','testimonials','editorsPic','second_feature','first_feature'));
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
