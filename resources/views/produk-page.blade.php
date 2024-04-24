<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body>
    <x-navbar />
    <div class="w-full h-screen bg-white text-primary font-poppins">
        <div class="py-24 px-32">
           <x-judul-halaman-produk jumlahproduk="16" />
        </div>
    </div>
    <x-footer />
</body>

</html>
