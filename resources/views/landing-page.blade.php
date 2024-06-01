<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ url('/svg/logo-v2.svg') }}">
    <title>Landing Page</title>
</head>

<body>
    <div class="w-full bg-white">
        <div class="font-inter fixed w-full z-[9999]">
            <x-navbar kategori="#kategori" produk="#produk" />
        </div>
    </div>
    <x-hero-section />
    <x-kategory id="kategori" />
    <x-produk-section>
        @foreach ($produk as $item)
            <a href="/deskripsiproduk/{{ $item->id }}">
                <div class="w-64 bg-white border shadow hover:shadow-lg hover:shadow-primary flex justify-center mb-5">
                    <div class="p-2">
                        <img src="{{ asset('storage/' . $item->image_path) }}" alt="furniture" class="mb-2 h-56 mt-2 w-56 object-cover">
                        <div class="px-5">
                            <h3 class="text-black font-semibold mt-5">{{ $item->nama }}</h3>
                            <h4 class="text-primary font-medium">Rp. {{ $item->harga }}</h4>
                            <h4 class="text-zinc font-medium">{{ $item->jumlah }} Produk</h4>
                            <div class="flex justify-end">
                                <div class="py-2 px-4 w-12 rounded-full bg-primary my-5">
                                    <form action="/cart/add" method="post">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $item->id }}">
                                        <button type="submit">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="#fff" class="bi bi-cart"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </x-produk-section>
    <x-footer />
</body>

</html>
