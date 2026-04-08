<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{ 
    public function index() {
        $departments = Department::all();
        return response()->json([$departments]);
    }

    public function store(Request $request) {
        $request->validate([
            '$department' => 'required|string|max:225'
        ]);

        $department = Department::create([
            'department'=>$request->department
        ]);
        return response()->json([
            'message' => 'Department created successfully',
            'data' => $department

        ], 201);
    }
}
