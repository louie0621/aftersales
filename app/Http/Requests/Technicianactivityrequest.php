<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Technicianactivityrequest extends FormRequest
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
            'techact_no' => ['required', 'string', 'max:255'],
            'activity_date' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'start_time' => ['required', 'string', 'max:255'],
            'end_time' => ['required', 'string', 'max:255'],
            'man_hour' => ['required', 'string', 'max:255'],
            'location_from' => ['required', 'string', 'max:255'],
            'location_to' => ['required', 'string', 'max:255'],
            'odo_start' => ['required', 'string', 'max:255'],
            'odo_end' => ['required', 'string', 'max:255'],
            'km_used' => ['required', 'string', 'max:255'],

        ];
    }
    protected function prepareForValidation()
    {
        $this->merge([
            'techact_no' => strip_tags($this->techact_no),
            'activity_date' => strip_tags($this->activity_date),
            'description' => strip_tags($this->description),
            'start_time' => strip_tags($this->start_time),
            'end_time' => strip_tags($this->end_time),
            'man_hour' => strip_tags($this->man_hour),
            'location_from' => strip_tags($this->location_from),
            'location_to' => strip_tags($this->location_to),
            'odo_start' => strip_tags($this->odo_start),
            'odo_end' => strip_tags($this->odo_end),
            'km_used' => strip_tags($this->km_used)
        ]);
    }
}
