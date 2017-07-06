<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ForgotController extends Controller
{
    //
    public function forgot()
    {
   		return view('admin.forgot.forgot');
    }

    public function sendEmail(Request $request)
    {
    	$data = $request->except('_token');

    	$res = \DB::table('users')->where('email',$data['email'])->first();

    	if(!$res){
    		return back()->with(['info' =>'邮箱不存在']);
    	}

    	  //带有模板的邮件
	    \Mail::send('mails.reset',['res'=>$res],function($message) use($data){
	    	$message->to($data['email']);
	    	$message->subject('这是邮件标题');
	    });
        
        //处理邮箱
        $mail = strstr($data['email'],"@");
        $mail = ltrim($mail,'@');
        return view('admin.forgot.success',['mail' =>$mail]);

    }

    public function link($token)
    {
    	$res = \DB::table('users')->where('remember_token',$token)->first();
   		if ($res) {
   				return redirect('/admin/newpass/'.$res->id);
   		}else{
   			return redirect('/admin/info')->with(['info'=>'非法路径']);
   		}
    }

    //info
    public function info()
    {
    	return view('admin.forgot.info');
    }

    //newpass
    public function newpass($id)
    {
    	return view('admin.forgot.newpass',['id' => $id ]);
    }

    //update
    public function updatepass(Request $request)
    {
    	$this->validate($request, [
    		'repassword' => 'same:password',
    		],[
    		'repassword.same' =>'密码不一样',
    		]);
    	$id = $request->input('id');
    	$password = $request->input('password');
    	$res = \DB::table('users')->where('id',$id)->update(['password' => $password]);
    
    	if ($res) {
    		return redirect('/admin/login')->with(['info'=>'请登录']);
    	}else
    	{
    		return redirect('/admin/info')->with(['info'=>'修改失败']);
    	}

    } 
}
