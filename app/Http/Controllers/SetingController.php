<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SetingController extends Controller
{
    public function index()
    {
        $title = 'Seting';
        return view ('backend.seting.index',[
            'title' => $title
        ]);
    }

    public function show(User $user)
    {
        $title = 'Email&Password';
        return view ('backend.seting.show',[
            'user' => $user,
            'title' => $title
        ]);
    }

    public function edit(User $user)
    {
        $title = 'Ganti Email';
        return view('backend.seting.edit', [
            'user' => $user,
            'title' => $title            
        ]);
    }

    public function update(Request $request, User $user)
    {
        $rules = [           
            'email' => 'required|unique:users|email:dns',
        ];
        $data = $request->validate($rules);
       
        User::where('id', auth()->user()->id)
            ->update($data);
            return redirect('/seting')->with('success','berhasil mengubah data');
    }
    
}
