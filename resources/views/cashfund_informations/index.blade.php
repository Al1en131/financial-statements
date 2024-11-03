<x-app-layout>
    <div class="container">
        <div class="flex justify-between mb-8 border-b pb-4 border-[#022a3b]">
            <h1 class="text-4xl font-bold">Information for "{{ $cashFund->cash_fund_name }}"</h1>
            <div>
                <button id="openModal" class="bg-[#022a3b] text-white px-4 py-2 rounded-md">Add New Financial
                    Category</button>
                <div id="modal" class="fixed inset-0 flex items-center justify-center z-50 hidden">
                    <div class="modal-overlay fixed inset-0 bg-black opacity-50"></div>
                    <div class="modal-content bg-white rounded-lg p-6 z-10">
                        <h2 class="text-xl font-bold mb-4">Add New Cash Fund Information</h2>
                        <form action="{{ route('cashfunds.informations.store', $cashFund->id) }}" method="POST">
                            @csrf
                            <input type="date" name="date" required
                                class="border border-gray-300 rounded-md p-2 mb-4 w-full">
                            <input type="number" name="cash_detail" required step="0.01" min="0"
                                placeholder="Cash Amount" class="border border-gray-300 rounded-md p-2 mb-4 w-full">
                            <div class="flex justify-end">
                                <button type="button" id="closeModal"
                                    class="mr-2 bg-gray-300 px-4 py-2 rounded-md hover:bg-gray-400">Cancel</button>
                                <button type="submit"
                                    class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Add
                                    Information</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-3 gap-4 mb-4">
            @foreach ($cashFundInformations->sortBy('date') as $info)
                <div class="flex flex-row bg-white px-4 py-6 rounded-xl relative shadow-lg">
                    <div class="rounded-full bg-[#022a3b] p-4 justify-center">
                        <span class="flex items-center text-white">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" class="h-6 w-6"
                                height="1em" width="1em" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                <path
                                    d="M64 0C28.7 0 0 28.7 0 64L0 448c0 35.3 28.7 64 64 64l256 0c35.3 0 64-28.7 64-64l0-288-128 0c-17.7 0-32-14.3-32-32L224 0 64 0zM256 0l0 128 128 0L256 0zM80 64l64 0c8.8 0 16 7.2 16 16s-7.2 16-16 16L80 96c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64l64 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-64 0c-8.8 0-16-7.2-16-16s7.2-16 16-16zm16 96l192 0c17.7 0 32 14.3 32 32l0 64c0 17.7-14.3 32-32 32L96 352c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32zm0 32l0 64 192 0 0-64L96 256zM240 416l64 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-64 0c-8.8 0-16-7.2-16-16s7.2-16 16-16z" />
                            </svg>
                        </span>
                    </div>
                    <div class="h-50 ml-4 flex w-auto flex-col justify-center">
                        <a href="{{ route('cashfund_informations.member_cash.index', $info->id) }}">
                            {{ \Carbon\Carbon::parse($info->date)->translatedFormat('F Y') }}
                        </a>
                    </div>
                    <div class="absolute px-4 right-0">
                        <button onclick="toggleDropdown({{ $info->id }})" class="focus:outline-none">
                            <svg stroke="#022a3b" fill="#022a3b" stroke-width="0" class="h-5 w-5"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 512">
                                <path
                                    d="M64 360a56 56 0 1 0 0 112 56 56 0 1 0 0-112zm0-160a56 56 0 1 0 0 112 56 56 0 1 0 0-112zM120 96A56 56 0 1 0 8 96a56 56 0 1 0 112 0z" />
                            </svg>
                        </button>

                        <div id="dropdown-{{ $info->id }}"
                            class="hidden absolute right-0 mt-2 w-32 bg-white rounded-lg shadow-lg z-20">
                            <a onclick="openEditModal({{ $info->id }}, '{{ $info->date }}',{{ $info->cash_detail }})"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Edit</a>
                            <form id="delete-form-{{ $info->id }}"
                                action="{{ route('cashfunds.informations.destroy', [$cashFund->id, $info->id]) }}"
                                method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="button" onclick="confirmDelete({{ $info->id }})"
                                    class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div id="editModal" class="fixed inset-0 flex items-center justify-center z-50 hidden">
            <div class="modal-overlay fixed inset-0 bg-black opacity-50"></div>
            <div class="modal-content bg-white rounded-lg p-6 z-10">
                <h2 class="text-xl font-bold mb-4">Edit Cash Fund Information</h2>
                <form id="editForm" action="" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="date" name="date" id="editCashFundInformationDate" required
                        class="border border-gray-300 rounded-md p-2 mb-4 w-full">
                    <input type="number" name="cash_detail" id="editCashDetail" required step="0.01" min="0"
                        placeholder="Cash Amount" class="border border-gray-300 rounded-md p-2 mb-4 w-full">
                    <div class="flex justify-end">
                        <button type="button" id="closeEditModal"
                            class="mr-2 bg-gray-300 px-4 py-2 rounded-md hover:bg-gray-400">Cancel</button>
                        <button type="submit"
                            class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Save Changes</button>
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
