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
                    @php
                        $runningBalance = 0;
                    @endphp
                    @foreach ($financial->statements as $statement)
                        @php
                            // Tambahkan debit dan kurangi credit untuk menghitung balance
                            $runningBalance += $statement->debit - $statement->credit;
                        @endphp
                        <tr class="bg-white">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{ $statement->information }}
                            </th>
                            <td class="px-6 py-4">Rp. {{ number_format($statement->debit, 0, ',', '.') }}</td>
                            <td class="px-6 py-4">Rp. {{ number_format($statement->credit, 0, ',', '.') }}</td>
                            <td class="px-6 py-4">Rp. {{ number_format($runningBalance, 0, ',', '.') }}</td>
                            <td class="px-6 py-4 flex space-x-2">
                                <button
                                    onclick="openEditModal({{ $statement->id }}, '{{ $statement->information }}', {{ $statement->debit }}, {{ $statement->credit }})"
                                    class="text-yellow-500">
                                    <svg stroke="#022a3b" fill="#022a3b" stroke-width="0" class="h-5 w-5"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path
                                            d="M0 64C0 28.7 28.7 0 64 0L224 0l0 128c0 17.7 14.3 32 32 32l128 0 0 125.7-86.8 86.8c-10.3 10.3-17.5 23.1-21 37.2l-18.7 74.9c-2.3 9.2-1.8 18.8 1.3 27.5L64 512c-35.3 0-64-28.7-64-64L0 64zm384 64l-128 0L256 0 384 128zM549.8 235.7l14.4 14.4c15.6 15.6 15.6 40.9 0 56.6l-29.4 29.4-71-71 29.4-29.4c15.6-15.6 40.9-15.6 56.6 0zM311.9 417L441.1 287.8l71 71L382.9 487.9c-4.1 4.1-9.2 7-14.9 8.4l-60.1 15c-5.5 1.4-11.2-.2-15.2-4.2s-5.6-9.7-4.2-15.2l15-60.1c1.4-5.6 4.3-10.8 8.4-14.9z" />
                                    </svg>
                                </button>
                                <form action="{{ route('financial.statement.destroy', $statement->id) }}" method="POST"
                                    onsubmit="return confirm('Are you sure you want to delete this statement?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500">
                                        <svg stroke="#022a3b" fill="#022a3b" stroke-width="0" class="h-5 w-5"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <path
                                                d="M135.2 17.7C140.6 6.8 151.7 0 163.8 0L284.2 0c12.1 0 23.2 6.8 28.6 17.7L320 32l96 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 96C14.3 96 0 81.7 0 64S14.3 32 32 32l96 0 7.2-14.3zM32 128l384 0 0 320c0 35.3-28.7 64-64 64L96 512c-35.3 0-64-28.7-64-64l0-320zm96 64c-8.8 0-16 7.2-16 16l0 224c0 8.8 7.2 16 16 16s16-7.2 16-16l0-224c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16l0 224c0 8.8 7.2 16 16 16s16-7.2 16-16l0-224c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16l0 224c0 8.8 7.2 16 16 16s16-7.2 16-16l0-224c0-8.8-7.2-16-16-16z" />
                                        </svg>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr class="font-semibold text-gray-900">
                        <th scope="row" class="px-6 py-3 text-base">Total</th>
                        <td class="px-6 py-3">Rp. {{ number_format($totalDebit, 0, ',', '.') }}</td>
                        <td class="px-6 py-3">Rp. {{ number_format($totalCredit, 0, ',', '.') }}</td>
                        <td class="px-6 py-3">Rp. {{ number_format($totalDebit - $totalCredit, 0, ',', '.') }}</td>
                        <!-- Total balance -->
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

    <!-- Modal for editing financial statement -->
    <div id="edit-modal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white rounded-lg shadow-lg p-6 w-96">
            <h2 class="text-xl mb-4">Edit Financial Statement</h2>
            <form id="edit-form" action="" method="POST">
                @csrf
                @method('PUT')
                <input type="text" id="edit-information" name="information" placeholder="Financial Information"
                    required class="border border-gray-300 p-2 mb-2 w-full">
                <input type="text" id="edit-debit" name="debit" placeholder="Debit"
                    class="border border-gray-300 p-2 mb-2 w-full">
                <input type="text" id="edit-credit" name="credit" placeholder="Credit"
                    class="border border-gray-300 p-2 mb-2 w-full">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update Statement</button>
                <button type="button" onclick="closeEditModal()" class="mt-2 text-red-500">Cancel</button>
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

        function openEditModal(id, information, debit, credit) {
            document.getElementById('edit-information').value = information;
            document.getElementById('edit-debit').value = debit;
            document.getElementById('edit-credit').value = credit;
            document.getElementById('edit-form').action =
                `/financial/statements/${id}`; // sesuaikan dengan rute yang Anda buat
            document.getElementById('edit-modal').classList.remove('hidden');
        }

        function closeEditModal() {
            document.getElementById('edit-modal').classList.add('hidden');
        }
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-nr5CNC/0NYTIG4M45LkTYGP9BO+3wM1C9IZS47PTN4OqHMi7tB33Fkgciv68j2+OfWTT0R2B3dHDN2aZssLAZg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</x-app-layout>
