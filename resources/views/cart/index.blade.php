@extends('layouts.app1')

@section('content')

<div class="container mx-auto my-10 px-4">
    <h1 class="text-2xl font-bold mb-6">Giỏ Hàng Của Bạn</h1>

    @if (session('status'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('status') }}
        </div>
    @endif

    @php
        // Đảm bảo $cart là mảng hoặc Countable
        $cart = is_array($cart) || $cart instanceof Countable ? $cart : [];
    @endphp

    @if (count($cart) > 0)
        <div class="bg-white shadow-md rounded-lg p-6">
            <div class="overflow-x-auto">
                <table class="w-full bg-white rounded-lg">
                    <thead class="bg-gray-200 text-black">
                        <tr>
                            <th class="py-3 px-4 text-left">Tên sản phẩm</th>
                            <th class="py-3 px-4 text-left">Giá</th>
                            <th class="py-3 px-4 text-left">Số lượng</th>
                            <th class="py-3 px-4 text-left">Thành tiền</th>
                            <th class="py-3 px-4 text-left">Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cart as $id => $item)
                            <tr class="border-b hover:bg-gray-100">
                                <td class="py-3 px-4">{{ $item['name'] }}</td>
                                <td class="py-3 px-4">{{ number_format($item['price'], 0, ',', '.') }} VND</td>
                                <td class="py-3 px-4">{{ $item['quantity'] }}</td>
                                <td class="py-3 px-4">{{ number_format($item['subtotal'], 0, ',', '.') }} VND</td>
                                <td class="py-3 px-4">
                                    <form action="{{ route('cart.remove', $id) }}" method="POST" onsubmit="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-gray-200 text-black font-bold py-1 px-3 rounded">
                                            Xóa
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="flex justify-between items-center mt-6">
                <h3 class="text-lg font-semibold">Tổng cộng:</h3>
                <h3 class="text-lg font-semibold">{{ number_format($total, 0, ',', '.') }} VND</h3>
            </div>

            <div class="mt-6">
                <form action="{{ route('checkout.process') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Họ và tên:</label>
                        <input type="text" id="name" name="name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                    </div>

                    <div class="mb-4">
                        <label for="address" class="block text-sm font-medium text-gray-700">Địa chỉ:</label>
                        <input type="text" id="address" name="address" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                    </div>

                    <div class="mb-4">
                        <label for="phone" class="block text-sm font-medium text-gray-700">Số điện thoại:</label>
                        <input type="text" id="phone" name="phone" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                    </div>

                    <input type="hidden" name="total" value="{{ $total }}"> <!-- Tổng tiền từ session hoặc database -->
                    <button type="submit" class="bg-blue-500 text-white font-bold py-2 px-4 rounded">Thanh Toán</button>
                </form>
            </div>
        </div>
    @else
        <div class="bg-blue-100 border border-blue-400 text-blue-700 px-4 py-3 rounded">
            Giỏ hàng của bạn đang trống!
        </div>
    @endif
</div>
@endsection
