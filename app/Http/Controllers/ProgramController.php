<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;

class ProgramController extends Controller
{
    public function index() {
        $programs = Program::with([
            'faculty',
            'department',
            'degree',
            'specialization'
        ])->get();

        return response()->json($programs);
    }

    public function store() {
        $request->validate([
            'fac' => 'required|exists:fac_new,id',
            'dept' => 'required|exists:dept_new,id',
            'degree' => 'required|exists:degree_new,id',
            'field' => 'required|exists:field_new,id'
        ]);

        $program = Program::create([
            'fac' => $request->fac,
            'dept' => $request->dept,
            'degree' => $request->degree,
            'field' => $request->field,
        ]);

        return response()->json([
            'message' => 'Program created successfully',
            'data' => $program
        ], 201);
    }
}
