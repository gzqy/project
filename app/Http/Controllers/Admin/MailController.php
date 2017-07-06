<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MailController extends Controller
{
	public function send()
	{
	    // //发送邮件
	    // \Mail::raw('这是一封邮件', function($message){
	    // 	$message->to('ymob@qq.com');
	    // 	$message->subject('这是邮件标题');
	    // });

	    //带有模板的邮件
	    \Mail::send('mail.test',[],function($message){
	    	$message->to('1352411768@qq.com');
	    	$message->subject('这是邮件标题');
	    })

	   
    }

}
