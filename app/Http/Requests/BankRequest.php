<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BankRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'bank_name' => 'required',
            'account_no' => 'required',
            'branch' => 'required',
            'ifsc_code' => 'required',
            'account_holder_name'=>'required'
        ];
    }

    protected function getRedirectUrl()
    {
        return $this->redirector->getUrlGenerator()->previous() . '#bank';
    }

}
