<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    public function test()
    {
        $produk = Produk::all();
        return view('test', compact('produk'));
    }

    public function card()
    {
        $produk = Produk::all();
        return view('components.card', compact('produk'));
    }

    public function index(Request $request)
    {
        // Produk::create($request()->only(['nama', 'keterangan', 'kategori','harga', 'jumlah']));

        DB::table('produks')->insert([
            'nama' => $request->nama,
            'keterangan' => $request->keterangan,
            'kategori' => $request->kategori,
            'harga' => $request->harga,
            'jumlah' => $request->jumlah,
        ]);

        return redirect()->route('produkadmin');
    }

    public function testket()
    {
        // return view('testket', ["produk" => DB::table("produks")->where('id', '=', $id)->get()]);
        $produk = Produk::all();
        $produk->map(function ($item) {
            return [
                'nama' => $item->nama,
                'keterangan' => $item->keterangan,
                'harga' => $item->harga,
            ];
        });
        return view('testket', compact('produk'));
    }

    public function showproduk()
    {
        $produk = Produk::all();
        return view('dashboard.produk', compact('produk'));
    }
}
