<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="flex flex-row">
        <div class="w-2/12">
            <p>Ini untuk sidebar</p>
        </div>
        <div class="w-10/12">
            <div class="py-12">
                <div class="w-full mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900">
                            <p>Selamat datang {{ Auth::user()->name }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full">
                <div class="border border-3 px-8">
                </div>
            </div>

            <div class="py-12">
                <div class="w-full mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900">
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
