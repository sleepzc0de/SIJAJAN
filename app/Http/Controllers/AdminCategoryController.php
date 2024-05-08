<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Edit Category';
        return view('admin.category', [
            'category' => Category::all(),
            'title' => $title
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Create Category';
        return view('admin.createcategory', [
            'title' => $title,
            'categories' =>Category::all()
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
            
        ]);
// dd('berhasil update');

        $data['category_id'] = auth()->user()->id;

        Category::create($data);
        return redirect('/admin/category')->with('success', 'New postingan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        // dd('ini halaman edit');
        $title = 'Edit';
        return view('admin.editcategory',[
            'title' => $title,
            'category' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $rules = [
            'name' => 'required|max:255',            
            'slug' => 'required'
        ];
        $data = $request->validate($rules);

        $data['category_id'] = auth()->user()->id;

        Category::where('id', $category->id)
            ->update($data);
        return redirect('/admin/category')->with('success', 'New postingan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        Category::destroy($category->id);
        return redirect('/admin/category')->with('success', 'Postingan telah di Edit');
    }
}
