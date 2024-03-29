<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBooksRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'=>'required',
            'price'=>'required',
            'typebook_id'=>'required',
            'image'=>'mimis:jpeg,jpg,png',
        ];
    }

    public function messages(){
        return[
            'title.required' => 'กรุณากรอกชื่อ หนังสือ',
            'price.required' => 'กรุณากรอกราคา',
            'typebooks_id.required' => 'กรุณาเลือกหมวดหนังสือ',
            'image.mimes' => 'กรุณาเลือกไฟล์ภาพนามสกุล jpeg,jpg,png',

        ];

    }
}
