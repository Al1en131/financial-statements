<!-- resources/views/cashfunds/index.blade.php -->
<x-app-layout>
    <div class="container">
        <h1>Cash Funds</h1>

        <!-- Form to Add New CashFund -->
        <form action="{{ route('cashfunds.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="cash_fund_name" class="form-label">Cash Fund Name</label>
                <input type="text" class="form-control" id="cash_fund_name" name="cash_fund_name" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Cash Fund</button>
        </form>

        <!-- List of Cash Funds -->
        <hr>
        <h2>Your Cash Funds</h2>
        <ul class="list-group">
            @foreach ($cashFunds as $cashFund)
                <li class="list-group-item">
                    <a
                        href="{{ route('cashfunds.informations.index', $cashFund->id) }}">{{ $cashFund->cash_fund_name }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</x-app-layout>
