<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactStroyRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'content' => 'required|min:20',
            'captcha' => 'required|captcha',
        ];
    }

    public function messages()
    {
        return [
            'content.required' => '内容不能为空',
            'content.min' => '内容最少为20个字符' 
            'captcha.required' => '验证码不能为空',
            'captcha.captcha' => '请输入正确的验证码',
        ];
    }
}
