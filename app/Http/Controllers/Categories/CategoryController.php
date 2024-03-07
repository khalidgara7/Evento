<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use Database\Seeders\CategoriesTableSeeder;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::paginate(5);
        return view("back.categories.index", compact("categories"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("back.categories.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        $data = $request->validated();
        $fileName = time() . $request->name . '.' . $request->image->extension();
        $request->image->storeAs('public/images', $fileName);
        $data['image'] = $fileName;

        $category = Category::create($data);
        if ($category) {
            return redirect()->route('category.index')->with('success', 'Category created successfully.');
        } else {
            return back()->withInput()->with('error', 'Failed to create the category.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view("back.categories.edit", compact("category"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, string $id)
    {
        $category = Category::findOrFail($id);
        $data = $request->validated();
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $fileName = time() . '_' . $request->name . '.' . $request->image->extension();
            $request->image->storeAs('public/images', $fileName);
            $data['image'] = $fileName;
        }
        $updated = $category->update($data);

        if ($updated) {
            return redirect()->route('category.index')->with('success', 'Category updated successfully.');
        } else {
            return back()->withInput()->with('error', 'Failed to update the category.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        if ($category) {
            return redirect()->route('category.index')->with('success', 'Category deleted successfully.');
        } else {
            return back()->withInput()->with('error', 'Failed to update the category.');
        }
    }
}
