<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use Illuminate\Support\Facades\Auth; 
use App\Models\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function index()
    {
        return view('welcome');
    }

    public function home()
    {
        $groups= Group::all();
        $userId=Auth::id();
        return view('home',['groups'=>$groups],compact('userId'));
    }

    public function about(){
        return view('about');
    }
}
