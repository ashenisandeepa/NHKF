<?php

namespace App\Http\Controllers;

use App\Models\ChildrenMember;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ChildrenMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $childrenMembers = ChildrenMember::all();
        return response()->json($childrenMembers);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'membership_number' => 'required|string|max:255',
            'child_first_name' => 'required|string|max:255',
            'child_last_name' => 'required|string|max:255',
            'child_personal_number' => 'required|string|unique:children_members',
            'child_address' => 'required|string|max:255',
            'child_postal_code' => 'required|string|max:10',
            'child_city' => 'required|string|max:255',
            'baptism_date' => 'nullable|date',
            'baptism_place' => 'nullable|string|max:255',
            'mission_society' => 'nullable|string|max:255',
            'guardian1_first_name' => 'required|string|max:255',
            'guardian1_last_name' => 'required|string|max:255',
            'guardian1_personal_number' => 'required|string|unique:children_members',
            'guardian1_address' => 'required|string|max:255',
            'guardian1_postal_code' => 'required|string|max:10',
            'guardian1_city' => 'required|string|max:255',
            'guardian2_first_name' => 'nullable|string|max:255',
            'guardian2_last_name' => 'nullable|string|max:255',
            'guardian2_personal_number' => 'nullable|string|unique:children_members',
            'guardian2_address' => 'nullable|string|max:255',
            'guardian2_postal_code' => 'nullable|string|max:10',
            'guardian2_city' => 'nullable|string|max:255',
            'consent_to_share' => 'required|boolean',
            'signature_date' => 'required|date',
            'signatures' => 'required|binary',
        ]);

        $childrenMember = ChildrenMember::create($validatedData);

        return response()->json($childrenMember, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $childrenMember = ChildrenMember::findOrFail($id);
        return response()->json($childrenMember);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $childrenMember = ChildrenMember::findOrFail($id);

        $validatedData = $request->validate([
            'membership_number' => 'required|string|max:255',
            'child_first_name' => 'required|string|max:255',
            'child_last_name' => 'required|string|max:255',
            'child_personal_number' => 'required|string|unique:children_members,child_personal_number,' . $childrenMember->id,
            'child_address' => 'required|string|max:255',
            'child_postal_code' => 'required|string|max:10',
            'child_city' => 'required|string|max:255',
            'baptism_date' => 'nullable|date',
            'baptism_place' => 'nullable|string|max:255',
            'mission_society' => 'nullable|string|max:255',
            'guardian1_first_name' => 'required|string|max:255',
            'guardian1_last_name' => 'required|string|max:255',
            'guardian1_personal_number' => 'required|string|unique:children_members,guardian1_personal_number,' . $childrenMember->id,
            'guardian1_address' => 'required|string|max:255',
            'guardian1_postal_code' => 'required|string|max:10',
            'guardian1_city' => 'required|string|max:255',
            'guardian2_first_name' => 'nullable|string|max:255',
            'guardian2_last_name' => 'nullable|string|max:255',
            'guardian2_personal_number' => 'nullable|string|unique:children_members,guardian2_personal_number,' . $childrenMember->id,
            'guardian2_address' => 'nullable|string|max:255',
            'guardian2_postal_code' => 'nullable|string|max:10',
            'guardian2_city' => 'nullable|string|max:255',
            'consent_to_share' => 'required|boolean',
            'signature_date' => 'required|date',
            'signatures' => 'required|binary',
        ]);

        $childrenMember->update($validatedData);

        return response()->json($childrenMember);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $childrenMember = ChildrenMember::findOrFail($id);
        $childrenMember->delete();

        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
