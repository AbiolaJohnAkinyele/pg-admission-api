<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\api\DropdownController;

Route::get('/faculties', [FacultyController::class, 'index']);
Route::post('/faculties', [FacultyController::class, 'store']);
Route::get('/departments', [DepartmentController::class, 'index']);
Route::post('/departments', [DepartmentController::class, 'store']);
Route::get('/programs', [ProgramController::class, 'index']);
Route::post('/programs', [ProgramController::class, 'store']);
Route::get('/programs', [DropdownController::class, 'programs']);
Route::get('/faculties', [DropdownController::class, 'faculties']);
Route::get('/departments', [DropdownController::class, 'departments']);
Route::put('/departments/{$id}', [DepartmentController::class, 'update']);
Route::delete('/department/{$id}', [DepartmentController::class, 'destroy']);