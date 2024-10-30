<?php

namespace App\Http\Controllers;

use App\Models\MemberCash;
use Illuminate\Http\Request;

class MemberCashController extends Controller
{
    public function store(Request $request, $cashFundId)
    {
        $request->validate([
            'month' => 'required|in:January,February,March,April,May,June,July,August,September,October,November,December',
            'payment_status_week1' => 'boolean',
            'payment_status_week2' => 'boolean',
            'payment_status_week3' => 'boolean',
            'payment_status_week4' => 'boolean',
        ]);

        MemberCash::create([
            'cash_fund_id' => $cashFundId,
            'month' => $request->month,
            'payment_status_week1' => $request->has('payment_status_week1'),
            'payment_status_week2' => $request->has('payment_status_week2'),
            'payment_status_week3' => $request->has('payment_status_week3'),
            'payment_status_week4' => $request->has('payment_status_week4'),
        ]);

        return back()->with('success', 'Member cash record created successfully!');
    }

    public function updatePaymentStatus(Request $request, $id)
    {
        $memberCash = MemberCash::findOrFail($id);

        // Validate the request
        $request->validate([
            'payment_status_week1' => 'boolean',
            'payment_status_week2' => 'boolean',
            'payment_status_week3' => 'boolean',
            'payment_status_week4' => 'boolean',
        ]);

        // Update the payment status for each week
        $memberCash->update([
            'payment_status_week1' => $request->has('payment_status_week1'),
            'payment_status_week2' => $request->has('payment_status_week2'),
            'payment_status_week3' => $request->has('payment_status_week3'),
            'payment_status_week4' => $request->has('payment_status_week4'),
        ]);

        return back()->with('success', 'Payment status updated successfully!');
    }
}
