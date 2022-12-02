<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        $id = $request->session()->get('user_id');
        $tasks = Task::where('t_id',$id)->get();
        return view('teacher.tasks',['tasks'=>$tasks]);
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        $request['t_id']=$request->session()->get('user_id');

        $request->validate([
            'task_title'=>"required",
            'task_description'=>"required",
            't_id'=>"required",
            'course_code'=>"required",
            'deadline'=>"required",
        ]);

        Task::create($request->all());
        return redirect('/teacher/tasks');
    }
    public function show(Task $task)
    {
        $tasks = Task::all();
        return view('teacher.taskEdit',['tasks'=>$tasks, 'task'=>$task]);
    }

    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        $request['t_id']=$request->session()->get('user_id');

        $request->validate([
            'topic_id'=>'required',
            'topic_description'=>'required',
            't_id'=>'required'
        ]);

        $task->update($request->all());
        return redirect('/teacher/tasks');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect('/teacher/tasks');
    }
}
