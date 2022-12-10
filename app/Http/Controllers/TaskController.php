<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\GroupLink;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        $id = $request->session()->get('user_id');
        $tasks = Task::paginate(5);
        return view('teacher.tasks',['tasks'=>$tasks]);
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {

        $request->validate([
            'task_title'=>"required",
            'task_description'=>"required",
            'deadline'=>"required",
        ]);

        Task::create($request->all());
        return redirect('/teacher/tasks');
    }
    public function show(Task $task)
    {
        $tasks = Task::paginate(5);
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

        $task->update($request->all());
        return redirect('/teacher/tasks');
    }
    public function destroy(Task $task)
    {
        $groupLinkExists = GroupLink::where('task_id',$task->id)->first();

        if($groupLinkExists){
            $request->session()->flash('taskError', ['Group assignments exists under this task',$task->id]);
        }
        else{
            $task->delete();
        }
        return redirect('/teacher/tasks');
    }
}
