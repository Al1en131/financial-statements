<?php

namespace App\Http\Controllers;

use App\Models\CashFund;
use App\Models\CashFundInformation;
use Illuminate\Http\Request;
use Carbon\Carbon;

class CashFundInformationController extends Controller
{
    public function index($cashFundId)
    {
        $cashFund = CashFund::findOrFail($cashFundId);
        $cashFundInformations = CashFundInformation::where('cash_fund_id', $cashFundId)->get();
        foreach ($cashFundInformations as $info) {
            $info->formatted_date = Carbon::parse($info->date)->format('Y-m');
        }

        return view('cashfund_informations.index', compact('cashFundInformations', 'cashFund'));
    }

    public function store(Request $request, $cashFundId)
    {
        $request->validate(['date' => 'required|date']);

        CashFundInformation::create([
            'cash_fund_id' => $cashFundId,
            'date' => $request->date,
            'cash_detail' => $request->cash_detail,

        ]);

        return redirect()->route('cashfunds.informations.index', $cashFundId);
    }

    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $request->validate([
            'date' => 'required|date',
            'cash_detail' => 'required|numeric|min:0', // Ensure cash_detail is validated
        ]);

        // Find the CashFundInformation by ID or fail
        $cashFundInformation = CashFundInformation::findOrFail($id);

        // Update the fields
        $cashFundInformation->date = $request->date;
        $cashFundInformation->cash_detail = $request->cash_detail; // Update cash_detail

        // Save the changes
        $cashFundInformation->save();

        // Redirect back to the index route with a success message
        return redirect()->route('cashfunds.informations.index', $cashFundInformation->cash_fund_id)
            ->with('success', 'Cash Fund information updated successfully');
    }


    public function destroy($id)
    {
        $cashFundInformation = CashFundInformation::findOrFail($id);
        $cashFundId = $cashFundInformation->cash_fund_id;
        $cashFundInformation->delete();

        return redirect()->route('cashfunds.informations.index', $cashFundId)
            ->with('success', 'Cash Fund information deleted successfully');
    }
}
