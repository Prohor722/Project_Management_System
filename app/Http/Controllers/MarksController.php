<?php

namespace App\Http\Controllers;

use App\Models\Marks;
use Illuminate\Http\Request;

class MarksController extends Controller
{

    public function index()
    {
        $marks = Marks::get()->first();

        if(!$marks){
            $data = ["po1"=>0,"po2"=>0,"po3"=>0,"po4"=>0,
                "po5"=>0,"po6"=>0,"po7"=>0,"po8"=>0,"po9"=>0,
                "po10"=>0,"po11"=>0,"po12"=>0];
            Marks::create($data);
            $marks = Marks::get()->first();
        }
        return view('admin.marks',['marks'=>$marks]);
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'po1'=>"required|max:2|gte:0",
            'po2'=>"required|max:2|gte:0",
            'po3'=>"required|max:2|gte:0",
            'po4'=>"required|max:2|gte:0",
            'po5'=>"required|max:2|gte:0",
            'po6'=>"required|max:2|gte:0",
            'po7'=>"required|max:2|gte:0",
            'po8'=>"required|max:2|gte:0",
            'po9'=>"required|max:2|gte:0",
            'po10'=>"required|max:2|gte:0",
            'po11'=>"required|max:2|gte:0",
            'po12'=>"required|max:2|gte:0",
        ]);
        unset($request['_token'],$request['_method']);
        Marks::where('id', $id)->update($request->all());

        return redirect('/admin/marks');
    }
}
