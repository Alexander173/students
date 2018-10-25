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
    	$category = Category::find(request()->category_id);
    	return view('categories.create', ['category' => $category ]);
    }

    public function store(Request $request)
    {    	
		$parent = Category::find($request->category_id);
    	$attributes = ['name' => $request->name];
    	Category::create($attributes, $parent);
    	
    	return redirect('categories/');
    }

    public function edit(Category $category)
    {
    	$categories = Category::withDepth()->having('depth', '<' , 3)->get()->toFlatTree();

    	return view('categories.edit', ['category' => $category, 'categories' => $categories]);	
    }

   	public function update(Request $request, Category $category)
   	{
   		if ($request->parent_id != 0) {
   			$category->update($request->all());
   		}

   		return redirect('categories/');
   	}

    public function destroy(Category $category)
    {
	    if ($category->name != 'root') {
	    	if ($category['children']->count() > 0) {
	    		foreach ($category->children as $children) {
	    			$children->parent_id = $category->parent_id;
	    			$children->save();
	    		}
	    		$category->delete();
	    			    		
	    	} else {
	    		$category->delete();
	    	}    	
	    }

    	return redirect('categories/');
    }
}
