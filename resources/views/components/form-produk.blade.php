<div class="flex flex-col justify-center items-center font-poppins mt-20">
    <h1 class="font-bold text-black text-2xl mb-10">Tambah Produk</h1>
    <form action="#" method="post">
        @csrf
        <div class="flex gap-5 flex-col font-semibold">
            <div class="flex flex-col">
                <label for="namaproduk" class="text-black">Nama</label>
                <input type="text" id="namaproduk" name="namaproduk" class="text-black rounded-md border-primary font-medium">
            </div>
            <div class="flex flex-col">
                <label for="keteranganproduk" class="text-black">Keterangan</label>
                <textarea type="text" id="keteranganproduk" name="keteranganproduk" class="text-black rounded-md border-primary font-medium"></textarea>
            </div>
            <div class="flex gap-5">
                <div class="flex flex-col">
                    <label for="keteranganproduk" class="text-black">Kategori</label>
                    <input type="text" id="keteranganproduk" name="keteranganproduk" class="text-black rounded-md border-primary font-medium">
                </div>
                <div class="flex flex-col">
                    <label for="keteranganproduk" class="text-black">Harga</label>
                    <input type="text" id="keteranganproduk" name="keteranganproduk" class="text-black rounded-md border-primary font-medium">
                </div>
                <div class="flex flex-col">
                    <label for="keteranganproduk" class="text-black">Jumlah</label>
                    <input type="text" id="keteranganproduk" name="keteranganproduk" class="text-black rounded-md border-primary font-medium">
                </div>
            </div>
            <div class="flex flex-col mb-5">
                <label for="gambar" class="text-black mb-2">Gambar</label>
                <input type="file" id="gambar" name="gambar" class="text-black rounded-md flex justify-center items-center font-medium border-primary bg-white">
            </div>
            <button class="font-inter text-white bg-primary py-1.5 px-3 rounded-full">Simpan</button>
        </div>
    </form>
</div>