<?php

namespace App\Http\Controllers;

use App\Models\MemberCash;
use App\Models\CashFundInformation;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class MemberCashController extends Controller
{
    public function index($cashFundInformationId)
    {
        $cashFundInformation = CashFundInformation::findOrFail($cashFundInformationId);
        $members = MemberCash::where('cash_fund_information_id', $cashFundInformationId)->get();

        return view('member_cash.index', compact('cashFundInformation', 'members'));
    }

    public function store(Request $request, $cashFundInformationId)
    {
        // Log the incoming request data
        Log::info('Request data:', $request->all());

        // Validate the request
        $request->validate([
            'member_name' => 'required|string|max:255',
        ]);

        // Create a new MemberCash entry
        MemberCash::create([
            'cash_fund_information_id' => $cashFundInformationId,
            'member_name' => $request->member_name,
        ]);

        return redirect()->route('cashfund_informations.member_cash.index', $cashFundInformationId)
            ->with('success', 'Member added successfully!');
    }

    public function update(Request $request, $cashFundInformationId, $member_cash)
    {
        $memberCash = MemberCash::findOrFail($member_cash);

        // Log data permintaan yang masuk
        Log::info('Updating MemberCash:', $request->all());

        // Validasi permintaan
        $request->validate([
            'week_1_status' => 'boolean',
            'week_2_status' => 'boolean',
            'week_3_status' => 'boolean',
            'week_4_status' => 'boolean',
        ]);

        // Perbarui status pembayaran
        $memberCash->update([
            'week_1_status' => $request->has('week_1_status'),
            'week_2_status' => $request->has('week_2_status'),
            'week_3_status' => $request->has('week_3_status'),
            'week_4_status' => $request->has('week_4_status'),
        ]);

        return redirect()->route('cashfund_informations.member_cash.index', $cashFundInformationId)
                         ->with('success', 'Payment status updated successfully!');
    }
    
}
