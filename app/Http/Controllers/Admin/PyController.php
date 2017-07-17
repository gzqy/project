<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PyController extends Controller
{
    //友情链接
     public function insert(Request $request)
    {

    	$data=$request->except('_token');
  		
		$res = \DB::table('fri') -> insert($data);

    	return view('admin.py.py');

    	
    }



    //友情链接列表
    public function list()
    {

    	$data = \DB::table('fri')->get();

    	return view('admin.py.list',['title'=>'友情链接修改','data'=>$data]);
    }



    //友情链接删除
      public function del($id)
    {

    	$dd= \DB::table('fri')->where('id',$id)->delete();

    	if($dd)
    	{
    		return redirect('/admin/py/list')->with(['info'=>'删除成功']);
    	}else{
    		
    		return back()->with(['info'=>'删除失败']);
    	}	
    }


    //友情链接修改
     public function xg($id){

       $data= \DB::table('fri')->where('id',$id)->first();


        return view('admin.py.xg',['title'=>'友情链接修改','data'=>$data]);
    }


    public function doxg(Request $request,$id)
    {	

    	$data = $request->except('_token');


    	$res = \DB::table('fri')->update($data);

    	if($res)
    	{
    		return redirect('/admin/py/list');
    	}else{
    		return back();
    	}
    	
    }


}
