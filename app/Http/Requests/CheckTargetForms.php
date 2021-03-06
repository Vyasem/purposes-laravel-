<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckTargetForms extends FormRequest
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
            'target.name' => 'required',
            'target.start' => 'required',
            'target.text' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Поле :attribute обязательно к заполнению',
        ];
    }

    public function attributes()
    {
        return [
            'target.name' => '"Название"',
            'target.start' => '"Дата начала"',
            'target.text' => '"Описание"',
        ];
    }
}
