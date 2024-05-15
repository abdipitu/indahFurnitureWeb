<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Produk Page</title>
</head>

<body>
    @php
        $u = 16;
    @endphp
    <x-navbar />
    <div class="w-full min-h-screen bg-white text-primary font-inter">
        <div class="py-24 px-32">
            <x-judul-halaman-produk jumlahproduk="{{ $jumlahProduk }}" />
        </div>
        <div class="px-32">
            <a href="/deskripsiproduk/{ $id }" class="grid grid-cols-4 justify-evenly mb-10">
                @foreach ($produk as $item)
                <div class="w-64 bg-white border shadow hover:shadow-lg hover:shadow-primary flex justify-center mb-5">
                    <div class="p-2">
                        <img src="{{ url('/images/furniture.jpg') }}" alt="furniture" class="mb-2">
                        <div class="px-5">
                            <h3 class="text-black font-semibold mt-5">{{ $item->nama }}</h3>
                            <h4 class="text-primary font-medium">Rp. {{ $item->harga }}</h4>
                            <h4 class="text-zinc font-medium">{{ $item->jumlah }} Produk</h4>
                            <div class="flex justify-end">
                                <div class="py-2 px-4 w-12 rounded-full bg-primary my-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff"
                                        class="bi bi-cart" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </a>
            </div>
        </div>
        <x-footer />
    </div>
</body>

</html>
