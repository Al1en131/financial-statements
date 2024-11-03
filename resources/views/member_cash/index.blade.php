<x-app-layout>
    <div class="container">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-4xl font-bold">Members for Cash Fund Information -
                {{ $cashFundInformation->date ? \Carbon\Carbon::parse($cashFundInformation->date)->format('F Y') : 'Invalid Date' }}
            </h1>
            <button onclick="openModal()" class="bg-blue-500 text-white px-4 py-2 rounded">Add Member</button>
        </div>
        <div class="mb-4">
            <h2 class="text-2xl">Total Collected: Rp. {{ number_format($totalCollected, 0, ',', '.') }}</h2>
        </div>
        @php
            $totalPaid = $members
                ->filter(function ($member) {
                    return $member->week_1_status &&
                        $member->week_2_status &&
                        $member->week_3_status &&
                        $member->week_4_status;
                })
                ->count();

            $totalUnpaid = $members->count() - $totalPaid;
        @endphp

        <h2 class="text-2xl">Total Members Lunas: {{ $totalPaid }}</h2>
        <h2 class="text-2xl">Total Members Belum Lunas: {{ $totalUnpaid }}</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Form to Add New Member -->
        <div id="modal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 hidden">
            <div class="bg-white rounded-lg shadow-lg p-6 w-96">
                <h2 class="text-xl mb-4">Add New Financial Statement</h2>
                <form action="{{ route('cashfund_informations.member_cash.store', $cashFundInformation->id) }}"
                    method="POST">
                    @csrf
                    <input type="text" value="{{ old('member_name') }}" name="member_name" placeholder="Member Name"
                        required class="border border-gray-300 p-2 mb-2 w-full">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Add Member</button>
                    <button type="button" onclick="closeModal()" class="mt-2 text-red-500">Cancel</button>
                </form>
            </div>
        </div>
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs text-white uppercase bg-[#022a3b]">
                    <tr>
                        <th scope="col" class="px-6 py-3 rounded-s-lg">Nama</th>
                        <th scope="col" class="px-6 py-3 justify-center text-center">Minggu 1</th>
                        <th scope="col" class="px-6 py-3 justify-center text-center">Minggu 2</th>
                        <th scope="col" class="px-6 py-3 justify-center text-center">Minggu 3</th>
                        <th scope="col" class="px-6 py-3 justify-center text-center">Minggu 4</th>
                        <th scope="col" class="px-6 py-3 justify-center text-center">Status</th>
                        <th scope="col" class="px-6 py-3 rounded-e-lg justify-center text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($members as $member)
                        <tr class="bg-white">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{ $member->member_name }}
                            </th>

                            <!-- Form untuk status minggu -->
                            <form
                                action="{{ route('cashfund_informations.member_cash.update', [$cashFundInformation->id, $member->id]) }}"
                                method="POST" id="form-status-{{ $member->id }}">
                                @csrf
                                @method('PATCH')

                                <td class="px-6 py-4 justify-center text-center">
                                    <div class="form-check form-switch">
                                        <input type="checkbox" class="form-check-input"
                                            id="checkbox_week_1_{{ $member->id }}" name="week_1_status"
                                            value="1"
                                            {{ old('week_1_status', $member->week_1_status) ? 'checked' : '' }}
                                            onchange="document.getElementById('form-status-{{ $member->id }}').submit();">
                                        <label class="form-check-label"
                                            for="checkbox_week_1_{{ $member->id }}"></label>
                                    </div>
                                </td>
                                <td class="px-6 py-4 justify-center text-center">
                                    <div class="form-check form-switch">
                                        <input type="checkbox" class="form-check-input"
                                            id="checkbox_week_2_{{ $member->id }}" name="week_2_status"
                                            value="1"
                                            {{ old('week_2_status', $member->week_2_status) ? 'checked' : '' }}
                                            onchange="document.getElementById('form-status-{{ $member->id }}').submit();">
                                        <label class="form-check-label"
                                            for="checkbox_week_2_{{ $member->id }}"></label>
                                    </div>
                                </td>
                                <td class="px-6 py-4 justify-center text-center">
                                    <div class="form-check form-switch">
                                        <input type="checkbox" class="form-check-input"
                                            id="checkbox_week_3_{{ $member->id }}" name="week_3_status"
                                            value="1"
                                            {{ old('week_3_status', $member->week_3_status) ? 'checked' : '' }}
                                            onchange="document.getElementById('form-status-{{ $member->id }}').submit();">
                                        <label class="form-check-label"
                                            for="checkbox_week_3_{{ $member->id }}"></label>
                                    </div>
                                </td>
                                <td class="px-6 py-4 justify-center text-center">
                                    <div class="form-check form-switch">
                                        <input type="checkbox" class="form-check-input"
                                            id="checkbox_week_4_{{ $member->id }}" name="week_4_status"
                                            value="1"
                                            {{ old('week_4_status', $member->week_4_status) ? 'checked' : '' }}
                                            onchange="document.getElementById('form-status-{{ $member->id }}').submit();">
                                        <label class="form-check-label"
                                            for="checkbox_week_4_{{ $member->id }}"></label>
                                    </div>
                                </td>
                            </form>

                            <td class="px-6 py-4 justify-center text-center">
                                @if ($member->week_1_status && $member->week_2_status && $member->week_3_status && $member->week_4_status)
                                    <span
                                        class="text-white bg-green-600 rounded-lg px-6 py-2 font-semibold">Lunas</span>
                                @else
                                    <span class="bg-red-700 px-6 py-2 rounded-lg text-white font-semibold">Belum
                                        Lunas</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 justify-center text-center">
                                <button type="button" class="bg-red-500 text-white px-2 py-1 rounded"
                                    onclick="deleteMember('{{ $cashFundInformation->id }}', '{{ $member->id }}')">
                                    Delete
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
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
    <script>
        function deleteMember(cashFundId, memberId) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Jika pengguna mengkonfirmasi, kirim request DELETE
                    const form = document.createElement('form');
                    form.method = 'POST';
                    form.action = `{{ url('cashfund_informations') }}/${cashFundId}/member_cash/${memberId}`;
                    form.innerHTML = `
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="DELETE">
                    `;
                    document.body.appendChild(form);
                    form.submit();
                }
            });
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</x-app-layout>
