<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Failurecoderequest extends FormRequest
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
            'failure_code' => ['required', 'string', 'max:255', 'unique:config_failure_code']

        ];
    }
    protected function prepareForValidation()
    {
        $this->merge([
            'failure_code' => strip_tags($this->failure_code)
        ]);
    }
}
