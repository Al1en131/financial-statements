<?php

namespace App\Http\Controllers;

use App\Models\FinancialStatement;
use Illuminate\Foundation\Console\StorageLinkCommand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use League\Flysystem\StorageAttributes;

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
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'date' => 'required|date',
            'information' => 'required|string|max:255',
            'debit' => 'nullable|numeric|min:0',
            'credit' => 'nullable|numeric|min:0',
        ]);

        $statement = FinancialStatement::findOrFail($id);
        $statement->information = $request->input('information');
        $statement->debit = $request->input('debit', $statement->debit); // Use previous value if not provided
        $statement->credit = $request->input('credit', $statement->credit); // Use previous value if not provided
        $statement->date = $request->input('date'); // Update date

        // Update balance based on new debit and credit values
        $lastBalance = $statement->balance;
        $statement->balance = $lastBalance + $statement->debit - $statement->credit;

        // Handle image update if a new image is uploaded
        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($statement->image) {
                Storage::delete('public/image/' . $statement->image);
            }

            // Store new image
            $image = $request->file('image');
            $image->storeAs('public/image', $image->hashName());
            $statement->image = $image->hashName();
        }

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
