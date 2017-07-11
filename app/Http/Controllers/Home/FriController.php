<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FriController extends Controller
{
    //
    public  function index()
    {
    	return view('home.friend.index');
    }

    public function dofr(Request $request)
    {
    	$data=$request->except('_token');
    	// dd($data['name']);
    	//执行添加用户
    	$res=\DB::table('users')->where('name',$data['name'])->first();
    	dd($res);
    }
}
