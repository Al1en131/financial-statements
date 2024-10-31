<x-app-layout>
    <div class="container">
        <h1>Members for Cash Fund Information - 
            {{ $cashFundInformation->date ? \Carbon\Carbon::parse($cashFundInformation->date)->format('F Y') : 'Invalid Date' }}
        </h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Form to Add New Member -->
        <form action="{{ route('cashfund_informations.member_cash.store', $cashFundInformation->id) }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="member_name" class="form-label">Member Name</label>
                <input type="text" class="form-control" id="member_name" name="member_name"
                    value="{{ old('member_name') }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Member</button>
        </form>

        <!-- List of Members with Payment Status -->
        <hr>
        <h2>Members</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Member Name</th>
                    <th>Week 1 Status</th>
                    <th>Week 2 Status</th>
                    <th>Week 3 Status</th>
                    <th>Week 4 Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($members as $member)
                    <tr>
                        <td>{{ $member->member_name }}</td>
                        <form action="{{ route('cashfund_informations.member_cash.update', [$cashFundInformation->id, $member->id]) }}" method="POST" id="form-status-{{ $member->id }}">
                            @csrf
                            @method('PATCH')
                            <td>
                                <div class="form-check form-switch">
                                    <input type="checkbox" class="form-check-input" id="checkbox_week_1_{{ $member->id }}" name="week_1_status" value="1"
                                        {{ old('week_1_status', $member->week_1_status) ? 'checked' : '' }}
                                        onchange="document.getElementById('form-status-{{ $member->id }}').submit();">
                                    <label class="form-check-label" for="checkbox_week_1_{{ $member->id }}">Week 1</label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-switch">
                                    <input type="checkbox" class="form-check-input" id="checkbox_week_2_{{ $member->id }}" name="week_2_status" value="1"
                                        {{ old('week_2_status', $member->week_2_status) ? 'checked' : '' }}
                                        onchange="document.getElementById('form-status-{{ $member->id }}').submit();">
                                    <label class="form-check-label" for="checkbox_week_2_{{ $member->id }}">Week 2</label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-switch">
                                    <input type="checkbox" class="form-check-input" id="checkbox_week_3_{{ $member->id }}" name="week_3_status" value="1"
                                        {{ old('week_3_status', $member->week_3_status) ? 'checked' : '' }}
                                        onchange="document.getElementById('form-status-{{ $member->id }}').submit();">
                                    <label class="form-check-label" for="checkbox_week_3_{{ $member->id }}">Week 3</label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-switch">
                                    <input type="checkbox" class="form-check-input" id="checkbox_week_4_{{ $member->id }}" name="week_4_status" value="1"
                                        {{ old('week_4_status', $member->week_4_status) ? 'checked' : '' }}
                                        onchange="document.getElementById('form-status-{{ $member->id }}').submit();">
                                    <label class="form-check-label" for="checkbox_week_4_{{ $member->id }}">Week 4</label>
                                </div>
                            </td>
                            {{-- <td>
                                <a href="{{ route('cashfund_informations.member_cash.destroy', [$cashFundInformation->id, $member->id]) }}" 
                                   class="btn btn-danger btn-sm" 
                                   onclick="event.preventDefault(); if(confirm('Are you sure you want to delete this member?')) { document.getElementById('delete-form-{{ $member->id }}').submit(); }">Delete</a>
                                <form id="delete-form-{{ $member->id }}" action="{{ route('cashfund_informations.member_cash.destroy', [$cashFundInformation->id, $member->id]) }}" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </td> --}}
                        </form>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
