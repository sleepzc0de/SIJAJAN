<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegistrasiController extends Controller
{
    public function index()
    {
      return view('register',[
        'title' => 'Daftar Account',
      ]);
    }

    public function store(Request $request)
    {
      $data=$request->validate([
        'name' => 'required|max:255',
        'username' => 'required|min:3|max:255|unique:users',
        'email' => 'required|unique:users|email:dns',
        'password' => 'required|min:3|max:255'
        
      ]);
      // dd('register beerhasil');

        $data['password']= Hash::make($data['password']);

        User::create($data);
        return redirect('/login')->with('success','Register success, Pleas login');
    }
}
