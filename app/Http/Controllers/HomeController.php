<?php

namespace App\Http\Controllers;

use App\Animal_record;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }
    public function analyticsView(){
        return view('analytics');
    }
    public function home(Request $request){
        $as=$request->user()->id;
        $count=Animal_record::query()->where('user_id','=',$as)->count();
        return view('home',['count'=>$count]);
    }
}
