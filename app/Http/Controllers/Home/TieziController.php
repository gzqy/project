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
        $data = \DB::table('post')->get();
    	return view('home.tiezi.liebiao');
    }

    //用户添加帖子的方法
    public function insert(Request $request)
    {
        //发帖所需要的字段,id,发帖人id,板块id,头图,title标题,content内容,发帖时间
        //发帖的逻辑

        ///1判断用户的登录状态
        $arr=[];
        $arr=$request->except('_token','re_password');
        $filename = $arr['headimg'];
        // $num = mt_rand(10000,99999);
        // $filename = $num.$filename;
        $arr['headimg']= $filename;
         
        $time=date('Y-m-d H:m:s');
        $arr['ctime']= $time ;
        $str = $arr['content'];
        $str= strip_tags($str);

        $arr['content']=$str;

        $id=\DB::table('post')->insertGetId($arr);
        $data = \DB::table('post')->get();

        return view('home.tiezi.liebiao',['data' => $data]);
    
       
       
        //2判断用户的状态是否为禁用,禁用则不能发帖

    }


    // public $filename;
    public function chuantu(Request $request)
    {
        
        if($request->file('pic'))
        {
            //获取扩展名
            $ext=$request->file('pic')->extension();
            $num=mt_rand(10000,99999);
            //随机文件名
            $filename=$num.time().'.'.$ext;
          
            //将用户数据存入session
            

            //将上传的文件移动到public下的/uploads/pic目录中,
            $request->file('pic')->move('./uploads/pic',$filename);


                
        
        }
        return back()->with(['code' => 1, 'pic' => $filename,'cpic' => $filename]);
    }
  





}
