<?php

namespace App\Http\Controllers;

use App\Models\Editorspic;
use App\Models\FirstFooterFeature as Footer;
use App\Models\Product;
use App\Models\Testimonial;
use App\Models\TopSlider as Slider;
use App\Models\About;
use App\Models\Partner;
use App\Models\OfferBox ;
use App\Models\Contact ;
use App\Models\MiddlePosterTimer ;

class SimpleHome extends Controller
{
    public function index()
    {

        $products = Product::where('stock', '>', '0')->with('user', 'images', 'categorie')->take(4)->orderBy('id', 'desc')->get();
        $product_slider = Product::where('stock', '>', '0')->with('user', 'images', 'categorie')->take(8)->orderBy('id', 'desc')->get();
        $testimonials = Testimonial::all();
        $editorsPic = Editorspic::where('is_active', '=', '1')->take(2)->orderBy('id', 'desc')->get();
        $first_feature = Footer::where('feature_div', '=', '1')->take(3)->orderBy('id', 'desc')->get();
        $second_feature = Footer::where('feature_div', '=', '2')->take(4)->orderBy('id', 'desc')->get();
        $slider = Slider::take(4)->orderBy('order', 'desc')->get();
        $offer_box = OfferBox::first();
        $about = About::first();
        $contact = Contact::first();
        $middle=  MiddlePosterTimer::first();
        //return response()->json($product_slider);
        return view('welcome', compact('products','middle','about','contact','offer_box', 'product_slider', 'testimonials', 'editorsPic', 'second_feature', 'first_feature','slider'));
    }

    public function item($id)
    {
        $offer_box = OfferBox::first();
        $contact = Contact::first();
        $about = About::first();
        $collection = Product::with('user', 'images', 'categorie')->findOrFail($id);
       // return response()->json($collection);
        return view('item',compact('collection','about','contact','offer_box'));
    }

    public function shop()
    {
        $offer_box = OfferBox::first();
        $about = About::first();
        $contact = Contact::first();
        return view('shop');
    }

    public function contact()
    {
        $offer_box = OfferBox::first();
        $about = About::first();
        $contact = Contact::first();
        return view('contact',compact('offer_box','contact','about','contact'));
    }

    public function about()
    {
       $offer_box = OfferBox::first();
       $about = About::first();
       $partners = Partner::all();
       $contact = Contact::first();
       $second_feature = Footer::where('feature_div', '=', '2')->take(4)->orderBy('id', 'desc')->get();
       //return response()->json($about);
        return view('about',compact('about','contact','partners','second_feature','offer_box'));
    }

    public function checkout()
    {

        return view('checkout');
    }

    public function payment()
    {

        return view('payment');
    }
}
