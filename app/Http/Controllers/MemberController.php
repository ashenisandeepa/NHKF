<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = Member::all();
        return response()->json($members);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'membership_number' => 'required|string|max:255|unique:members',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'personal_number' => 'required|string|max:20|unique:members',
            'address' => 'required|string|max:255',
            'postal_code' => 'required|string|max:10',
            'city' => 'required|string|max:255',
            'mobile_phone' => 'required|string|max:20|unique:members',
            'email' => 'required|string|email|max:255|unique:members',
            'citizenship' => 'required|string|max:255',
            'mission_society' => 'nullable|string|max:255',
            'consent_to_share' => 'required|boolean',
            'signature_date' => 'required|date',
            'signature' => 'required|string', // Assuming signature is stored as a base64 encoded string
        ]);

        $member = Member::create($validatedData);

        return response()->json($member, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $member = Member::findOrFail($id);
        return response()->json($member);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $member = Member::findOrFail($id);

        $validatedData = $request->validate([
            'membership_number' => 'required|string|max:255|unique:members,membership_number,' . $member->id,
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'personal_number' => 'required|string|max:20|unique:members,personal_number,' . $member->id,
            'address' => 'required|string|max:255',
            'postal_code' => 'required|string|max:10',
            'city' => 'required|string|max:255',
            'mobile_phone' => 'required|string|max:20|unique:members,mobile_phone,' . $member->id,
            'email' => 'required|string|email|max:255|unique:members,email,' . $member->id,
            'citizenship' => 'required|string|max:255',
            'mission_society' => 'nullable|string|max:255',
            'consent_to_share' => 'required|boolean',
            'signature_date' => 'required|date',
            'signature' => 'required|string',
        ]);

        $member->update($validatedData);

        return response()->json($member);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $member = Member::findOrFail($id);
        $member->delete();

        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
