<?php

// app/Http/Controllers/CashFundController.php
namespace App\Http\Controllers;

use App\Models\CashFund;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CashFundController extends Controller
{

    public function index(User $user)
    {
        $userId = Auth::user()->id; // Use Auth::user()->id here
        $cashFunds = CashFund::where('user_id', $userId)->get();

        return view('cashfunds.index', compact('cashFunds'));
    }


    public function create()
    {
        return view('cashfunds.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'cash_fund_name' => 'required|string|max:255',
        ]);

        // Cek apakah pengguna sudah terautentikasi
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Anda harus login untuk membuat cash fund.');
        }

        // Buat cash fund baru
        $cashFund = CashFund::create([
            'user_id' => Auth::id(), // Menggunakan Auth::id() untuk mendapatkan ID pengguna
            'cash_fund_name' => $request->cash_fund_name,
        ]);

        // Redirect ke halaman cash fund yang baru dibuat
        return redirect()->route('cashfunds.show', $cashFund->id)->with('success', 'Cash fund berhasil dibuat.');
    }

    public function show($id)
    {
        $cashFund = CashFund::with('memberCash')->find($id); // Mengambil cash fund beserta memberCash


        return view('cashfunds.index', compact('cashFund'));
    }
}
