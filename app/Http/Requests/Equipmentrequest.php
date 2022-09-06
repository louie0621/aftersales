<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Equipmentrequest extends FormRequest
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
            'serialnumber' => ['required', 'string', 'max:255', 'unique:equipment'],
            'vehiclemodel' => ['required', 'string', 'max:255'],
            'engineno' => ['required', 'string', 'max:255'],
            'brand' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'type' => ['required', 'string', 'max:255'],
            'branch' => ['required', 'string', 'max:255'],
            'unit_status' => ['required', 'string', 'max:255'],
            'warrantystart' => ['required', 'date'],
            'warrantyend' => ['required', 'date'],
            'endcustomer' => ['required', 'string', 'max:255'],
            'registrationnumber' => ['required', 'string', 'max:255'],
            'endcustomername' => ['required', 'string', 'max:255'],
            'endcustomeraddress' => ['required', 'string', 'max:255'],
            'endcustomercity' => ['required', 'string', 'max:255'],
            'endcustomerstate' => ['required', 'string', 'max:255'],
            'endcustomercountry' => ['required', 'string', 'max:255'],
            'navcustomercode' => ['required', 'string', 'max:255'],
        ];
        
    }
    protected function prepareForValidation()
    {
        $this->merge([
            'serialnumber' => strip_tags($this->serialnumber),
            'vehiclemodel' => strip_tags($this->vehiclemodel),
            'engineno' => strip_tags($this->engineno),
            'brand' => strip_tags($this->brand),
            'description' => strip_tags($this->description),
            'type' => strip_tags($this->type),
            'branch' => strip_tags($this->branch),
            'unit_status' => strip_tags($this->unit_status),
            'warrantystart' => strip_tags($this->warrantystart),
            'warrantyend' => strip_tags($this->warrantyend),
            'endcustomer' => strip_tags($this->endcustomer),
            'registrationnumber' => strip_tags($this->registrationnumber),
            'endcustomername' => strip_tags($this->endcustomername),
            'endcustomeraddress' => strip_tags($this->endcustomeraddress),
            'endcustomercity' => strip_tags($this->endcustomercity),
            'endcustomerstate' => strip_tags($this->endcustomerstate),
            'endcustomercountry' => strip_tags($this->endcustomercountry),
            'navcustomercode' => strip_tags($this->navcustomercode),
        ]);
    }
}
