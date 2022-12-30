<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\GroupLink;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        $id = $request->session()->get('user_id');
        $tasks = Task::where('t_id', $id)->paginate(5);
        return view('teacher.tasks',['tasks'=>$tasks]);
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        $id = $request->session()->get('user_id');

        $request->validate([
            'task_title'=>"required",
            'task_description'=>"required",
            'deadline'=>"required",
        ]);

        $teacher = Teacher::where('t_id', $id)->first();
        if(!$teacher->status){
            return back();
        }

        $request['t_id'] = $id;

        Task::create($request->all());
        return redirect('/teacher/tasks');
    }
    public function show(Task $task, Request $request)
    {
        $id = $request->session()->get('user_id');

        $tasks = Task::where('t_id', $id)->paginate(5);
        return view('teacher.taskEdit',['tasks'=>$tasks, 'task'=>$task]);
    }

    public function edit(Task $task)
    {
        //
    }
    public function update(Request $request, Task $task)
    {
        $request->validate([
            'task_title'=>"required",
            'task_description'=>"required",
            'deadline'=>"required",
        ]);

        $id = $request->session()->get('user_id');
        $teacher = Teacher::where('t_id', $id)->first();
        if(!$teacher->status){
            return back();
        }

        $task->update($request->all());
        return redirect('/teacher/tasks');
    }
    public function destroy(Task $task, Request $request)
    {
        $groupLinkExists = GroupLink::where('task_id',$task->id)->first();

        $id = $request->session()->get('user_id');
        $teacher = Teacher::where('t_id', $id)->first();
        if(!$teacher->status){
            return back();
        }

        if($groupLinkExists){
            $request->session()->flash('taskError', ['Group assignments exists under this task',$task->id]);
        }
        else{
            $task->delete();
        }
        return redirect('/teacher/tasks');
    }
}
