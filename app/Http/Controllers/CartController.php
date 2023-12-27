<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{

    public function addToCart(Request $request)
{
    $itemId = $request->input('itemId');
    $quantity = $request->input('quantity');

    // Lakukan validasi atau operasi lain sesuai kebutuhan

    // Simpan ke keranjang
    $cartItem = new Cart();
    $cartItem->product_id = $itemId;
    $cartItem->quantity = $quantity;
    // Set other fields as needed
    $cartItem->save();

    return response()->json(['success' => true]);
}

    public function updateCart(Request $request)
    {
        // Validasi input di sini jika diperlukan
        $itemId = $request->input('itemId');
        $quantity = $request->input('quantity');

        // Perbarui jumlah dan total harga di sini sesuai dengan kebutuhan Anda
        $cartItem = Cart::find($itemId);

        // Perbarui jumlah
        $cartItem->quantity = $quantity;
        $cartItem->save();

        // Hitung total harga
        $itemTotal = $cartItem->price * $quantity;

        // Hitung total harga semua item dalam cart
        $cartItems = Cart::all();
        $cartTotal = $cartItems->sum(function ($item) {
            return $item->price * $item->quantity;
        });

        return response()->json([
            'itemTotal' => 'Rp' . number_format($itemTotal, 0, ',', '.'),
            'cartTotal' => 'Rp' . number_format($cartTotal, 0, ',', '.'),
        ]);
    }
}