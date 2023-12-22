<?php

namespace App\Http\Controllers;

use App\Models\Testimony;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestimonyController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function index()
    {
        $testimony = [];
        $testimonyRequest = [];
        if (Auth::user() != null) {
            if (Auth::user()->role_id == 1) { // Showing testimony requests
                $testimonyRequest = Testimony::where('is_accepted', '0')->get();
            } else if (Auth::user()->role_id == 2) { // Showing their own testimonies
                $testimony = Testimony::where('user_id', 2)->where('is_accepted', '1')->get();
            }
        }
        return view(
            'Testimonies.index',
            [
                'testimonies' => Testimony::where('is_accepted', '1')->get(),
                'mytestimony' => $testimony,
                'testimonyRequest' => $testimonyRequest
            ]
        );
    }
}
