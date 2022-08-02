<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'subject' => 'required|min:5|max:100',
            'name' => 'required',
            'message' => 'required|min:15|max:500',
            'email' => 'required|email|min:5'
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'нікнейм',
        ];
    }
    public function messages(){
        return[
            'name.required'=>'Поле імя обов`язкове'
        ];
    }
}
