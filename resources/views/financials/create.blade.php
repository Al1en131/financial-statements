<!-- resources/views/financials/create.blade.php -->
<h1>Add Financial Record</h1>
<form action="{{ route('financials.store') }}" method="POST">
    @csrf
    <label>Keterangan:</label>
    <input type="text" name="keterangan" required>
    
    <label>Debit:</label>
    <input type="number" step="0.01" name="debit">
    
    <label>Kredit:</label>
    <input type="number" step="0.01" name="kredit">
    
    <button type="submit">Save</button>
</form>
