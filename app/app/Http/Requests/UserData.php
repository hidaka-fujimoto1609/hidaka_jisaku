<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserData extends FormRequest
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
            'birth'=>'required|date',
            'department_name'=>'required|max:100',
            'health_check_date'=>'required|date',
            'contents'=>'required',
            'image_path'=>'required',
        ];
    }
}
