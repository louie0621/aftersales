<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Jobtyperequest extends FormRequest
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
            'jobtype' => ['required', 'string', 'max:255', 'unique:config_jobtype']
            
        ];
    }
    protected function prepareForValidation()
    {
        $this->merge([
            'jobtype' => strip_tags($this->jobtype)
        ]);
    }
}
