<x-app-layout>
    <div class="container sm:pl-6 lg:pl-8">
        <div class="flex justify-between mb-8 pb-4 items-center ">
            <h1 class="text-xl text-white">Semua laporan keuangan kas kamu sudah tertata rapi <span
                    class="text-[#EC8305]">disini</span> </h1>
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
                    </svg> Buat Laporan Kas
                </button>
                <div id="modal" class="fixed inset-0 flex items-center justify-center z-50 hidden">
                    <div class="modal-overlay fixed inset-0 bg-black opacity-50"></div>
                    <div class="modal-content bg-white w-96 bg-opacity-75 rounded-lg px-10 py-12 z-10">
                        <h2 class="text-xl mb-4 text-[#20374D] font-bold">Tambah Kategori Kas</h2>
                        <form action="{{ route('cashfunds.store') }}" method="POST">
                            @csrf
                            <input type="text" name="cash_fund_name" placeholder="Kategori Laporan keuangan kas"
                                required
                                class="border-2 rounded border-[#20374D] p-2 mb-4 focus-outline focus:border-[#20374D] focus:ring-[#20374D] w-full">
                            <div class="flex justify-end">
                                <button type="button" id="closeModal"
                                    class="mr-2 bg-gray-300 px-4 py-2 rounded-md border-black border text-black hover:bg-gray-400">Cancel</button>
                                <button type="submit"
                                    class="bg-[#20374D] bg-opacity-90 border border-[#20374D] text-white px-4 py-2 rounded-md ">Tambah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-3 gap-4 mb-4">
            @foreach ($cashFunds as $cashFund)
                <div class="flex flex-row bg-white bg-opacity-10 px-4 py-6 rounded-xl relative shadow-lg">
                    <div class="justify-center">
                        <span class="flex items-center text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80"
                                class="flex flex-shrink-0" viewBox="0 0 98 98" fill="none">
                                <g clip-path="url(#clip0_73_582)">
                                    <path
                                        d="M36.7503 20.4167H28.5837C26.4177 20.4167 24.3405 21.2771 22.809 22.8086C21.2774 24.3402 20.417 26.4174 20.417 28.5833V77.5833C20.417 79.7493 21.2774 81.8265 22.809 83.358C24.3405 84.8896 26.4177 85.75 28.5837 85.75H69.417C71.5829 85.75 73.6602 84.8896 75.1917 83.358C76.7232 81.8265 77.5837 79.7493 77.5837 77.5833V28.5833C77.5837 26.4174 76.7232 24.3402 75.1917 22.8086C73.6602 21.2771 71.5829 20.4167 69.417 20.4167H61.2503"
                                        stroke="white" stroke-width="4" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M36.75 20.4167C36.75 18.2507 37.6104 16.1735 39.142 14.642C40.6735 13.1104 42.7507 12.25 44.9167 12.25H53.0833C55.2493 12.25 57.3265 13.1104 58.858 14.642C60.3896 16.1735 61.25 18.2507 61.25 20.4167C61.25 22.5826 60.3896 24.6598 58.858 26.1914C57.3265 27.7229 55.2493 28.5833 53.0833 28.5833H44.9167C42.7507 28.5833 40.6735 27.7229 39.142 26.1914C37.6104 24.6598 36.75 22.5826 36.75 20.4167Z"
                                        stroke="white" stroke-width="4" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M57.1663 44.9167H46.958C45.3336 44.9167 43.7756 45.562 42.627 46.7106C41.4783 47.8593 40.833 49.4172 40.833 51.0417C40.833 52.6661 41.4783 54.224 42.627 55.3727C43.7756 56.5214 45.3336 57.1667 46.958 57.1667H51.0413C52.6658 57.1667 54.2237 57.812 55.3724 58.9606C56.521 60.1093 57.1663 61.6672 57.1663 63.2917C57.1663 64.9161 56.521 66.474 55.3724 67.6227C54.2237 68.7714 52.6658 69.4167 51.0413 69.4167H40.833"
                                        stroke="white" stroke-width="4" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M49 69.4167V73.5M49 40.8333V44.9167" stroke="white" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_73_582">
                                        <rect width="98" height="98" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </span>
                    </div>
                    <div class="h-50 ml-4 flex w-auto flex-col justify-center text-white">
                        <a href="{{ route('cashfunds.informations.index', $cashFund->id) }}">
                            {{ Str::limit($cashFund->cash_fund_name, 28) }}</a>
                    </div>
                    <div class="absolute px-4 right-0">
                        <button onclick="toggleDropdown({{ $cashFund->id }})" class="focus:outline-none">
                            <svg stroke="white" fill="white" stroke-width="0" class="h-5 w-5"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 512">
                                <path
                                    d="M64 360a56 56 0 1 0 0 112 56 56 0 1 0 0-112zm0-160a56 56 0 1 0 0 112 56 56 0 1 0 0-112zM120 96A56 56 0 1 0 8 96a56 56 0 1 0 112 0z" />
                            </svg>
                        </button>

                        <div id="dropdown-{{ $cashFund->id }}"
                            class="hidden absolute left-8 top-4 mt-2 w-32 bg-white bg-opacity-40 rounded-lg shadow-lg z-20">
                            <button
                                onclick="openEditModal({{ $cashFund->id }}, {{ json_encode($cashFund->cash_fund_name) }})"
                                class="block px-4 py-2 text-sm text-black w-full hover:rounded-t-lg hover:bg-gray-100">Edit</button>

                            <form id="delete-form-{{ $cashFund->id }}"
                                action="{{ route('cashfunds.destroy', $cashFund->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="button" onclick="confirmDelete({{ $cashFund->id }})"
                                    class="block px-4 py-2 text-sm text-black hover:rounded-b-lg hover:bg-gray-100 w-full">Hapus</button>
                            </form>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- Modal Edit -->
        <div id="editModal" class="fixed inset-0 flex items-center justify-center z-50 hidden">
            <div class="modal-overlay fixed inset-0 bg-black opacity-50"></div>
            <div class="modal-content bg-white w-96 bg-opacity-75 rounded-lg px-10 py-12 z-10">
                <h2 class="text-xl mb-4 text-[#20374D] font-bold">Edit Ktegori Kas</h2>
                <form id="editForm" action="" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="text" name="cash_fund_name" id="editCashFundName" placeholder="Cash Fund Name"
                        required
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
        const editCashFundName = document.getElementById('editCashFundName');
        const closeEditModal = document.getElementById('closeEditModal');

        function openEditModal(id, name) {
            editCashFundName.value = name;
            editForm.action = `/cashfunds/${id}`; // Pastikan sesuai dengan route edit
            editModal.classList.remove('hidden');
        }

        closeEditModal.addEventListener('click', () => {
            editModal.classList.add('hidden');
        });

        editModal.addEventListener('click', (event) => {
            if (event.target === editModal) {
                editModal.classList.add('hidden');
            }
        });

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
