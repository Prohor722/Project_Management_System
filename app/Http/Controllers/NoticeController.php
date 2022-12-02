<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function index(Request $request)
    {
        $id = $request->session()->get('user_id');
        $notices = Notice::where('t_id',$id)->get();
        return view('teacher.notice',['notices'=>$notices]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request['t_id']=$request->session()->get('user_id');

        $request->validate([
            'notice_description'=>'required',
            't_id'=>'required',
            'course_code'=>'required',
            'deadline'=>'required',
        ]);

        Notice::create($request->all());
        return redirect('/teacher/notice');
    }

    public function show(Notice $notice)
    {
        $notices= Notice::all();
        return view('teacher.noticeEdit',['notices'=>$notices, 'notice'=>$notice]);
    }
    public function edit(Notice $notice)
    {
        //
    }
    public function update(Request $request, Notice $notice)
    {
        $request['t_id']=$request->session()->get('user_id');

        $request->validate([
            'notice_descprition'=>'required',
            't_id'=>'required',
            'course_code'=>'required',
            'deadline'=>'required',
        ]);

        $notice->update($request->all());
        return redirect('/teacher/notice');
    }

    public function destroy(Notice $notice)
    {
        $notice->delete();
        return redirect('/teacher/notice');
    }
}
