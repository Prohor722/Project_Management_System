<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function show()
    {
        $admin = Admin::get()->first();
        return view('admin.profile', ["admin"=>$admin]);
    }
    public function update(Request $request)
    {
        $id = $request->session()->get('user_id');

        $request->validate([
            'admin_id'=>'required',
            'email'=>"required|email",
            'password'=>"required|min:4",
            'update_password'=>"nullable|min:4"
        ]);

        $admin = Admin::where('admin_id', $id)
        ->where('password',$request->password)->first();

        if($request->update_password){
            $request['password'] = $request->update_password;
        }

        if($admin){
            unset($request['update_password'],$request['_method'],$request['_token']);
            Admin::where('admin_id', $id)->update($request->all());
            return redirect('admin/profile');
        }

        $request->session()->flash('msg', 'invalid username/password');
        return redirect('admin/profile');
    }
}
