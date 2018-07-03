<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|min:2|max:16',
            'email' => 'required|email',
            'content' => 'required|min:20',
            'captcha' => 'required|captcha',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '用户名不能为空',
            'name.min' => '用户名最少为2个字符',
            'email.required' => '邮箱不能为空',
            'email.email' => '请填写正确的邮箱',
            'content.required' => '内容不能为空',
            'content.min' => '内容最少为20个字符',
            'captcha.required' => '验证码不能为空',
            'captcha.captcha' => '请输入正确的验证码',
        ];
    }
}
