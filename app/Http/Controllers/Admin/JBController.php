<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JBController extends Controller
{
    //jb
    public function jb()
    {
    	$data = \DB::table('jb')->get();
    	return view('admin.jubao.jb',['data'=>$data]);
    }



      public function delete($id)
   		 {

    	$dd= \DB::table('jb')->where('id',$id)->delete();

    	if($dd)
    	{
    		return redirect('/admin/jubao')->with(['info'=>'删除成功']);
    	}else{
    		
    		return back()->with(['info'=>'删除失败']);
    	}	
    }



    public function index(Request $request)
    {

        $res=$request->except('_token');
   

        $dd = \DB::table('jb') -> insert($res);

        return view('admin.jubao.list');

        
    }


}
