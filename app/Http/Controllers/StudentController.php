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

    public function studentInfo($id){
        $students = Student::paginate(5);
        $student = Student::where('student_id', $id)->first();

        return view('admin.studentInfo',['students'=>$students, "student"=>$student]);
    }

    public function search(Request $request){

        $txt = $request->searchText;

        $search = Student::query()->where('student_id', 'LIKE', "%{$txt}%")
        ->orWhere('student_name', 'LIKE', "%{$txt}%")
        ->paginate(5);

        $size = count($search);
        $students = Student::paginate(5);

        if($size>1){
            return view('admin.studentList',['students'=>$search]);
        }

        return view('admin.studentInfo',['students'=>$students, 'student'=> $search[0]]);
    }
}
