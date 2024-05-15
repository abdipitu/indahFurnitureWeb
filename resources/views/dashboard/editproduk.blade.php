<x-app-layout>
    <div class="flex flex-row">
        <x-sidebar class="fixed"></x-sidebar>

        <div class="w-10/12 font-inter py-16">

            <x-form-produk action="update/{{ $produk->id }}" valueNama="{{ $produk->nama }}" valueKeterangan="{{ $produk->keterangan }}"
                valueKategori="{{ $produk->kategori }}" valueHarga="{{ $produk->harga }}"
                valueJumlah="{{ $produk->jumlah }}" judulHalaman="Edit Produk"></x-form-produk>
        </div>
    </div>
</x-app-layout>
