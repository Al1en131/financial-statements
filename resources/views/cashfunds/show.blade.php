<x-app-layout>
    <h1>Cash Fund: {{ $cashFund->cash_fund_name }}</h1>

    <form method="POST" action="{{ route('membercash.store', $cashFundId) }}">
        @csrf
        <input type="hidden" name="month" value="{{ $month }}"> <!-- Assuming you have this variable -->

        <label>Week 1</label>
        <input type="checkbox" name="payment_status_week1" {{ old('payment_status_week1') ? 'checked' : '' }}>

        <label>Week 2</label>
        <input type="checkbox" name="payment_status_week2" {{ old('payment_status_week2') ? 'checked' : '' }}>

        <label>Week 3</label>
        <input type="checkbox" name="payment_status_week3" {{ old('payment_status_week3') ? 'checked' : '' }}>

        <label>Week 4</label>
        <input type="checkbox" name="payment_status_week4" {{ old('payment_status_week4') ? 'checked' : '' }}>

        <button type="submit">Save</button>
    </form>

    <h2>Member Cash Records:</h2>
    <table>
        <thead>
            <tr>
                <th>Month</th>
                <th>Payment Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if ($cashFund->memberCash && $cashFund->memberCash->isNotEmpty())
                @foreach ($cashFund->memberCash as $memberCash)
                    <tr>
                        <td>{{ $memberCash->month }}</td>
                        <td>
                            <form action="{{ route('membercash.updatePaymentStatus', $memberCash->id) }}"
                                method="POST">
                                @csrf
                                @method('PATCH')
                                <div>
                                    <label>Week 1</label>
                                    <input type="checkbox" name="payment_status_week1"
                                        {{ $memberCash->payment_status_week1 ? 'checked' : '' }}>
                                </div>
                                <div>
                                    <label>Week 2</label>
                                    <input type="checkbox" name="payment_status_week2"
                                        {{ $memberCash->payment_status_week2 ? 'checked' : '' }}>
                                </div>
                                <div>
                                    <label>Week 3</label>
                                    <input type="checkbox" name="payment_status_week3"
                                        {{ $memberCash->payment_status_week3 ? 'checked' : '' }}>
                                </div>
                                <div>
                                    <label>Week 4</label>
                                    <input type="checkbox" name="payment_status_week4"
                                        {{ $memberCash->payment_status_week4 ? 'checked' : '' }}>
                                </div>
                                <button type="submit">Save</button>
                            </form>
                        </td>
                        <td><button>Edit</button></td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="3">Tidak ada data member cash ditemukan.</td>
                </tr>
            @endif
        </tbody>
    </table>
</x-app-layout>
