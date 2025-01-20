@extends('layouts.app')

@section('content')
    <h1>Members Form</h1>
    <form id="membersForm" action="{{ url('/api/members') }}" method="POST">
        @csrf
        <label for="membership_number">Membership Number</label>
        <input type="text" id="membership_number" name="membership_number" required>

        <label for="first_name">First Name</label>
        <input type="text" id="first_name" name="first_name" required>

        <label for="last_name">Last Name</label>
        <input type="text" id="last_name" name="last_name" required>

        <label for="personal_number">Personal Number</label>
        <input type="text" id="personal_number" name="personal_number" required>

        <label for="address">Address</label>
        <input type="text" id="address" name="address" required>

        <label for="postal_code">Postal Code</label>
        <input type="text" id="postal_code" name="postal_code" required>

        <label for="city">City</label>
        <input type="text" id="city" name="city" required>

        <label for="mobile_phone">Mobile Phone</label>
        <input type="text" id="mobile_phone" name="mobile_phone" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="citizenship">Citizenship</label>
        <input type="text" id="citizenship" name="citizenship" required>

        <label for="mission_society">Mission Society</label>
        <input type="text" id="mission_society" name="mission_society">

        <label for="consent_to_share">Consent to Share</label>
        <input type="checkbox" id="consent_to_share" name="consent_to_share">

        <label for="signature_date">Signature Date</label>
        <input type="date" id="signature_date" name="signature_date" required>

        <label for="signature">Signature</label>
        <input type="file" id="signature" name="signature">

        <button type="submit">Submit</button>
    </form>
@endsection

