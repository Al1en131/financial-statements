<?php

namespace App\Http\Controllers;

use App\Models\Financial;
use Illuminate\Http\Request;

namespace App\Http\Controllers;

use App\Models\Financial;
use Illuminate\Http\Request;

class FinancialController extends Controller
{
    public function index()
    {
        $financials = Financial::all();
        return view('financials.index', compact('financials'));
    }

    public function create()
    {
        return view('financials.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'keterangan' => 'required|string|max:255',
            'debit' => 'nullable|numeric',
            'kredit' => 'nullable|numeric',
        ]);

        // Calculate the balance based on debit and credit
        $debit = $request->debit ?? 0;
        $kredit = $request->kredit ?? 0;
        $sisa_uang = $debit - $kredit;

        Financial::create([
            'keterangan' => $request->keterangan,
            'debit' => $debit,
            'kredit' => $kredit,
            'sisa_uang' => $sisa_uang,
        ]);

        return redirect()->route('financials.index')->with('success', 'Financial record added.');
    }

    public function edit($id)
    {
        $financial = Financial::findOrFail($id);
        return view('financials.edit', compact('financial'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'keterangan' => 'required|string|max:255',
            'debit' => 'nullable|numeric',
            'kredit' => 'nullable|numeric',
        ]);

        $financial = Financial::findOrFail($id);
        $debit = $request->debit ?? 0;
        $kredit = $request->kredit ?? 0;
        $sisa_uang = $debit - $kredit;

        $financial->update([
            'keterangan' => $request->keterangan,
            'debit' => $debit,
            'kredit' => $kredit,
            'sisa_uang' => $sisa_uang,
        ]);

        return redirect()->route('financials.index')->with('success', 'Financial record updated.');
    }

    public function destroy($id)
    {
        $financial = Financial::findOrFail($id);
        $financial->delete();

        return redirect()->route('financials.index')->with('success', 'Financial record deleted.');
    }
}
