<div class="text-primary w-full border-b-2 border-slate-200 bg-white fixed font-poppins">
    <div class="flex justify-between py-4 px-32 items-center">
        <div class="flex gap-10 items-center">
            <a href="{{ url('/') }}" class="font-bold text-xl">Indah Furniture</a>
            <ul class="flex gap-5">
                <x-dropdown-navbar />
            </ul>
        </div>
        <div class="flex gap-3 items-center">
            <x-search />
            <x-cart />
            <x-button-login />
        </div>
    </div>
</div>