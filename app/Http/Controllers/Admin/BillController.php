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

        return redirect()->route('order.admin');
    }

    public function verify_cash($bill_id)
    {
        $bill = Bill::find($bill_id);
        $bill->update([
            'is_cash' => '1'
        ]);
        $bill->save();

        return redirect()->route('order.admin');
    }
}
