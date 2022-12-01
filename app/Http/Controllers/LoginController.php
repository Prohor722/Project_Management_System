<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;

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
		$validatedData = $req->validate([
			'user_id' => 'required|max:50',
			'password' => 'required'
		]);

		$user = DB::table('logins')->where('user_id', $req->user_id)
					->where('password', $req->password)
					->first();
		//dd($user);
		if($user)
		{
            $access = Hash::make($user->user_id."prohor_banik");
            session(["user_id"=>$user->user_id, "role"=>$user->role, "access_token"=>$access]);

			if($user->role == "admin")
			{
				return redirect()->route('admin.index');
            }
            elseif($user->role == "teacher")
            {
				return redirect()->route('teacher.index');
            }
            elseif($user->role == "student")
            {
				return redirect()->route('student.index');
            }
		}
		else
		{
			$req->session()->flash('msg', 'invalid username/password');
			return redirect()->route('login.index');
		}
	}

    public function logout(Request $request){
        $request->session()->flush();
        return redirect()->route('login.index');
    }
}
