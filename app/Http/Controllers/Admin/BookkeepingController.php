<?php

namespace App\Http\Controllers\Admin;

use App\Models\Account;
use App\Models\Bookkeeping;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookkeepingController extends Controller
{
    public function index()
    {
        $accounts = Account::all();
        $bookkeepings = Bookkeeping::paginate(5);

        $totals = Bookkeeping::groupBy('account_id')
            ->selectRaw('account_id, sum(amount) as total_amount')
            ->get()
            ->pluck('total_amount', 'account_id')
            ->toArray();

        $accountTypes = ['Pemasukan', 'Pengeluaran', 'Modal', 'Investasi'];

        $totalsByType = [];

        foreach ($accountTypes as $accountType) {
            $accountId = Account::where('account_type', $accountType)->value('id');
            $totalsByType[$accountType] = number_format($totals[$accountId] ?? 0, 2, '.', ',');
        }

        return view('Bookkeepings.index', compact('accounts', 'bookkeepings', 'totalsByType'));
    }

    public function create()
    {
        $accounts = Account::all();
        return view('Bookkeepings.create', compact('accounts'));
    }

    public function store(Request $request)
    {
        Bookkeeping::create([
            'account_id' => $request->account_type,
            'title' => $request->title,
            'description' => $request->description,
            'amount' => $request->amount
        ]);
        return redirect()->route('admin.bookkeeping.index');
    }

    public function edit(Bookkeeping $bookkeeping)
    {
        $accounts = Account::all();
        $bookkeepingEdit = Bookkeeping::where('id', $bookkeeping->id)->first();
        return view('Bookkeepings.edit', compact('bookkeepingEdit', 'accounts'));
    }
    public function update(Request $request, Bookkeeping $bookkeeping)
    {
        $bookkeeping->update([
            'account_id' => $request->account_type,
            'title' => $request->title,
            'description' => $request->description,
            'amount' => $request->amount
        ]);
        return redirect()->route('admin.bookkeeping.index');
    }
    public function destroy(Bookkeeping $bookkeeping)
    {
        $bookkeeping->delete();
        return redirect()->route('admin.bookkeeping.index');
    }
}
