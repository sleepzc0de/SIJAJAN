<?php

namespace App\Http\Controllers;
use App\Models\Drink;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function show($id)
{
    $drink = Drink::find($id);

    if (!$drink) {
        abort(404); // Handle jika minuman tidak ditemukan
    }

    $title = 'Peasanan Anda';

    return view('backend.order.index', [
        'drink' => $drink,
        'title' => $title,
    ]);
}
}
