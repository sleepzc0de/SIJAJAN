<?php

namespace App\Http\Controllers;
use App\Models\Drink;

use Illuminate\Http\Request;

class popularController extends Controller
{
    public function index()
    {
        $title = 'populer';

        // dd(drink::all());
        return view('menupopular', [
            'drink' => Drink::all(),
            'title' => $title, // Kirim data minuman ke view
        ]);
    }

    public function show($id)
    {
        $title = "Detail Menu";
        $drink = Drink::findOrFail($id);
        return view('viewpopular', [
            'drink' => $drink,
            "title" => $title

        ]);
    }
}
