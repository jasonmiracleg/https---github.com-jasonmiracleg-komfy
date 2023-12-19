<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bill;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductPicture;
use App\Models\User;
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

    public function update($product_id)
    {

    }

    public function delete($product_id)
    {
        $product = Product::find($product_id);
        $product->delete();

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

    public function data()
    {
        $products = Product::all();
        $variants = Variant::all();
        $users = User::all();
        $bills = Bill::all();
        $orders = Order::all();

        return view('admin.order', [
            'products' => $products,
            'variants' => $variants,
            'users' => $users,
            'bills' => $bills,
            'orders' => $orders
        ]);

    }

    public function add(Request $request)
    {
        Product::create([
            'product_name' => $request->product_name,
            'description' => $request->description,
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
}

