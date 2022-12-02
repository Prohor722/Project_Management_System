<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GroupController extends Controller
{

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
            // 'group_status'=>'required',
            'group_password'=>'required',
        ]);

        $request['t_id']=$request->session()->get('user_id');

        // dd($request);

        // $request->group_status = ($request->group_status=="Active")? 1 : 0;

        // dd($request->group_status);
        Group::create($request->all());
        Login::create([
            "user_id"=>$request->group_id,
            "password"=>$request->group_password,
            "role"=>"student"
        ]);

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
        $request->validate([
            'group_id'=>"required",
            'topic_id'=>"required",
        ]);

        $id = $request->session()->get('id');
        $request->session()->forget(['id']);
        $groupOldDetails = DB::table('groups')->find($id);
        $old_group_id = $groupOldDetails->group_id;
        $login = DB::table('logins')->where('user_id',$old_group_id)->first();
        // dd($login);


        $pass = $request->group_password ;
        $cpass = $request->confirm_password;
        $new_group_id = $request->group_id;

        if($pass && ($pass == $cpass) ){

            $group->update($request->all());
            DB::table('logins')->where('id', $login->id)
            ->update(['password' => $pass]);

            if($old_group_id !== $new_group_id){
                DB::table('logins')->where('id', $login->id)
                ->update(['user_id' => $new_group_id]);
            }
        }
        else if(!$pass && !$cpass){
            $group->update($request->all());
            if($old_group_id !== $new_group_id){
                DB::table('logins')->where('id', $login->id)
                ->update(['user_id' => $new_group_id]);
            }
        }
        return redirect('/teacher/groups');
    }


    public function destroy(Group $group)
    {
        // dd($group->group_id);
        $group->delete();
        DB::table('logins')->where('user_id',$group->group_id)->delete();
        return redirect('/teacher/groups');
    }
}
