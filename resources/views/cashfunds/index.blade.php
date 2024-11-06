<x-app-layout>
    <div class="container lg:pl-8 pl-6">
        <div class="relative mt-6 max-lg:mt-0 mb-16 max-lg:mb-8">
            <div class="absolute -top-6 left-10 max-lg:hidden w-48 h-48 max-lg:-right-10 max-lg:w-60 max-lg:h-60">
                <img src="{{ asset('/images/card-financial-1.png') }}" class="" alt="">
            </div>
            <div class="bg-white bg-opacity-5 overflow-hidden shadow-sm rounded-2xl">
                <div class="flex justify-end">
                    <div class="py-8 max-lg:px-4 px-12 text-white">
                        <h1 class="text-white font-bold text-3xl text-center mb-3">Laporan Uang Kas</h1>
                        <p class="text-base px-8 max-lg:px-0 text-center">Kalo tamu <span class="text-[#EC8305]">wajib
                                lapor</span>, kalo
                            bendahara wajib apa? ya sama, <span class="text-[#EC8305]">wajib lapor</span> juga
                            xixixi</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-between max-lg:block max-lg:justify-center mb-8 pb-4 items-center ">
            <h1 class="text-base text-white max-lg:mb-4">Semua laporan uang kas kamu sudah tertata rapi <span
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
                    <div class="modal-content bg-white w-96 bg-opacity-75 rounded-lg px-10 max-lg:mx-2 py-12 z-10">
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
        <div class="grid max-lg:grid-cols-1 grid-cols-3 gap-4 mb-4">
            @if ($cashFunds->isEmpty())
                <div class="col-span-3 text-center flex justify-center items-center text-white pb-2 pt-12">
                    <img src="{{ asset('/images/nothing-activity.png') }}" class="" alt="">
                </div>
                <p class="text-center text-white flex justify-center col-span-3">Belum ada aktivitas</p>
            @else
                @foreach ($cashFunds as $cashFund)
                    <div
                        class="flex flex-row items-center bg-white bg-opacity-10 px-4 py-6 rounded-xl relative shadow-lg">
                        <div class="justify-center">
                            <span class="flex items-center text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35"
                                    viewBox="0 0 29 27" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M5.80039 5.3999C5.03126 5.3999 4.29364 5.68437 3.74978 6.19071C3.20593 6.69706 2.90039 7.38382 2.90039 8.0999V13.4999C2.90039 14.216 3.20593 14.9027 3.74978 15.4091C4.29364 15.9154 5.03126 16.1999 5.80039 16.1999V8.0999H20.3004C20.3004 7.38382 19.9949 6.69706 19.451 6.19071C18.9071 5.68437 18.1695 5.3999 17.4004 5.3999H5.80039ZM8.70039 13.4999C8.70039 12.7838 9.00593 12.0971 9.54978 11.5907C10.0936 11.0844 10.8313 10.7999 11.6004 10.7999H23.2004C23.9695 10.7999 24.7071 11.0844 25.251 11.5907C25.7949 12.0971 26.1004 12.7838 26.1004 13.4999V18.8999C26.1004 19.616 25.7949 20.3027 25.251 20.8091C24.7071 21.3154 23.9695 21.5999 23.2004 21.5999H11.6004C10.8313 21.5999 10.0936 21.3154 9.54978 20.8091C9.00593 20.3027 8.70039 19.616 8.70039 18.8999V13.4999ZM17.4004 18.8999C18.1695 18.8999 18.9071 18.6154 19.451 18.1091C19.9949 17.6027 20.3004 16.916 20.3004 16.1999C20.3004 15.4838 19.9949 14.7971 19.451 14.2907C18.9071 13.7844 18.1695 13.4999 17.4004 13.4999C16.6313 13.4999 15.8936 13.7844 15.3498 14.2907C14.8059 14.7971 14.5004 15.4838 14.5004 16.1999C14.5004 16.916 14.8059 17.6027 15.3498 18.1091C15.8936 18.6154 16.6313 18.8999 17.4004 18.8999Z"
                                        fill="white" />
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
            @endif
        </div>
        <div id="editModal" class="fixed inset-0 flex items-center justify-center z-50 hidden">
            <div class="modal-overlay fixed inset-0 bg-black opacity-50"></div>
            <div class="modal-content bg-white w-96 bg-opacity-75 max-lg:mx-2 rounded-lg px-10 py-12 z-10">
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
            editForm.action = `/cashfunds/${id}`;
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
                    document.getElementById(`delete-form-${id}`).submit();
                }
            });
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</x-app-layout>
