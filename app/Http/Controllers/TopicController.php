<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $id=$request->session()->get('user_id');
        $topics = Topic::where('t_id', $id)->get();
        return view('teacher.topic',['topics'=>$topics]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request['t_id']=$request->session()->get('user_id');

        $request->validate([
            'topic_id'=>"required|unique:topics",
            'topic_description'=>"required",
            't_id'=>"required"
        ]);


        Topic::create($request->all());
        return redirect('/teacher/topic');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function show(Topic $topic)
    {
        $topics = Topic::all();
        return view('teacher.topicEdit',['topics'=>$topics, 'topic'=>$topic]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Topic  $topic
     * @return \Illuminate\Http\Response
     */
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


        $request['t_id']=$request->session()->get('user_id');

        $topic->update($request->all());
        return redirect('/teacher/topic');
    }
    public function destroy(Topic $topic)
    {
        $topic->delete();
        return redirect('/teacher/topic');
    }
}
