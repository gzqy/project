<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});


//路由群组
Route::group(['middleware'=>'adminlogin'],function(){
	//后台主页
	Route::get('/admin/user/add','Admin\UserController@add');
	Route::get('/admin/index','Admin\IndexController@index');
	Route::post('/admin/user/insert','Admin\userController@insert');


	Route::get('/admin/user/edit/{id}',"Admin\UserController@edit");
	Route::post('/admin/user/update',"Admin\UserController@update");
	Route::get('/admin/user/delete/{id}',"Admin\UserController@delete");
	Route::get('/admin/user/index',"Admin\UserController@index");
});



//登录
Route::get('/admin/login',"Admin\LoginController@login");
Route::post('/admin/dologin',"Admin\LoginController@dologin");
Route::get('/admin/logout',"Admin\LoginController@logout");


//验证码
Route::get('/kit/captcha/{tmp}', 'Admin\KitController@captcha');


//ajax操作
Route::post('/admin/user/ajaxrename','Admin\UserController@ajaxRename');

//分类管理
Route::resource('/admin/category',"Admin\categoryController");

//发送邮件
Route::get('/send','Admin\MailController@send');

//忘记密码功能,
Route::get('/admin/forgot','Admin\ForgotController@forgot');
Route::post('/admin/sendemail','Admin\ForgotController@sendemail');
Route::get('/admin/link/{token}','Admin\ForgotController@link');
Route::get('/admin/newpass/{id}','Admin\ForgotController@newpass');
Route::get('/admin/info','Admin\ForgotController@info');
Route::post('/admin/updatepass','Admin\ForgotController@updatepass');