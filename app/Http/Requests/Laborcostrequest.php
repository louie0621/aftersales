<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Laborcostrequest extends FormRequest
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
            'description' => ['required', 'string', 'max:255'],
            'rate' => ['required', 'string', 'max:255']
            
        ];
    }
    protected function prepareForValidation()
    {
        $this->merge([
            'description' => strip_tags($this->description),
            'rate' => strip_tags($this->rate)
        ]);
    }
}
