<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'username'=>'required|max:12',
            'password'=>'required|between:8,12|regex:/^[0-9a-zA-Z]*$/',
            'latitude'=>'nullable|integer|between:-90,90',
            'longitude'=>'nullable|integer|between:-180,180'
        ];
    }

    public function messages()
    {
        return[
            'username.required'=>'名前を入力してください。',
            'username.max'=>'名前を12文字以下で入力してください。',
            'password.required'=>'パスワードを入力してください。',
            'password.between'=>'パスワードは8文字以上12文字以下で入力してください。',
            'password.regex'=>'パスワードは半角英数字で入力してください。',
            'latitude.integer'=>'緯度は数字で入力してください',
            'latitude.between'=>'緯度は-90から90の間で入力してください。',
            'longitude.integer'=>'経度は数字で入力してください。',
            'longitude.between'=>'経度は-180から180の間で入力してください'
        ];
    }
}
