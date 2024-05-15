@props(['kategori' => '/#kategori', 'produk' => '/#produk'])

<div class="text-primary w-full border-b-2 border-slate-200 bg-white fixed font-inter">
    <div class="flex justify-between py-4 px-32 items-center">
        <div class="flex gap-10 items-center">
            <a href="{{ url('/') }}" class="font-bold text-xl font-poppins">Indah Furniture</a>
            <ul class="flex gap-5">
                <li>
                    <a href="#">
                        <div class="dropdown-container justify-center">
                            <div class="dropdown dropdown-hover">
                                <label class="my-2" tabindex="0">Beranda</label>
                                <div class="dropdown-menu dropdown-menu-bottom-right">
                                    <a href="{{ $kategori }}" class="dropdown-item text-sm">Kategori</a>
                                    <a href="{{ $produk }}" tabindex="-1" class="dropdown-item text-sm">Produk</a>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="dropdown-container justify-center">
                            <div class="dropdown dropdown-hover">
                                <label class="my-2" tabindex="0">Produk</label>
                                <div class="dropdown-menu dropdown-menu-bottom-right">
                                    <a class="dropdown-item text-sm" href="#">Kursi</a>
                                    <a tabindex="-1" class="dropdown-item text-sm" href="#">Sofa</a>
                                    <a tabindex="-1" class="dropdown-item text-sm" href="#">Almari</a>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                
            </ul>
        </div>
        <div class="flex gap-3 items-center">
            <x-search />
            <x-cart />
            <x-button-login />
        </div>
    </div>
</div>
