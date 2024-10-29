<!-- resources/views/financials/index.blade.php -->
<h1>Financial Records</h1>
<a href="{{ route('financials.create') }}">Add Record</a>

<table>
    <tr>
        <th>Keterangan</th>
        <th>Debit</th>
        <th>Kredit</th>
        <th>Sisa Uang</th>
        <th>Actions</th>
    </tr>
    @foreach($financials as $financial)
    <tr>
        <td>{{ $financial->keterangan }}</td>
        <td>{{ $financial->debit }}</td>
        <td>{{ $financial->kredit }}</td>
        <td>{{ $financial->sisa_uang }}</td>
        <td>
            <a href="{{ route('financials.edit', $financial->id) }}">Edit</a>
            <form action="{{ route('financials.destroy', $financial->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
