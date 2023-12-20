<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductPicture;
use App\Models\User;
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
        Order::create([
            'user_id' => $request->user_id,
            'variant_id' => $request->variant_id,
            'quantity' => $request->quantity,
            'order_price' => $request->price * $request->quantity
        ]);

        return redirect()->route('home');
    }

    public function checkout(Request $request)
    {
        $user_id = $request->user_id;

        $bills = Bill::create([
            'is_paid' => '0',
            'is_cash' => '0'
        ]);

        $orders = Order::where('user_id', $user_id)
            ->where('bill_id', NULL);

        $orders->update(
            [
                'bill_id' => $bills->id
            ]
        );

        return redirect()->route('home');
    }

    public function show_cart(Request $request)
    {
        $variants = Variant::all();
        $products = Product::all();
        $user_id = $request->user_id;
        $orders = Order::all();

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

        return redirect()->route('home');
    }
}
