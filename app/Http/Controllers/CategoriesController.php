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
}
