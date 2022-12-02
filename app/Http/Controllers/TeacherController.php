<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Login;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();
        return view('admin.teachers',["teachers"=>$teachers]);
    }

    public function create()
    {
        return view('admin.addTeacher');
    }

    public function store(Request $request)
    {
        $request->validate([
            't_id'=>"required",
            't_name'=>"required",
            'dept'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]);

        Teacher::create($request->all());
        Login::create([
            "user_id"=>$request->t_id,
            "password"=>$request->password,
            "role"=>"teacher"
        ]);
        return redirect('/admin/teacher');
    }

    public function show(Teacher $teacher, Request $request)
    {
        $teachers = Teacher::all();
        $request->session()->put('id', $teacher->id);
        return view("admin.editTeacher", ["teachers"=>$teachers, "teacher"=>$teacher]);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, Teacher $teacher)
    {
        $request->validate([
            't_id'=>"required",
            't_name'=>"required",
            'dept'=>"required",
            'email'=>"required",
        ]);

        $id = $request->session()->get('id');
        $request->session()->forget(['id']);

        $teacherOldDetails = DB::table('teachers')->find($id);
        $old_teacher_id = $teacherOldDetails->t_id;
        $login = DB::table('logins')->where('user_id',$old_teacher_id)->first();
        // dd($login);


        $pass = $request->password ;
        $cpass = $request->confirm_password;
        $new_teacher_id = $request->t_id;

        if($pass && ($pass == $cpass) ){

            $teacher->update($request->all());
            DB::table('logins')->where('id', $login->id)
            ->update(['password' => $pass]);

            if($old_teacher_id !== $new_teacher_id){
                DB::table('logins')->where('id', $login->id)
                ->update(['user_id' => $new_teacher_id]);
            }
        }
        else if(!$pass && !$cpass){
            $teacher->update($request->all());
            if($old_teacher_id !== $new_teacher_id){
                DB::table('logins')->where('id', $login->id)
                ->update(['user_id' => $new_teacher_id]);
            }
        }

        // $teacher->update($request->all());
        return redirect('/admin/teacher');
    }

    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        DB::table('logins')->where('user_id',$teacher->t_id)->delete();
        return redirect('/admin/teacher');
    }
}
