<?php

namespace App\Http\Requests;
use App\Http\Requests\Request;

class WorkExperienceRequest extends Request
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
        $rules = [
            'company_name' => 'required',
            'from_date' => 'required|date|before_equal:to_date',
            'to_date' => 'required|date',
            'post' => 'required'
        ];
        return $rules;
    }
}
