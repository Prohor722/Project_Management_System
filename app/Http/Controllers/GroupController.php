<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class GroupController extends Controller
{

    public function index(Request $request)
    {
        $id = $request->session()->get('user_id');

        $groups = Group::where('t_id', $id)->get();
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
        $groups = Group::all();
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
}
