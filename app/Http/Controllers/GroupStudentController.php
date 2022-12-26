<?php

namespace App\Http\Controllers;

use App\Models\GroupStudent;
use App\Models\Group;
use App\Models\GroupLink;
use App\Models\Student;
use App\Models\StudentMark;
use Illuminate\Http\Request;

class GroupStudentController extends Controller
{
    public function index($group_id)
    {
        $groupStudents = GroupStudent::where('group_id',$group_id)->get();
        $group_links = GroupLink::where('group_id',$group_id)->get();

        return view('teacher.manageGroups',
        ['group_students'=>$groupStudents,
        'group_id'=>$group_id,
        'group_links'=>$group_links
    ]);
    }
    public function addStudent(Request $request, $group_id)
    {
        $request->validate([
            'student_id'=>"required|unique:group_students|exists:students"
        ]);

        GroupStudent::create(['group_id'=>$group_id, 'student_id'=>$request->student_id]);

        // $studentExists = StudentMark::where('student_id',$request->student_id )->first();
        // if(!$studentExists){
        //     StudentMark::create(['student_id'=>$request->student_id]);
        // }
        return redirect('/teacher/group/manage/'.$group_id);
    }
    public function destroy($id)
    {
        $group_id = GroupStudent::where('id',$id)->value('group_id');

        GroupStudent::where('id',$id)->delete();

        $data = GroupStudent::where('group_id',$group_id)->first();

        if($data){
            return redirect('/teacher/group/manage/'.$group_id);
        }

        return redirect('/teacher/groups');
    }
}
