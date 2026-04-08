<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faculty;

class FacultyController extends Controller
{
    public function index() {
        $faculties = Faculty::all();
        return response()->json([$faculties]);
    }

    public function store(Request $request) {
        $request->validate([
            'faculty' => 'required|string|max:255' 
        ]);
        
        $faculty = Faculty::create([
            'faculty' => $request->faculty
        ]);
        return response()->json([
            'message' => 'Faculty created successfully',
            'data' => $faculty
        ], 201);
    }
}

