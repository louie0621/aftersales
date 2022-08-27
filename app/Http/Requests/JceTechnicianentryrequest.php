<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JceTechnicianentryrequest extends FormRequest
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
            'techentry_no' => ['required', 'integer'],
            'tech_id' => ['required', 'string', 'max:255']

        ];
    }
    protected function prepareForValidation()
    {
        $this->merge([
            'techentry_no' => strip_tags($this->techentry_no),
            'tech_id' => strip_tags($this->tech_id)
        ]);
    }
}
