<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JcePartsentryrequest extends FormRequest
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
            'parts_no' => ['required', 'integer'],
            'parts_id' => ['required', 'string', 'max:255'],
            'quantity' => ['required', 'string', 'max:255'],
            'disc_percent' => ['string', 'max:255'],
            'disc_amt' => ['string', 'max:255'],
            'total_amt' => ['required','string', 'max:255']
        ];
    }
    protected function prepareForValidation()
    {
        $this->merge([
            'parts_no' => strip_tags($this->parts_no),
            'parts_id' => strip_tags($this->parts_id),
            'quantity' => strip_tags($this->quantity),
            'disc_percent' => strip_tags($this->disc_percent),
            'disc_amt' => strip_tags($this->disc_amt),
            'total_amt' => strip_tags($this->total_amt)
        ]);
    }
}
