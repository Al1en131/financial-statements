<x-app-layout>
    <div class="container lg:pl-8 pl-6">
        <div class="relative mt-6 max-lg:mt-0 mb-16 max-lg:mb-8">
            <div class="absolute -top-6 left-10 max-lg:hidden w-64 h-64 max-lg:-right-10 max-lg:w-60 max-lg:h-60">
                <img src="{{ asset('/images/card-financial-2.png') }}" class="" alt="">
            </div>
            <div class="bg-white bg-opacity-5 overflow-hidden shadow-sm rounded-2xl">
                <div class="flex justify-end">
                    <div class="py-8 px-12 max-lg:px-4 text-white">
                        <h1 class="text-white font-bold text-3xl text-center mb-3">Laporan Keuangan</h1>
                        <p class="text-base px-8 max-lg:px-0 text-center">Kalo tamu <span class="text-[#EC8305]">wajib
                                lapor</span>, kalo
                            bendahara wajib apa? ya sama, <span class="text-[#EC8305]">wajib lapor</span> juga
                            xixixi</p>
                    </div>
                </div>
            </div>
        </div>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg bg-white bg-opacity-50"
                    role="alert">
                    <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <div>{{ $error }}</div>
                    <button type="button" class="ml-auto text-black hover:text-gray-800"
                        onclick="this.parentElement.style.display='none'">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 7.586l4.293-4.293a1 1 0 111.414 1.414L11.414 9l4.293 4.293a1 1 0 01-1.414 1.414L10 10.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 9 4.293 4.707a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            @endforeach
        @endif

        @if (session('success'))
            <div class="flex items-center p-4 mb-4 text-sm text-green-800 rounded-lg bg-white bg-opacity-50"
                role="alert">
                <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <div>{{ session('success') }}</div>
                <button type="button" class="ml-auto text-black hover:text-gray-800"
                    onclick="this.parentElement.style.display='none'">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 7.586l4.293-4.293a1 1 0 111.414 1.414L11.414 9l4.293 4.293a1 1 0 01-1.414 1.414L10 10.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 9 4.293 4.707a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
        @endif
        <div class="flex justify-between max-lg:block max-lg:justify-center max-lg:space-y-4 mb-8 pb-4 items-center">
            <h1 class="text-lg text-white">Semua laporan kamu sudah tertata rapi <span
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
                    </svg>
                    Buat
                    Laporan Baru
                </button>
                <div id="modal" class="fixed inset-0 flex items-center justify-center z-50 hidden">
                    <div class="modal-overlay fixed inset-0 bg-black opacity-50"></div>
                    <div class="modal-content bg-white bg-opacity-75 max-lg:mx-2 rounded-lg px-10 py-12 z-10">
                        <h2 class="text-xl mb-4 text-[#20374D] font-bold">Tambah Kategori Laporan Leuangan</h2>
                        <form action="{{ route('financial.store') }}" method="POST">
                            @csrf
                            <input type="text" name="financial_name" placeholder="Kategori Laporan Keuangan" required
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
        <div class="grid grid-cols-3 max-lg:grid-cols-1 gap-4 mb-4">
            @if ($financials->isEmpty())
                <div class="col-span-3 text-center flex justify-center items-center text-white pb-2 pt-12">
                    <img src="{{ asset('/images/nothing-activity.png') }}" class="" alt="">
                </div>
                <p class="text-center text-white flex justify-center col-span-3">Belum ada aktivitas</p>
            @else
                @foreach ($financials as $financial)
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
                            <a href="{{ route('financial.showStatements', $financial->id) }}"
                                class="text-lg font-bold max-lg:hidden ">
                                {{ Str::limit($financial->financial_name, 20) }}</a>
                            <a href="{{ route('financial.showStatements', $financial->id) }}"
                                class="text-lg max-lg:text-base font-bold max-lg:contents hidden ">
                                {{ Str::limit($financial->financial_name, 15) }}</a>
                            <h4 class="">Rp
                                @if (optional($financial->statements)->isNotEmpty())
                                    {{ number_format($financial->balance, 0, ',', '.') }}
                                @else
                                    -
                                @endif
                            </h4>
                        </div>
                        <div class="absolute px-4 right-0">
                            <button onclick="toggleDropdown({{ $financial->id }})" class="focus:outline-none">
                                <svg stroke="white" fill="white" stroke-width="0" class="h-5 w-5"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 512">
                                    <path
                                        d="M64 360a56 56 0 1 0 0 112 56 56 0 1 0 0-112zm0-160a56 56 0 1 0 0 112 56 56 0 1 0 0-112zM120 96A56 56 0 1 0 8 96a56 56 0 1 0 112 0z" />
                                </svg>
                            </button>

                            <div id="dropdown-{{ $financial->id }}"
                                class="hidden absolute left-8 top-4 max-lg:-left-20 mt-2 w-32 bg-white bg-opacity-40 rounded-lg shadow-lg z-20">
                                <a onclick="openEditModal({{ $financial->id }}, '{{ $financial->financial_name }}')"
                                    class="block px-4 py-2 text-sm text-black hover:rounded-t-lg hover:bg-gray-100">Edit</a>
                                <form id="delete-form-{{ $financial->id }}"
                                    action="{{ route('financial.destroy', $financial->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" onclick="confirmDelete({{ $financial->id }})"
                                        class="w-full text-left px-4 py-2 text-sm text-black hover:rounded-b-lg hover:bg-gray-100">Hapus</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
        <div id="editModal" class="fixed z-50 inset-0 overflow-y-auto hidden" aria-labelledby="modal-title"
            role="dialog" aria-modal="true">
            <div class="flex items-center justify-center min-h-screen">
                <div class="fixed inset-0 bg-black opacity-30"></div>
                <div class="bg-white bg-opacity-75 z-50 rounded-lg px-10 max-lg:mx-2  py-12 max-w-sm mx-auto">
                    <h2 class="text-lg font-bold mb-4 text-[#20374D]" id="modal-title">Edit Kategori Laporan Keuangan
                    </h2>
                    <form id="editForm" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="financial_id" id="financial_id">
                        <div class="mb-4">
                            <input type="text" name="financial_name" id="financial_name"
                                class="border-2 rounded border-[#20374D] p-2 mb-2 focus-outline focus:border-[#20374D] focus:ring-[#20374D] w-full"
                                required>
                        </div>
                        <div class="flex justify-end">
                            <button type="button" onclick="closeEditModal()"
                                class="mr-2 bg-gray-300 hover:bg-gray-400 black border border-black font-bold py-2 px-4 rounded">Cancel</button>
                            <button type="submit"
                                class="bg-[#20374D] border border-[#20374D] bg-opacity-90 text-white font-bold py-2 px-4 rounded">Edit</button>
                        </div>
                    </form>
                </div>
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

        function openEditModal(id, name) {
            const editForm = document.getElementById('editForm');
            document.getElementById('financial_id').value = id;
            document.getElementById('financial_name').value = name;
            editForm.setAttribute('action', `/financial/${id}`);
            document.getElementById('editModal').classList.remove('hidden');
        }

        function closeEditModal() {
            document.getElementById('editModal').classList.add('hidden');
        }

        // Form submission with Fetch API
        document.getElementById('editForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const formData = new FormData(this);
            const financialId = document.getElementById('financial_id').value;
            const url = `/financial/${financialId}`;

            fetch(url, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                            'content'),
                        'X-Requested-With': 'XMLHttpRequest'
                    },
                    body: formData,
                })
                .then(response => response.json())
                .then(data => {
                    closeEditModal();
                    location.reload(); // Reload page to see updated data
                })
                .catch(error => console.error('Error:', error));
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
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById(`delete-form-${id}`).submit();
                }
            });
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



</x-app-layout>
