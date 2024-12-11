<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // Import model sản phẩm nếu có

class CartController extends Controller
{
    public function index()
    {
        // Lấy thông tin giỏ hàng từ session
        $cart = session()->get('cart', []);

        // Tính tổng giá trị giỏ hàng
        $total = array_sum(array_column($cart, 'subtotal'));

        return view('cart.index', compact('cart', 'total'));
    }

    public function add(Request $request, $id)
    {
        $product = Product::findOrFail($id); // Lấy sản phẩm theo ID

        // Lấy giỏ hàng từ session
        $cart = session()->get('cart', []);

        // Kiểm tra nếu sản phẩm đã có trong giỏ hàng
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
            $cart[$id]['subtotal'] = $cart[$id]['quantity'] * $cart[$id]['price'];
        } else {
            // Thêm sản phẩm mới vào giỏ hàng
            $cart[$id] = [
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => 1,
                'subtotal' => $product->price,
            ];
        }

        // Lưu giỏ hàng vào session
        session()->put('cart', $cart);

        return redirect()->route('cart.index')->with('status', 'Product added to cart!');
    }

    public function remove(Request $request, $id)
    {
        // Lấy giỏ hàng từ session
        $cart = session()->get('cart', []);

        // Xóa sản phẩm khỏi giỏ hàng
        unset($cart[$id]);

        // Cập nhật session
        session()->put('cart', $cart);

        return redirect()->route('cart.index')->with('status', 'Product removed from cart!');
    }
    
}
