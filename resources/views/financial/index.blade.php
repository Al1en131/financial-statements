<x-app-layout>
    <div class="container">
        <div class="flex justify-between mb-8 border-b pb-4 border-[#022a3b]">
            <h1 class="text-4xl font-bold">Your Financial Categories</h1>
            <div>
                <button id="openModal" class="bg-[#022a3b] text-white px-4 py-2 rounded-md">Add New Financial
                    Category</button>

                <!-- Modal -->
                <div id="modal" class="fixed inset-0 flex items-center justify-center z-50 hidden">
                    <div class="modal-overlay fixed inset-0 bg-black opacity-50"></div>
                    <div class="modal-content bg-white rounded-lg p-6 z-10">
                        <h2 class="text-xl font-bold mb-4">Add New Financial Category</h2>
                        <form action="{{ route('financial.store') }}" method="POST">
                            @csrf
                            <input type="text" name="financial_name" placeholder="Financial Name" required
                                class="border border-gray-300 rounded-md p-2 mb-4 w-full">
                            <div class="flex justify-end">
                                <button type="button" id="closeModal"
                                    class="mr-2 bg-gray-300 px-4 py-2 rounded-md hover:bg-gray-400">Cancel</button>
                                <button type="submit"
                                    class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Add
                                    Financial</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-3 gap-4 mb-4">
            @foreach ($financials as $financial)
                <div class="flex flex-row bg-white px-4 py-6 rounded-xl relative shadow-lg">
                    <div class="rounded-full bg-[#022a3b] p-4 justify-center">
                        <span class="flex items-center text-white">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" class="h-6 w-6"
                                height="1em" width="1em" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path
                                    d="M96 0C43 0 0 43 0 96L0 416c0 53 43 96 96 96l288 0 32 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l0-64c17.7 0 32-14.3 32-32l0-320c0-17.7-14.3-32-32-32L384 0 96 0zm0 384l256 0 0 64L96 448c-17.7 0-32-14.3-32-32s14.3-32 32-32zm32-240c0-8.8 7.2-16 16-16l192 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-192 0c-8.8 0-16-7.2-16-16zm16 48l192 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-192 0c-8.8 0-16-7.2-16-16s7.2-16 16-16z" />
                            </svg>
                        </span>
                    </div>
                    <div class="h-50 ml-4 flex w-auto flex-col justify-center">
                        <a
                            href="{{ route('financial.showStatements', $financial->id) }}">{{ $financial->financial_name }}</a>
                        <h4 class="text-lg font-bold text-black">Rp
                            @if (optional($financial->statements)->isNotEmpty())
                                {{ number_format($financial->statements->last()->balance, 0, ',', '.') }}
                            @else
                                -
                            @endif
                        </h4>
                    </div>
                    <div class="absolute px-4 right-0">
                        <button onclick="toggleDropdown({{ $financial->id }})" class="focus:outline-none">
                            <svg stroke="#022a3b" fill="#022a3b" stroke-width="0" class="h-5 w-5"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 512">
                                <path
                                    d="M64 360a56 56 0 1 0 0 112 56 56 0 1 0 0-112zm0-160a56 56 0 1 0 0 112 56 56 0 1 0 0-112zM120 96A56 56 0 1 0 8 96a56 56 0 1 0 112 0z" />
                            </svg>
                        </button>

                        <!-- Dropdown Menu -->
                        <div id="dropdown-{{ $financial->id }}"
                            class="hidden absolute right-0 mt-2 w-32 bg-white rounded-lg shadow-lg z-20">
                            <a href="#"
                                onclick="openEditModal({{ $financial->id }}, '{{ $financial->financial_name }}')"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Edit</a>
                            <form action="{{ route('financial.destroy', $financial->id) }}" method="POST"
                                onsubmit="return confirm('Are you sure you want to delete this item?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div id="editModal" class="fixed z-50 inset-0 overflow-y-auto hidden" aria-labelledby="modal-title"
            role="dialog" aria-modal="true">
            <div class="flex items-center justify-center min-h-screen">
                <div class="fixed inset-0 bg-black opacity-30"></div>
                <div class="bg-white z-50 rounded-lg p-6 max-w-sm mx-auto">
                    <h2 class="text-lg font-bold mb-4" id="modal-title">Edit Financial Category</h2>
                    <form id="editForm" action="#" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="financial_id" id="financial_id" value="">
                        <div class="mb-4">
                            <label for="financial_name" class="block text-sm font-medium text-gray-700">Financial
                                Name</label>
                            <input type="text" name="financial_name" id="financial_name"
                                class="mt-1 block w-full border-gray-300 rounded-md" required>
                        </div>
                        <div class="flex justify-end">
                            <button type="button"
                                class="mr-2 bg-gray-300 hover:bg-gray-400 text-white font-bold py-2 px-4 rounded"
                                onclick="closeEditModal()">Cancel</button>
                            <button type="submit"
                                class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Update</button>
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

        // Menutup modal jika overlay diklik
        modal.addEventListener('click', (event) => {
            if (event.target === modal) {
                modal.classList.add('hidden');
            }
        });

        function openEditModal(id, name) {
            document.getElementById('financial_id').value = id;
            document.getElementById('financial_name').value = name;
            document.getElementById('editModal').classList.remove('hidden');
        }

        function closeEditModal() {
            document.getElementById('editModal').classList.add('hidden');
        }

        document.getElementById('editForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const formData = new FormData(this);
            const financialId = document.getElementById('financial_id').value;

            fetch(`/financial/${financialId}`, {
                    method: 'PUT',
                    body: formData,
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    closeEditModal(); // Pastikan ini dipanggil
                    location.reload(); // Refresh halaman untuk melihat data yang diperbarui
                })
                .catch(error => console.error('Error:', error));
        });


        function toggleDropdown(id) {
            const dropdown = document.getElementById(`dropdown-${id}`);
            dropdown.classList.toggle('hidden');
        }
    </script>
</x-app-layout>
