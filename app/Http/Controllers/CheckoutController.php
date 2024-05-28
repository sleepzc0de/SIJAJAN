<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    
    function checkout(Request $request)
    {
        Auth::user();

        $cart = session('addcart', []);
        if (empty($cart)) {
            return redirect()->back()->with('error', 'Keranjang belanja Anda kosong.');
        }

        // Simpan pesanan baru ke dalam tabel orders
        foreach ($cart as $id => $details) {
            $harga = str_replace(['Rp', '.', ','], ['', '', ''], $details['harga']); // Hapus simbol dan karakter non-numerik
            $harga = floatval($harga); // Konversi menjadi float

            Order::create([
                'name' => $details['name'],
                'makanan' => $details['makanan'],
                'image' => $details['images'],
                'harga' => $harga,
            ]);
        }

        // Hapus keranjang belanja dari sesi
        session()->forget('addcart');

        // Redirect ke halaman sukses checkout
        return redirect()->route('checkout.success');
    }

    // Metode untuk menampilkan halaman sukses checkout
    function SuccessPage()
    {
        return view('checkout.success');
    }
    
}
