<?php

namespace App\Http\Controllers;

use App\Charts\LineChart;
use App\Models\Product;
use App\User;
use DB;
use App\Charts\Barchart;


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
        
        $bar_data = collect([]); 
        for ($days_backwards = 5; $days_backwards >= 0; $days_backwards--) {
           
            $bar_data->push(Product::whereDate('created_at', today()->subDays($days_backwards))->count());
        }
      
        $bar_chart = new Barchart;
        $bar_chart->labels([ 'July', 'August','September','October','November','December']);
        $bar_chart->dataset('Total Orders', 'bar', $bar_data);

        $today_users = User::whereDate('created_at', today())->count();
        $yesterday_users = User::whereDate('created_at', today()->subDays(1))->count();
        $users_2_days_ago = User::whereDate('created_at', today()->subDays(2))->count();
        $chart_line = new LineChart;
        $chart_line->labels(['2 days ago', 'Yesterday', 'Today']);
        $chart_line->dataset('Users Chart', 'line', [$users_2_days_ago, $yesterday_users, $today_users]);
        return view('dashboard', compact('chart_line','bar_chart'));
    }
}
