<?php

namespace App\Http\Controllers;

use App\Models\Financial;
use App\Models\FinancialStatement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FinancialController extends Controller
{
    // Display all financial categories for the authenticated user
    public function index()
    {
        $userId = Auth::id();

        // Load financial records along with their financial statements
        $financials = Financial::where('user_id', $userId)
            ->with('statements')
            ->get();

        // Calculate the balance for each financial record
        foreach ($financials as $financial) {
            $totalDebit = $financial->statements->sum('debit');  // Sum of all debit entries
            $totalCredit = $financial->statements->sum('credit'); // Sum of all credit entries

            // Calculate balance as total debit minus total credit
            $financial->balance = $totalDebit - $totalCredit;
        }

        // Pass data to the view
        return view('financial.index', compact('financials'));
    }


    // Store a new financial category for the authenticated user
    public function storeFinancial(Request $request)
    {
        $request->validate([
            'financial_name' => 'required|string|max:255',
        ]);

        Financial::create([
            'user_id' => Auth::id(),
            'financial_name' => $request->financial_name,
        ]);

        return redirect()->route('financial.index')->with('success', 'Financial category created successfully.');
    }

    // Display financial statements for a specific financial category
    public function showStatements($financialId)
    {
        $financial = Financial::where('id', $financialId)
            ->where('user_id', Auth::id())
            ->with('statements')
            ->firstOrFail();
        $totalDebit = $financial->statements->sum('debit');
        $totalCredit = $financial->statements->sum('credit');
        $sisaSaldo = $totalDebit - $totalCredit;

        return view('financial.statements', compact('financial', 'totalDebit', 'totalCredit','sisaSaldo'));
    }


    // Add this to the controller's update method to return a JSON response:
    public function update(Request $request, $id)
    {
        $request->validate([
            'financial_name' => 'required|string|max:255',
        ]);

        // Cari financial berdasarkan ID dan update nama financial-nya
        $financial = Financial::findOrFail($id);
        $financial->financial_name = $request->input('financial_name');
        $financial->save();

        return response()->json(['message' => 'Financial category updated successfully.']);
    }



    // Store a new statement under a specific financial category
    public function storeStatement(Request $request, $financialId)
    {
        $request->validate([
            'image' =>  'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'date' => 'required|date',
            'debit' => 'required|numeric|min:0',
            'credit' => 'required|numeric|min:0',
            'information' => 'required|string|max:255',
        ]);

        // Retrieve the last balance or set it to 0 if no previous statements exist
        $lastStatement = FinancialStatement::where('financial_id', $financialId)
            ->orderBy('created_at', 'desc')
            ->first();

        // Set initial balance to 0 if no previous statement exists
        $lastBalance = $lastStatement ? $lastStatement->balance : 0;

        // Calculate the new balance based on debit and credit
        $balance = $lastBalance + $request->debit - $request->credit;
        $image = $request->file('image');
        $image->storeAs('public/image', $image->hashName());

        // Create a new financial statement entry
        FinancialStatement::create([
            'image' => $image->hashName(),
            'date' => $request->date,
            'financial_id' => $financialId,
            'debit' => $request->debit,
            'credit' => $request->credit,
            'balance' => $balance,
            'information' => $request->information,
        ]);

        return redirect()->route('financial.showStatements', $financialId)->with('success', 'Financial statement added successfully.');
    }

    public function destroy($id)
    {
        $financial = Financial::findOrFail($id);
        $financial->delete();

        return redirect()->route('financial.index')->with('success', 'Financial category deleted successfully.');
    }
}
