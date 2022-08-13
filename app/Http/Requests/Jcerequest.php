<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Jcerequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'incidentdatetime' => ['required', 'string', 'max:255'],
            'jce_number' => ['required', 'string', 'max:255', 'unique:jce'],
            'customer_id' => ['required', 'integer'],
            'contact_no' => ['required', 'string', 'max:255'],
            'equipment_id' => ['required', 'integer'],
            'dispatch_date' => ['required', 'string','max:255'],
            'work_area' => ['required', 'string', 'max:255'],
            'labor_amt' => ['required', 'string', 'max:255'],
            'srt_amt' => ['required', 'string', 'max:255'],
            'parts_amt' => ['required', 'string', 'max:255'],
            'job_type' => ['required', 'string', 'max:255'],
            'dealer' => ['required', 'string', 'max:255'],
            'job_site' => ['required', 'string', 'max:255'],
            'salestype' => ['required', 'string', 'max:255'],
            'complaint_request' => ['required', 'string', 'max:255'],
            'component' => ['required', 'string', 'max:255'],
            'typeofissue' => ['required', 'string', 'max:255'],
            'promised_datetime' => ['required', 'string', 'max:255'],
            'resolved' => ['required', 'string', 'max:255'],
            'paymentterms' => ['required', 'string', 'max:255'],
            'modeofpayment' => ['required', 'string', 'max:255'],
            'po_number' => ['required', 'string', 'max:255'],
            'engine_hours' => ['required', 'string', 'max:255'],
            'travel_days' => ['required', 'string', 'max:255'],
            'jce_type' => ['required', 'string', 'max:255'],
            'charge_to' => ['required', 'string', 'max:255'],
            'jcetypeparts' => ['required', 'string', 'max:255'],
            'chargetoparts' => ['required', 'string', 'max:255'],
            'srtcode_no' => ['required', 'integer'],
            'srtcode_total' => ['required', 'string', 'max:255'],
            'laborcost_no' => ['required', 'integer'],
            'laborcost_total' => ['required', 'string', 'max:255'],
            'parts_no' => ['required', 'integer'],
            'parts_total' => ['required', 'string', 'max:255'],
            'freight_cost' => ['required', 'string', 'max:255'],
            'amount_due' => ['required', 'string', 'max:255'],
            'remarks' => ['required', 'string', 'max:255'],
            'validity_date' => ['required', 'string', 'max:255'],

        ];
        
    }
    protected function prepareForValidation()
    {
        $this->merge([
            'incidentdatetime' => strip_tags($this->incidentdatetime),
            'jce_number' => strip_tags($this->jce_number),
            'customer_id' => strip_tags($this->customer_id),
            'contact_no' => strip_tags($this->contact_no),
            'equipment_id' => strip_tags($this->equipment_id),
            'dispatch_date' => strip_tags($this->dispatch_date),
            'work_area' => strip_tags($this->work_area),
            'labor_amt' => strip_tags($this->labor_amt),
            'srt_amt' => strip_tags($this->srt_amt),
            'parts_amt' => strip_tags($this->parts_amt),
            'job_type' => strip_tags($this->job_type),
            'dealer' => strip_tags($this->dealer),
            'job_site' => strip_tags($this->job_site),
            'salestype' => strip_tags($this->salestype),
            'complaint_request' => strip_tags($this->complaint_request),
            'component' => strip_tags($this->component),
            'typeofissue' => strip_tags($this->typeofissue),
            'promised_datetime' => strip_tags($this->promised_datetime),
            'resolved' => strip_tags($this->resolved),
            'paymentterms' => strip_tags($this->paymentterms),
            'modeofpayment' => strip_tags($this->modeofpayment),
            'po_number' => strip_tags($this->po_number),
            'engine_hours' => strip_tags($this->engine_hours),
            'travel_days' => strip_tags($this->travel_days),
            'jce_type' => strip_tags($this->jce_type),
            'charge_to' => strip_tags($this->charge_to),
            'jcetypeparts' => strip_tags($this->jcetypeparts),
            'chargetoparts' => strip_tags($this->chargetoparts),
            'srtcode_no' => strip_tags($this->srtcode_no),
            'srtcode_total' => strip_tags($this->srtcode_total),
            'laborcost_no' => strip_tags($this->laborcost_no),
            'laborcost_total' => strip_tags($this->laborcost_total),
            'parts_no' => strip_tags($this->parts_no),
            'parts_total' => strip_tags($this->parts_total),
            'freight_cost' => strip_tags($this->freight_cost),
            'amount_due' => strip_tags($this->amount_due),
            'remarks' => strip_tags($this->remarks),
            'validity_date' => strip_tags($this->validity_date)
        ]);
    }
}
