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

        // $produk = new Produk;
        // $produk->nama = $request->nama;
        // $produk->keterangan = $request->keterangan;
        // $produk->kategori = $request->categori;
        // $produk->harga = $request->harga;
        // $produk->image_path = $imagePath;
        // $produk->save();

        $request->validate([
            'image_path' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->file('image_path')) {
            $imagePath = $request->file('image_path')->store('produks', 'public');
            
            DB::table('produks')->insert([
                'nama' => $request->nama,
                'keterangan' => $request->keterangan,
                'kategori' => $request->kategori,
                'harga' => $request->harga,
                'jumlah' => $request->jumlah,
                'image_path' => $imagePath,
            ]);

            return redirect()->route('produkadmin');
        }


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

    public function hapus($id)
    {
        $item = Produk::findOrFail($id);
        $item->delete();
        return redirect()->back()->with('success', 'Item berhasil dihapus.');
    }

    public function edit($id)
    {
        $produk = Produk::findOrFail($id);
        return view('dashboard.editproduk', compact('produk'), ['produk' => DB::table('produks')->where('id', '=', $id)->get()]);
    }

    public function update(Request $request, $id)
    {
        $produk = Produk::findOrFail($id);
        $validasiData = $request->all();
        $produk->update($validasiData);
        // DB::table("produks")->where('id', '=', $id)->update($request->update());
        return redirect()->route('produkadmin');
    }
}
