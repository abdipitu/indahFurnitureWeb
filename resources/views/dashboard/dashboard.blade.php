<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="flex flex-row">
        <x-sidebar></x-sidebar>

        <div class="w-10/12 font-inter py-16">

            <div class="px-20 pt-8">
                <h1 class="font-semibold text-lg text-black">Dashboard</h1>
            </div>

            <div class="py-12">
                <div class="w-full mx-auto sm:px-6 lg:px-20">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-abu">
                            <p>Selamat datang <span class="font-semibold text-black">{{ Auth::user()->name }}</span></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full">
                <div class="border border-3 mx-20">
                </div>
            </div>

            <div class="py-12">
                <div class="w-full mx-auto sm:px-6 lg:px-20">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-abu">
                            <div class="flex justify-evenly items-center">
                                <div>
                                    <p>Jumlah Pesanan bulan ini.</p>
                                    <h1 class="text-5xl font-extrabold text-center">5</h1>
                                </div>
                                <div class="h-24 border"></div>
                                <div>
                                    <p>Pesanan sedang dibuat</p>
                                    <h1 class="text-5xl font-extrabold text-center">5</h1>
                                </div>
                                <div class="h-24 border"></div>
                                <div>
                                    <p>Pesanan sedang dikirim</p>
                                    <h1 class="text-5xl font-extrabold text-center">5</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
