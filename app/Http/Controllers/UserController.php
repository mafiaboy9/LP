<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //后台用户添加
    public function getAdd()
    {

    	//显示添加页面
    	return view('admin.admin.user.add');

    }

    //处理表单提交数据
    public function postInsert(Request $request)
    {
    	//表单验证 自动闪存
    	$this->validate($request, [
		    'username' => "required|regex:/\w{6,18}/",
		    'password' => 'required|regex:/\w{6,18}/',
		    'repassword' => 'required|same:password',
		    'email'=>'required|email',
		    'phone'=>'required|regex:/1[3-8\d{9}]/',
		],[
			'username.required'=>'用户名不能为空',
			'username.regex'=>'用户名6到18位',
			'password.required'=>'密码不能为空',
			'password.regex'=>'密码6到18位',
			'repassword.required'=>'确认密码不能为空',
			'repassword.same'=>'确认密码要和原密码一致',
			'password.regex'=>'确认密码6到18位',
			'email.required'=>'email不能为空',
			'email.email'=>'email格式不正确',
			'phone.required'=>'手机号不能为空',
			'phone.regex'=>'手机号6到18位',
		]

		);

    	//查看所有提交的数据
    	//dd($request->all());
    	//提取其他数据
    	$data=$request->only(['username','password','email','phone','account']);
    	//随机token
    	$data['token'] = str_random(50);
    	//状态为1
    	$data['status'] = 1;
    	//密码加密
    	$data['password'] = Hash::make($data['password']);

    	//处理图片上传
    	$data['pic'] = self::upload($request);
    	//dd($data);

    	//写入数据库
    	$res = DB::table('users')->insert($data);

    	//判断
    	if($res){
    		return redirect('/admin/user/index')->with('sucess','添加成功');
    	}else{
    		return back()->with('error','添加失败');
    	}
    }

    //显示用户
    public function getIndex(Request $request)
    {
    	//dd($request->all());
    	//查询数据库
    	//$users = DB::table('users')->get();

    	//获取分页
    	$num = $request->input('num',5);

    	//$users = DB::table('users')->simplePaginate(5);新版简易分页
    	//查询数据库 where条件
    	
    	 if($request->input('keywords')) {
    	 	 $users = DB::table('users')->where('username','like','%'.$request->input('keywords').'%')->paginate($num);
    	 }else{
    	 	 $users = DB::table('users')->paginate($num);
    	 }

    	
    
    	//解析模板 分配变量
    	return view('admin.admin.user.show',['users'=> $users,'request'=>$request->all()]);

    }

    //ajax 删除操作
    public function postDelete(Request $request)
    {
    	$id = $request->input('id');

    	//执行删除
    	$res = DB::table('users')->where('id',$id)->delete();

    	if($res){
    		echo 1;

    	}else{
    		echo 0;
    	}
    }

    //显示修改
    public function getEdit(Request $request)
    {
    	$id = $request->input('id');
    	//查询数据库
    	$user = DB::table('users')->where('id',$id)->first();
    	//dd($user);

    	
    	//解析模板 分配变量
    	return view('admin.admin.user.edit',['user'=>$user]);

    }

    //执行修改
    public function postUpdate(Request $request)
    {
    	//提取数据
    	$data = $request->except(['_token','id']);
    	//dd($data);
    	$id = $request->input('id');
    	//修改数据库
    	$res = DB::table('users')->where('id',$id)->update($data);
 
    	//判断
    	if($res){
    		return redirect('/admin/user/index')->with('sucess','修改成功');
    	}else{
    		return back()->with('error','修改失败');
    	}
    }


     public static function upload(Request $request)
    {
    	 //dd($request->all());

    	//文件上传的form表单中 必须有 enctype="multipart/form-data" 
    	//检测是否有上传文件
    	if($request->hasFile('pic')){
    		//文件名称
    		$name = md5(time()+rand(111111,8999999));
    		//文件后缀名获取
    		$suffix = $request->file('pic')->getClientOriginalExtension();
    		$arr = ['jpg','png'];
    		//判断文件上传类型
    		if(!in_array($suffix,$arr)){
    			echo '上传文件不符合要求';die;
    		}
    		//将指定文件移动到指定位置
    		$request->file('pic')->move('./uploads/', $name.'.'.$suffix);
    		//返回文件路径和名称
    		return '/uploads/'.$name.'.'.$suffix;
    	}
    }
}
