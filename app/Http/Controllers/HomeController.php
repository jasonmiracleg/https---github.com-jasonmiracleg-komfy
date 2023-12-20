<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductPicture;
use App\Models\Variant;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $variants = Variant::all();
        $products = Product::all();
        $product_picture = ProductPicture::all();

        return view('user.home', [
            'variants' => $variants,
            'products' => $products,
            'product_picture' => $product_picture
        ]
    );
    }
}
