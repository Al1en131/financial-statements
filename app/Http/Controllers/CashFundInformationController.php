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

        // Format the date using Carbon
        foreach ($cashFundInformations as $info) {
            $info->formatted_date = Carbon::parse($info->date)->format('Y-m'); // Format date
        }

        return view('cashfund_informations.index', compact('cashFundInformations', 'cashFund'));
    }

    public function store(Request $request, $cashFundId)
    {
        $request->validate(['date' => 'required|date']);

        CashFundInformation::create([
            'cash_fund_id' => $cashFundId,
            'date' => $request->date,
        ]);

        return redirect()->route('cashfunds.informations.index', $cashFundId);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'date' => 'required|date',
        ]);

        $cashFundInformation = CashFundInformation::findOrFail($id);
        $cashFundInformation->date = $request->date;
        $cashFundInformation->save();

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
