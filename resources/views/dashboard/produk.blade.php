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
                                            <a href="/edit/{{ $item->id }}" type="button"
                                                class="py-2 px-4 bg-blue-600 rounded text-white hover:bg-blue-700">Ubah</a>

                                            {{-- delete start --}}
                                            <button type="button" class="bg-red-500 text-white px-4 py-2 rounded"
                                                onclick="openModal({{ $item->id }})">
                                                Hapus
                                            </button>

                                            <div id="confirmDeleteModal"
                                                class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 hidden">
                                                <div
                                                    class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all max-w-lg w-full">
                                                    <div class="px-4 py-5 sm:px-6">
                                                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                                                            Konfirmasi Hapus</h3>
                                                        <button type="button"
                                                            class="text-gray-400 hover:text-gray-500 float-right"
                                                            onclick="closeModal()">
                                                            <span class="sr-only">Close</span>
                                                            <!-- Heroicon name: outline/x -->
                                                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                                                                fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                                aria-hidden="true">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="px-4 py-5 sm:p-6">
                                                        <p class="text-sm text-gray-500">Apakah Anda yakin ingin
                                                            menghapus item ini?</p>
                                                    </div>
                                                    <div class="px-4 py-4 sm:px-6 sm:flex sm:flex-row-reverse">
                                                        <form id="deleteForm" action="/hapus/{{ $item->id }}" method="POST"
                                                            style="display:inline;">
                                                            @csrf
                                                            <button type="submit"
                                                                class="bg-red-500 text-white px-4 py-2 rounded ml-2">
                                                                Ya
                                                            </button>
                                                        </form>
                                                        <button type="button"
                                                            class="bg-gray-500 text-white px-4 py-2 rounded"
                                                            onclick="closeModal()">Tidak</button>
                                                    </div>
                                                </div>
                                            </div>

                                            {{-- delete end --}}
                                            {{-- <form action="/hapus/{{ $item->id }}" method="post">
                                                @csrf
                                                <button
                                                    class="py-1.5 px-3 bg-red-600 rounded-lg text-white hover:bg-red-700">Hapus</button>
                                            </form> --}}
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
    <script>
        function openModal(id) {
            document.getElementById('confirmDeleteModal').classList.remove('hidden');
            document.getElementById('deleteForm').action = '/hapus/' + id; // Ubah URL action sesuai kebutuhan
        }

        function closeModal() {
            document.getElementById('confirmDeleteModal').classList.add('hidden');
        }
    </script>
</x-app-layout>
