<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{

    function register() 
    {
        return view('register');
    }

    function registersave(Request $request)
    {
        Validator::make($request->all(),[
            'name'=> 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ])->validate();

        User::create([
            'name' =>$request->name,
            'email' =>$request->email,
            'password' =>Hash::make($request->password),
            'level' => 'admin'
        ]); 

        return redirect()->route('login')->with('success', 'Registrasi berhasil!');
    
    }


    public function login()
    {
        return view('login');
    }

    public function loginAction(Request $request)
    {
        Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ])->validate();

        $credentials = $request->only('email', 'password');

        if (!Auth::attempt($credentials, $request->boolean('remember'))) {
            throw ValidationException::withMessages([
                'email' => trans('auth.failed')
            ]);
        }
    
        $user = Auth::user();

        if ($user->level === 'admin') {
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('home');
        }
}

    function data()
    {
    return view('data');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}