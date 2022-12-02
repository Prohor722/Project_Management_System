<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Login;

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

    public function show(Teacher $teacher)
    {
        $teachers = Teacher::all();
        return view("admin.editTeacher", ["teachers"=>$teachers, "teacher"=>$teacher]);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, Teacher $teacher)
    {
        $teacher->update($request->all());
        return redirect('/admin/teacher');
    }

    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        DB::table('logins')->where('user_id',$teacher->t_id)->delete();
        return redirect('/admin/teacher');
    }
}
