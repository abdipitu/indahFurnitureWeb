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

<body class="font-inter">
    <x-app-layout>
        <div class="container mx-auto p-4 pt-20 px-44">
            <h1 class="text-2xl font-bold">Dashboard</h1>
            <p>Selamat datang di dashboard, {{ Auth::user()->name }}!</p>
            <h2 class="text-xl mt-20">Checked Out Products</h2>
            @foreach ($checkouts as $checkout)
                <div class="p-5 shadow hover:shadow-lg transition-all mb-5">
                    <p class="font-bold">{{ \Carbon\Carbon::parse($checkout->created_at)->format('D M Y')  }}</p>
                    <p>Produk : </p>
                    <div class="flex align-items-center gap-5">
                        @foreach($checkout->checkoutProducts as $cp)
                            <div>
                                <img src="{{ asset('storage/' . $cp->product->image_path) }}" alt="fotoproduk" class="w-24 h-24 rounded-md object-cover">
                                <p>{{ $cp->product->nama }}
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </x-app-layout>
</body>

</html>
