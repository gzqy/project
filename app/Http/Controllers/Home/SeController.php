<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SeController extends Controller
{
    //
    public function index(){
    	return view('home.se.index');
    }

    public function dose(Request $request){
    	$data = $request->except('_token');
    	

    	$res = \DB::table('type')->where('ftitle','like','%'.$data['ftitle'].'%')->first();
    	// dd($res);
    	// $res = \DB::table('post')->where('ftitle',$res->id)->get();
    	if(!$res){
    		return back()->with(['info' =>'无相关信息']);
    	}


    	//dd($request->all());
        $num=$request->input('num',10);
        
       
        //查询数据库

        $data=\DB::table('post')->where('tid','like','%'.$res->id.'%')->paginate($num);
        //dd($data);

        // return view('admin.user.index',['request'=>$request->all(),'title'=>'搜索列表','data'=>$data]);
    	
	
    }
}
