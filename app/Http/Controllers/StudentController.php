<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::paginate(5);
        return view('admin.studentList',['students'=>$students]);
    }

    public function create()
    {
        return view('admin.addStudent');
    }
    public function store(Request $request)
    {
        $request->validate([
            'student_id'=>"required|unique:students",
            'email'=>"required|unique:students",
            'student_name'=>"required",
            'department'=>'required'
        ]);

        Student::create($request->all());
        return redirect('admin/student');
    }
    public function show(Student $student)
    {
        $students = Student::all();
        return view("admin.editStudent", ["students"=>$students, "student"=>$student]);
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'student_id'=>['required',
            Rule::unique('students')->ignore($student->id)
        ],
            'email'=>['required',
            Rule::unique('students')->ignore($student->id)
        ],
            'student_name'=>"required",
            'department'=>'required'
        ]);
        $student->update($request->all());
        return redirect('/admin/student');
    }
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect("/admin/student");
    }
}
