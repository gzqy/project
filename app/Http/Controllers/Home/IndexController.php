<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //后台主页
    public function index()
    {
    	echo'前台主页';
    	// return view('home.login.login');
    }
}
