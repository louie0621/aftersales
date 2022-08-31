<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JceSrtcodeentryrequest extends FormRequest
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
            'srtcode_no' => ['required', 'integer'],
            'srt_code' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'working_unit' => ['required', 'string', 'max:255'],


        ];
    }
    protected function prepareForValidation()
    {
        $this->merge([
            'srtcode_no' => strip_tags($this->srtcode_no),
            'srt_code' => strip_tags($this->srt_code),
            'description' => strip_tags($this->description),
            'working_unit' => strip_tags($this->working_unit)
        ]);
    }
}
