<!-- resources/views/financial/index.blade.php -->

<x-app-layout>
    <div class="container">
        <div class="flex justify-between mb-8 border-b pb-4 border-[#022a3b]">
            <h1 class="text-4xl font-bold">Your Financial Categories</h1>
            <div class="">
                <button id="openModal" class="bg-[#022a3b] text-white px-4 py-2 rounded-md">Add
                    New Financial
                    Category
                </button>

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
                <div class="flex flex-row bg-white px-4 py-6 rounded-xl shadow-lg">
                    <div class="rounded-full bg-[#022a3b] p-4 justify-center">
                        <span class="flex items-center text-white">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                class="h-6 w-6" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z"></path>
                            </svg>
                        </span>
                    </div>
                    <div class="h-50 ml-4 flex w-auto flex-col justify-center">
                        <a href="{{ route('financial.showStatements', $financial->id) }}">
                            {{ $financial->financial_name }}
                        </a>
                        <h4 class="text-xl font-bold text-black">$1,000</h4>
                    </div>
                </div>
            @endforeach
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
    </script>
    </div>
</x-app-layout>
