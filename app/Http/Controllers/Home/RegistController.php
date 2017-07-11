<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegistController extends Controller
{
    //
    public function regist()
    {
    	return view('home.login.regist');
    }

    //登录方法
    public function doregist(Request $request)
    {       

    {

    	$this->validate($request, [
        'name' => 'required|unique:users|max:18|min:3',
        'email'=>'email|unique:users',
        'password'=>'required',
        're_password'=>'required|same:password',
        
    ],[
    	'name.required'=>"用户名不能为空",
    	'name.min'=>'用户名已经存在',
    	'email.required'=>"请填写正确的邮箱格式",
    	'name.max'=>'用户名不能超过18个字符',
    	'name.min'=>'最少3个字符用户名'	,
    	'password.required'=>'密码不能空',
    	're_password'=>'确认密码不能为空',
    ]);
    	$data=$request->except('_token','re_password');
    	//dd($data);

    	//处理token
    	$data['remember_token']=str_random(50);
    	//处理事件
    	$time=date('Y-m-d H:m:s');
    	$data['created_at']=$time;
    	$data['updated_at']=$time;
    	

    	 }
		
        //执行添加
    	$id=\DB::table('users')->insertGetId($data);
        $resd=\DB::table('userd')->insert(['uid' => $id]);


        if($id)
        {
            return back();
        }else
        {
            return back()->with(['info'=>'添加失败']);
        }
    }

}
