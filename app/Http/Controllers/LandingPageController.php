<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $produk = Produk::take(4)->get();
        return view('landing-page', compact('produk'));
    }
    
    public function produk()
    {
        $produk = Produk::all();
        $jumlahProduk = Produk::count();
        return view('produk-page', compact('produk', 'jumlahProduk'));
    }
    public function deskripsiproduk()
    {
        return view('deskripsi-produk-page');   
    }
}
