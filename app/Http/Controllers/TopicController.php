<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use App\Models\Teacher;
use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class TopicController extends Controller
{
    public function index(Request $request)
    {
        $id=$request->session()->get('user_id');
        $topics = Topic::where('t_id', $id)->paginate(5);
        return view('teacher.topic',['topics'=>$topics]);
    }

    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        $id = $request->session()->get('user_id');
        $request['t_id']=$id;

        $request->validate([
            'topic_id'=>"required|unique:topics",
            'topic_description'=>"required",
            't_id'=>"required"
        ]);

        $teacher = Teacher::where('t_id', $id)->first();
        if(!$teacher->status){
            return back();
        }

        Topic::create($request->all());
        return redirect('/teacher/topic');
    }

    public function show(Topic $topic, Request $request)
    {
        $id = $request['t_id']=$request->session()->get('user_id');

        $topics = Topic::where('t_id', $id)->paginate(5);
        return view('teacher.topicEdit',['topics'=>$topics, 'topic'=>$topic]);
    }
    public function edit(Topic $topic)
    {
        //
    }
    public function update(Request $request, Topic $topic)
    {
        $request->validate([
            'topic_id'=>['required',
            Rule::unique('topics')->ignore($topic->id)
        ],
            'topic_description'=>'required',
        ]);


        $id = $request->session()->get('user_id');
        $request['t_id']=$id;

        $teacher = Teacher::where('t_id', $id)->first();
        if(!$teacher->status){
            return back();
        }

        $topic->update($request->all());
        return redirect('/teacher/topic');
    }
    public function destroy(Topic $topic, Request $request)
    {
        $groupExists = Group::where('topic_id',$topic->topic_id)->first();

        $id = $request->session()->get('user_id');
        $teacher = Teacher::where('t_id', $id)->first();
        if(!$teacher->status){
            return back();
        }

        if($groupExists){
            $request->session()->flash('topicError', ['Group exists under this Topic',$topic->topic_id]);
        }
        else{
            $topic->delete();
        }
        return redirect('/teacher/topic');
    }
}
