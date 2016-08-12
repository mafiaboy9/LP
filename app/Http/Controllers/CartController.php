<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;
use App\Http\Requests;
use App\Models\Goods;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
	//后台首页
    public function insert(Request $request)
    {
    	//dd($request->all());
    	$data = $request->only(['id']);


    	//将当前数据压入session中
    	$request->session()->push('cart',$data);


    	return redirect('/cart/index');
    }

    //检测商品是否存在
    /*public function checkchart()
    {
    	//读取购物车信息
    	$goods = session('cart');
    	//购物车如果为空 返回false
    	if(empty($goods)){
    		return false;
    	} 

    	//有数据
    	foreach($goods as $k => $v){
    		if($v['id'] == $id){
    			//商品存在
    			return true;
    		}
    	}
    	//商品不存在 
    	return false;
    }*/

    //购物车列表页
    public function index()
    {
    	$goods = session('cart');
    	//根据商品id进行查询
    	$data = [];
    	if(!empty($goods)){
    		foreach($goods as $k=>$v){
    			$tmp = Goods::find($v['id']);
    			//$tmp['num'] = $v['num'];
    			$data = $tmp;
    		}
    	}


    	//解析模板 分配变量
    	return view('cart.index',['carts'=>$data]);


    }

    //清空购物车
    public function clear(Request $request)
    {
    	$request->session()->flush();
    }

}
