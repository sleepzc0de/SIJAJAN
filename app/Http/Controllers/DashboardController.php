<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{   
    public function index(){
        $title = 'dasboard';
    return view('backend.dashboard',[
        'title' => $title
    ]);

    }
}
