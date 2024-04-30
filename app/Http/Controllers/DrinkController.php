<?php

namespace App\Http\Controllers;

use App\Models\Drink;
use App\Models\Category;
use App\Http\Requests\StoreDrinkRequest;
use App\Http\Requests\UpdateDrinkRequest;

class DrinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Menu';
        $drinks = Drink::all();

        // dd(drink::all());
        return view('daftarmenu', [
            'drinks' => $drinks,
            'title' => $title, // Kirim data minuman ke view
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDrinkRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Drink $drink)
    {
        $title = "detail";
        $drink = Drink::all();
        return view('detailmenu', [
            'drink' => $drink,
            "title" => $title

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
    public function update(UpdateDrinkRequest $request, Drink $drink)
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
