<!-- resources/views/cashfund_informations/index.blade.php -->
<x-app-layout>
    <div class="container">
        <h1>Cash Fund Information for "{{ $cashFund->cash_fund_name }}"</h1>

        <!-- Form to Add New CashFundInformation -->
        <form action="{{ route('cashfunds.informations.store', $cashFund->id) }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="date" class="form-label">Month & Year</label>
                <input type="date" class="form-control" id="date" name="date" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Cash Fund Information</button>
        </form>

        <!-- List of Cash Fund Informations -->
        <hr>
        <h2>Monthly Records</h2>
        <ul class="list-group">
            @foreach ($cashFundInformations as $info)
                <li class="list-group-item">
                    <a href="{{ route('cashfund_informations.member_cash.index', $info->id) }}">
                        {{ \Carbon\Carbon::parse($info->date)->format('Y-m') }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</x-app-layout>
