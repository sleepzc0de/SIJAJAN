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

        $data['category_id'] = auth()->user()->id;

        Category::create($data);
        return redirect('/admin/category')->with('success', 'Category Baru Telah Di Tambahkan');
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
            'slug' => 'required|unique:categories,slug,'.$category->id
        ];
        $data = $request->validate($rules);

        $category->update($data);
        return redirect('/admin/category')->with('success', 'Category Berhasil Di Update ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        Category::destroy($category->id);
        return redirect('/admin/category')->with('danger', 'Category Berhasil Di Hapus');
    }
}
