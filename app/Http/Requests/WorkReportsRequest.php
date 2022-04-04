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
     * @return array
     */
    public function rules()
    {
        return [
            //add
            'employee_id'=>'required|integer',
            'date'=>'required|date',
            'start_time'=>'required',
            'end_time'=>'required',
            'summary'=>'required',
        ];
    }
    public function message(){
        return [
            'employee_id.required' => '従業員IDを入力してください。',
            'date.required' => '日付を入力してください。',
            'start_time.required'=>'開始時刻を入力してください。',
            'end_time.required'=>'終了時刻を入力してください。',
            'summary.required'=>'概要を入力してください。',
        ];
    }
}
