<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Cart Page</title>
</head>

<body class="font-inter">
    <x-navbar></x-navbar>
    <div class="container mx-auto py-24 min-h-screen">
        <div class="flex justify-center items-center">
            <div class="w-full md:w-2/3 bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl font-semibold mb-6">Shopping Cart</h2>
                @if (session('success'))
                    <div class="mb-4 p-4 bg-green-100 text-green-800 rounded">
                        {{ session('success') }}
                    </div>
                @endif
                @if (count($cart) > 0)
                    <table class="w-full mb-6">
                        <thead>
                            <tr>
                                <th class="text-left">Produk</th>
                                <th class="text-right">Jumlah</th>
                                <th class="text-right">Harga</th>
                                <th class="text-right">Total Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cart as $item)
                                <tr class="border-b">
                                    <td class="py-4">
                                        <div class="flex items-center">
                                            <img src="{{ asset('storage/' . $item['photo']) }}" alt="{{ $item['name'] }}"
                                                class="w-16 h-16 object-cover mr-4">
                                            <div>{{ $item['name'] }}</div>
                                        </div>
                                    </td>
                                    <td class="py-4 text-right">{{ $item['quantity'] }}</td>
                                    <td class="py-4 text-right">{{ $item['price'] }}</td>
                                    <td class="py-4 text-right">{{ $item['price'] * $item['quantity'] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="flex justify-end">
                        <form action="/cart/checkout" method="POST">
                            @csrf
                            <input type="hidden" name="items" value="{{ json_encode($cart) }}">
                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                                Checkout
                            </button>
                        </form>
                    </div>
                @else
                    <div class="text-gray-700">Your cart is empty.</div>
                @endif
            </div>
        </div>
        @error('items')
            <p class="text-red-500 text-center mt-5">{{ $message }}</p>
        @enderror
        @error('items.*.name')
            <p class="text-red-500 text-center mt-5">{{ $message }}</p>
        @enderror

    </div>
   <x-footer/>
</body>

</html>
