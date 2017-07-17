<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SPController extends Controller
{
    //添加商品页

    public function insert(Request $request)
    {


    	return view('admin.sp.sp');
    }

    public function doinsert(Request $request)
    {
        $data=$request->except('_token');
        //dd($data);
        //处理图片
        if($request->hasFile('pricute'))
        {
            if($request->file('pricute')->isValid())
            {
                //获取扩展名
                $ext=$request->file('pricute')->extension();

                //随机文件名
                $filename=time().mt_rand(10000,99999).'.'.$ext;

                $request->file('pricute')->move('./uploads/pricute',$filename);
            
                //添加data数据
                $data['pricute']=$filename;
            }
        }
        // dd($data);
          //执行添加
        $res=\DB::table('soll')->insert($data);

        if($res)
        {
            return back();
        }else
        {
            return back()->with(['info'=>'添加失败']);
        }
    }
   

    public function list()
    {

    	$dd = \DB::table('soll')->get();

    	return view('admin.sp.list',['dd'=>$dd]);

   }



 
    public function del($id)
    {

    	$cc= \DB::table('soll')->where('id',$id)->delete();

    	if($cc)
    	{
    		return redirect('/admin/sp/list')->with(['info'=>'下架成功']);
    	}else{
    		
    		return back()->with(['info'=>'下架失败']);
    	}	
    }
}
