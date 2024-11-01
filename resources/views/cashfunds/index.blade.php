<!-- resources/views/cashfunds/index.blade.php -->
<x-app-layout>
    <div class="container">
        <div class="flex justify-between mb-8 border-b pb-4 border-[#022a3b]">
            <h1 class="text-4xl font-bold">Your Cash Funds</h1>
            <div>
                <button id="openModal" class="bg-[#022a3b] text-white px-4 py-2 rounded-md">Add New Cash Fund</button>
                <div id="modal" class="fixed inset-0 flex items-center justify-center z-50 hidden">
                    <div class="modal-overlay fixed inset-0 bg-black opacity-50"></div>
                    <div class="modal-content bg-white rounded-lg p-6 z-10">
                        <h2 class="text-xl font-bold mb-4">Add New Financial Category</h2>
                        <form action="{{ route('cashfunds.store') }}" method="POST">
                            @csrf
                            <input type="text" name="cash_fund_name" placeholder="Cash Fund Name" required
                                class="border border-gray-300 rounded-md p-2 mb-4 w-full">
                            <div class="flex justify-end">
                                <button type="button" id="closeModal"
                                    class="mr-2 bg-gray-300 px-4 py-2 rounded-md hover:bg-gray-400">Cancel</button>
                                <button type="submit"
                                    class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Add
                                    Cash Fund</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-3 gap-4 mb-4">
            @foreach ($cashFunds as $cashFund)
                <div class="flex flex-row bg-white px-4 py-6 rounded-xl relative shadow-lg">
                    <div class="rounded-full bg-[#022a3b] p-4 justify-center">
                        <span class="flex items-center text-white">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" class="h-6 w-6"
                                height="1em" width="1em" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path
                                    d="M64 64C28.7 64 0 92.7 0 128L0 384c0 35.3 28.7 64 64 64l448 0c35.3 0 64-28.7 64-64l0-256c0-35.3-28.7-64-64-64L64 64zm64 320l-64 0 0-64c35.3 0 64 28.7 64 64zM64 192l0-64 64 0c0 35.3-28.7 64-64 64zM448 384c0-35.3 28.7-64 64-64l0 64-64 0zm64-192c-35.3 0-64-28.7-64-64l64 0 0 64zM288 160a96 96 0 1 1 0 192 96 96 0 1 1 0-192z" />
                            </svg>
                        </span>
                    </div>
                    <div class="h-50 ml-4 flex w-auto flex-col justify-center">
                        <a
                            href="{{ route('cashfunds.informations.index', $cashFund->id) }}">{{ $cashFund->cash_fund_name }}</a>
                        {{-- <h4 class="text-black">Rp
                            @if (optional($financial->statements)->isNotEmpty())
                                {{ number_format($financial->balance, 0, ',', '.') }}
                            @else
                                -
                            @endif
                        </h4> --}}
                    </div>
                    <div class="absolute px-4 right-0">
                        <button onclick="toggleDropdown({{ $cashFund->id }})" class="focus:outline-none">
                            <svg stroke="#022a3b" fill="#022a3b" stroke-width="0" class="h-5 w-5"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 512">
                                <path
                                    d="M64 360a56 56 0 1 0 0 112 56 56 0 1 0 0-112zm0-160a56 56 0 1 0 0 112 56 56 0 1 0 0-112zM120 96A56 56 0 1 0 8 96a56 56 0 1 0 112 0z" />
                            </svg>
                        </button>

                        <div id="dropdown-{{ $cashFund->id }}"
                            class="hidden absolute right-0 mt-2 w-32 bg-white rounded-lg shadow-lg z-20">
                            <button onclick="openEditModal({{ $cashFund->id }}, '{{ $cashFund->cash_fund_name }}')"
                                class=" block px-4 py-2 text-sm text-gray-700 w-full hover:bg-gray-100">Edit</button>
                            <form id="delete-form-{{ $cashFund->id }}"
                                action="{{ route('cashfunds.destroy', $cashFund->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="button" onclick="confirmDelete({{ $cashFund->id }})"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 w-full">Delete</button>
                            </form>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- Modal Edit -->
        <div id="editModal" class="fixed inset-0 flex items-center justify-center z-50 hidden">
            <div class="modal-overlay fixed inset-0 bg-black opacity-50"></div>
            <div class="modal-content bg-white rounded-lg p-6 z-10">
                <h2 class="text-xl font-bold mb-4">Edit Cash Fund</h2>
                <form id="editForm" action="" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="text" name="cash_fund_name" id="editCashFundName" placeholder="Cash Fund Name"
                        required class="border border-gray-300 rounded-md p-2 mb-4 w-full">
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
