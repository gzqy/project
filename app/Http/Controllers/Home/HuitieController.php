<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HuitieController extends Controller
{
    public function index($id)
    {
    	$data=\DB::table('post')
				    ->join('users', 'users.id', '=', 'post.uid')
				    ->select('users.id','users.avatar','users.name','post.title','post.ctime','post.id', 'post.uid','post.content','post.headimg')
				    ->where('post.id','=',$id)->get();


		    $res=\DB::table('reply')
	    	 			->join('users','users.id','=','reply.hid')
	    	 			->select('users.id','users.name','users.avatar','reply.content','reply.ctime')
	    	 			->where('reply.tid','=',$id)->get();
	    	 		// dd($res);
    	
    	// return view('home.tiezi.xiangqing',['res'=>$res]);
		    // dd($data[0]);
    	return view('home.tiezi.xiangqing',['data'=>$data[0],'res'=>$res]);
    }

    //帖子的评论方法
    public function pinglun(Request $request)
    {
    	 $data =$request->except('_token');
    	 $time=date('Y-m-d H:m:s');
    	 $data['ctime']=$time;

    	
    	 $id=\DB::table('reply')->insertGetId($data);

    
   
    	

    	 if($id)
	        {
	            return back()->with(['info'=>'评论成功']);
	        }else
	        {
	            return back()->with(['info'=>'添加失败']);
	        }


}
	//点赞
	public  function dianzan(Request $request)
	{
		// return "qqqqqqqqqqqqqq";/
		return response()->json($request->all());
	}


	//收藏
	public function shoucang()
	{
		return "进入收藏方法";
	}


}
