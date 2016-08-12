<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



//路由组
Route::group(['middleware'=>'adminlogin'],function(){
//后台首页控制器
Route::Controller('/admin/','AdminController');
//后台用户管理控制器
Route::Controller('/admin/user','UserController');

});

//后台登录控制器
Route::Controller('/admin/login','AdminLoginController');
//前台登陆控制器
Route::Controller('/home/login','LoginController');


//注册页面
Route::get('/register','AdminLoginController@register');
Route::post('/doregister','AdminLoginController@doregister');


//邮箱测试
Route::get('/sendemail','AdminLoginController@sendemail');

//激活
Route::get('/jihuo','AdminLoginController@jihuo');


//购物车控制器
Route::post('/cart/insert','CartController@insert');
//购物车列表
Route::get('/cart/index','CartController@index');
//清空购物车
Route::get('/cart/clear','CartController@clear');




