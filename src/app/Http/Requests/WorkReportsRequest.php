<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WorkReportsRequest extends FormRequest
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
            'employee_id' => 'required|integer',
            'work_date' => 'required|date',
            'work_time' => 'required|integer|min:0',
        ];
    }

    public function messages()
    {
        return[
            'employee_id.required' => '作業員IDを入力してください',
            'employee_id.integer' => '作業員IDは整数で入力してください',
            'work_date.required' => '作業日付を入力してください',
            'work_time.required' => '作業時間を入力してください',
            'work_time.integer' => '作業時間は数字で入力してください',
            'work_time.min' => '作業時間は０以上で入力してください',
        ];
    }
}
