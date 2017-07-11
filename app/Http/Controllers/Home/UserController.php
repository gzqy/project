<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    // 基本信息修改
    public function index()
    {	
    	$id = session('master')->id;
    	$data= \DB::table('users')->join('userd', 'users.id', '=', 'userd.uid')->where('users.id',$id)->first();

    	  
    	return view('home.user.index',['data'=>$data]);
    }


    public function update(Request $request)
    {
    	
    	$data=$request->except('_token');
        //查询老图片
       $oldAvatar= \DB::table('users')->where('id',session('master')->id)->first()->avatar;
       // dd($oldAvatar);
        if($request->hasFile('avatar'))
        {
            if($request->file('avatar')->isValid())
            {
                //获取扩展名
                $ext=$request->file('avatar')->extension();

                //随机文件名
                $filename=time().mt_rand(10000,99999).'.'.$ext;

                $request->file('avatar')->move('./uploads/avatar',$filename);
                
                //删除老图片
                if(file_exists('./uploads/avatar/'.$oldAvatar) && $oldAvatar!='default.jpg')
                {
                        unlink('./uploads/avatar/'.$oldAvatar);
                }

                //添加data数据
                $data['avatar']=$filename;
            }
        }
        //处理更新时间字段
        $data['updated_at']=date('Y-m-d H:i:s');
        // dd($data);
        $res=\DB::table('users')->where('id',session('master')->id)->update($data);
        if($res){
            return redirect('/home/user/index')->with(['info'=>'更新成功']);
        }else{
            return back();
        }
     
    }




    //用户细节表
    public function dndex ()
    {
    	$id = session('master')->id;
    	$data= \DB::table('users')->join('userd', 'users.id', '=', 'userd.uid')->where('users.id',$id)->first();
    	return view('home.user.detail',['data'=>$data]);

    }

    public function dupdate(Request $request)
    {
    	
    	$data=$request->except('_token');
       
       
        
        $res=\DB::table('userd')->where('uid',session('master')->id)->update($data);
        if($res){
            return redirect('/home/user/detail')->with(['info'=>'更新成功']);
        }else{
            return back();
        }
     
    }



    

}
