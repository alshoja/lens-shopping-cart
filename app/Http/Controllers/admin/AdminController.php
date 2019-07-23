<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function login(){

        return view('auth.login');

    }
    public function register(){

        return view('auth.register');

    }
}
