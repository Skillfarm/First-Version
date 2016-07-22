<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AddWorkRequest extends Request
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
            'subject' => 'required',
            'detail' => 'required|min:5',
            'department_id' => 'required',
            'course_id' => 'required',
            'dead_time' => 'required|date'
        ];
    }
}
