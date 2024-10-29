<!-- resources/views/financial/statements.blade.php -->

<x-app-layout>
<div class="container">
    <h1>Financial Statements for {{ $financial->financial_name }}</h1>

    <!-- List all financial statements under this category -->
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Keterangan</th>
                <th>Debit</th>
                <th>Credit</th>
                <th>Saldo</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($financial->statements as $statement)
                <tr>
                    <td>{{ $statement->id }}</td>
                    <td>{{ $statement->information }}</td>
                    <td>{{ $statement->debit }}</td>
                    <td>{{ $statement->credit }}</td>
                    <td>{{ $statement->balance }}</td>
                    <td>{{ $statement->created_at->format('Y-m-d') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Form to add new financial statement -->
    <h2>Add New Financial Statement</h2>
    <form action="{{ route('financial.statement.store', $financial->id) }}" method="POST">
        @csrf
        <input type="text" name="information" placeholder="Financial Information" required>
        <input type="number" name="debit" placeholder="Debit" required>
        <input type="number" name="credit" placeholder="Credit" required>
        <button type="submit">Add Statement</button>
    </form>
</div>
</x-app-layout>
