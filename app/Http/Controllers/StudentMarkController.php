<?php

namespace App\Http\Controllers;

use App\Models\StudentMark;
use App\Models\Student;
use App\Models\GroupStudent;
use App\Models\Marks;
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

        $marks = Marks::get()->first();
        // return $marks;

        return view('teacher.manageStudentMarks',['studentDetails'=>$studentDetails, 'marks'=>$marks]);
    }

    public function addMark(Request $request){
        $marks = Marks::get()->first();
        // return $marks;
        $request->validate([
            'student_id'=>"required|unique:student_marks",
            'po1'=>"required|gt:0|lte:$marks->po1",
            'po2'=>"required|gt:0|lte:$marks->po2",
            'po3'=>"required|gt:0|lte:$marks->po3",
            'po4'=>"required|gt:0|lte:$marks->po4",
            'po5'=>"required|gt:0|lte:$marks->po5",
            'po6'=>"required|gt:0|lte:$marks->po6",
            'po7'=>"required|gt:0|lte:$marks->po7",
            'po8'=>"required|gt:0|lte:$marks->po8",
            'po9'=>"required|gt:0|lte:$marks->po9",
            'po10'=>"required|gt:0|lte:$marks->po10",
            'po11'=>"required|gt:0|lte:$marks->po11",
            'po12'=>"required|gt:0|lte:$marks->po12",
        ]);
        $sum=0;
        for($i=1; $i<=12; $i++){
            $sum = $sum + $request['po'.$i];
        }
        $request['total'] = $sum;

        $group_id = GroupStudent::where('student_id', $request->student_id)->value('group_id');

        // return $request;
        StudentMark::create($request->all());

        return redirect('/teacher/group/manage/marks/'.$group_id);
    }

    public function show(StudentMark $studentMark)
    {
        //
    }

    public function update(Request $request, StudentMark $studentMark)
    {
        //
    }
}
