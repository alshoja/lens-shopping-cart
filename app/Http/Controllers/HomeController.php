<?php

namespace App\Http\Controllers;

use App\Charts\LineChart;
use App\Models\Product;
use App\User;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('admin.welcome');
        //return view('dashboard');
    }

    public function dashboard()
    {
        $products = Product::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"), date('Y'))->get();
        $chart_line = new LineChart;
        // $chart->labels(['One', 'Two', 'Three']);
        // $chart->dataset('My dataset 1', 'line', [1, 2, 3]);
        $today_users = User::whereDate('created_at', today())->count();
        $yesterday_users = User::whereDate('created_at', today()->subDays(1))->count();
        $users_2_days_ago = User::whereDate('created_at', today()->subDays(2))->count();

        $chart_line->labels(['2 days ago', 'Yesterday', 'Today']);
        $chart_line->dataset('Users Chart', 'line', [$users_2_days_ago, $yesterday_users, $today_users]);

        return view('dashboard', compact('chart_line'));
    }
}
