<x-app-layout>
    <div class="container sm:pl-6 lg:pl-8">
        <div class="relative mt-6 max-lg:mt-0 mb-16">
            <div class="absolute -top-6 left-10 max-lg:top-24 max-lg:-right-10 max-lg:w-60 max-lg:h-60">
                <img src="{{ asset('/images/icon-laporan-keuangan.png') }}" class="" alt="">
            </div>
            <div class="bg-white bg-opacity-5 overflow-hidden shadow-sm rounded-2xl">
                <div class="flex justify-end">
                    <div class="py-8 px-12 text-white">
                        <h1 class="text-white font-bold text-3xl text-center mb-3">
                            {{ $cashFundInformation->date ? \Carbon\Carbon::parse($cashFundInformation->date)->format('F Y') : 'Invalid Date' }}
                        </h1>
                        <p class="text-base px-8 text-center mb-7">Kalo tamu <span class="text-[#EC8305]">wajib
                                lapor</span>, kalo
                            bendahara wajib apa? ya sama, <span class="text-[#EC8305]">wajib lapor</span> juga
                            xixixi</p>
                        <div class="flex gap-4 w-full">
                            <div class="py-4 px-6 flex justify-between w-1/3 items-center gap-4 rounded-2xl"
                                style="background: linear-gradient(269deg, rgba(233, 167, 167, 0.55) 0.98%, rgba(226, 89, 89, 0.55) 104.36%);">
                                <div class="flex flex-col">
                                    <h1 class="text-white text-lg">
                                        @php
                                            function formatUang1($jumlah)
                                            {
                                                if ($jumlah >= 1000000) {
                                                    return 'Rp. ' . number_format($jumlah / 1000000, 1, ',', '.') . 'M'; // Format dalam juta
                                                } elseif ($jumlah >= 1000) {
                                                    return 'Rp. ' . number_format($jumlah / 1000, 1, ',', '.') . 'K'; // Format dalam ribu
                                                } else {
                                                    return 'Rp. ' . number_format($jumlah, 0, ',', '.'); // Format asli untuk kurang dari 1.000
                                                }
                                            }
                                        @endphp
                                        {{ formatUang1($totalCollected) }}
                                    </h1>
                                    <p class="text-white text-base">Pengeluaran</p>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="41" height="41"
                                    viewBox="0 0 41 41" fill="none">
                                    <path
                                        d="M23.9174 16.3761L17.0841 23.2094L6.33355 12.4589L3.91797 14.8745L17.0841 28.0406L23.9174 21.2073L31.2513 28.5411L27.3341 32.4583H37.5841V22.2083L33.6669 26.1255L23.9174 16.3761Z"
                                        fill="#FC9E2D" />
                                </svg>
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

                            <div class="py-4 px-6 flex justify-between w-1/3 gap-4 items-center rounded-2xl"
                                style="background: linear-gradient(270deg, rgba(167, 233, 177, 0.55) 0%, rgba(88, 228, 109, 0.55) 100%);">
                                <div class="flex flex-col">
                                    <h1 class="text-white text-lg">
                                        {{ $totalUnpaid }}
                                    </h1>
                                    <p class="text-white text-base">Belum Lunas</p>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                    viewBox="0 0 40 40" fill="none">
                                    <path
                                        d="M16.6673 17.3567L23.3339 24.0233L32.8456 14.5117L36.6673 18.3333V8.33334H26.6673L30.4889 12.155L23.3339 19.31L16.6673 12.6433L3.82227 25.4883L6.17893 27.845L16.6673 17.3567Z"
                                        fill="#CCFF00" />
                                </svg>
                            </div>
                            <div class="py-4 px-6 flex justify-between w-1/3 gap-4 items-center rounded-2xl"
                                style="background: linear-gradient(270deg, rgba(167, 208, 233, 0.55) 0%, rgba(63, 162, 224, 0.55) 100%);">
                                <div class="flex flex-col">
                                    <h1 class="text-white text-lg">

                                        {{ $totalPaid }}
                                    </h1>
                                    <p class="text-white text-base">Lunas</p>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                    viewBox="0 0 40 40" fill="none">
                                    <g clip-path="url(#clip0_73_88)">
                                        <mask id="mask0_73_88" style="mask-type:luminance" maskUnits="userSpaceOnUse"
                                            x="0" y="0" width="40" height="40">
                                            <path d="M40 0H0V40H40V0Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask0_73_88)">
                                            <path
                                                d="M35 12.1333V8.33333C35 6.5 33.5 5 31.6667 5H8.33333C6.48333 5 5 6.5 5 8.33333V31.6667C5 33.5 6.48333 35 8.33333 35H31.6667C33.5 35 35 33.5 35 31.6667V27.8667C35.9833 27.2833 36.6667 26.2333 36.6667 25V15C36.6667 13.7667 35.9833 12.7167 35 12.1333ZM33.3333 15V25H21.6667V15H33.3333ZM8.33333 31.6667V8.33333H31.6667V11.6667H21.6667C19.8333 11.6667 18.3333 13.1667 18.3333 15V25C18.3333 26.8333 19.8333 28.3333 21.6667 28.3333H31.6667V31.6667H8.33333Z"
                                                fill="#292D5B" />
                                            <path
                                                d="M26.666 22.5C28.0467 22.5 29.166 21.3807 29.166 20C29.166 18.6193 28.0467 17.5 26.666 17.5C25.2853 17.5 24.166 18.6193 24.166 20C24.166 21.3807 25.2853 22.5 26.666 22.5Z"
                                                fill="#292D5B" />
                                        </g>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_73_88">
                                            <rect width="40" height="40" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-between items-center mb-4">
            <a href="{{ route('cashfunds.informations.index', $cashFund->id) }}"
                class="text-white flex justify-between gap-2 items-center"><svg xmlns="http://www.w3.org/2000/svg"
                    width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path
                        d="M9 13L6 10M6 10L9 7M6 10H14M1 10C1 8.8181 1.23279 7.64778 1.68508 6.55585C2.13738 5.46392 2.80031 4.47177 3.63604 3.63604C4.47177 2.80031 5.46392 2.13738 6.55585 1.68508C7.64778 1.23279 8.8181 1 10 1C11.1819 1 12.3522 1.23279 13.4442 1.68508C14.5361 2.13738 15.5282 2.80031 16.364 3.63604C17.1997 4.47177 17.8626 5.46392 18.3149 6.55585C18.7672 7.64778 19 8.8181 19 10C19 12.3869 18.0518 14.6761 16.364 16.364C14.6761 18.0518 12.3869 19 10 19C7.61305 19 5.32387 18.0518 3.63604 16.364C1.94821 14.6761 1 12.3869 1 10Z"
                        stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>Kembali</a>
            <button onclick="openModal()"
                class="border border-white rounded-xl text-white px-4 py-2 items-center hover:bg-white hover:bg-opacity-15 flex justify-between gap-2"><svg
                    xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <g clip-path="url(#clip0_73_376)">
                        <path d="M10.0007 5.83334V14.1667M5.83398 10H14.1673" stroke="white" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M9.99935 18.3333C14.6017 18.3333 18.3327 14.6024 18.3327 10C18.3327 5.39763 14.6017 1.66667 9.99935 1.66667C5.39698 1.66667 1.66602 5.39763 1.66602 10C1.66602 14.6024 5.39698 18.3333 9.99935 18.3333Z"
                            stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                    <defs>
                        <clipPath id="clip0_73_376">
                            <rect width="20" height="20" fill="white" />
                        </clipPath>
                    </defs>
                </svg>Tambah</button>
        </div>
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

        <div id="modal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 hidden">
            <div class="bg-white bg-opacity-75 rounded-lg shadow-lg px-10 py-12 w-96">
                <h2 class="text-xl mb-4 text-[#20374D] font-bold">Add New Financial Statement</h2>
                <form action="{{ route('cashfund_informations.member_cash.store', $cashFundInformation->id) }}"
                    method="POST">
                    @csrf
                    <input type="text" value="{{ old('member_name') }}" name="member_name" placeholder="Nama"
                        required
                        class="border-2 rounded border-[#20374D] p-2 mb-2 focus-outline focus:border-[#20374D] focus:ring-[#20374D] w-full">
                    <button type="submit"
                        class="bg-[#20374D] text-white bg-opacity-90 px-4 py-2 rounded">Tambah</button>
                    <button type="button" onclick="closeModal()" class="mt-2 text-red-500">Cancel</button>
                </form>
            </div>
        </div>
        <div class="bg-white rounded-2xl bg-opacity-10 px-8 py-6">
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                    <thead class="text-xs text-white uppercase bg-[#20223A] bg-opacity-85">
                        <tr>
                            <th scope="col" class="px-6 py-3 rounded-s-full">Nama</th>
                            <th scope="col" class="px-6 py-3 justify-center text-center">Minggu 1</th>
                            <th scope="col" class="px-6 py-3 justify-center text-center">Minggu 2</th>
                            <th scope="col" class="px-6 py-3 justify-center text-center">Minggu 3</th>
                            <th scope="col" class="px-6 py-3 justify-center text-center">Minggu 4</th>
                            <th scope="col" class="px-6 py-3 justify-center text-center">Status</th>
                            <th scope="col" class="px-6 py-3 rounded-e-full justify-center text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($members as $member)
                            <tr class="border-b border-white">
                                <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap">
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
                                            class="text-white bg-green-600 rounded-lg px-6 py-2 bg-opacity-60">Lunas</span>
                                    @else
                                        <span class="bg-red-700 px-6 py-2 rounded-lg text-white bg-opacity-60">Belum
                                            Lunas</span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 justify-center text-center">
                                    <button type="button"
                                        class="bg-red-400 text-white px-6 py-2 rounded-lg bg-opacity-70"
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
