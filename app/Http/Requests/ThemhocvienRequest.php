<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ThemhocvienRequest extends FormRequest
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
           
            'fullname'     => 'required',
        ];
    }

    public function messages()
    {
        return [
         
            'fullname.required'     => 'Bạn chưa nhập họ tên',
        
        ];
    }
}
