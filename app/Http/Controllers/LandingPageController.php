<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        return view('landingpage');
    }

    public function produk()
    {
        return view('produk-page');
    }
}
