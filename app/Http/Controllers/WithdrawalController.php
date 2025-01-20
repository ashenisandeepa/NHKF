<?php

namespace App\Http\Controllers;

use App\Models\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class WithdrawalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $withdrawals = Withdrawal::all();
        return response()->json($withdrawals);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'society_name' => 'required|string|max:255',
            'society_address' => 'required|string|max:255',
            'member_name' => 'required|string|max:255',
            'personal_number' => 'required|string|max:20|unique:withdrawals',
            'place' => 'required|string|max:255',
            'date' => 'required|date',
            'signature' => 'required|string', // Assuming signature is stored as a base64 encoded string
        ]);

        $withdrawal = Withdrawal::create($validatedData);

        return response()->json($withdrawal, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $withdrawal = Withdrawal::findOrFail($id);
        return response()->json($withdrawal);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $withdrawal = Withdrawal::findOrFail($id);

        $validatedData = $request->validate([
            'society_name' => 'required|string|max:255',
            'society_address' => 'required|string|max:255',
            'member_name' => 'required|string|max:255',
            'personal_number' => 'required|string|max:20|unique:withdrawals,personal_number,' . $withdrawal->id,
            'place' => 'required|string|max:255',
            'date' => 'required|date',
            'signature' => 'required|string', // Assuming signature is stored as a base64 encoded string
        ]);

        $withdrawal->update($validatedData);

        return response()->json($withdrawal);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $withdrawal = Withdrawal::findOrFail($id);
        $withdrawal->delete();

        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
