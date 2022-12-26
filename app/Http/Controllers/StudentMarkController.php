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
        $studentDetails=[];
        $i= 0;

        if($groupStudents){

            foreach ($groupStudents as $group_student) {
                $student_id = $group_student->student_id;
                $student = Student::where('student_id',$student_id)->with('student_marks')->get();
                $studentDetails[$i] = $student[0];
                $i++;
            }
        }

        $marks = Marks::get()->first();

        return view('teacher.manageStudentMarks',['studentDetails'=>$studentDetails, 'marks'=>$marks]);
    }

    public function addMark(Request $request){

        $marks = Marks::get()->first();
        $request->validate([
            'student_id'=>"required|unique:student_marks",
            'po1'=>"required|gte:0|lte:$marks->po1",
            'po2'=>"required|gte:0|lte:$marks->po2",
            'po3'=>"required|gte:0|lte:$marks->po3",
            'po4'=>"required|gte:0|lte:$marks->po4",
            'po5'=>"required|gte:0|lte:$marks->po5",
            'po6'=>"required|gte:0|lte:$marks->po6",
            'po7'=>"required|gte:0|lte:$marks->po7",
            'po8'=>"required|gte:0|lte:$marks->po8",
            'po9'=>"required|gte:0|lte:$marks->po9",
            'po10'=>"required|gte:0|lte:$marks->po10",
            'po11'=>"required|gte:0|lte:$marks->po11",
            'po12'=>"required|gte:0|lte:$marks->po12",
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

    public function show($id)
    {
        $studentMark = StudentMark::where('student_id', $id)->first();
        $group_id = GroupStudent::where('student_id', $id)->value('group_id');

        $groupStudents = GroupStudent::where('group_id',$group_id)->get();
        $studentsDetails;
        $i= 0;
        foreach ($groupStudents as $group_student) {
            $student_id = $group_student->student_id;
            $student = Student::where('student_id',$student_id)->with('student_marks')->get();
            $studentsDetails[$i] = $student[0];
            $i++;
        }

        $marks = Marks::get()->first();

        // return $studentMark;

        return view('teacher.manageStudentMarkEdit',
        ['studentsDetails'=>$studentsDetails,
            'marks'=>$marks,
            'studentMark' =>$studentMark,
        ]);
    }

    public function update($id, Request $request)
    {
        $marks = Marks::get()->first();
        $request['student_id'] = $id;

        $request->validate([
            'student_id'=>"required",
            'po1'=>"required|gte:0|lte:$marks->po1",
            'po2'=>"required|gte:0|lte:$marks->po2",
            'po3'=>"required|gte:0|lte:$marks->po3",
            'po4'=>"required|gte:0|lte:$marks->po4",
            'po5'=>"required|gte:0|lte:$marks->po5",
            'po6'=>"required|gte:0|lte:$marks->po6",
            'po7'=>"required|gte:0|lte:$marks->po7",
            'po8'=>"required|gte:0|lte:$marks->po8",
            'po9'=>"required|gte:0|lte:$marks->po9",
            'po10'=>"required|gte:0|lte:$marks->po10",
            'po11'=>"required|gte:0|lte:$marks->po11",
            'po12'=>"required|gte:0|lte:$marks->po12",
        ]);

        unset($request['_token'],$request['_method']);
        StudentMark::where('student_id',$id)->update($request->all());

        $group_id = GroupStudent::where('student_id', $id)->value('group_id');

        return redirect('/teacher/group/manage/marks/'.$group_id);
    }
}
