<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    
    public function login()
    {
    	return view('home.login.login');
    }

     public function dologin(Request $request)
    {
    	$data = $request->except("_token");

    	//验证码是否正确
    	$code = session('code');
    	if($code != $data['code'])
    	{
    		return back()->with(['info'=>'验证码错误']);
    	}

    	//查询用户
    	$user=\DB::table('users')->where('name',$data['name'])->first();

    	//判断
    	if(!$user)
    	{
    		return back()->with(['info'=>'该管理员不存在']);
    	}

    	//密码
    	$password =  $user->password;
    	
    	if($password != $data['password'])
    	{
    		return back()->with(['info'=>'用户名或密码错误']);
    	}

    	//将用户数据存入session
    	session(['master'=>$user]);

    	//跳转后台主页
    	return redirect('/home/index')->with(['info'=>'登录成功']);	
    

  

    }

    //退出
    public function logout(Request $request)
    {
    	$request->session()->forget('master');

    	return redirect('/home/login')->with(['info'=>'退出成功']);
    }
}
