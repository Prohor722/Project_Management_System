<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->session()->all();

        // dd(Arr::exists($user, 'role'));

        if(Arr::exists($user, 'user_id') && Arr::exists($user, 'role')){

            if($user['role'] == "admin")
                {
                    return redirect()->route('admin.index');
                }
            elseif($user['role'] == "teacher")
                {
                    return redirect()->route('teacher.index');
                }
            elseif($user['role'] == "student")
                {
                    return redirect()->route('student.index');
                }
        }

        return view('index');
    }
    public function verify(Request $req)
	{
        $role = $req->role;
		$validatedData = $req->validate([
			'user_id' => 'required|max:20',
			'password' => 'required|min:4',
			'role' => 'required',
		]);

		//dd($user);
		if($role == 'admin'){
            $user = DB::table('admins')->where('admin_id', $req->user_id)
                        ->where('password', $req->password)
                        ->first();
            if($user && $user->admin_id == $req->user_id){
                $access = Hash::make($user->admin_id.$role."prohor_banik");
                session(["user_id"=>$user->admin_id, "role"=>$role, "access_token"=>$access]);

                return redirect()->route('admin.index');
            }
        }
        else if($role == 'teacher'){
            $user = DB::table('teachers')->where('t_id', $req->user_id)
                        ->where('password', $req->password)
                        ->first();
            if($user && $user->t_id == $req->user_id){
                $access = Hash::make($user->t_id.$role."prohor_banik");
                session(["user_id"=>$user->t_id, "role"=>$role, "access_token"=>$access]);

                return redirect('/teacher/groups');
            }
        }
        else if($role == 'student'){
            $user = DB::table('groups')->where('group_id', $req->user_id)
                        ->where('password', $req->password)
                        ->first();
            if($user && $user->student_id == $req->user_id){
                $access = Hash::make($user->student_id.$role."prohor_banik");
                session(["user_id"=>$user->student_id, "role"=>$role, "access_token"=>$access]);

                return redirect()->route('group.index');
            }
        }
		$req->session()->flash('msg', 'invalid username/password');
		return redirect()->route('login.index');
	}

    public function logout(Request $request){
        $request->session()->flush();
        return redirect()->route('login.index');
    }

    public function admin(){
        $data = DB::table('admins')->get()->first();

        // return $data;
        if(!$data){
            Admin::create(["admin_id"=>"admin","password"=>"1234","email"=>"admin"]);
        }
        return redirect('/');;
    }
}
