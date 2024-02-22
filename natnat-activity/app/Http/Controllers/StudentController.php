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
        $students = Student::all();

        return view( view: 'pages.index', data:['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view( view: 'pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $students = Student::create([
            'student_first_name' => $request->student_first_name,
            'student_last_name' => $request->student_last_name,
            'student_email' => $request->student_email,
            'student_address' => $request->student_address,

        ]);

        return redirect()->route('index');

    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        $students = Student::find($id);
        return view( view:'pages.edit', data:['students' => $students]);
    }

    public function partialUpdate(Request $request, $id)
    {
        $students = Student::findOrFail($id);

        $students ->update([
        'student_email' => $request->student_email,
        'student_address' => $request->student_address,

        ]);

        return redirect()->route('index');
    }

    public function viewStudent()
    {
        $students = Student::all();

        return view( view: 'pages.show', data:['students' => $students]);  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $students = Student::findOrFail($id);
        $students->delete();
        return redirect()->route('index');
    }
}
