<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class sendController extends Controller
{
    //
    public function index(Request $request)
    {
    	$data = $request->except('_token');
    	$data['uid'] = session('master')->id;
    	$data['name'] = session('master')->name;
    	// dd($data);
    	$res = \DB::table('pm') -> insert($data);
    	if($res)
    	{
    		return back()->with(['info'=>'发送成功']);
    	}else{
    		
    		return back()->with(['info'=>'删除失败']);
    	}	
    }

    //私信列表
    public function plist()
    {	
    	//查询当前用户的私信
    	$data = \DB::table('pm') ->where('fid',session('master')->id) -> get();
    	// dd($data);
    	
    		return view('home.pm.list',['data'=>$data]);
    	
    }

    //私信删除
    public function delpm($id)
    {	
    	//查询当前用户的私信
    	$data = \DB::table('pm') ->where('id',$id) ->delete();
    	// dd($data);
    	return redirect('/home/pmlist')->with(['info'=>'删除成功']);
    	
    	
    }


}
