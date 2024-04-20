<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Landing Page</title>
</head>
<body>
    <div class="w-full bg-white">
        <div class="font-poppins fixed w-full z-[9999]">
            <x-navbar />
        </div>
    </div>
    <x-hero-section />
    <x-kategory />
    <x-produk-section />
    <x-footer />
</body>
</html>


