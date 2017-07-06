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

Route::get('/admin/user/delete/{id}',"Admin\UserController@del");

Route::get('/admin/user/index',"Admin\UserController@index");


//网站配置
Route::get('/admin/pz','Admin\PeiZhiController@pz');
Route::get('/admin/wzxg','Admin\PeiZhiController@xg');
Route::post('/admin/wzxg','Admin\PeiZhiController@doxg');
Route::get('/admin/peizhi/pz','Admin\PeiZhiController@pz');



//广告管理

//广告添加
Route::get('/admin/gg','Admin\GuangGaoController@gg');

//广告列表
Route::get('/admin/gg/list','Admin\GuangGaoController@list');

//广告删除
Route::get('/admin/gg/del/{id}','Admin\GuangGaoController@del');

//广告的修改
Route::get('/admin/gg/xg','Admin\GuangGaoController@xg');

Route::post('/admin/gg/xg','Admin\GuangGaoController@doxg');

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

