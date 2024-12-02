<?php

namespace App\Http\Requests;

use App\Rules\PersonCpfCnpjUnique;
use Illuminate\Foundation\Http\FormRequest;

class PersonRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'person_type_id' => 'required',
            'customer_portfolio_id' => 'required',
            'name'           => 'required|string|min:3',
            'alias'          => 'nullable|string|min:3',
            'cpf_cnpj' => [
                'required', 
                'cpf_cnpj', 
                new PersonCpfCnpjUnique(
                    null, 
                    (isset($this->person_type_id) and $this->person_type_id == 1) ? 'cpf' : 'cnpj'
                ),
            ],
            'rg_ie'            => 'nullable',
            'gender_id'        => 'nullable',
            'im'               => 'nullable',
            'responsible_name' => 'nullable|string|min:3',
            'responsible_cpf'  => 'nullable|cpf',
            'note'             => 'nullable|string|min:3',
            'active'           => 'nullable',

            'state_id'      => 'required',
            'city'          => 'required',
            'zip_code'      => 'required|string|min:8',
            'street'        => 'required|string|min:3',
            'number'        => 'required',
            'complement'    => 'nullable',
            'neighborhood'  => 'required|string|min:3',
            'reference'     => 'nullable',
            'latitude'      => 'nullable',
            'longitude'     => 'nullable',
            'altitude'      => 'nullable',

            'phone'         => 'nullable',
            'email'         => 'nullable|email',

        ];
    }
}
