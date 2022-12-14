<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Workorderstatusrequest extends FormRequest
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
            'workorderstatus' => ['required', 'string', 'max:255','unique:config_workorderstatus']
            
        ];
    }
    protected function prepareForValidation()
    {
        $this->merge([
            'workorderstatus' => strip_tags($this->workorderstatus)
        ]);
    }
}
