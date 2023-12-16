<?php

namespace App\Http\Controllers;

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

        return view('user.home_page', [
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
        // dd($request->product_price, $request->quantity);
        Order::create([
            'product_id' => $request->product_id,
            // 'variant_id' => $request->variant_id,
            'bill_id' => 1,
            'quantity' => $request->quantity,
            'order_price' => ($request->price * $request->quantity)
        ]);

        return $this->index();
    }

    // public function findCategory(Request $request)
    // {
    //     $category_data = Category::select('category_name', 'id')->where('id', $request->category_id)->get();
    //     return response()->json($category_data);
    // }
}
