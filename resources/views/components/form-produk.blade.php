@props(['action', 'valueNama' => '', 'valueKeterangan' => '', 'valueKategori' => '', 'valueHarga' => '', 'valueJumlah' => '', 'judulHalaman'])

<div class="flex flex-col justify-center items-center font-poppins mt-20">
    <h1 class="font-bold text-black text-2xl mb-10">{{ $judulHalaman }}</h1>
    <form action="/{{ $action }}" method="post">
        @csrf
        <div class="flex gap-5 flex-col font-semibold">
            <div class="flex flex-col">
                <label for="nama" class="text-black">Nama</label>
                <input type="text" id="nama" name="nama" class="text-black rounded-md border-primary font-medium" value="{{ $valueNama }}" required>
            </div>
            <div class="flex flex-col">
                <label for="keteranganproduk" class="text-black">Keterangan</label>
                <textarea type="text" id="keterangan" name="keterangan" class="text-black rounded-md border-primary font-medium" value="{{ $valueKeterangan }}" required></textarea>
            </div>
            <div class="flex gap-5">
                <div class="flex flex-col">
                    <label for="kategory" class="text-black">Kategori</label>
                    <input type="text" id="kategori" name="kategori" class="text-black rounded-md border-primary font-medium" value="{{ $valueKategori }}" required>
                </div>
                <div class="flex flex-col">
                    <label for="harga" class="text-black">Harga</label>
                    <input type="number" id="harga" name="harga" class="text-black rounded-md border-primary font-medium" value="{{ $valueHarga }}" required>
                </div>
                <div class="flex flex-col">
                    <label for="jumlah" class="text-black">Jumlah</label>
                    <input type="text" id="jumlah" name="jumlah" class="text-black rounded-md border-primary font-medium" value="{{ $valueJumlah }}" required>
                </div>
            </div>
            {{-- <div class="flex flex-col mb-5">
                <label for="gambar" class="text-black mb-2">Gambar</label>
                <input type="file" id="gambar" name="gambar" class="text-black rounded-md flex justify-center items-center font-medium border-primary bg-white">
            </div> --}}
            <button class="font-inter text-white bg-primary py-1.5 px-3 rounded-full" type="submit">Simpan</button>
        </div>
    </form>
</div>