<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => 'required|alpha|min:3|max:25',
            'middle_name' => 'required|alpha|min:3|max:25',
            'last_name' => 'required|alpha|min:3|max:25',
            'date_of_birthday' => 'required|date',
            'group_id' => 'required',
        ];
    }
}
