<?php

namespace App\Http\Middleware;

use Closure;

class AdminLoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //判断是否登陆
        if(session('id')){
            //直接进入下一次请求
            return $next($request);
        }else{
            return redirect('/admin/login')->with('error','请先登陆');
        }
        
    }
}
