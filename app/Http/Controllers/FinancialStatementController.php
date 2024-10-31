<?php

namespace App\Http\Controllers;

use App\Models\FinancialStatement;
use Illuminate\Http\Request;

class FinancialStatementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(FinancialStatement $financialStatement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FinancialStatement $financialStatement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'information' => 'required|string|max:255',
            'debit' => 'nullable|numeric',
            'credit' => 'nullable|numeric',
        ]);

        $statement = FinancialStatement::findOrFail($id);
        $statement->information = $request->input('information');
        $statement->debit = $request->input('debit');
        $statement->credit = $request->input('credit');
        $statement->balance = $statement->debit - $statement->credit; // Update balance logic if necessary
        $statement->save();

        return redirect()->back()->with('success', 'Financial statement updated successfully!');
    }

    public function destroy($id)
    {
        $statement = FinancialStatement::findOrFail($id);
        $statement->delete();

        return redirect()->back()->with('success', 'Financial statement deleted successfully!');
    }

    protected function updateBalance($financialId)
{
    // Ambil semua pernyataan keuangan untuk financial_id tertentu
    $statements = FinancialStatement::where('financial_id', $financialId)->get();
    
    $totalDebit = 0;
    $totalCredit = 0;

    foreach ($statements as $statement) {
        $totalDebit += $statement->debit;
        $totalCredit += $statement->credit;
        $statement->balance = $totalDebit - $totalCredit; // Hitung balance
        $statement->save(); // Simpan perubahan
    }
}
}
