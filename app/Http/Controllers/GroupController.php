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
}
