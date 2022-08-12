<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Customerrequest extends FormRequest
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
            'customercode' => ['required', 'string', 'max:255', 'unique:customers'],
            'customername' => ['required', 'string', 'max:255', 'unique:customers'],
            'address' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'state' => ['required', 'string', 'max:255'],
            'tin' => ['string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'contact' => ['required', 'string', 'max:255'],
            'email' => ['string', 'email', 'max:255'],
            'channelgroup' => ['string', 'max:255'],
            'paymenttermscode' => ['required', 'string', 'max:255'],
            'units' => ['required', 'string', 'max:255'],
            'creditlimit' => ['required', 'integer'],
            'brand' => ['required', 'string', 'max:255'],
        ];
        
    }
    protected function prepareForValidation()
    {
        $this->merge([
            'customercode' => strip_tags($this->customercode),
            'customername' => strip_tags($this->customername),
            'address' => strip_tags($this->address),
            'city' => strip_tags($this->city),
            'state' => strip_tags($this->state),
            'tin' => strip_tags($this->tin),
            'phone' => strip_tags($this->phone),
            'contact' => strip_tags($this->contact),
            'email' => strip_tags($this->email),
            'channelgroup' => strip_tags($this->channelgroup),
            'paymenttemscode' => strip_tags($this->paymenttermscode),
            'units' => strip_tags($this->units),
            'creditlimit' => strip_tags($this->creditlimit),
            'brand' => strip_tags($this->brand)
        ]);
    }
}
