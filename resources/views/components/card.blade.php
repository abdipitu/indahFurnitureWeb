@props(['img', 'name', 'price', 'category', 'stok'])

{{-- @foreach ($produk as $item) --}}
<a href="/deskripsiproduk">
    <div class="w-64 bg-white border shadow hover:shadow-lg hover:shadow-primary flex justify-center mb-5">
        <div class="p-2">
            <img src="{{ $img }}" alt="furniture" class="mb-2">
            <div class="px-5">
                <h3 class="text-black font-semibold mt-5">{{ $name }}</h3>
                <h4 class="text-primary font-medium">Rp. {{ $price }}</h4>
                <h4 class="text-zinc font-medium">{{ $stok }} Produk</h4>
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
</a>
{{-- @endforeach --}}
