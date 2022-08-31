<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Adduserrequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'username' => ['required', 'string', 'max:255'],
            'usertype' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'max:255'],
        ];
    }
    protected function prepareForValidation()
    {
        $this->merge([
            'name' => strip_tags($this->name),
            'email' => strip_tags($this->email),
            'username' => strip_tags($this->username),
            'usertype' => strip_tags($this->usertype),
            'password' => strip_tags($this->password)
        ]);
    }
}
