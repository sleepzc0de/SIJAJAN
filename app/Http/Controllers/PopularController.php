<?php

namespace App\Http\Controllers;
use App\Models\Drink;

use Illuminate\Http\Request;

class popularController extends Controller
{
    public function index()
    {
        $title = 'Populer';
        return view('menupopular', [
            'drink' => Drink::all(),
            'title' => $title 
        ]);
    }
}
