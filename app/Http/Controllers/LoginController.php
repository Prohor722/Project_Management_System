<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;


class LoginController extends Controller
{
    public function index()
    {
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
            session(["user_id"=>$user->user_id, "role"=>$user->role]);

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
