<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SampleRequest extends FormRequest
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
            'title' => 'required|max:20',
            'body' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'title は必須項目です。',
            'title.max' => 'title は20文字以内です。',
            'body.required' => 'body は必須項目です。',
        ];
    }
}
