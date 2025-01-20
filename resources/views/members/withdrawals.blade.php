@extends('layouts.app')

@section('content')
    <h1>Withdrawal Form</h1>
    <form id="withdrawalForm" action="{{ url('/api/withdrawals') }}" method="POST">
        @csrf
        <label for="society_name">Society Name</label>
        <input type="text" id="society_name" name="society_name" required>

        <label for="society_address">Society Address</label>
        <input type="text" id="society_address" name="society_address" required>

        <label for="member_name">Member Name</label>
        <input type="text" id="member_name" name="member_name" required>

        <label for="personal_number">Personal Number</label>
        <input type="text" id="personal_number" name="personal_number" required>

        <label for="place">Place</label>
        <input type="text" id="place" name="place" required>

        <label for="date">Date</label>
        <input type="date" id="date" name="date" required>

        <label for="signature">Signature</label>
        <input type="file" id="signature" name="signature">

        <button type="submit">Submit</button>
    </form>
@endsection
