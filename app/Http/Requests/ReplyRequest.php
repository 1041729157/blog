<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReplyRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'content' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'content.required' => '回复内容不能为空！',
        ];
    }
}
