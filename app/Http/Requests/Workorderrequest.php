<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Workorderrequest extends FormRequest
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
            'workorder_date' => ['required', 'string', 'max:255'],
            'jce_no' => ['required', 'string', 'max:255'],
            'workorder_no' => ['required', 'string', 'max:255'],
            'workorder_status' => ['required', 'string', 'max:255'],
            'job_summary' => ['required', 'string', 'max:255'],
            'repairstart' => ['required', 'string', 'max:255'],
            'repairend' => ['required', 'string', 'max:255'],
            'service_report' => ['required', 'string', 'max:255'],
            'smr' => ['required', 'string', 'max:255'],
            'machine_status' => ['required', 'string', 'max:255'],
            'servicemodel' => ['required', 'string', 'max:255'],
            'arrived_datetime' => ['required', 'string', 'max:255'],
            'plateno' => ['required', 'string', 'max:255'],
            'remarks' => ['required', 'string', 'max:255'],
            'special_instruction' => ['required', 'string', 'max:255'],
            'customer_name' => ['required', 'string', 'max:255'],
            'defect_code' => ['required', 'string', 'max:255'],
            'failure_code' => ['required', 'string', 'max:255'],
            'customer_request' => ['required', 'string', 'max:255'],
            'cause' => ['required', 'string', 'max:255'],
            'service_repair' => ['required', 'string', 'max:255'],
            'recommendation' => ['required', 'string', 'max:255'],
            'pac_no' => ['required', 'string', 'max:255'],
            'pac_total' => ['required', 'string', 'max:255'],
            'techact_no' => ['required', 'string', 'max:255'],
        ];
    }
    protected function prepareForValidation()
    {
        $this->merge([
            'workorder_date' => strip_tags($this->workorder_date),
            'jce_no' => strip_tags($this->jce_no),
            'workorder_no' => strip_tags($this->workorder_no),
            'workorder_status' => strip_tags($this->workorder_status),
            'job_summary' => strip_tags($this->job_summary),
            'repairstart' => strip_tags($this->repairstart),
            'repairend' => strip_tags($this->repairend),
            'service_report' => strip_tags($this->service_report),
            'smr' => strip_tags($this->smr),
            'machine_status' => strip_tags($this->machine_status),
            'servicemodel' => strip_tags($this->servicemodel),
            'arrived_datetime' => strip_tags($this->arrived_datetime),
            'plateno' => strip_tags($this->plateno),
            'remarks' => strip_tags($this->remarks),
            'special_instruction' => strip_tags($this->special_instruction),
            'customer_name' => strip_tags($this->customer_name),
            'defect_code' => strip_tags($this->defect_code),
            'failure_code' => strip_tags($this->failure_code),
            'customer_request' => strip_tags($this->customer_request),
            'cause' => strip_tags($this->cause),
            'service_repair' => strip_tags($this->service_repair),
            'recommendation' => strip_tags($this->recommendation),
            'pac_no' => strip_tags($this->pac_no),
            'pac_total' => strip_tags($this->pac_total),
            'techact_no' => strip_tags($this->techact_no)
        ]);
    }
}
