<div class="pb-40 font-inter w-full bg-white" id="produk">
    <div class="flex flex-col justify-center px-32">
        <h1 class="font-bold text-4xl text-primary mb-4 font-poppins">Produk Populer</h1>
        <div class="text-zinc font-medium text-xl flex justify-between mb-10 font-poppins">
            <h1>Jelajahi semua produk yang kami tawarkan di sini</h1>
            <a href="/produk" class="flex gap-2 items-center">Lihat Koleksi <x-svg-arrow-right /></a>
        </div>
        <div class="grid grid-cols-4 justify-evenly mb-10">
            {{ $slot }}
        </div>
        <x-button-produk />
    </div>
</div>
