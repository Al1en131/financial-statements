<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\CashFund;
use App\Models\Financial;
use App\Models\FinancialStatement;
use App\Models\User;
use Illuminate\Container\Attributes\Log;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log as FacadesLog;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'Data berhasil diupdate');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function dashboard(User $user)
    {
        $userId = Auth::id();
        $financialCount = Financial::where('user_id', $userId)->count();
        $cashfundCount = CashFund::where('user_id', $userId)->count();
        $financials = Financial::with(['statements' => function ($query) use ($userId) {
            $query->whereHas('financial', function ($q) use ($userId) {
                $q->where('user_id', $userId);
            });
        }])->where('user_id', $userId)->get();

        $totalPengeluaran = $financials->flatMap->statements->sum('debit');
        $totalPemasukan = $financials->flatMap->statements->sum('credit');
        $totalAmount = $totalPengeluaran + $totalPemasukan;
        $percentPengeluaran = $totalAmount > 0 ? ($totalPengeluaran / $totalAmount) * 100 : 0;
        $percentPemasukan = $totalAmount > 0 ? ($totalPemasukan / $totalAmount) * 100 : 0;

        $cashFunds = CashFund::with(['cashFundInformations.memberCash'])
            ->where('user_id', $userId)
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        $recentFinancialStatements = FinancialStatement::with('financial')
            ->whereHas('financial', function ($q) use ($userId) {
                $q->where('user_id', $userId);
            })
            ->orderBy('updated_at', 'desc')
            ->take(3)
            ->get();

        return view('dashboard', compact('recentFinancialStatements', 'cashFunds', 'financialCount', 'cashfundCount', 'totalPengeluaran', 'totalPemasukan', 'percentPengeluaran', 'percentPemasukan'));
    }
}
