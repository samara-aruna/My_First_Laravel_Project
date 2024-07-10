<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer',
            'school' => 'required|string|max:255',
        ]);

        Student::create($request->only(['name', 'age', 'school']));

        return back()->with('success', 'Student information saved successfully.');
    }
}
