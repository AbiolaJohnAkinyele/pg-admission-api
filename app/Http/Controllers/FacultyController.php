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

    public function update(Request $request, $id) {
        $faculty = Faculty::find($id);

        if(!$faculty) {
            return response()->json([
                'message' => 'Faculty not found'
            ], 404);
        }

        $request->validate([
            'faculty' => 'required|string|max:255'
        ]);

        $faculty->update([
            'faculty' => $request->faculty
        ]);

        return response()->json([
            'message' => 'faculty successfully updated',
            'data' => $faculty
        ]);
    }

    public function destroy($id) {
        $faculty = Faculty::find($id);

        if(!$faculty){
            return respons()->json([
                'message' => 'Faculty not found'
            ], 404);
        }

        $faculty->delete();

        return response()->json([
            'message' => 'Faculty deleted successfully'
        ]);
    
    }
}

