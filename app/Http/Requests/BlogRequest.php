<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        switch($this->method())
        {
            case 'POST':
            case 'PATCH':
            case 'PUT':
            {
                return [
                    'title' => 'required|min:2',
                    'body' => 'required|min:2',
                ];
            }
            case 'GET':
            case 'DELETE':
            default: 
            {
                return[];
            }
        }
    }

    public function messages()
    {
        return [
            'title.min' => '标题至少两个字符',
            'body.min' => '文章至少三个字符',
        ];
    }
}
