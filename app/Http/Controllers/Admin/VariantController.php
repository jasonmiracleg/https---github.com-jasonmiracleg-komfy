<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Variant;
use Illuminate\Http\Request;

class VariantController extends Controller
{
    public function index()
    {
        $variants = Variant::all();
        $products = Product::all();
        $categories = Category::all();

        return view('admin.index_variant', [
            'variants' => $variants,
            'products' => $products,
            'categories' => $categories
        ]);
    }

    public function delete($variant_id)
    {
        Variant::find($variant_id)->delete();

        $variants = Variant::all();
        $products = Product::all();
        $categories = Category::all();

        return view('admin.index_variant', [
            'variants' => $variants,
            'products' => $products,
            'categories' => $categories
        ]);
    }

    public function create(Request $request)
    {
        Variant::create([
            'variant_name' => $request->variant_name,
            'product_id' => $request->product_id,
            'category_id' => $request->category_id
        ]);

        $variants = Variant::all();
        $products = Product::all();
        $categories = Category::all();

        return view('admin.index_variant', [
            'variants' => $variants,
            'products' => $products,
            'categories' => $categories
        ]);
    }
}
