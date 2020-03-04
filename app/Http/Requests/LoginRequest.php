<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // trueにする
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'bail|required',
            'password' => 'bail|required|min:8',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => '入力必須です',
            'password.required' => '入力必須です',
            'password.min' => '8文字以上で入力してください',
        ];
    }
}
