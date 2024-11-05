<x-app-layout>
    <div class="container sm:pl-6 lg:pl-8">
        <div class="relative mt-6 max-lg:mt-0 mb-16">
            <div class="absolute -top-6 left-10 max-lg:top-24 w-48 h-48 max-lg:-right-10 max-lg:w-60 max-lg:h-60">
                <img src="{{ asset('/images/card-financial-3.png') }}" class="" alt="">
            </div>
            <div class="bg-white bg-opacity-5 overflow-hidden shadow-sm rounded-2xl">
                <div class="flex justify-end">
                    <div class="py-8 px-12 text-white">
                        <h1 class="text-white font-bold text-3xl text-center mb-3">{{ $cashFund->cash_fund_name }}</h1>
                        <p class="text-base px-8 text-center">Kalo tamu <span class="text-[#EC8305]">wajib
                                lapor</span>, kalo
                            bendahara wajib apa? ya sama, <span class="text-[#EC8305]">wajib lapor</span> juga
                            xixixi</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-between mb-8 pb-4">
            <a href="{{ route('cashfunds.index') }}" class="text-white flex justify-between gap-2 items-center"><svg
                    xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path
                        d="M9 13L6 10M6 10L9 7M6 10H14M1 10C1 8.8181 1.23279 7.64778 1.68508 6.55585C2.13738 5.46392 2.80031 4.47177 3.63604 3.63604C4.47177 2.80031 5.46392 2.13738 6.55585 1.68508C7.64778 1.23279 8.8181 1 10 1C11.1819 1 12.3522 1.23279 13.4442 1.68508C14.5361 2.13738 15.5282 2.80031 16.364 3.63604C17.1997 4.47177 17.8626 5.46392 18.3149 6.55585C18.7672 7.64778 19 8.8181 19 10C19 12.3869 18.0518 14.6761 16.364 16.364C14.6761 18.0518 12.3869 19 10 19C7.61305 19 5.32387 18.0518 3.63604 16.364C1.94821 14.6761 1 12.3869 1 10Z"
                        stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>Kembali</a>
            <div>
                <button id="openModal"
                    class="border border-white rounded-xl text-white px-4 py-2 items-center hover:bg-white hover:bg-opacity-15 flex justify-between gap-2">
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
                    </svg>Buat Informasi Laporan</button>
                <div id="modal" class="fixed inset-0 flex items-center justify-center z-50 hidden">
                    <div class="modal-overlay fixed inset-0 bg-black opacity-50"></div>
                    <div class="modal-content bg-white bg-opacity-75 rounded-lg px-10 py-12 z-10">
                        <h2 class="text-xl mb-4 text-[#20374D] font-bold">Tambah Informasi Laporan Kas</h2>
                        <form action="{{ route('cashfunds.informations.store', $cashFund->id) }}" method="POST">
                            @csrf
                            <input type="date" name="date" required
                                class="border-2 rounded border-[#20374D] p-2 mb-4 focus-outline focus:border-[#20374D] focus:ring-[#20374D] w-full">
                            <input type="number" name="cash_detail" required step="0.01" min="0"
                                placeholder="Cash Amount"
                                class="border-2 rounded border-[#20374D] p-2 mb-4 focus-outline focus:border-[#20374D] focus:ring-[#20374D] w-full">
                            <div class="flex justify-end">
                                <button type="button" id="closeModal"
                                    class="mr-2 bg-gray-300 px-4 py-2 rounded-md border border-black text-black hover:bg-gray-400">Cancel</button>
                                <button type="submit"
                                    class="bg-[#20374D] border border-[#20374D] bg-opacity-90 text-white px-4 py-2 rounded-md">Tambah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-3 gap-4 mb-4">
            @if ($cashFundInformations->isEmpty())
                <div class="col-span-3 text-center flex justify-center items-center text-white pb-2 pt-12">
                    <img src="{{ asset('/images/nothing-activity.png') }}" class="" alt="">
                </div>
                <p class="text-center text-white flex justify-center col-span-3">Belum ada aktivitas</p>
            @else
                @foreach ($cashFundInformations->sortBy('date') as $info)
                    <div class="flex flex-row bg-white bg-opacity-10 px-4 py-6 rounded-xl relative shadow-lg">
                        <div class="justify-center">
                            <span class="flex items-center text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                    viewBox="0 0 25 25" fill="none">
                                    <path
                                        d="M18.5576 4.53418H6.55762C4.34848 4.53418 2.55762 6.32504 2.55762 8.53418V18.5342C2.55762 20.7433 4.34848 22.5342 6.55762 22.5342H18.5576C20.7668 22.5342 22.5576 20.7433 22.5576 18.5342V8.53418C22.5576 6.32504 20.7668 4.53418 18.5576 4.53418Z"
                                        stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M8.55762 2.53418V6.53418" stroke="white" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M16.5576 2.53418V6.53418" stroke="white" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M2.55762 10.5342H22.5576" stroke="white" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                        </div>
                        <div class="h-50 ml-4 flex w-auto flex-col justify-center text-white">
                            <a href="{{ route('cashfund_informations.member_cash.index', $info->id) }}">
                                {{ \Carbon\Carbon::parse($info->date)->translatedFormat('F Y') }}
                            </a>
                        </div>
                        <div class="absolute px-4 right-0">
                            <button onclick="toggleDropdown({{ $info->id }})" class="focus:outline-none">
                                <svg stroke="white" fill="white" stroke-width="0" class="h-5 w-5"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 512">
                                    <path
                                        d="M64 360a56 56 0 1 0 0 112 56 56 0 1 0 0-112zm0-160a56 56 0 1 0 0 112 56 56 0 1 0 0-112zM120 96A56 56 0 1 0 8 96a56 56 0 1 0 112 0z" />
                                </svg>
                            </button>

                            <div id="dropdown-{{ $info->id }}"
                                class="hidden absolute right-0 mt-2 w-32 bg-white bg-opacity-40 rounded-lg shadow-lg z-20">
                                <a onclick="openEditModal({{ $info->id }}, '{{ $info->date }}',{{ $info->cash_detail }})"
                                    class="block px-4 py-2 text-sm text-black hover:bg-gray-100 hover:rounded-t-xl">Edit</a>
                                <form id="delete-form-{{ $info->id }}"
                                    action="{{ route('cashfunds.informations.destroy', [$cashFund->id, $info->id]) }}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" onclick="confirmDelete({{ $info->id }})"
                                        class="w-full text-left px-4 py-2 text-sm text-black hover:rounded-b-xl hover:bg-gray-100">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
        <div id="editModal" class="fixed inset-0 flex items-center justify-center z-50 hidden">
            <div class="modal-overlay fixed inset-0 bg-black opacity-50"></div>
            <div class="modal-content bg-white bg-opacity-75 rounded-lg px-10 py-12 z-10">
                <h2 class="text-xl mb-4 text-[#20374D] font-bold">Edit Informasi Laporan Kas</h2>
                <form id="editForm" action="" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="date" name="date" id="editCashFundInformationDate" required
                        class="border-2 rounded border-[#20374D] p-2 mb-4 focus-outline focus:border-[#20374D] focus:ring-[#20374D] w-full">
                    <input type="number" name="cash_detail" id="editCashDetail" required step="0.01"
                        min="0" placeholder="Cash Amount"
                        class="border-2 rounded border-[#20374D] p-2 mb-4 focus-outline focus:border-[#20374D] focus:ring-[#20374D] w-full">
                    <div class="flex justify-end">
                        <button type="button" id="closeEditModal"
                            class="mr-2 bg-gray-300 px-4 py-2 rounded-md border border-black text-black hover:bg-gray-400">Cancel</button>
                        <button type="submit"
                            class="bg-[#20374D] border border-[#20374D] bg-opacity-90 text-white px-4 py-2 rounded-md">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        const openModal = document.getElementById('openModal');
        const modal = document.getElementById('modal');
        const closeModal = document.getElementById('closeModal');

        openModal.addEventListener('click', () => {
            modal.classList.remove('hidden');
        });

        closeModal.addEventListener('click', () => {
            modal.classList.add('hidden');
        });

        modal.addEventListener('click', (event) => {
            if (event.target === modal) {
                modal.classList.add('hidden');
            }
        });

        const editModal = document.getElementById('editModal');
        const editForm = document.getElementById('editForm');
        const editCashFundDate = document.getElementById(
            'editCashFundInformationDate'); // Ganti variabel menjadi 'editCashFundDate'
        const closeEditModal = document.getElementById('closeEditModal');

        // Fungsi untuk membuka modal edit
        function openEditModal(id, date, cashDetail) {
            const editModal = document.getElementById('editModal');
            const editForm = document.getElementById('editForm');

            document.getElementById('editCashFundInformationDate').value = date;
            document.getElementById('editCashDetail').value = cashDetail;

            editForm.action = `/cashfunds/${id}/informations/${id}`;
            editModal.classList.remove('hidden');
        }

        // Fungsi untuk menutup modal edit
        closeEditModal.addEventListener('click', () => {
            editModal.classList.add('hidden'); // Sembunyikan modal
        });

        // Menutup modal jika pengguna mengklik area di luar konten modal
        editModal.addEventListener('click', (event) => {
            if (event.target === editModal) {
                editModal.classList.add('hidden');
            }
        });

        // Fungsi untuk membuka/menutup dropdown
        function toggleDropdown(id) {
            const dropdown = document.getElementById(`dropdown-${id}`);
            dropdown.classList.toggle('hidden');
        }
    </script>
    <script>
        function confirmDelete(id) {
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
                    // Jika dikonfirmasi, submit form delete
                    document.getElementById(`delete-form-${id}`).submit();
                }
            });
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</x-app-layout>
