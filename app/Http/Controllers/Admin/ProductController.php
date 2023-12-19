<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductPicture;
use App\Models\Variant;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $variants = Variant::all();
        $categories = Category::all();

        return view('admin.index_product', [
            'products' => $products,
            'variants' => $variants,
            'categories' => $categories
        ]);
    }

    public function show($product_id, $variant_id)
    {
        $product = Product::find($product_id);
        $variant = Variant::find($variant_id);

        $selectable_variant = Variant::all();
        $categories = Category::all();

        $product_picture = ProductPicture::select('id', 'picture')
            ->where('product_id', $product_id)
            ->where('variant_id', $variant_id)
            ->get();

        return view('admin.detail_product', [
            'recent_product_id' => $product_id,
            'recent_variant_id' => $variant_id,
            'product' => $product,
            'variant' => $variant,
            'selectable_variant' => $selectable_variant,
            'categories' => $categories,
            'product_picture' => $product_picture
        ]);
    }

    public function edit_product(Request $request)
    {
        $recent_product = Product::find($request->recent_product_id);
        // $recent_variant = Variant::find($request->recent_variant_id);

        $recent_product::update([
            'product_name' => $request->product_name,
            'description' => $request->description,
            'price' => $request->price
        ]);

        $products = Product::all();
        $variants = Variant::all();
        $categories = Category::all();

        return view('admin.index_product', [
            'products' => $products,
            'variants' => $variants,
            'categories' => $categories
        ]);
    }

    public function delete($product_id, $variant_id)
    {
        $variant = Variant::where('id', $variant_id)
            ->where('product_id', $product_id);

        $variant->delete();

        $products = Product::all();
        $variants = Variant::all();
        $categories = Category::all();

        return view('admin.index_product', [
            'products' => $products,
            'variants' => $variants,
            'categories' => $categories
        ]);
    }

    public function create_product()
    {
        $variants = Variant::all();
        $categories = Category::all();

        return view('admin.create_product', [
            'variants' => $variants,
            'categories' => $categories
        ]);
    }

    public function add(Request $request)
    {
        Product::create([
            'product_name' => $request->product_name,
            'description' => $request->description,
            'price' => $request->price
        ]);

        Variant::create([
            'product_id' => Product::latest()->id->get(),
            'category_id' => $request->category_id,
            'variant_name' => $request->variant_name
        ]);
    }
}

