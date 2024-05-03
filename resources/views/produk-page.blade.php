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
            <x-judul-halaman-produk jumlahproduk="{{ $u }}" />
        </div>
        <div class="px-32">
            <div class="grid grid-cols-4 justify-evenly mb-10">
                @for ($i = 0; $i < $u; $i++)
                    @component('components.card', [
                        'img' => '/images/furniture.jpg',
                        'name' => 'Sofa',
                        'price' => '4.500.000',
                        'stok' => '10',
                    ])
                    @endcomponent
                @endfor
            </div>
        </div>
        <x-footer />
    </div>
</body>

</html>
