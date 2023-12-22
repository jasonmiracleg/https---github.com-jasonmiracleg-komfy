<?php

namespace App\Http\Controllers\Admin;

use App\Models\Bill;
use App\Models\User;
use App\Models\Order;
use Livewire\Livewire;
use App\Models\Product;
use App\Models\Variant;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\ProductPicture;
use App\Http\Controllers\Controller;

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

    public function show($product_id)
    {
        $product = Product::find($product_id);

        return view('admin.detail_product', [
            'recent_product_id' => $product_id,
            'product' => $product
        ]);
    }

    public function edit_product(Request $request)
    {
        $recent_product = Product::find($request->recent_product_id);

        $recent_product->update([
            'product_name' => $request->product_name,
            'description' => $request->description,
        ]);
        return redirect()->route('product.admin');
    }

    public function delete($product_id)
    {
        $product = Product::find($product_id);
        $product->delete();
        return redirect()->route('product.admin');
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

        return redirect()->route('product.admin');
    }
}
