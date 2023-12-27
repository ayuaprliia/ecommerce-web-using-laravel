<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Cart; // Sesuaikan dengan model Cart yang sesuai dengan struktur tabel Anda
use Midtrans\Config;
use Midtrans\Snap;

class OrderController extends Controller
{
    public function checkout(Request $request)
    {
        // Dapatkan data produk dari cart
        $cartItem = Cart::find($request->input('cart_id')); // Sesuaikan dengan kolom yang sesuai

        // Pastikan item di cart ditemukan
        if (!$cartItem) {
            return redirect()->back()->with('error', 'Item not found in the cart.');
        }

        // Hitung total harga transaksi
        $totalPrice = $cartItem->quantity * $cartItem->price;

        // Simpan data order
        $order = Order::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            // Tambahkan kolom-kolom lain yang diperlukan
        ]);

        // Set konfigurasi Midtrans
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = false;
        Config::$isSanitized = true;
        Config::$is3ds = true;

        // Buat parameter transaksi
        $params = [
            'transaction_details' => [
                'order_id' => $order->id,
                'gross_amount' => 100 * 1,
            ],
            'customer_details' => [
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
            ],
            // Tambahkan parameter lain sesuai kebutuhan.
        ];

        // Dapatkan Snap Token
        try {
            $snapToken = Snap::getSnapToken($params);

            // Kirim token dan data order ke view checkout
            return view('checkout', compact('snapToken', 'order'));
        } catch (\Exception $e) {
            // Log pesan kesalahan
            Log::error('Midtrans API Error: ' . $e->getMessage());

            // Tampilkan pesan kesalahan kepada pengguna atau lakukan tindakan yang sesuai
            return redirect()->back()->with('error', 'Midtrans API error: ' . $e->getMessage());
        }
    }
}