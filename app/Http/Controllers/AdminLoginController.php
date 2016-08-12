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

class AdminLoginController extends Controller
{
    //后台登陆页面显示
    public function getIndex()
    {
    	//显示后台登陆页面
    	return view('admin.admin.login');
    }



    public function postDologin(Request $request)
    {
        //dd($request->all());
        //检测用户名是否存在
        $user = DB::table('users')
            ->where('username',$request->input('username'))
            ->first();
            //dd($user);



        if(!empty($user)){
            //检测密码是否一致
            if (Hash::check($request->input('password'),$user->password )) {
                //登陆成功
                session(['id'=>$user->id]);
                //跳转页面
                return redirect('/admin')->with('success','欢迎'.$user->username.'登陆小米商城');
        }else{
            return back()->with('error','用户名或密码不存在');
        }


        }else{
             return back()->with('error','用户名或密码不存在');
        }

    }


    //后台退出

    //前台注册
    public function register()
    {
    
        //注册页面显示
        return view('admin.home.register');
    }

    //处理注册
    public function doregister(LoginPostRequest $request)
    {
        //检测验证码是否正确
        /*if($request->input('vcode') != session('Vode')){
            return back()->with('error','验证码不正确');
        }*/


        //处理数据
        $data = $request->only(['email','password']);
        $data['password'] = Hash::make($data['password']);
        $data['token'] = str_random(50);
        $data['status'] = 1;
   

        //执行插入
        $id = DB::table('users')->insertGetId($data);
       

        if($id){
            //注册成功发送激活邮件
            $this->sendemail($id,$data['token'],$request->input('email'));
            return view('admin.home.success');
        }else{
            return back()->with('error','注册失败请联系管理员');
        }


    }

    

    //邮件测试
    public function sendemail($id,$token,$email)
    {   
        
        //发送纯文本
        /*Mail::raw('小米商城欢迎你注册请点击.即可获取大量资源...', function ($message) {
        //设置邮件标题
        $message->subject('注册激活邮件');
        //发送给谁
        $message->to('1594367526@qq.com');
        });*/

        //发送模板][[.]]
        Mail::send('email.index', ['id'=>$id,'token'=>$token,'email'=>$email], function ($message)use($email) {
            $message->to($email)->subject('激活邮件');
        });

        
        
    }


    public function jihuo(Request $request)
    {
        //echo '欢迎激活';
        //提取id
        $id = $request->input('id');

        $user = DB::table('users')->where('id',$id)->first();

        if($user){
            if($request->input('token') == $user->token){
                $arr = ['status'=>2,'token'=>str_random(50)];
                if(DB::table('users')->where('id',$id)->update($arr)){
                    echo '激活成功';
                }else{
                    echo '激活失败';
                }
            }else{
                echo '链接已经失效';
            }

        }else{
            echo'没有查询到您的信息';
        }



    }

    //验证码
    public function getVcode()
    {
        ob_clean();//清除输出缓存区的内容
        //生成验证码图片的Builder对象，配置相应属性
        $builder = new CaptchaBuilder;
        //可以设置图片宽高及字体
        $builder->build($width = 100, $height = 40, $font = null);
        //获取验证码的内容
        $phrase = $builder->getPhrase();

        //把内容存入session
        session(['Vcode'=>$phrase]);
        //生成图片
        header("Cache-Control: no-cache, must-revalidate");
        header('Content-Type: image/jpeg');
        $builder->output();
        // die;
    }

}
