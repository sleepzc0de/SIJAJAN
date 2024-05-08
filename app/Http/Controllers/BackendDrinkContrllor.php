<?php

namespace App\Http\Controllers;

use App\Models\Drink;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;

class BackendDrinkContrllor extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Menu';
        return view('backend.menu.index',[
            'drink' => Drink::all(),  
            'title' => $title              
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $title = 'Detail';
        $drink = Drink::findOrFail($id);
        
        return view('backend.menu.show', [
            'drink' => $drink,
            'title' => $title
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Drink $drink)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Drink $drink)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Drink $drink)
    {
        //
    }
}
