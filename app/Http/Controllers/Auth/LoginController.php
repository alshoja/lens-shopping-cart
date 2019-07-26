<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Categorie;
use App\Models\Contact;
use App\Models\Menu;
use App\Models\OfferBox;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
     */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        $settings = Setting::first();
        $menu = Menu::first();
        $about = About::first();
        $contact = Contact::first();
        $categorie = Categorie::take(8)
            ->orderBy('id', 'desc')
            ->get();
        $new_products = Product::where('stock', '>', '0')
            ->with('user', 'images', 'categorie')
            ->take(8)
            ->orderBy('id', 'desc')
            ->get();
        $offer_box = OfferBox::first();
        return view('user-auth.login', compact('settings', 'contact', 'about', 'menu', 'offer_box', 'categorie', 'new_products'));
    }

}
