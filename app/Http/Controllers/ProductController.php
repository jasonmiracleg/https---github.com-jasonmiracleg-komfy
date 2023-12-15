<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductPicture;
use App\Models\Variant;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $product_picture = ProductPicture::all();

        return view('user.home_page', [
            'products' => $products,
            'product_picture' => $product_picture
        ]);
    }

    public function show(int $index)
    {
        $product_picture = ProductPicture::where('product_id', $index)->get();
        $variant = Variant::all();
        $category = Category::all();
        $product = Product::find($index);

        return view('user.show', [
            'product_picture' => $product_picture,
            'variant' => $variant,
            'category' => $category,
            'product' => $product
        ]);
    }
}
