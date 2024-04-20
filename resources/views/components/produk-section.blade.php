<div class="pb-40 font-poppins w-full bg-white">
    <div class="flex flex-col justify-center px-32">
        <h1 class="font-bold text-4xl text-primary mb-4">Produk Populer</h1>
        <div class="text-zinc font-medium text-xl flex justify-between mb-10">
            <h1>Jelajahi semua produk yang kami tawarkan di sini</h1>
            <a href="#" class="flex gap-2">Lihat Koleksi <img src="{{ asset('svg/arrow-right.svg') }}" alt=""></a>
        </div>
        <div class="flex flex-col lg:flex-row flex-wrap justify-evenly mb-10">
            <x-card img="/images/furniture.jpg" name="Sofa" price="4.500.000" stok="10" />
            <x-card img="/images/furniture.jpg" name="Sofa" price="4.500.000" stok="10" />
            <x-card img="/images/furniture.jpg" name="Sofa" price="4.500.000" stok="10" />
            <x-card img="/images/furniture.jpg" name="Sofa" price="4.500.000" stok="10" />
        </div>
        <x-button-produk />
    </div>
</div>