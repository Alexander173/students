<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::withDepth()->get()->toTree();
        return view('categories.index', compact('categories'));
    }

    public function show(Category $category)
    {
   		return redirect('categories');
    }

    public function create()
    {
    	$categories = Category::get()->toFlatTree();
    	
    	return view('categories.create', compact('categories'));
    }

    public function store(Request $request)
    {
    	$parent = Category::find($request->id);
    	$attributes = ['name' => $request->name];
    	Category::create($attributes, $parent);

    	return redirect('categories/');
    }

    public function destroy(Category $category)
    {
    	$category->delete();

    	return redirect('categories/');
    }
}
