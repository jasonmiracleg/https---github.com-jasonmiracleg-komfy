<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductPicture;
use App\Models\Variant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class VariantController extends Controller
{
    public function index()
    {
        $variants = Variant::all();
        $products = Product::all();
        $categories = Category::all();

        return view('admin.index_variant', [
            'variants' => $variants,
            'products' => $products,
            'categories' => $categories
        ]);
    }

    public function delete($variant_id)
    {
        Variant::find($variant_id)->delete();

        $variants = Variant::all();
        $products = Product::all();
        $categories = Category::all();

        return view('admin.index_variant', [
            'variants' => $variants,
            'products' => $products,
            'categories' => $categories
        ]);
    }

    public function create_var()
    {
        $products = Product::all();
        $categories = Category::all();

        return view('admin.create_variant', [
            'products' => $products,
            'categories' => $categories
        ]);
    }

    public function create(Request $request)
    {
        $variant = Variant::create([
            'variant_name' => $request->variant_name,
            'price' => $request->price,
            'product_id' => $request->product_id,
            'category_id' => $request->category_id
        ]);
        $variant->save();

        $files = $request->file('images');
        foreach ($files as $file) {
            $imageName = time() . '_' . $file->getClientOriginalName();
            $request['variant_id'] = $variant->id;
            $request['picture'] = $imageName;
            $file->move(\public_path("/assets/image/"), $imageName);
            ProductPicture::create(
                $request->all()
            );
        }

        // dd($files);

        $variants = Variant::all();
        $products = Product::all();
        $categories = Category::all();

        return view('admin.index_variant', [
            'variants' => $variants,
            'products' => $products,
            'categories' => $categories
        ]);
    }

    public function update(int $variant_id)
    {
        $variant = Variant::where('id', $variant_id)->first();
        $products = Product::all();
        $categories = Category::all();
        $images = ProductPicture::all();

        return view('admin.update_variant', [
            'variant' => $variant,
            'products' => $products,
            'categories' => $categories,
            'images' => $images
        ]);
    }

    public function update_variant(Request $request)
    {
        $variant = Variant::where('id', $request->variant_id)->first();

        $images = ProductPicture::all();

        foreach ($images as $image) {
            if ($image->variant_id == $request->variant_id) {
                if (File::exists("assets/image/" . $image->picture)) {
                    File::delete("assets/image/" . $image->picture);
                }
                $image->delete();
            }
        }

        $variant->update([
            'variant_name' => $request->variant_name,
            'price' => $request->price,
            'product_id' => $request->product_id,
            'category_id' => $request->category_id
        ]);

        $files = $request->file('images');
        foreach ($files as $file) {
            $imageName = time() . '_' . $file->getClientOriginalName();
            $request['variant_id'] = $request->variant_id;
            $request['picture'] = $imageName;
            $file->move(\public_path("/assets/image/"), $imageName);
            ProductPicture::create(
                $request->all()
            );
        }

        $variants = Variant::all();
        $products = Product::all();
        $categories = Category::all();

        return view('admin.index_variant', [
            'variants' => $variants,
            'products' => $products,
            'categories' => $categories
        ]);
    }
}
