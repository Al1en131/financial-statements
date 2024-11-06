<?php

namespace App\Http\Controllers;

use App\Models\Financial;
use App\Models\FinancialStatement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FinancialController extends Controller
{
    public function index()
    {
        $userId = Auth::id();

        $financials = Financial::where('user_id', $userId)
            ->with('statements')
            ->get();

        foreach ($financials as $financial) {
            $totalDebit = $financial->statements->sum('debit');
            $totalCredit = $financial->statements->sum('credit');

            $financial->balance = $totalDebit - $totalCredit;
        }

        return view('financial.index', compact('financials'));
    }


    public function storeFinancial(Request $request)
    {
        $request->validate([
            'financial_name' => 'required|string|max:255',
        ]);

        Financial::create([
            'user_id' => Auth::id(),
            'financial_name' => $request->financial_name,
        ]);

        return redirect()->route('financial.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function showStatements($financialId)
    {
        $financial = Financial::where('id', $financialId)
            ->where('user_id', Auth::id())
            ->with('statements')
            ->firstOrFail();
        $totalDebit = $financial->statements->sum('debit');
        $totalCredit = $financial->statements->sum('credit');
        $sisaSaldo = $totalDebit - $totalCredit;

        return view('financial.statements', compact('financial', 'totalDebit', 'totalCredit', 'sisaSaldo'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'financial_name' => 'required|string|max:255',
        ]);

        $financial = Financial::findOrFail($id);
        $financial->financial_name = $request->input('financial_name');
        $financial->save();

        return response()->json(['message' => 'Data berhasil diupdate']);
    }


    public function storeStatement(Request $request, $financialId)
    {
        $request->validate([
            'image' =>  'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'date' => 'required|date',
            'debit' => 'required|numeric|min:0',
            'credit' => 'required|numeric|min:0',
            'information' => 'required|string|max:255',
        ]);

        $lastStatement = FinancialStatement::where('financial_id', $financialId)
            ->orderBy('created_at', 'desc')
            ->first();

        $lastBalance = $lastStatement ? $lastStatement->balance : 0;

        $balance = $lastBalance + $request->debit - $request->credit;
        $image = $request->file('image');
        $image->storeAs('public/image', $image->hashName());

        FinancialStatement::create([
            'image' => $image->hashName(),
            'date' => $request->date,
            'financial_id' => $financialId,
            'debit' => $request->debit,
            'credit' => $request->credit,
            'balance' => $balance,
            'information' => $request->information,
        ]);

        return redirect()->route('financial.showStatements', $financialId)->with('success', 'Data berhasil ditambahkan');
    }

    public function destroy($id)
    {
        $financial = Financial::findOrFail($id);
        $financial->delete();

        return redirect()->route('financial.index')->with('success', 'Data Berhasil dihapus');
    }
}
