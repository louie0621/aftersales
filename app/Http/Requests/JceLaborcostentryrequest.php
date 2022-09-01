<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JceLaborcostentryrequest extends FormRequest
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
            'laborcost_no' => ['required', 'integer'],
            'laborcost_id' => ['required', 'string', 'max:255'],
            'quantity' => ['required', 'string', 'max:255'],
            'amount' => ['required', 'string', 'max:255']
        ];
    }
    protected function prepareForValidation()
    {
        $this->merge([
            'laborcost_no' => strip_tags($this->laborcost_no),
            'laborcost_id' => strip_tags($this->laborcost_id),
            'quantity' => strip_tags($this->quantity),
            'amount' => strip_tags($this->amount)
        ]);
    }
}
