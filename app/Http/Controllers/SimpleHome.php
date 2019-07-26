<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Menu;
use App\Models\About;
use App\Models\Order;
use App\Models\Review;
use App\Models\Contact;
use App\Models\Partner;
use App\Models\Product;
use App\Models\Setting;
use App\Models\OfferBox;
use App\Models\Categorie;
use App\Models\Editorspic;
use App\Models\Orderdetail;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Models\Product_image;
use App\Models\MiddlePosterTimer;
use App\Models\TopSlider as Slider;
use Illuminate\Support\Facades\Input;
use App\Models\FirstFooterFeature as Footer;

class SimpleHome extends Controller
{
    public function __construct()
    {

        $this->middleware('auth', ['only' => ['checkout']]);
    }

    public function index()
    {
        $settings = Setting::first();
        $products = Product::where('stock', '>', '0')
            ->with('user', 'images', 'categorie', 'productImage')
            ->take(4)->orderBy('id', 'desc')
            ->get();
        $new_products = Product::where('stock', '>', '0')
            ->with('user', 'images', 'categorie', 'productImage')
            ->take(8)->orderBy('id', 'desc')
            ->get();
        $product_slider = Product::where('stock', '>', '0')
            ->where('in_flashSale', 1)
            ->with('user', 'images', 'categorie', 'productImage')
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
            ->with('user', 'images', 'categorie', 'types', 'reviews', 'productImage')
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
        return view('welcome', compact('settings', 'product_featured', 'categorie', 'new_products', 'products', 'middle', 'about', 'contact', 'offer_box', 'product_slider', 'testimonials', 'editorsPic', 'second_feature', 'first_feature', 'slider', 'menu'));
    }

    public function item($id)
    {
        $settings = Setting::first();
        $menu = Menu::first();
        $new_products = Product::where('stock', '>', '0')
            ->with('user', 'images', 'categorie', 'productImage')
            ->take(8)->orderBy('id', 'desc')
            ->get();
        $offer_box = OfferBox::first();
        $contact = Contact::first();
        $categorie = Categorie::take(8)
            ->orderBy('id', 'desc')
            ->get();
        $about = About::first();
        $collection = Product::with('user', 'images', 'categorie', 'types', 'reviews', 'reviews.users')->findOrFail($id);
        $reviews = Review::with('users')->where('product_id', $id)->paginate(5);
        $product_featured = Product::where('stock', '>', '0')
            ->where('in_featured_sale', 1)
            ->with('user', 'images', 'categorie', 'types', 'reviews', 'productImage')
            ->take(8)
            ->orderBy('id', 'desc')
            ->get();

        //  return response()->json($reviews);
        return view('item', compact('settings', 'collection', 'about', 'contact', 'new_products', 'offer_box', 'product_featured', 'categorie', 'menu', 'reviews'));
    }

    public function shop()
    {
        $settings = Setting::first();
        $menu = Menu::first();
        $offer_box = OfferBox::first();
        $about = About::first();
        $contact = Contact::first();
        $deals = Product::where('stock', '>', '0')
            ->where('is_inDeals', 1)
            ->with('user', 'images', 'categorie', 'productImage')
            ->take(4)->orderBy('id', 'desc')
            ->get();
        $product_featured = Product::where('stock', '>', '0')
            ->where('in_featured_sale', 1)
            ->with('user', 'images', 'categorie', 'types', 'reviews', 'productImage')
            ->take(8)
            ->orderBy('id', 'desc')
            ->get();
        $categorie = Categorie::take(8)
            ->orderBy('id', 'desc')
            ->get();
        $new_products = Product::where('stock', '>', '0')
            ->with('user', 'images', 'categorie', 'productImage')
            ->take(8)->orderBy('id', 'desc')
            ->get();
        $all_products = Product::where('stock', '>', '0')
            ->with('user', 'images', 'categorie', 'productImage')
            ->orderBy('id', 'desc')
            ->paginate(12);
        // return response()->json($deals);
        return view('shop', compact('settings', 'deals', 'all_products', 'categorie', 'new_products', 'menu', 'offer_box', 'about', 'contact', 'product_featured'));
    }

    public function contact()
    {
        $settings = Setting::first();
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
        return view('contact', compact('settings', 'offer_box', 'menu', 'new_products', 'contact', 'categorie', 'about', 'contact'));
    }

    public function about()
    {
        $settings = Setting::first();
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
        return view('about', compact('about', 'new_products', 'contact', 'categorie', 'partners', 'second_feature', 'offer_box', 'menu', 'settings'));
    }

    public function checkout(Request $request)
    {
        $settings = Setting::first();

        $post = $request->all();
        $cart = array();

        for ($i = 1; $i <= $post['loop_length']; $i++) {
            $id = $post['item_id_' . $i];
            $product = Product_image::where('product_id',$id)->take(1)->get();        
            $cart_items[] = array(
                "amount" => $post['amount_' . $i],
                "name" => $post['googles_item_' . $i],
                "item_id" => $post['item_id_' . $i],
                "quantity" => $post['quantity_' . $i],
                "length" => $post['loop_length'],
                "image" => $product[0]['image']
            );
        }
// return response()->json($cart_items, 200);
        $menu = Menu::first();
        $new_products = Product::where('stock', '>', '0')
            ->with('user', 'images', 'categorie', 'productImage')
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
        // return response()->json($cart_items);
        return view('checkout', compact('settings', 'cart_items', 'about', 'new_products', 'contact', 'categorie', 'partners', 'second_feature', 'offer_box', 'menu'));

    }

    public function payment(Request $request)
    {
        $array = $request->all();
        $shippingAddress_1 = $array['address'] . ' Name:' . $array['name'] . ' Mobile:' . $array['mobile'] . ' Landmark:' . $array['landmark'] . ' Town/City:' . $array['city'] . 'Pin:' . $array['pin'];
        $shippingAddress_2 = $array['address'];
        $shipping_address = 'Primary Address' . $shippingAddress_1 . 'Secondary Address' . $shippingAddress_2;

        $order = new Order;
        $order->customer_id = Auth::user()->id;
        $order->shipping_address = $shipping_address;
        $order->order_amount = $request->final_amount;
        $order->order_method = $request->order_method;
        $order->save();

        $orderdetails = new Orderdetail;
        $length_item = 1;
        for ($i = 0; $i < $request->length; $i++) {
            $orderdetails->order_id = 1;
            // $orderdetails->item_amount = $request->amount_ . $length;
            // $orderdetails->product_id = $request->item_id_ . $length;
            // $orderdetails->quantity = $request->quantity_ . $length;
            // $orderdetails->save();
            // echo $length++;
        }
        return response()->json($array, 200);
        // return view('payment');
    }
    public function star($id)
    {
        $settings = Setting::first();
        $from = Input::get('from');
        $to = Input::get('to');
        $query = Input::get('search');
        $menu = Menu::first();
        $offer_box = OfferBox::first();
        $about = About::first();
        $contact = Contact::first();
        $deals = Product::where('stock', '>', '0')
            ->where('is_inDeals', 1)
            ->with('user', 'images', 'categorie', 'productImage')
            ->take(4)->orderBy('id', 'desc')
            ->get();
        $product_featured = Product::where('stock', '>', '0')
            ->where('in_featured_sale', 1)
            ->with('user', 'images', 'categorie', 'types', 'reviews', 'productImage')
            ->take(8)
            ->orderBy('id', 'desc')
            ->get();
        $categorie = Categorie::take(8)
            ->orderBy('id', 'desc')
            ->get();
        $new_products = Product::where('stock', '>', '0')
            ->with('user', 'images', 'categorie', 'productImage')
            ->take(8)->orderBy('id', 'desc')
            ->get();

        $all_products = Product::where('stock', '>', '0')
            ->where('star', $id)
            ->with('user', 'images', 'categorie', 'productImage')
            ->orderBy('id', 'desc')
            ->paginate(12);

        // return response()->json($all_products);
        return view('shop', compact('settings', 'all_products', 'deals', 'categorie', 'new_products', 'menu', 'offer_box', 'about', 'contact', 'product_featured'));

    }

    public function search(Request $request)
    {
        $settings = Setting::first();
        $from = Input::get('from');
        $to = Input::get('to');
        $query = Input::get('search');
        $menu = Menu::first();
        $offer_box = OfferBox::first();
        $about = About::first();
        $contact = Contact::first();
        $deals = Product::where('stock', '>', '0')
            ->where('is_inDeals', 1)
            ->with('user', 'images', 'categorie', 'productImage')
            ->take(4)->orderBy('id', 'desc')
            ->get();
        $product_featured = Product::where('stock', '>', '0')
            ->where('in_featured_sale', 1)
            ->with('user', 'images', 'categorie', 'types', 'reviews', 'productImage')
            ->take(8)
            ->orderBy('id', 'desc')
            ->get();
        $categorie = Categorie::take(8)
            ->orderBy('id', 'desc')
            ->get();
        $new_products = Product::where('stock', '>', '0')
            ->with('user', 'images', 'categorie', 'productImage')
            ->take(8)->orderBy('id', 'desc')
            ->get();
        if ($from != null) {
            $all_products = Product::where('stock', '>', '0')
                ->whereBetween('amount', [$from, $to])
                ->with('user', 'images', 'categorie', 'productImage')
                ->orderBy('id', 'desc')
                ->paginate(12);

        } else if ($query != null) {
            $all_products = Product::where('name', 'like', '%' . $query . '%')
                ->paginate(12);
        }

        // return response()->json($all_products);
        return view('shop', compact('settings', 'all_products', 'deals', 'categorie', 'new_products', 'menu', 'offer_box', 'about', 'contact', 'product_featured'));
    }

}
