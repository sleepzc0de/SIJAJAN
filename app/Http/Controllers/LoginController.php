<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        
        return view('login.index', [
            "title" => "Login"
            
        ]);
    }

    public function authenticate(Request $request) {

        $login=$request->validate([
            'email'=> 'required|email:dns',
            'password'=>'required'
        ]);
        // dd('login berhasil');
        if (Auth::attempt($login)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }
        
        return back()->with('LoginError','login eror');
    }

    public Function logout(Request $request) {
        
            Auth::logout();
         
            $request->session()->invalidate();
         
            $request->session()->regenerateToken();
         
            return redirect('/');
        
    }
}