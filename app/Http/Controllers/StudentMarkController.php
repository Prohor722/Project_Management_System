<?php

namespace App\Http\Controllers;

use App\Models\StudentMark;
use App\Models\Student;
use App\Models\GroupStudent;
use Illuminate\Http\Request;

class StudentMarkController extends Controller
{
    public function index($id)
    {
        $groupStudents = GroupStudent::where('group_id',$id)->get();
        $studentDetails;
        $i= 0;
        foreach ($groupStudents as $group_student) {
            $student_id = $group_student->student_id;
            $student = Student::where('student_id',$student_id)->with('student_marks')->get();
            $studentDetails[$i] = $student[0];
            $i++;
        }
        // return $studentDetails[0]->student_marks->po1;

        return view('teacher.manageStudentMarks',['studentDetails'=>$studentDetails]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(StudentMark $studentMark)
    {
        //
    }

    public function edit(StudentMark $studentMark)
    {
        //
    }

    public function update(Request $request, StudentMark $studentMark)
    {
        //
    }
    public function destroy(StudentMark $studentMark)
    {
        //
    }
}
