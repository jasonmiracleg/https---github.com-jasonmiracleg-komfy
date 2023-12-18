<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\Category;
use App\Models\Order;
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
        $variants = Variant::all();
        $product_picture = ProductPicture::all();

        return view('user.home', [
            'products' => $products,
            'product_picture' => $product_picture,
            'variants' => $variants
        ]);
    }


    public function show(int $variant_id, int $product_id)
    {
        $product_picture = ProductPicture::select('id', 'picture')
            ->where('product_id', $product_id)
            ->where('variant_id', $variant_id)
            ->get();

        $variant = Variant::find($variant_id);

        $category = Category::select('category_name')
            ->where('id', $variant->category_id)
            ->first();

        $product = Product::find($product_id);

        return view('user.show', [
            'product_picture' => $product_picture,
            'variant' => $variant,
            'product' => $product,
            'category' => $category
        ]);
    }

    public function cart(Request $request)
    {
        $products = Product::all();
        $variants = Variant::all();
        $product_picture = ProductPicture::all();

        Order::create([
            'user_id' => $request->user_id,
            'product_id' => $request->product_id,
            'variant_id' => $request->variant_id,
            'quantity' => $request->quantity,
            'order_price' => $request->price * $request->quantity
        ]);

        return view('user.home', [
            'products' => $products,
            'product_picture' => $product_picture,
            'variants' => $variants
        ]);
    }

    public function checkout(Request $request)
    {
        $user_id = $request->user_id;

        $bills = Bill::create([
            'is_paid' => '0',
            'is_cash' => '0'
        ]);

        $orders = Order::where('user_id', $user_id);

        $orders->update(
            [
                'bill_id' => $bills->id
            ]
        );

        $products = Product::all();
        $variants = Variant::all();
        $product_picture = ProductPicture::all();

        return view('user.home', [
            'products' => $products,
            'product_picture' => $product_picture,
            'variants' => $variants
        ]);
    }

    public function show_cart(Request $request)
    {
        $variants = Variant::all();
        $products = Product::all();
        $user_id = $request->user_id;
        $orders = Order::all();
        // $orders = Order::where('user_id', $request->user_id);
        // dd($orders->count());

        return view(
            'user.cart',
            [
                'user_id' => $user_id,
                'orders' => $orders,
                'variants' => $variants,
                'products' => $products,
            ]
        );
    }

    public function delete_order($order_id)
    {
        Order::find($order_id)->delete();

        $products = Product::all();
        $variants = Variant::all();
        $product_picture = ProductPicture::all();

        return view('user.home', [
            'products' => $products,
            'product_picture' => $product_picture,
            'variants' => $variants
        ]);
    }
}
