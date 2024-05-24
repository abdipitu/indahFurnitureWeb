<x-app-layout>
    <div class="flex flex-row">
        <x-sidebar class="fixed"></x-sidebar>

        <div class="w-10/12 font-inter py-16">

            <div class="px-20 pt-8">
                <h1 class="font-semibold text-xl text-black">Transaksi</h1>
            </div>
            <div class="flex justify-end mt-5 px-20">
                <x-search placeholder="Cari Pesanan.." color="transparent" class="mt-12" />
            </div>
            <div class="mt-10 px-20">
                <div class="border-2 border-slate-100 shadow bg-white">
                    <div class="flex p-8 items-center justify-evenly">
                        <img src="{{ url('/images/furniture.jpg') }}" alt="contoh sajah" class="w-48 h-48">
                        <x-table-horizontal></x-table-horizontal>
                        <div class="flex flex-col gap-8 text-white">
                            <button class="px-3 py-1.5 bg-blue-500 rounded">Dibuat</button>
                            <button class="px-3 py-1.5 bg-blue-500 rounded">Dikirm</button>
                            <button class="px-3 py-1.5 bg-blue-500 rounded">Selesai</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
