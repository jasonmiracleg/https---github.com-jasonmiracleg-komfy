<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use App\Models\Variant;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        $bills = Bill::all();
        $variants = Variant::all();
        $products = Product::all();
        $users = User::all();

        return view('admin.order', [
            'orders' => $orders,
            'bills' => $bills,
            'variants' => $variants,
            'products' => $products,
            'users' => $users
        ]);
    }
}
