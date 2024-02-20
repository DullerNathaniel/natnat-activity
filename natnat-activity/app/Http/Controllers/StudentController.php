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
    public function create(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $students = Student::create([
            "student_first_name" => $request->student_first_name,
            "student_last_name" => $request->student_last_name,
            "student_email" => $request->student_email,
            "student_address" => $request->student_address,

        ]);

        return response()->json([
            "message" => "Student Created Sucessfully!", 
            "data" => $students
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $students = Student::all();

        return response()->json($students);
    }

    public function showbyid($id)
    {
        $students = Student::find($id);

        return response()->json($students);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $students = Student::find($id);
        $students->student_first_name = $request->input('student_first_name');
        $students->student_last_name = $request->input('student_last_name');
        $students->student_email = $request->input('student_email');
        $students->student_address = $request->input('student_address');

        $students->save();
        return response()->json($students);
    }

    public function partialupdate(Request $request, $id)
    {
        $students = Student::find($id);
        $students->fill($request->only([
            'student_first_name',
            'student_last_name',
            'student_email',
            'student_address',

        ]));

        $students->save();
        return response()->json($students);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $student = Student::find($id);
        $student->delete();
        return response()->json(['message' => 'Student Deleted Successfully!']);
    }
}
