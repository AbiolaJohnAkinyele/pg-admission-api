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

    public function update(Request $request, $id) {
        $department = Department::find($id);

        if(!$department) {
            return response()->json([
                'message' => 'Department not found'
            ], 404);
        }

        $request->validate([
            'department' => 'required|string|max:255'
        ]);

        $department->update([
            'department' => $request->department
        ]);

        return response()->json([
            'message' => 'department successfully updated',
            'data' => $department
        ]);
    }

    public function destroy($id) {
        $department = Department::find($id);

        if(!$department){
            return respons()->json([
                'message' => 'Department not found'
            ], 404);
        }

        $department->delete();

        return response()->json([
            'message' => 'Department deleted successfully'
        ]);
    
    }
}
