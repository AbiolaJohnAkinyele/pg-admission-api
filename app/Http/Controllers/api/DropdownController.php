<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Program;
use App\Models\Faculty;
use App\Models\Department;

class DropdownController extends Controller
{
    public function programs(){
        return response()->json(Program::all());
    }

    public function faculties() {
        return respons()->json(Faculty::all());
    }

    public function departments() {
        return response()->json(Department::all());
    }
}
