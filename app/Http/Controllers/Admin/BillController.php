<?php

namespace App\Http\Controllers\Admin;

use App\Models\Bill;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BillController extends Controller
{
    public function verify_paid($bill_id)
    {
        $bill = Bill::find($bill_id);
        $bill->setAttribute('is_paid', '1');
        $bill->save();
    }

    public function verify_cash($bill_id)
    {
        $bill = Bill::find($bill_id);
        $bill->setAttribute('is_cash', '1');
        $bill->save();
    }
}
