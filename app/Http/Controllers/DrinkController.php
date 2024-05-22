<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drink;

use function Laravel\Prompts\search;

class DrinkController extends Controller
{
    public function index()
    {
        $title = 'Menu';
        return view('daftarmenu', [ 
            'drink' => Drink::latest()-> filter(request((['search', 'category'])))->get(),
            'title' => $title, 
        ]);
    }
    public function show($id)
    {
        $title = "Detail Menu";
        $drink = Drink::findOrFail($id);
        return view('detailmenu', [
            'drink' => $drink,
            "title" => $title

        ]);
    }
}
