<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckUpdate extends FormRequest
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
            'REG.LOGIN' => 'required|alpha_latin_num',
            'REG.PASSWORD' => 'nullable|min:6|confirmed',
            'REG.EMAIL' => 'email',
            'REG.NAME' => 'alpha',
        ];
    }
}
