<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TieziController extends Controller
{	
	//引入发帖页面的方法
    public function index()
    {
    	return view('home.tiezi.fatie');
    }

    //进入帖子列表页的方法
    public function liebiao()
    {
    	return view('home.tiezi.liebiao');
    }

    //用户添加帖子的方法
    public function insert(Request $request)
    {
    	return "进入添加帖子的方法";
    }


    public static $filename;
    public function chuantu(Request $request)
    {
        
        if($request->file('pic'))
        {
            //获取扩展名
            $ext=$request->file('pic')->extension();

            //随机文件名
            $filename=time().mt_rand(10000,99999).'.'.$ext;

            //将上传的文件移动到public下的/uploads/pic目录中,
            $request->file('pic')->move('./uploads/pic',$filename);
        
        }
        // dd($filename);

        // dd($filename);
        return back()->with(['code' => 1, 'pic' => $filename]);
    }
  





}
