<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    // Method to handle the About Us page
    public function index()
    {
        return view('about'); // Assumes there is a view file named about.blade.php in resources/views
    }
}
