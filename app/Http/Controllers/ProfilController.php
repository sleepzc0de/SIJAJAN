<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class ProfilController extends Controller
{
    public function index()
    {
        $title = 'Profil';
        return view('backend.profil.index',[
            'title' => $title
        ]);
    }

    public function edit(User $user)
    {
        $title = 'Profil';
        return view('backend.profil.edit', [
            'user' => $user,
            'title' => $title            
        ]);
    }

    public function update(Request $request, User $user)
    {
        $rules = [           
            'name' => 'required|max:255',
            'image' => 'image|file|max:1024'
        ];

        if ($request->hasFile('image')) {
            if ($user->image) {
                Storage::delete('public/' . $user->image);
            }
            $data['image'] = $request->file('image')->store('public/user-images');
        } else {
            // Jika tidak ada pengiriman gambar baru, gunakan gambar lama
            $data['image'] = $user->image;
        }
        
        if($request->username != $user->username){
            $rules['username']='required|min:3|max:255';
        }else{
            unset($data['username']);
        }
        $data = $request->validate($rules);
       
        User::where('id', auth()->user()->id)
            ->update($data);
            return redirect('/profil')->with('success','berhasil mengubah data');
    }
}
