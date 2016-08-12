<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginPostRequest;
use Hash;
use DB;
use Mail;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Gregwar\Captcha\CaptchaBuilder;

class LoginController extends Controller
{
    //前台登陆页面显示
    public function getIndex()
    {
    	//显示前台登陆页面
    	return view('admin.home.login');
    }



    public function postDologin(Request $request)
    {
        //dd($request->all());
        //检测用户名是否存在
        $user = DB::table('users')
            ->where('username',$request->input('user'))
            ->first();
            //dd($user);



        if(!empty($user)){
            //检测密码是否一致
            if (Hash::check($request->input('pwd'),$user->password )) {
                //登陆成功
             
    
                session(['id'=>$user->id]);
                //跳转页面
                
                return redirect('/')->with('success','欢迎'.$user->username.'登陆小米商城');
        }else{
            return back()->with('error','用户名或密码不存在');
        }


        }else{
             return back()->with('error','用户名或密码不存在');
        }

    }


    //前台退出

   

   

   
}
