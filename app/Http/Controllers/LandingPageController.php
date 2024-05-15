<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        // $produkid = Produk::find($id);
        $jumlahProduk = Produk::count();
        return view('produk-page', compact('produk', 'jumlahProduk'));
    }
    public function deskripsiproduk(string $id)
    {
        $produk = Produk::find($id);
        $data = Produk::all();
        return view('deskripsi-produk-page', compact('produk', 'data'), ["produk" => DB::table("produks")->where('id', '=', $id)->get()]);  
    }
}
