<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class LoginPostRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email'=>'required|email',
            'password'=>'required|regex:/^\w{6,18}$/'
        ];
    }

     /**
        * 获取已定义验证规则的错误消息。
        *
        * @return array
        */
        public function messages()
        {
        return [
                'email.required' => '邮箱是必填的',
                'email.email'=>'邮箱格式不正确',
                'password.required'=>'密码是必填的',
                'password.regex'=>'密码6到18位',
             
                ];
        }
}
