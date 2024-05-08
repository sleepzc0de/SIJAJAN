<?php

namespace App\Http\Controllers;

use App\Models\Drink;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class AdminDrinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // if(auth()->guest()){
        //     abort(403);
        // }

        // if(auth()->user()->username !== 'hendra'){
        //     abort(403);
        // }
        $title = 'Edit';
        return view('admin.drink',[
            'drink' => Drink::all(),  
            'title' => $title              
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'create';
        return view ('admin.create',[
            'title' => $title,
            'drink' => Drink::all(),
            'category' => category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|unique:drinks',
            'category_id' => 'required',
            'price' => 'required',
            'image' => 'image|file|max:1024',
            'description' => 'required'
        ]);
// dd('berhasil update');
        if($request->file('image')) {
            $data['image'] = $request->file('image')->store('drink-images');
        }

        $data['drink_id'] = auth()->user()->id;
        $data['description']= Str::limit(strip_tags($request->description), 200);

        Drink::create($data);
        return redirect('/admin/drink')->with('success', 'Menu Baru Telah Di Tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Drink $drink)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Drink $drink)
    {
        $title = 'Edit';
        return view ('admin.edit',[
            'title' => $title,
            'drink' => $drink,
            'category' => category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Drink $drink)
{
    $rules = [
        'name' => 'required|max:255', 
        'slug' => 'required|unique:drinks,slug,'.$drink->id,           
        'price' => 'required',
        'category_id' => 'required',
        'image' => 'image|file|max:1024',
        'description' => 'required'
    ];
    
    $data = $request->validate($rules);

    // Hapus file gambar lama jika ada pengiriman gambar baru
    if ($request->hasFile('image')) {
        if ($drink->image) {
            Storage::delete('public/' . $drink->image);
        }
        $data['image'] = $request->file('image')->store('public/drink-images');
    } else {
        // Jika tidak ada pengiriman gambar baru, gunakan gambar lama
        $data['image'] = $drink->image;
    }

    // Perbarui data minuman
    $drink->update($data);

    return redirect('/admin/drink')->with('success', 'Menu berhasil diperbarui');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Drink $drink)
    {
        Drink::destroy($drink->id);
        return redirect('/admin/drink')->with('success', 'menu telah di hapus');
    }
}
