<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class TagRequest extends Request
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
            'name'=>'required'
        ];
    }
    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages(){
        return [
            'name.required' => '标签名不能为空',
        ];
    }
    /**
     * Return the fields and values to create a new post from
     */
    public function postFillData()
    {
        return [
            'name' => $this->name,
        ];
    }
}
