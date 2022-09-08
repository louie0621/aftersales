<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Defectcoderequest extends FormRequest
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
            //
            'defect_code' => ['required', 'string', 'max:255', 'unique:config_defect_code']

        ];
    }
    protected function prepareForValidation()
    {
        $this->merge([
            'defect_code' => strip_tags($this->defect_code)
        ]);
    }
}
