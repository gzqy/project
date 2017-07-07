<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GuangGaoController extends Controller
{
    //
    public function gg(Request $request)
    {

    	$data=$request->except('_token');
   

		$res = \DB::table('ad') -> insert($data);

    	return view('admin.news.gg');

    	
    }


    public function list()
    {
    	$data = \DB::table('ad')->get();
    	return view('admin.news.lb',['data'=>$data]);
    }



    public function del($id)
    {

    	$dd= \DB::table('ad')->where('id',$id)->delete();

    	if($dd)
    	{
    		return redirect('/admin/gg/list')->with(['info'=>'删除成功']);
    	}else{
    		
    		return back()->with(['info'=>'删除失败']);
    	}	
    }


    public function xg()
    {
    	$data = \DB::table('ad')->get();
    	
    	return view('admin.news.xg',['data'=>$data]);	
    }


    public function doxg(Request $request)
    {

    	// dd($request);
    	
    	// $data = $_POST;
    	$data=$request->except('_token');
    	// dd($data);
    	
    	 if($request->hasFile('adlogo'))
        {
            if($request->file('adlogo')->isValid())
            {
                //获取扩展名
                $ext=$request->file('adlogo')->extension();

                //随机文件名
                $filename=time().mt_rand(10000,99999).'.'.$ext;

                $request->file('adlogo')->move('./uploads/avatar',$filename);
                
               

                //添加data数据
                $data['adlogo']=$filename;
            }
        }
       
    	$res = \DB::table('ad')->update($data);
    	 if($res){
           return redirect('admin/pz');
        }else{
            return back();
        }
    }
}
