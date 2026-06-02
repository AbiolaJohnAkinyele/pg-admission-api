<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidate;
use Illuminate\Support\Facades\DB;


class CandidateController extends Controller
{
    // public function index()
    // {
    // $candidates = Candidate::with('admission')->get();

    // return response()->json($candidates);
    // }

    public function show($id)
{
    $candidate = DB::table('new')
        ->join('zmain_app', 'new.id', '=', 'zmain_app.user_id')
        ->leftJoin('fac_new', 'zmain_app.faculty', '=', 'fac_new.id')
        ->leftJoin('dept_new', 'zmain_app.department', '=', 'dept_new.id')
        ->select(
            'new.id',
            'new.numeration',
            'new.nationality',
            'new.Surname',
            'new.Other_names',
            'new.email',
            'new.Telephone',

            'zmain_app.state_of_origin',
            'zmain_app.local_govt_area',
            'zmain_app.mode_of_study',
            'zmain_app.field_of_interest',

            'fac_new.faculty as faculty_name',
            'dept_new.department as department_name'
        )
        ->where('new.id', $id)
        ->first();

    if (!$candidate) {
        return response()->json([
            'message' => 'Candidate not found'
        ], 404);
    }

    return response()->json($candidate);
}
}
