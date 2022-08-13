<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Login;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups = Group::all();
        return view('teacher/groups',["groups"=>$groups]);
    }

    public function create()
    {
        return "create";
    }

    public function store(Request $request)
    {
        request()->validate([
           'group_id'=>'required',
            'topic_id'=>'required',
            't_id'=>'required',
            'group_status'=>'required',
            'group_password'=>'required',
        ]);

        Group::create($request->all());
        Login::create([
            "user_id"=>$request->group_id,
            "password"=>$request->group_password,
            "role"=>"student"
        ]);

        return redirect('/teacher/groups');
    }

    public function show(Group $group)
    {
        $groups = Group::all();
        return view('teacher.groupEdit',["groups"=>$groups, 'group'=>$group]);
    }

    public function edit(Group $group)
    {
        return "edit";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Group $group)
    {
        $request->validate([
            'group_id'=>"required",
            't_id'=>"required",
            'topic_id'=>"required",
            "group_status"=>"required"
        ]);
        if($request->group_password === $request->confirm_password){
            $group->update($request->all());
        }
        return redirect('/teacher/groups');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function destroy(Group $group)
    {
        $group->delete();
        return redirect('/teacher/groups');
    }
}
