<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SiteData extends FormRequest
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
        'site_name'=>'required|max:200',
        'rep_name'=>'required|max:200',
        'started_at'=>'required|date',
        'address'=>'required|max:200',
        'detail'=>'max:200',
        'started_time' => 'required|date_format:H:i|',
        'end_time' => 'required|date_format:H:i|',
        ];
    }
}
