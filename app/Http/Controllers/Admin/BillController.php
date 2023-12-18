<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bill;
use App\Models\Product;
use App\Models\ProductPicture;
use App\Models\Variant;
use Illuminate\Http\Request;

class BillController extends Controller
{
    public function verify_paid($bill_id)
    {
        $bill = Bill::find($bill_id);
        $bill->update([
            'is_paid' => '1'
        ]);
        $bill->save();

        $products = Product::all();
        $variants = Variant::all();
        $product_picture = ProductPicture::all();

        return view('user.home', [
            'products' => $products,
            'product_picture' => $product_picture,
            'variants' => $variants
        ]);

    }

    public function verify_cash($bill_id)
    {
        $bill = Bill::find($bill_id);
        $bill->update([
            'is_cash' => '1'
        ]);
        $bill->save();

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
