<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Techactivityrequest extends FormRequest
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
            'tech_activity' => ['required', 'string', 'max:255', 'unique:config_tech_activity']

        ];
    }
    protected function prepareForValidation()
    {
        $this->merge([
            'tech_activity' => strip_tags($this->tech_activity)
        ]);
    }
}