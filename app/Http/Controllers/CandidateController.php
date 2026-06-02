<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidate;


class CandidateController extends Controller
{
    public function index()
{
    return response()->json(
        Candidate::all()
    );
}

    public function show($id)
    {
        $candidate = Candidate::with('admission')->find($id);

        if (!$candidate) {
            return response()->json([
                'message' => 'Candidate not found'
            ], 404);
        }

        return response()->json($candidate);
    }
}
