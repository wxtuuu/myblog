<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Carbon\Carbon;

class BlogPostRequest extends Request
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
            'title' => 'required',
            'content'=>'required',
            'tag'=>'required',
        ];
    }
    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages(){
        return [
            'title.required' => '标题不能为空',
            'content.required'  => '内容不能为空',
            'tag.required'  => '标签不能为空',
        ];
    }
    /**
     * Return the fields and values to create a new post from
     */
    public function postFillData()
    {
        return [
            'title' => $this->title,
            'content' => $this->get('content'),
        ];
    }
}
