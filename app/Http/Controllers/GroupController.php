<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use Illuminate\Support\Facades\Auth; 
use App\Models\Category;

class GroupController extends Controller
{
    //
    public function create()
    {
        $categories=Category::get();

        return view ('groups.create',compact('categories'));
    }

    public function store(Request $request)
    {
        $group = new Group;
        $group->name = $request->name;
        $group->infomation = $request->information;
        $group->category_id = $request->category_id;
        $group->master_id = Auth::id();

        $group->save();

        return redirect()->back()->with(['message' => '作成しました！']);
    }

    public function show($id){
        $group=Group::find($id);
        $category_id=$group->category_id
        $category=Category::find($category_id);
        return view('groups.show',['group'=>$group],['category'=>$category]);

    }

    public function edit($id){
        $group=Group::find($id);
        return view('groups.edit',['group'=>$group]);
    }

    public function update(Request $request){
        $group = Auth::user();
        $group->name=$request->name;
        $group->category_id=$request->category_id;
        $group->master_id=$request->master_id;
        $group->information=$request->information;
        $group->name=$request->name;
    }
}
