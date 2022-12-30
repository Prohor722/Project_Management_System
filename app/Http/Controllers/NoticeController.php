<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use App\Models\Teacher;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function index(Request $request)
    {
        $id = $request->session()->get('user_id');
        $notices = Notice::where('t_id',$id)->orderBy('updated_at', 'desc')->paginate(5);
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
        ]);

        $id = $request->session()->get('user_id');
        $teacher = Teacher::where('t_id', $id)->first();
        if(!$teacher->status){
            return back();
        }

        Notice::create($request->all());
        return redirect('/teacher/notice');
    }

    public function show(Notice $notice, Request $request)
    {
        $id = $request->session()->get('user_id');
        $notices= Notice::where('t_id',$id)->orderBy('updated_at', 'desc')->paginate(5);
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
            'notice_description'=>'required',
            't_id'=>'required'
        ]);

        $id = $request->session()->get('user_id');
        $teacher = Teacher::where('t_id', $id)->first();
        if(!$teacher->status){
            return back();
        }

        $notice->update($request->all());
        return redirect('/teacher/notice');
    }

    public function destroy(Notice $notice, Request $request)
    {
        $id = $request->session()->get('user_id');
        $teacher = Teacher::where('t_id', $id)->first();
        if(!$teacher->status){
            return back();
        }
        $notice->delete();
        return redirect('/teacher/notice');
    }
}
