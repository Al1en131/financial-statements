<x-app-layout>
    <form action="{{ route('cashfunds.store') }}" method="POST">
        @csrf
        <label for="cash_fund_name">Cash Fund Name:</label>
        <input type="text" name="cash_fund_name" required>
        <button type="submit">Create Cash Fund</button>
    </form>
</x-app-layout>
