<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function start()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function review()
    {
        return view('review');
    }

    public function contact()
    {
        return view('contact');
    }

    public function Login()
    {
        return view('auth.login');
    }

    public function Signup()
    {
        return view('auth.signup');
    }
}
