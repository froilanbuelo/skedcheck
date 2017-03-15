<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceCreateRequest extends FormRequest
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
            'name' => 'required',
            'description' => 'required',
            'duration_hours' => 'required|numeric|min:0',
            'duration_minutes' => 'required|numeric|between:0,60|not_both_zero:duration_hours,duration_minutes',
        ];
    }
    public function messages(){
        return [
            'duration_minutes.not_both_zero' => 'Should not be both zero',
            'duration_hours.required' => 'Required',
            'duration_minutes.required' => 'Required',
        ];
    }
}
