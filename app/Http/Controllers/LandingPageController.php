<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        return view('landing-page');
    }

    public function produk()
    {
        return view('produk-page');
    }
    public function deskripsiproduk()
    {
        return view('deskripsi-produk-page');
    }
}
