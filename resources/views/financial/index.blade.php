<!-- resources/views/financial/index.blade.php -->

<x-app-layout>
<div class="container">
    <h1>Your Financial Categories</h1>

    @foreach ($financials as $financial)
        <div>
            <h2>
                <a href="{{ route('financial.showStatements', $financial->id) }}">
                    {{ $financial->financial_name }}
                </a>
            </h2>
        </div>
    @endforeach

    <!-- Form to add new financial category -->
    <h2>Add New Financial Category</h2>
    <form action="{{ route('financial.store') }}" method="POST">
        @csrf
        <input type="text" name="financial_name" placeholder="Financial Name" required>
        <button type="submit">Add Financial</button>
    </form>
</div>
</x-app-layout>
