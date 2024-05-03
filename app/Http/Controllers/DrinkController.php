<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drink;

class DrinkController extends Controller
{
    public function index()
    {
        $title = 'Menu';

        // dd(drink::all());
        return view('daftarmenu', [
            'drink' => Drink::all(),
            'title' => $title, // Kirim data minuman ke view
        ]);
    }
    public function show($id)
    {
        $title = "Detail";
        $drink = Drink::findOrFail($id);
        return view('detailmenu', [
            'drink' => $drink,
            "title" => $title

        ]);
    }


}
