<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function index()
    {
        // Check apakah pengguna belum login
        if (!auth()->check()) {
            // Set flash message untuk notifikasi login diperlukan
            session()->flash('login_required', true);
        }

        return view('welcome');
    }
}
