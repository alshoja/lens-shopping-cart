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
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Request;

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
        return view('item', compact('collection', 'about', 'contact', 'new_products', 'offer_box', 'product_featured', 'categorie', 'menu'));
    }

    public function shop()
    {

        $menu = Menu::first();
        $offer_box = OfferBox::first();
        $about = About::first();
        $contact = Contact::first();
        $deals = Product::where('stock', '>', '0')
            ->where('is_inDeals', 1)
            ->with('user', 'images', 'categorie')
            ->take(4)->orderBy('id', 'desc')
            ->get();
        $product_featured = Product::where('stock', '>', '0')
            ->where('in_featured_sale', 1)
            ->with('user', 'images', 'categorie', 'types', 'reviews')
            ->take(8)
            ->orderBy('id', 'desc')
            ->get();
        $categorie = Categorie::take(8)
            ->orderBy('id', 'desc')
            ->get();
        $new_products = Product::where('stock', '>', '0')
            ->with('user', 'images', 'categorie')
            ->take(8)->orderBy('id', 'desc')
            ->get();
        $all_products = Product::where('stock', '>', '0')
            ->with('user', 'images', 'categorie')
            ->orderBy('id', 'desc')
            ->paginate(12);

        return view('shop', compact('deals', 'all_products', 'categorie', 'new_products', 'menu', 'offer_box', 'about', 'contact', 'product_featured'));
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

        return view('checkout',compact('about', 'new_products', 'contact', 'categorie', 'partners', 'second_feature', 'offer_box', 'menu'));
    }

    public function payment()
    {

        return view('payment');
    }
    public function star($id)
    {
        $from = Input::get('from');
        $to = Input::get('to');
        $query = Input::get('search');
        $menu = Menu::first();
        $offer_box = OfferBox::first();
        $about = About::first();
        $contact = Contact::first();
        $deals = Product::where('stock', '>', '0')
        ->where('is_inDeals', 1)
        ->with('user', 'images', 'categorie')
        ->take(4)->orderBy('id', 'desc')
        ->get();
        $product_featured = Product::where('stock', '>', '0')
            ->where('in_featured_sale', 1)
            ->with('user', 'images', 'categorie', 'types', 'reviews')
            ->take(8)
            ->orderBy('id', 'desc')
            ->get();
        $categorie = Categorie::take(8)
            ->orderBy('id', 'desc')
            ->get();
        $new_products = Product::where('stock', '>', '0')
            ->with('user', 'images', 'categorie')
            ->take(8)->orderBy('id', 'desc')
            ->get();

        $all_products = Product::where('stock', '>', '0')
            ->where('star', $id)
            ->with('user', 'images', 'categorie')
            ->orderBy('id', 'desc')
            ->paginate(12);

        // return response()->json($all_products);
        return view('shop', compact('all_products','deals', 'categorie', 'new_products', 'menu', 'offer_box', 'about', 'contact', 'product_featured'));

    }

    public function search(Request $request)
    {
        $from = Input::get('from');
        $to = Input::get('to');
        $query = Input::get('search');
        $menu = Menu::first();
        $offer_box = OfferBox::first();
        $about = About::first();
        $contact = Contact::first();
        $deals = Product::where('stock', '>', '0')
        ->where('is_inDeals', 1)
        ->with('user', 'images', 'categorie')
        ->take(4)->orderBy('id', 'desc')
        ->get();
        $product_featured = Product::where('stock', '>', '0')
            ->where('in_featured_sale', 1)
            ->with('user', 'images', 'categorie', 'types', 'reviews')
            ->take(8)
            ->orderBy('id', 'desc')
            ->get();
        $categorie = Categorie::take(8)
            ->orderBy('id', 'desc')
            ->get();
        $new_products = Product::where('stock', '>', '0')
            ->with('user', 'images', 'categorie')
            ->take(8)->orderBy('id', 'desc')
            ->get();
        if ($from != null) {
            $all_products = Product::where('stock', '>', '0')
                ->whereBetween('amount', [$from, $to])
                ->with('user', 'images', 'categorie')
                ->orderBy('id', 'desc')
                ->paginate(12);

        } else if ($query != null) {
            $all_products = Product::where('name', 'like', '%' . $query . '%')
                ->paginate(12);
        }

        // return response()->json($all_products);
        return view('shop', compact('all_products', 'deals','categorie', 'new_products', 'menu', 'offer_box', 'about', 'contact', 'product_featured'));
    }
}
