<?php

namespace App\Http\Controllers;

use App\Models\CashFund;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CashFundController extends Controller
{
    public function index()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $cashFunds = CashFund::where('user_id', Auth::id())->get();

        return view('cashfunds.index', compact('cashFunds'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'cash_fund_name' => 'required|string|max:255',
        ]);

        if (Auth::check()) {
            CashFund::create([
                'user_id' => Auth::id(),
                'cash_fund_name' => $request->cash_fund_name,
            ]);

            return redirect()->route('cashfunds.index')->with('success', 'Data berhasil ditambahkan');
        }

        return redirect()->route('login')->withErrors('You need to log in to create a cash fund.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'cash_fund_name' => 'required|string|max:255',
        ]);

        $cashFund = CashFund::findOrFail($id);
        $cashFund->cash_fund_name = $request->cash_fund_name;
        $cashFund->save();

        return redirect()->route('cashfunds.index')->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        $cashFund = CashFund::findOrFail($id);
        $cashFund->delete();

        return redirect()->route('cashfunds.index')->with('success', 'Data Berhasil dihapus');
    }
}
