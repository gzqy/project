<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProController extends Controller
{
	public function index(){
	//查询数据库
	$data=\DB::table('report')->get();
	// dd($data);
	return view('admin.pro.index',['data'=>$data]);

	}

	//删除处理
	public function del($id)
    {

    	$data= \DB::table('report')->where('id',$id)->delete();

    	if($data)
    	{
    		return redirect('/admin/pro')->with(['info'=>'删除成功']);
    	}else{
    		
    		return back()->with(['info'=>'删除失败']);
    	}	
    }
}
