<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Categorie;
use App\Models\Contact;
use App\Models\Editorspic;
use App\Models\FirstFooterFeature as Footer;
use App\Models\Menu;
use App\Models\MiddlePosterTimer;
use App\Models\OfferBox;
use App\Models\Partner;
use App\Models\Product;
use App\Models\Testimonial;
use App\Models\TopSlider as Slider;
use DB;

class SimpleHome extends Controller
{
    public function index()
    {

        $products = Product::where('stock', '>', '0')
            ->with('user', 'images', 'categorie')
            ->take(4)->orderBy('id', 'desc')
            ->get();
        $new_products = Product::where('stock', '>', '0')
            ->with('user', 'images', 'categorie')
            ->take(8)->orderBy('id', 'desc')
            ->get();
        $product_slider = Product::where('stock', '>', '0')
            ->where('in_flashSale', 1)
            ->with('user', 'images', 'categorie')
            ->take(8)
            ->orderBy('id', 'desc')
            ->get();
        $testimonials = Testimonial::all();
        $editorsPic = Editorspic::where('is_active', '=', '1')
            ->take(2)
            ->orderBy('id', 'desc')
            ->get();
        $first_feature = Footer::where('feature_div', '=', '1')
            ->take(3)
            ->orderBy('id', 'desc')
            ->get();
        $second_feature = Footer::where('feature_div', '=', '2')
            ->take(4)
            ->orderBy('id', 'desc')
            ->get();
        $slider = Slider::take(4)
            ->orderBy('order', 'desc')
            ->get();
        $product_featured = Product::where('stock', '>', '0')
            ->where('in_featured_sale', 1)
            ->with('user', 'images', 'categorie', 'types', 'reviews')
            ->take(8)
            ->orderBy('id', 'desc')
            ->get();
        $offer_box = OfferBox::first();
        $menu = Menu::first();
        $about = About::first();
        $contact = Contact::first();
        $middle = MiddlePosterTimer::first();
        $categorie = Categorie::take(8)
            ->orderBy('id', 'desc')
            ->get();

        // return response()->json($products);
        return view('welcome', compact('product_featured', 'categorie', 'new_products', 'products', 'middle', 'about', 'contact', 'offer_box', 'product_slider', 'testimonials', 'editorsPic', 'second_feature', 'first_feature', 'slider', 'menu'));
    }

    public function item($id)
    {
        $menu = Menu::first();
        $new_products = Product::where('stock', '>', '0')
            ->with('user', 'images', 'categorie')
            ->take(8)->orderBy('id', 'desc')
            ->get();
        $offer_box = OfferBox::first();
        $contact = Contact::first();
        $categorie = Categorie::take(8)
            ->orderBy('id', 'desc')
            ->get();
        $about = About::first();
        $collection = Product::with('user', 'images', 'categorie', 'types', 'reviews', 'reviews.users')->findOrFail($id);
        $product_featured = Product::where('stock', '>', '0')
            ->where('in_featured_sale', 1)
            ->with('user', 'images', 'categorie', 'types', 'reviews')
            ->take(8)
            ->orderBy('id', 'desc')
            ->get();

       // return response()->json($menu);
        return view('item',compact('collection', 'about', 'contact', 'new_products', 'offer_box', 'product_featured', 'categorie', 'menu'));
    }

    public function shop()
    {
        $collection = Product::with('user', 'images', 'categorie', 'types', 'reviews', 'reviews.users')->get();
        $menu = Menu::first();
        $offer_box = OfferBox::first();
        $about = About::first();
        $contact = Contact::first();
        $product_featured = Product::where('stock', '>', '0')
        ->where('in_featured_sale', 1)
        ->with('user', 'images', 'categorie', 'types', 'reviews')
        ->take(8)
        ->orderBy('id', 'desc')
        ->get();
        $categorie = Categorie::take(8)
            ->orderBy('id', 'desc')
            ->get();
        $products = Product::where('stock', '>', '0')
            ->with('user', 'images', 'categorie')
            ->take(4)->orderBy('id', 'desc')
            ->get();
        $new_products = Product::where('stock', '>', '0')
            ->with('user', 'images', 'categorie')
            ->take(8)->orderBy('id', 'desc')
            ->get();
        $product_slider = Product::where('stock', '>', '0')
            ->where('in_flashSale', 1)
            ->with('user', 'images', 'categorie')
            ->take(8)
            ->orderBy('id', 'desc')
            ->get();
        $testimonials = Testimonial::all();
        $editorsPic = Editorspic::where('is_active', '=', '1')
            ->take(2)
            ->orderBy('id', 'desc')
            ->get();
        $first_feature = Footer::where('feature_div', '=', '1')
            ->take(3)
            ->orderBy('id', 'desc')
            ->get();
        $second_feature = Footer::where('feature_div', '=', '2')
            ->take(4)
            ->orderBy('id', 'desc')
            ->get();

        $product_featured = Product::where('stock', '>', '0')
            ->where('in_featured_sale', 1)
            ->with('user', 'images', 'categorie', 'types', 'reviews')
            ->take(8)
            ->orderBy('id', 'desc')
            ->get();
        $middle = MiddlePosterTimer::first();
        $new_products = Product::where('stock', '>', '0')
        ->with('user', 'images', 'categorie')
        ->take(8)->orderBy('id', 'desc')
        ->get();

        return view('shop', compact('categorie', 'collection', 'menu', 'offer_box', 'about','contact','new_products','product_featured'));
    }

    public function contact()
    {

        $menu = Menu::first();
        $new_products = Product::where('stock', '>', '0')
            ->with('user', 'images', 'categorie')
            ->take(8)->orderBy('id', 'desc')
            ->get();
        $offer_box = OfferBox::first();
        $about = About::first();
        $contact = Contact::first();
        $categorie = Categorie::take(8)
            ->orderBy('id', 'desc')
            ->get();
        return view('contact', compact('offer_box', 'menu', 'new_products', 'contact', 'categorie', 'about', 'contact'));
    }

    public function about()
    {
        $menu = Menu::first();
        $new_products = Product::where('stock', '>', '0')
            ->with('user', 'images', 'categorie')
            ->take(8)->orderBy('id', 'desc')
            ->get();
        $offer_box = OfferBox::first();
        $categorie = Categorie::take(8)
            ->orderBy('id', 'desc')
            ->get();
        $about = About::first();
        $partners = Partner::all();
        $contact = Contact::first();
        $second_feature = Footer::where('feature_div', '=', '2')->take(4)->orderBy('id', 'desc')->get();
        //return response()->json($about);
        return view('about', compact('about', 'new_products', 'contact', 'categorie', 'partners', 'second_feature', 'offer_box', 'menu'));
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
