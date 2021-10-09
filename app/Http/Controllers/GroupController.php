<?php

namespace App\Http\Controllers;

use App\GroupInformations;
use Illuminate\Http\Request;
use App\Models\Group;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\User;

class GroupController extends Controller
{
    //
    public function create()
    {
        $categories = Category::get();

        return view('groups.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $group = new Group;
        $group->name = $request->name;
        $group->information = $request->information;
        $group->category_id = $request->category_id;
        $group->master_id = Auth::id();

        $group->save();

        return redirect()->back()->with(['message' => '作成しました！']);
    }

    public function show($id)
    {
        $group = new Group;
        $group = Group::find($id);
        $groupId=$group->id;
        $categoryId = $group->category_id;
        $category = Category::find($categoryId);
        $userId = Auth::id();
        $user = User::find($userId);

        return view('groups.show', ['user' => $user, 'group' => $group, 'category' => $category]);
    }

    public function edit($id)
    {
        $group = Group::find($id);
        $categories = Category::get();
        return view('groups.edit', ['group' => $group], compact('categories'));
    }

    public function update(Request $request)
    {
        $groupId = $request->id;
        Group::find($groupId)->update([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'information' => $request->information
        ]);

        /*
        $group = new Group;
        $group->name=$request->name;
        $group->category_id=$request->category_id;
        $group->information=$request->information;
        $group->save();
        */

        return redirect()->back()->with(['message' => '変更しました！']);
    }

    public function entry($id)
    {
        $group = Group::find($id);
        $userId = Auth::id();
        $user = User::find($userId)->update([
            'group_id' => $group->id
        ]);

        return view('groups.entry', ['group' => $group, 'user' => $user]);
    }

    //サークルのお知らせに関する関数群

    public function info($id)
    {
        $group = Group::find($id);
        $infos = GroupInformations::all();
        return view('groups.info', ['infos' => $infos, 'group' => $group]);
    }

    public function infoCreate($id)
    {
        $group = Group::find($id);
        return view('groups.infoCreate', ['group' => $group]);
    }

    public function infoSend(Request $request, $id)
    {
        $info = new GroupInformations();
        $group = Group::find($id);
        $info->content = $request->content;
        $info->group_id = $group->id;

        $info->save();

        return redirect()->back()->with(['message' => '変更しました！']);
    }

    public function infoEdit($id)
    {
        $info = GroupInformations::find($id);
        return view('groups.infoEdit', ['info' => $info]);
    }

    public function infoUpdate(Request $request)
    {
        $infoId=$request->id;
        
        GroupInformations::find($infoId)->update([
            'content'=>$request->content
        ]);

        return redirect()->back()->with(['message' => '変更しました！']);
    }

    public function infoDestroy($id)
    {
        $info = GroupInformations::find($id);
        $info->delete();

        return redirect()->back()->with(['message' => '変更しました！']);
    }

    public function memberList($id){
        $users=User::where('group_id',$id)->get();
        $group=Group::find($id);

        return view('groups.list',['users'=>$users,'group'=>$group]);
    }

    public function memberDestroy($id){
        $user = User::find($id);
        $user->delete();

        return redirect()->back()->with(['message' => '変更しました！']);
    }
}
