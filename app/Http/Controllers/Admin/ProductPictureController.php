<?php

namespace App\Http\Controllers\Admin;

use Livewire\Livewire;
use Illuminate\Http\Request;
use App\Models\ProductPicture;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class ProductPictureController extends Controller
{
    public function delete($image_id)
    {
        $image = ProductPicture::find($image_id);
        if (File::exists("assets/image/" . $image->picture)) {
            File::delete("assets/image/" . $image->picture);
        }
        $image->delete();
        return back();
    }
}
