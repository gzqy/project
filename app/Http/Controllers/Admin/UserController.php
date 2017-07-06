<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //
    public function add()
    {
    	return view('admin.user.add');
    }
    public function insert(Request $request)

    {       

    {

    	$this->validate($request, [
        'name' => 'required|unique:users|max:18|min:6',
        'email'=>'email|unique:users',
        'password'=>'required',
        're_password'=>'required|same:password',
        'avatar'=>'required|image'
    ],[
    	'name.required'=>"用户名不能为空",
    	'name.min'=>'用户名已经存在',
    	'name.max'=>'用户名不能超过18个字符',
    	'name.min'=>'最少6个字符用户名'	,
    	'email.email'=>'请输入正确的邮箱,推荐使用新浪邮箱',
    	'email.unique'=>'邮箱已存在',

    	'password.required'=>'密码不能空',
    	're_password'=>'确认密码不能为空',
    	're_password.same'=>'确认密码不一致',
    	'avatar.image'=>'您上传的不是一张图片',
    	 'avatar.required'=>'您没有上传图片',
    ]);
    	$data=$request->except('_token','re_password');
    	//dd($data);

    	//处理图片
    	if($request->hasFile('avatar'))
    	{
    		if($request->file('avatar')->isValid())
    		{
    			//获取扩展名
    			$ext=$request->file('avatar')->extension();

    			//随机文件名
    			$filename=time().mt_rand(10000,99999).'.'.$ext;

    			$request->file('avatar')->move('./uploads/avatar',$filename);
    		
    			//添加data数据
    			$data['avatar']=$filename;
    		}
    	}
    	//处理token
    	$data['remember_token']=str_random(50);

    	//处理事件
    	$time=date('Y-m-d H:m:s');
    	$data['created_at']=$time;
    	$data['updated_at']=$time;
    	//dd($data);
    
    	

    	 }



        //执行添加
    	$res=\DB::table('users')->insert($data);
        if($res)
        {
            return back();
        }else
        {
            return back()->with(['info'=>'添加失败']);
        }
    }

    public function index(Request $request)
    {
        //dd($request->all());
        $num=$request->input('num',10);
        $keywords=$request->input('keywords','');
        //return '用户列表';
        //查询数据库
        $data=\DB::table('users')->where('name','like','%'.$keywords.'%')->paginate($num);
        //dd($data);
        return view('admin.user.index',['request'=>$request->all(),'title'=>'用户列表','data'=>$data]);
    }
    //edit
    public function edit($id){
       $data= \DB::table('users')->where('id',$id)->first();
        return view('admin.user.edit',['title'=>'用户编辑','data'=>$data]);
    }
    public function update(Request $request)
    {
        $data=$request->except('_token');
        //查询老图片
       $oldAvatar= \DB::table('users')->where('id',$request->id)->first()->avatar;
       // dd($user);
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

        $res=\DB::table('users')->where('id',$request->id)->update($data);
        if($res){
            return redirect('/admin/user/index')->with(['info'=>'更新成功']);
        }else{
            return back();
        }
    }
    public function delete($id){
        $res=\DB::table('users')->where('id',$id)->delete();
        if($res){
            return redirect('/admin/user/index')->with(['info'=>'删除成功']);
        }else{ 
            return back();
        }
    }
    //ajax方法
    public function ajaxRename(Request $request)
    {
        //dd($request->all());
        $res=\DB::table('users')->where('name',$request->input('name'))->first();
        if($res){
            return response()->json('0');
        }else{
            $res=\DB::table('users')->where('id',$request->input('id'))->update(['name'=>$request->input('name')]);
            if($res)
            {
                return response()->json('1');
            }else{
                return response()->json('2');
            }
        }
    }

}
