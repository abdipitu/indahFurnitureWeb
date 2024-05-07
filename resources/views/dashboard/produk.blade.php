<x-app-layout>
    <div class="flex flex-row">
        <x-sidebar class="fixed"></x-sidebar>

        <div class="w-10/12 font-inter py-16">

            <div class="px-20 pt-8">
                <h1 class="font-semibold text-lg text-black">Produk</h1>
            </div>
            <div class="flex justify-between items-center mx-20">
                <div class="flex mt-5">
                    <x-search placeholder="Cari Pesanan.." color="transparent" class="mt-12" />
                </div>
                <a href="/tambahproduk" class="py-1 px-4 bg-primary text-white rounded-lg hover:bg-primaryhover">Add
                    +</a>
            </div>
        </div>
    </div>
</x-app-layout>
