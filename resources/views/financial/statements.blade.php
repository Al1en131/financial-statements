<x-app-layout>
    <div class="container">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-4xl font-bold">Financial Statements for {{ $financial->financial_name }}</h1>
            <button onclick="openModal()" class="bg-blue-500 text-white px-4 py-2 rounded">Add Statement</button>
        </div>
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs text-white uppercase bg-[#022a3b]">
                    <tr>
                        <th scope="col" class="px-6 py-3 rounded-s-lg">Keterangan</th>
                        <th scope="col" class="px-6 py-3">Debit</th>
                        <th scope="col" class="px-6 py-3">Credit</th>
                        <th scope="col" class="px-6 py-3">Saldo</th>
                        <th scope="col" class="px-6 py-3 rounded-e-lg">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($financial->statements as $statement)
                        <tr class="bg-white">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{ $statement->information }}</th>
                            <td class="px-6 py-4">{{ number_format($statement->debit, 0, ',', '.') }}</td>
                            <td class="px-6 py-4">{{ number_format($statement->credit, 0, ',', '.') }}</td>
                            <td class="px-6 py-4">{{ number_format($statement->balance, 0, ',', '.') }}</td>
                            <td class="px-6 py-4">Action</td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr class="font-semibold text-gray-900">
                        <th scope="row" class="px-6 py-3 text-base">Total</th>
                        <td class="px-6 py-3">{{ number_format($totalDebit, 0, ',', '.') }}</td>
                        <td class="px-6 py-3">{{ number_format($totalCredit, 0, ',', '.') }}</td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

    <!-- Modal for adding new financial statement -->
    <div id="modal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white rounded-lg shadow-lg p-6 w-96">
            <h2 class="text-xl mb-4">Add New Financial Statement</h2>
            <form action="{{ route('financial.statement.store', $financial->id) }}" method="POST">
                @csrf
                <input type="text" name="information" placeholder="Financial Information" required
                    class="border border-gray-300 p-2 mb-2 w-full">
                <input type="text" name="debit" placeholder="Debit" class="border border-gray-300 p-2 mb-2 w-full">
                <input type="text" name="credit" placeholder="Credit"
                    class="border border-gray-300 p-2 mb-2 w-full">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Add Statement</button>
                <button type="button" onclick="closeModal()" class="mt-2 text-red-500">Cancel</button>
            </form>
        </div>
    </div>

    <script>
        function openModal() {
            document.getElementById('modal').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('modal').classList.add('hidden');
        }
    </script>
</x-app-layout>
