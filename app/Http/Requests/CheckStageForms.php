<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckStageForms extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'stage.name' => 'required|alpha_num_dash',
            'stage.priority' => 'required|integer',
            'stage.start' => 'required|date',
            'stage.end' => 'nullable|date',
            'stage.status' => 'required',
            'stage.target_id' => 'required|integer',
        ];
    }
}