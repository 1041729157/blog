<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserPasswordRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'password' => 'required|between:6,16|confirmed'
        ];
    }

    public function message()
    {
        return [
            'password.required' => '新密码不能为空',
            'password.between' => '新密码必须在6至16位之间' ,
            'password.confirmed' => '两次密码输入不一致'
        ];
    }
}
