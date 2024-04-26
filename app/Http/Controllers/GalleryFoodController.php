<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryFoodController extends Controller
{
    public function gallery()
    {
        return view('gallery_food');
    }
}
