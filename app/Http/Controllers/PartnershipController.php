<?php

namespace App\Http\Controllers;

use App\Rules\SquareImage;
use App\Models\Partnership;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PartnershipController extends Controller
{
    public function index()
    {
        return view(
            'Partnerships.index',
            ['partnerships' => Partnership::all()]
        );
    }
}
