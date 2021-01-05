<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TodoRequest extends FormRequest
{
    public function authorize()
    {
        if($this->path() == 'todo/create' || $this->path() == 'todo/edit')
        {
            return true;
        } else {
            return false;
        }
    }


    public function rules()
    {
        return [
            'title' => 'required',
        ];
    }


    public function messages()
    {
        return [
            'title.required' => 'タイトルは必ず必要です。',
        ];    
    }
}
