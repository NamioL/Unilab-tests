<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createProductValidator extends FormRequest
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
    public function messages()
{
    return [
        'title.required' => 'A title is not required',
        'title.max' => 'maximum number of letters are 255'
    ];
}
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|max:255',
            'description' => 'required'
        ];
    }
}
