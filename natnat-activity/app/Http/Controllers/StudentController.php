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

    public function showbyid($id)
    {
        $students = Student::find($id);
        return response()->json($students);

    }    

    public function show()
    {
        $students = Student::all();
        return response()->json($students);

    }    

    public function updateStudent(Request $request, $id)
    {
        $students = Student::find($id);
        $students->student_first_name = $request->input('student_first_name');
        $students->student_last_name = $request->input('student_last_name');
        $students->student_email = $request->input('student_email');
        $students->student_address = $request->input('student_address');

        $students->save();
        return response()->json($students);

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
        'student_first_name' => $request->student_first_name,
        'student_last_name' => $request->student_last_name,
        'student_email' => $request->student_email,
        'student_address' => $request->student_address,

        ]);

        return redirect()->route('index');
    }

    public function viewStudent($id)
    {
        $student = Student::findOrFail($id);

        return view( view: 'pages.show', data:['student' => $student]);  
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
