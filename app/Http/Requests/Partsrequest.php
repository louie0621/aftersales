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
            'item_category_code' => ['required', 'string', 'max:255'],
            'uom' => ['required', 'string', 'max:255'],
            'srp' => ['required', 'string', 'max:255'],
            'status' => ['required', 'string', 'max:255']
        ];
    }
    protected function prepareForValidation()
    {
        $this->merge([
            'part_number' => strip_tags($this->part_number),
            'description' => strip_tags($this->description),
            'item_category_code' => strip_tags($this->item_category_code),
            'uom' => strip_tags($this->uom),
            'srp' => strip_tags($this->srp),
            'status' => strip_tags($this->status)
        ]);
    }
}
