@extends('layouts.app')

@section('content')
    <h1>Children Members Form</h1>
    <form id="childrenMembersForm" action="{{ url('/api/children-members') }}" method="POST">
        @csrf
        <!-- Add similar input fields as in the members form for children's data -->
        <label for="membership_number">Membership Number</label>
        <input type="text" id="membership_number" name="membership_number" required>

        <label for="child_first_name">Child's First Name</label>
        <input type="text" id="child_first_name" name="child_first_name" required>

        <!-- Repeat for all fields similar to the members form, with adjustments for children's data -->

        <button type="submit">Submit</button>
    </form>
@endsection
