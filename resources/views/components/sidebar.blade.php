<div class="w-2/12 h-screen bg-primary shadow-md font-inter">
    <ul class="text-white py-20 font-semibold">
        <li class="px-10 py-2 hover:text-abu">
            <a href="/dashboard" class="block"><span class="{{ request()->routeIs('dashboard') ? 'bg-white py-1.5 px-3 text-black' : '' }} rounded">Dashboard</span></a>
        </li>
        <li class="px-10 py-2 hover:text-abu">
            <a href="/pemesanan" class="block"><span class="{{ request()->routeIs('pemesanan') ? 'bg-white py-1.5 px-3 text-black' : '' }} rounded">Pemesanan</span></a>
        </li>
        <li class="px-10 py-2 hover:text-abu">
            <a href="/pembayaran" class="block"><span class="{{ request()->routeIs('pembayaran') ? 'bg-white py-1.5 px-3 text-black' : '' }} rounded">Pembayaran</span></a>
        </li>
        <li class="px-10 py-2 hover:text-abu">
            <a href="/produkadmin" class="block"><span class="{{ request()->routeIs('produk') ? 'bg-white py-1.5 px-3 text-black' : '' }} rounded">Produk</span></a>
        </li>
    </ul>
</div>