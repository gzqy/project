<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class PeiZhiController extends Controller
{
    //网站配置
    public  function pz()
    {
    	$data = \DB::table('config')->get();
    	return view('admin.peizhi.pz',['data'=>$data]);
    }


    public function xg()
    {	

    	$data = \DB::table('config')->get();
    	return view('admin.peizhi.xg',['data'=>$data]);


    	
    }
     public function doxg(Request $request)
    {	
    	
    	$data=$request->except('_token');
    	
    	 if($request->hasFile('logo'))
        {
            if($request->file('logo')->isValid())
            {
                //获取扩展名
                $ext=$request->file('logo')->extension();

                //随机文件名
                $filename=time().mt_rand(10000,99999).'.'.$ext;

                $request->file('logo')->move('./uploads/avatar',$filename);
                
               

                //添加data数据
                $data['logo']=$filename;
            }
        }
       
    	$res = \DB::table('config')->where('id',1)->update($data);
    	 if($res){
           return redirect('admin/pz');
        }else{
            return back();
        }
    	


    	
    }
}
