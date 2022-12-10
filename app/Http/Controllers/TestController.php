<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\Group;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // dd(Crypt::encryptString("abcd"));
        $a = "test";
        $b = "_check";
        $value = Hash::make($a.$b);
        // dd(Hash::check("test_check", $value));

        // dd($request->session()->has('role'));
        // dd($request->session()->get('ambala'));

        // return $request->session()->get('role')? "ace": "nai";
        // session(["test_check"=>$value]);

        return $request->session()->all();
    }

    public function abc(){
        // $group = DB::table('groups')->where('group_id','gp1')->first();
        $group = Group::where('group_id','GP-001')->first();
        $group_students = $group->group_students;
        // dd($group_students);

        $id = Group::where('group_id','gp1')->with('group_students')->get();
        return $group_students;
    }
    public function create(){    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
