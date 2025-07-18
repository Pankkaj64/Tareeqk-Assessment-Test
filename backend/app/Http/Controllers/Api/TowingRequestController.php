<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TowingRequest;

class TowingRequestController extends Controller
{
    public function index()
    {
        return TowingRequest::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'customer_name' => 'required|string',
            'location' => 'required|string',
            'note' => 'nullable|string',
        ]);

        $towingRequest = TowingRequest::create($validated);

        return response()->json([
            'message' => 'Towing request created',
            'data' => $towingRequest
        ], 201);
    }
}
