<x-app-layout>
    <div class="flex flex-row">
        <x-sidebar class="fixed"></x-sidebar>

        <div class="w-10/12 font-inter">

            <div class="px-8 pt-8">
                <h1 class="font-semibold text-lg text-black">Pemesanan</h1>
            </div>
            <div class="flex justify-end mt-5 px-8">
                <x-search
                placeholder="Cari Pesanan.."
                color="transparent"
                class="mt-12"
                />
            </div>
        </div>
    </div>
</x-app-layout>