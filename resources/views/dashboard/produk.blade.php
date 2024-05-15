<x-app-layout>
    <div class="flex flex-row">
        <div class="fixed inset-y-0 left-0 z-10 overflow-y-auto w-2/12 h-screen bg-primary shadow-md font-inter">
            <x-sidebar></x-sidebar>
        </div>

        <div class="w-2/12"></div>

        <div class="w-10/12 font-inter py-16 min-h-screen">

            <div class="px-20 pt-8">
                <h1 class="font-semibold text-xl text-black">Produk</h1>
            </div>
            <div class="flex justify-between items-center mx-20">
                <div class="flex mt-5">
                    <x-search placeholder="Cari Pesanan.." color="slate-500" class="mt-12" />
                </div>
                <a href="/tambahproduk" class="py-1 px-4 bg-primary text-white rounded-lg hover:bg-primaryhover">Add
                    +</a>
            </div>

            @php
                $no = 1;
            @endphp

            <div class="mx-20 mt-12">
                <div class="w-full !text-black">
                    <div class="flex w-full mb-5">
                        <table class="table !bg-slate-500 !font-inter">
                            <thead>
                                <tr>
                                    <th class="w-1/5 !font-semibold">Id</th>
                                    <th class="w-1/5 !font-semibold">Nama</th>
                                    <th class="w-1/5 !font-semibold">Kategori</th>
                                    <th class="w-1/5 !font-semibold">Harga</th>
                                    <th class="w-1/5 !font-semibold !text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($produk as $item)
                                <tr class="!text-black">
                                    <th class="w-1/5 !text-black">{{ $no++ }}</th>
                                    <td class="w-1/5 !text-black">{{ $item->nama }}</td>
                                    <td class="w-1/5 !text-black">{{ $item->kategori }}</td>
                                    <td class="w-1/5 !text-black">Rp. {{ $item->harga }}</td>
                                    <td class="w-1/5 !text-black !text-center !flex !gap-3">
                                        <a href="/edit/{{ $item->id }}" type="button" class="py-1.5 px-3 bg-blue-600 rounded-lg text-white hover:bg-blue-700">Ubah</a>
                                        <form action="/hapus/{{ $item->id }}" method="post">
                                            @csrf
                                            <button class="py-1.5 px-3 bg-red-600 rounded-lg text-white hover:bg-red-700">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
