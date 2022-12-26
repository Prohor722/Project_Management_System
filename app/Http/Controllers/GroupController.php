<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\GroupStudent;
use App\Models\Student;
use App\Models\StudentMark;
use App\Models\Notice;
use App\Models\Task;
use App\Models\GroupLink;
use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class GroupController extends Controller
{

    public function index(Request $request)
    {
        $id = $request->session()->get('user_id');

        $groups = Group::where('t_id', $id)->paginate(5);
        return view('teacher/groups',["groups"=>$groups]);
    }

    public function create()
    {
        return "create";
    }

    public function store(Request $request)
    {
        request()->validate([
           'group_id'=>"required|unique:groups",
            'topic_id'=>'required|exists:topics',
            'password'=>'required|min:4',
            'confirm_password'=>'required|same:password',
        ]);

        $request['t_id']=$request->session()->get('user_id');

        Group::create($request->all());

        return redirect('/teacher/groups');
    }

    public function show(Group $group, Request $request)
    {
        $groups = Group::paginate(5);
        $request->session()->put('id', $group->id);
        return view('teacher.groupEdit',["groups"=>$groups, 'group'=>$group]);
    }

    public function edit(Group $group)
    {
        return "edit";
    }

    public function update(Request $request, Group $group)
    {
        $id = $group->id;

        $request->validate([
            'group_id'=>['required',
            Rule::unique('groups')->ignore($id)
        ],
            'topic_id'=>"required",
            'password'=>"nullable|min:4",
            'confirm_password'=>"nullable|min:4"
        ]);

        $pass = $request->password ;
        $cpass = $request->confirm_password;
        $new_group_id = $request->group_id;

        if(!$pass || ($pass !== $cpass) ){
            $request['password'] = $group->password;
        }

        $group->update($request->all());

        return redirect('/teacher/groups');
    }


    public function destroy(Group $group)
    {
        $group->delete();
        return redirect('/teacher/groups');
    }

    //Student account access
    public function studentIndex(Request $request){
        $id = $request->session()->get('user_id');

        $groups = GroupStudent::where('group_id',$id)->get();
        $t_id = Group::where('group_id',$id)->value('t_id');
        $notices = Notice::where('t_id',$t_id)->orderBy('updated_at', 'desc')->paginate(5);

        $students=[];

        foreach($groups as $group){
            $studentInfo = Student::where('student_id',$group->student_id)->first();
            array_push($students, $studentInfo);
        }

        return view('group.index',['students'=>$students, 'notices'=>$notices]);
    }

    public function studentTasks(Request $request){
        $id = $request->session()->get('user_id');
        $group = Group::where('group_id',$id)->first();

        $tasks = Task::where('t_id',$group->t_id)->paginate(5);

        return view('group.tasks',['tasks'=>$tasks]);
    }

    public function studentTask($id ,Request $request){

        $group_id = $request->session()->get('user_id');
        $group = Group::where('group_id',$group_id)->first();
        $task = Task::where('id', $id)->where('t_id',$group->t_id)->first();
        $group_link = GroupLink::where(['group_id'=>$group_id,'task_id'=>$id])->value('link');

        return view('group.task',['task'=>$task, 'link'=>$group_link]);
    }

    public function studentTaskSubmit($id ,Request $request){

        $request->validate([
            'file'=>'max:10240'
        ]);

        if(!$request->link && !$request->file){
            $request->session()->flash('msg', "Insert File or URL Link.");
            return redirect('/student/task/'.$id);
        }

        $group_id = $request->session()->get('user_id');
        $group_link= GroupLink::where(['group_id'=>$group_id, 'task_id'=>$id])->first();

        if($request->file){

            $filename = $group_id."_task_id_".$id.".".$request->file('file')->getClientOriginalExtension();
            $request->file('file')->storeAs('public/upload/'.$group_id, $filename);

            if($group_link){
                GroupLink::where('id', $group_link->id)->update(['link'=>'upload/'.$group_id.'/'.$filename]);
            }
            else{
                GroupLink::create(['group_id'=>$group_id,'task_id'=>$id,'link'=>'upload/'.$group_id.'/'.$filename]);
            }
        }
        else if($request->link){

            if($group_link){
                GroupLink::where('id', $group_link->id)->update(['link'=> $request->link]);
            }
            else{
                GroupLink::create(['group_id'=>$group_id,'task_id'=>$id,'link'=>$request->link]);
            }
        }

        $request->session()->flash('success', "File Uploaded Successfully!!");
        return redirect('/student/task/'.$id);
    }

    public function studentResult(Request $request){
        $id = $request->session()->get('user_id');
        $groups = GroupStudent::where('group_id',$id)->get();

        $studentMarks=[];

        foreach($groups as $group){
            $mark = StudentMark::where('student_id',$group->student_id)->first();
            array_push($studentMarks, $mark);
        }

        // return $studentMarks;
        return view('group.result',['studentDetails'=>$studentMarks]);
    }

    public function studentChangePass(){
        return view('group.changePass');
    }

    public function studentPassUpdate(Request $request){

        $request->validate([
            'old_password'=>"required|min:4",
            'new_password'=>"required|min:4",
            'confirm_password'=>"required|min:4|same:new_password"
        ]);

        $id = $request->session()->get('user_id');
        $group = Group::where(['group_id'=>$id, 'password'=>$request->old_password])->first();

        if($group){
            Group::where('group_id',$id)->update(['password'=>$request->new_password]);
            $request->session()->flash('success', "Password Updated !!");
            return redirect('/student/change-password');
        }
        $request->session()->flash('msg', "Wrong Password Given!!");
        return redirect('/student/change-password');
    }
}
