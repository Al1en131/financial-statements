<x-app-layout>
    <div class="container lg:pl-8 pl-6">
        <div class="relative mt-6 max-lg:mt-0 mb-16 max-lg:mb-8">
            <div class="absolute -top-6 left-10 max-lg:hidden max-lg:-right-10 max-lg:w-60 max-lg:h-60">
                <img src="{{ asset('/images/icon-laporan-keuangan.png') }}" class="" alt="">
            </div>
            <div class="bg-white bg-opacity-5 overflow-hidden shadow-sm rounded-2xl">
                <div class="flex justify-end max-lg:block max-lg:justify-center">
                    <div class="py-8 px-12 max-lg:px-4 text-white">
                        <h1 class="text-white font-bold text-3xl text-center mb-3"> {{ $financial->financial_name }}</h1>
                        <p class="text-base px-8 text-center mb-7">Kalo tamu <span class="text-[#EC8305]">wajib
                                lapor</span>, kalo
                            bendahara wajib apa? ya sama, <span class="text-[#EC8305]">wajib lapor</span> juga
                            xixixi</p>
                        <div class="flex max-lg:block max-lg:space-y-4 gap-4 w-full">
                            <div class="py-4 px-6 flex justify-between max-lg:w-full w-1/3 items-center gap-4 rounded-2xl"
                                style="background: linear-gradient(269deg, rgba(233, 167, 167, 0.55) 0.98%, rgba(226, 89, 89, 0.55) 104.36%);">
                                <div class="flex flex-col">
                                    <h1 class="text-white text-lg">
                                        @php
                                            function formatUang1($jumlah)
                                            {
                                                if ($jumlah >= 1000000) {
                                                    return 'Rp. ' . number_format($jumlah / 1000000, 1, ',', '.') . 'M';
                                                } elseif ($jumlah >= 1000) {
                                                    return 'Rp. ' . number_format($jumlah / 1000, 1, ',', '.') . 'K';
                                                } else {
                                                    return 'Rp. ' . number_format($jumlah, 0, ',', '.');
                                                }
                                            }
                                        @endphp
                                        {{ formatUang1($totalCredit) }}
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
                            <div class="py-4 px-6 flex justify-between max-lg:w-full w-1/3 gap-4 items-center rounded-2xl"
                                style="background: linear-gradient(270deg, rgba(167, 233, 177, 0.55) 0%, rgba(88, 228, 109, 0.55) 100%);">
                                <div class="flex flex-col">
                                    <h1 class="text-white text-lg">
                                        @php
                                            function formatUang2($jumlah)
                                            {
                                                if ($jumlah >= 1000000) {
                                                    return 'Rp. ' . number_format($jumlah / 1000000, 1, ',', '.') . 'M';
                                                } elseif ($jumlah >= 1000) {
                                                    return 'Rp. ' . number_format($jumlah / 1000, 1, ',', '.') . 'K';
                                                } else {
                                                    return 'Rp. ' . number_format($jumlah, 0, ',', '.');
                                                }
                                            }
                                        @endphp
                                        {{ formatUang2($totalDebit) }}
                                    </h1>
                                    <p class="text-white text-base">Pemasukan</p>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                    viewBox="0 0 40 40" fill="none">
                                    <path
                                        d="M16.6673 17.3567L23.3339 24.0233L32.8456 14.5117L36.6673 18.3333V8.33334H26.6673L30.4889 12.155L23.3339 19.31L16.6673 12.6433L3.82227 25.4883L6.17893 27.845L16.6673 17.3567Z"
                                        fill="#CCFF00" />
                                </svg>
                            </div>
                            <div class="py-4 px-6 flex justify-between max-lg:w-full w-1/3 gap-4 items-center rounded-2xl"
                                style="background: linear-gradient(270deg, rgba(167, 208, 233, 0.55) 0%, rgba(63, 162, 224, 0.55) 100%);">
                                <div class="flex flex-col">
                                    <h1 class="text-white text-lg">
                                        @php
                                            function formatUang3($jumlah)
                                            {
                                                if ($jumlah >= 1000000) {
                                                    return 'Rp. ' . number_format($jumlah / 1000000, 1, ',', '.') . 'M';
                                                } elseif ($jumlah >= 1000) {
                                                    return 'Rp. ' . number_format($jumlah / 1000, 1, ',', '.') . 'K';
                                                } else {
                                                    return 'Rp. ' . number_format($jumlah, 0, ',', '.');
                                                }
                                            }
                                        @endphp
                                        {{ formatUang3($sisaSaldo) }}
                                    </h1>
                                    <p class="text-white text-base">Sisa Saldo</p>
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
            <a href="{{ route('financial.index') }}" class="text-white flex justify-between gap-2 items-center"><svg
                    xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path
                        d="M9 13L6 10M6 10L9 7M6 10H14M1 10C1 8.8181 1.23279 7.64778 1.68508 6.55585C2.13738 5.46392 2.80031 4.47177 3.63604 3.63604C4.47177 2.80031 5.46392 2.13738 6.55585 1.68508C7.64778 1.23279 8.8181 1 10 1C11.1819 1 12.3522 1.23279 13.4442 1.68508C14.5361 2.13738 15.5282 2.80031 16.364 3.63604C17.1997 4.47177 17.8626 5.46392 18.3149 6.55585C18.7672 7.64778 19 8.8181 19 10C19 12.3869 18.0518 14.6761 16.364 16.364C14.6761 18.0518 12.3869 19 10 19C7.61305 19 5.32387 18.0518 3.63604 16.364C1.94821 14.6761 1 12.3869 1 10Z"
                        stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>Kembali</a>
            <button onclick="openModal()"
                class="border border-white rounded-xl text-white px-4 py-2 items-center hover:bg-white hover:bg-opacity-15 flex justify-between gap-2">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                        fill="none">
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
                    </svg></span>
                Tambah
                Transaksi </button>
        </div>
        <div class="bg-white rounded-2xl bg-opacity-10 px-8 py-6">
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                    <thead class="text-xs text-white uppercase bg-[#20223A] bg-opacity-85">
                        <tr>
                            <th scope="col" class="px-6 py-3 rounded-s-full text-center">Tanggal</th>
                            <th scope="col" class="px-6 py-3 text-center">Keterangan</th>
                            <th scope="col" class="px-6 py-3 text-center">Debit</th>
                            <th scope="col" class="px-6 py-3 text-center">Credit</th>
                            <th scope="col" class="px-6 py-3 text-center">Saldo</th>
                            <th scope="col" class="px-6 py-3 text-center">Bukti</th>
                            <th scope="col" class="px-6 py-3 rounded-e-full text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $runningBalance = 0;
                        @endphp
                        @foreach ($financial->statements as $statement)
                            @php
                                $runningBalance += $statement->debit - $statement->credit;
                            @endphp
                            <tr class="border-b border-white text-white">
                                <th scope="row" class="px-6 py-4 text-center font-medium whitespace-nowrap">
                                    {{ $statement->date ? \Carbon\Carbon::parse($statement->date)->translatedFormat('d F Y') : 'Invalid Date' }}
                                </th>
                                <td class="px-6 py-4 text-center">{{ Str::limit($statement->information, 20) }}</td>
                                <td class="px-6 py-4 text-center">Rp.
                                    {{ number_format($statement->debit, 0, ',', '.') }}</td>
                                <td class="px-6 py-4 text-center">Rp.
                                    {{ number_format($statement->credit, 0, ',', '.') }}</td>
                                <td class="px-6 py-4 text-center">Rp.
                                    {{ number_format($runningBalance, 0, ',', '.') }}
                                </td>
                                <td class="px-6 py-4 text-center justify-center items-center">
                                    @if ($statement->image)
                                        <img src="{{ asset('storage/image/' . $statement->image) }}" width="50"
                                            height="50" alt="Image">
                                    @else
                                        -
                                    @endif
                                </td>
                                <td class="px-6 py-4 flex space-x-2 items-center justify-center">
                                    <button
                                        onclick="openEditModal({{ $statement->id }}, '{{ $statement->information }}', {{ $statement->debit }}, {{ $statement->credit }},'{{ $statement->date }}', '{{ asset('storage/image/' . $statement->image) }}')"
                                        class="bg-yellow-500 px-4 py-2 rounded-lg bg-opacity-35"> Edit
                                    </button>
                                    <form action="{{ route('financial.statement.destroy', $statement->id) }}"
                                        method="POST" id="delete-form-{{ $statement->id }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="bg-red-500 px-4 py-2 rounded-lg bg-opacity-35 "
                                            onclick="confirmDelete({{ $statement->id }})">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div id="modal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 hidden">
            <div class="bg-white bg-opacity-75 rounded-lg shadow-lg px-10 max-lg:mx-2 py-12 w-96">
                <h2 class="text-xl mb-4 text-[#20374D] font-bold">Tambah Data Transaksi</h2>
                <form action="{{ route('financial.statement.store', $financial->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="date" name="date" required
                        class="border-2 rounded border-[#20374D] p-2 mb-2 focus-outline focus:border-[#20374D] focus:ring-[#20374D] w-full">
                    <input type="text" name="information" placeholder="Keterangan" required
                        class="border-2 border-[#20374D] p-2 mb-2 focus-outline focus:border-[#20374D] focus:ring-[#20374D] rounded w-full">
                    <input type="number" name="debit" placeholder="Debit"
                        class="border-2 border-[#20374D] rounded p-2 mb-2 focus-outline focus:border-[#20374D] focus:ring-[#20374D] w-full">
                    <input type="number" name="credit" placeholder="Credit"
                        class="border-2 border-[#20374D] p-2 rounded mb-2 focus-outline focus:border-[#20374D] focus:ring-[#20374D] w-full">
                    <input type="file"
                        class=" p-2 mb-2 focus-outline focus:border-[#20374D] focus:ring-[#20374D] rounded w-full"
                        id="image" name="image" accept="image/*">

                    <button type="submit"
                        class="bg-[#20374D] bg-opacity-90 text-white px-4 py-2 rounded">Tambah</button>
                    <button type="button" onclick="closeModal()" class="mt-2 text-red-500">Cancel</button>
                </form>
            </div>
        </div>
        <div id="edit-modal"
            class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 hidden">
            <div class="bg-white bg-opacity-75 rounded-lg shadow-lg max-lg:mx-2 px-10 py-12 w-96">
                <h2 class="text-xl mb-4 text-[#20374D] font-bold">Edit Financial Statement</h2>
                <form id="edit-form" action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="date" name="date" required
                        class="border-2 rounded border-[#20374D] p-2 mb-2 focus-outline focus:border-[#20374D] focus:ring-[#20374D] w-full"
                        id="edit-date">
                    <input type="text" id="edit-information" name="information"
                        placeholder="Financial Information" required
                        class="border-2 rounded border-[#20374D] p-2 mb-2 focus-outline focus:border-[#20374D] focus:ring-[#20374D] w-full">
                    <input type="text" id="edit-debit" name="debit" placeholder="Debit"
                        class="border-2 rounded border-[#20374D] p-2 mb-2 focus-outline focus:border-[#20374D] focus:ring-[#20374D] w-full">
                    <input type="text" id="edit-credit" name="credit" placeholder="Credit"
                        class="border-2 rounded border-[#20374D] p-2 mb-2 focus-outline focus:border-[#20374D] focus:ring-[#20374D] w-full">
                    <input type="file" class="form-control p-2 mb-2 w-full" id="edit-image" name="image"
                        accept="image/*">
                    <img id="image-preview" src="" alt="Old Image" class="mb-2 w-32" style="display:none;">

                    <button type="submit"
                        class="bg-[#20374D] text-white bg-opacity-90 px-4 py-2 rounded">Edit</button>
                    <button type="button" onclick="closeEditModal()" class="mt-2 text-red-500">Cancel</button>
                </form>
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

        function openEditModal(id, information, debit, credit, date, image) {
            // Mengisi input dengan nilai yang diberikan
            document.getElementById('edit-date').value = date;
            document.getElementById('edit-information').value = information;
            document.getElementById('edit-debit').value = debit;
            document.getElementById('edit-credit').value = credit;

            // Menampilkan gambar lama jika ada
            const imagePreview = document.getElementById('image-preview');
            if (image) {
                imagePreview.src = image; // Menampilkan gambar lama
                imagePreview.style.display = 'block'; // Menampilkan gambar
            } else {
                imagePreview.style.display = 'none'; // Menyembunyikan jika tidak ada gambar
            }

            // Mengatur action form untuk update
            document.getElementById('edit-form').action = `/financial/statements/${id}`;
            document.getElementById('edit-modal').classList.remove('hidden'); // Menampilkan modal
        }

        function closeEditModal() {
            document.getElementById('edit-modal').classList.add('hidden'); // Menyembunyikan modal
        }
    </script>
    <script>
        function confirmDelete(statementId) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById(`delete-form-${statementId}`).submit();
                }
            });
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-nr5CNC/0NYTIG4M45LkTYGP9BO+3wM1C9IZS47PTN4OqHMi7tB33Fkgciv68j2+OfWTT0R2B3dHDN2aZssLAZg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</x-app-layout>
