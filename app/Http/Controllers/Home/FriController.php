<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FriController extends Controller
{
    //好友添加页
    public  function index()
    {
    	return view('home.friend.index');
    }
    //添加提示
    public function dofr(Request $request)
    {
    	$data=$request->except('_token');
    	// dd($data['name']);
    	//查找用户id
    	$res=\DB::table('users')->where('name',$data['name'])->first();
    	// dd($res->id);

    	// 判断用户存在
        if(!$res)
        {
            return back() -> with(['info' => '用户不存在']);
        }


        $id = session('master')->id;

        // dd($id);
        $da = [];
        $da['uid'] = $id;
        $da['frid'] = $res->id;

        // dd($da);
        $resd = \DB::table('frd') -> insert($da);

        //判断处理结果
         if($resd)
        {
            return redirect('/home/flist') -> with(['info' => '添加成功']);
        }else{
        	return back() -> with(['info' => '无法添加用户']);
        }

    }

    //好友列表页
    public function flist()
    {	
    	$data = \DB::table('frd') ->join('users', 'users.id', '=', 'frd.frid')->select('users.name','frd.id','frd.isf')-> where([['frd.uid',session('master')->id],['frd.isf','1']]) ->get();

    	// dd($data);

    	return view('home.friend.list',['data'=>$data]);
    }


    //删除好友 
    public function del($id)
    {

        $res = \DB::table('frd')->where('id',$id)->delete();

        if($res){
            return redirect('/home/flist')->with(['info'=>'删除成功']);
        }else{ 
            return back();
        }
    
    }
    //确认添加
    public function add($id)
    {	
    	$res=\DB::table('frd')->where('id',$id)->update(['isf'=>2]);
    	return redirect('/home/flist');
    }

    //好友列表
	public function slist()
	{
        
	$data = \DB::table('frd') ->join('users', 'users.id', '=', 'frd.frid')->select('users.name','users.id','frd.isf')-> where([['frd.uid',session('master')->id],['frd.isf','2']]) ->get();
	
	return view('home.friend.slist',['data'=>$data]);	
	}    



}
