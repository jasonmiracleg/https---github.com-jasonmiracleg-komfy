<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('admin.index_category', [
            'categories' => $categories
        ]);
    }

    public function delete($category_id)
    {
        Category::find($category_id)->delete();

        return redirect()->route('category.admin');

    }

    public function create(Request $request)
    {
        Category::create([
            'category_name' => $request->category_name
        ]);

        return redirect()->route('category.admin');
    }
}
