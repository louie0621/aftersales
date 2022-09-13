<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Partsandconsumablerequest extends FormRequest
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
            'pac_no' => ['required', 'string', 'max:255'],
            'part_id' => ['required', 'string', 'max:255'],
            'quantity' => ['required', 'string', 'max:255'],
            'total' => ['required', 'string', 'max:255']

        ];
    }
    protected function prepareForValidation()
    {
        $this->merge([
            'pac_no' => strip_tags($this->pac_no),
            'part_id' => strip_tags($this->part_id),
            'quantity' => strip_tags($this->quantity),
            'total' => strip_tags($this->total)
        ]);
    }
}
