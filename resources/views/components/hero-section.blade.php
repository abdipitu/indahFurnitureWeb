<?php
  $brand = 'Indah Furniture';
?>

<div>
    <div class="hero min-h-screen bg-white text-primary font-poppins">
        <div class="hero-content text-left">
          <div class="w-1/2">
            <h2 class="text-2xl font-semibold">Selamat Datang di</h2>
            <h1 class="text-6xl font-bold">{{ $brand }}</h1>
            <p class="py-3 text-xl font-medium text-zinc mb-5">' Mebel Apik lan Semedulur '</p>
            <a href="#"  class="mr-2 py-2 px-7 bg-white outline outline-primary rounded-full">Beli Sekarang</a>
            <a href="#"  class="text-white bg-primary py-3 px-8 rounded-full">LOGIN</a>
          </div>
          <div class="w-1/2 flex justify-end items-center">
            <img src="{{ asset('images/human.png') }}" alt="Furniture" class="w-2/3 h-2/3 rounded-md flex">
          </div>
        </div>
      </div>
</div>
