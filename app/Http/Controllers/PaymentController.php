<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function process(Request $request)
    {
        $request->validate([
            'payment_method' => 'required|string',
            'card_name' => 'required_if:payment_method,credit_card|string|max:255',
            'card_number' => 'required_if:payment_method,credit_card|digits:16',
            'expiry_date' => 'required_if:payment_method,credit_card|date_format:m/y',
            'cvc' => 'required_if:payment_method,credit_card|digits:3',
        ]);

        // Logika untuk memproses pembayaran sesuai dengan metode pembayaran yang dipilih
        // Misalnya, Anda dapat menghubungkan dengan gateway pembayaran di sini

        return back()->with('success', 'Payment successful!');
    }
}
