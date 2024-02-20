<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as Controller;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('pages.index', ['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'student_first_name' => 'Required',
            'student_last_name' => 'Required',
            'student_email' => 'Required email',
            'student_address' => 'Required',
        ]);

        $student = Student::create($validatedData);

        return redirect()->route('pages.index')->with('Student created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        $students = Student::find();
        return view('pages.show', ['students' => $students]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        $student = Student::find($id);
        return view('pages.edit', ['student' => $student]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $validatedData = $request->validate([
            'student_first_name' => 'Required',
            'student_last_name' => 'Required',
            'student_email' => 'Required email',
            'student_address' => 'Required',
        ]);

        $student = Student::find($id);
        $student->update($validatedData);

        return redirect()->route('pages.index')->with('Student updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student = Student::find($id);
        $student->delete();

        return redirect()->route('pages.index')->with('Student deleted successfully!');
    }
}
