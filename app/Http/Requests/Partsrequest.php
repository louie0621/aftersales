<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Partsrequest extends FormRequest
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
            'part_number' => ['required', 'string', 'max:255', 'unique:config_parts'],
            'description' => ['required', 'string', 'max:255'],
            'stocks' => ['required', 'string', 'max:255'],
            'price' => ['required', 'string', 'max:255']

        ];
    }
    protected function prepareForValidation()
    {
        $this->merge([
            'part_number' => strip_tags($this->part_number),
            'description' => strip_tags($this->description),
            'stocks' => strip_tags($this->stocks),
            'price' => strip_tags($this->price)
        ]);
    }
}
