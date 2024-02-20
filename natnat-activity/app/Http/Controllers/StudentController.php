<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $students = new Student();

        $students->student_first_name = $request->input('student_first_name');
        $students->student_last_name = $request->input('student_last_name');
        $students->student_email = $request->input('student_email');
        $students->student_address = $request->input('student_address');

        $students->save();
        return response()->json($students);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(Student $students)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $students)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $students)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $students)
    {

    }
}
