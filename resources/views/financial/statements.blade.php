<!-- resources/views/financial/statements.blade.php -->

<x-app-layout>
    <div class="container">
        <h1 class="text-[#022a3b] font-bold text-lg mb-8">Financial Statements for {{ $financial->financial_name }}</h1>
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs text-white uppercase bg-[#022a3b]">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Keterangan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Debit
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Credit
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Saldo
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($financial->statements as $statement)
                        <tr class="bg-white border-b border-[#022a3b]">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{ $statement->information }}
                            </th>
                            <td class="px-6 py-4">{{ number_format($statement->debit, 0, ',', '.') }}</td>
                            <td class="px-6 py-4">{{ number_format($statement->credit, 0, ',', '.') }}</td>
                            <td class="px-6 py-4">{{ number_format($statement->balance, 0, ',', '.') }}</td>
                            <td class="px-6 py-4">
                                Action
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr class="font-semibold text-gray-900">
                        <th scope="row" class="px-6 py-3 text-base">Total</th>
                        <td class="px-6 py-3">3</td>
                        <td class="px-6 py-3">21,000</td>
                    </tr>
                </tfoot>
            </table>
        </div>

        <!-- Form to add new financial statement -->
        <h2>Add New Financial Statement</h2>
        <form action="{{ route('financial.statement.store', $financial->id) }}" method="POST">
            @csrf
            <input type="text" name="information" placeholder="Financial Information" required>
            <input type="text" name="debit" placeholder="Debit" required oninput="formatNumber(this)">
            <input type="text" name="credit" placeholder="Credit" required oninput="formatNumber(this)">
            <button type="submit">Add Statement</button>
        </form>
    </div>
    <script>
        function formatNumber(input) {
            // Remove any non-digit characters
            const value = input.value.replace(/\D/g, '');

            // Format the number with thousand separator
            input.value = value.replace(/\B(?=(\d{3})+(?!\d))/g, '.');
        }
    </script>

</x-app-layout>
