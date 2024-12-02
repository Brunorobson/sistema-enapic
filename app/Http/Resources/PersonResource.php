<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PersonResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'uuid'             => $this->uuid,
            'person_type_id'   => $this->person_type_id,
            'portfolio_id'     => $this->customer_portfolio_id,
            'name'             => $this->name,
            'alias'            => $this->alias,
            'cpf_cnpj'         => $this->cpf_cnpj,
            'rg_ie'            => $this->rg_ie,
            'gender_id'        => $this->gender_id,
            'im'               => $this->im,
            'responsible_name' => $this->responsible_name,
            'responsible_cpf'  => $this->responsible_cpf,
            'note'             => $this->note,
            'active'           => $this->active == 1 ? true : false,
            'address'          => $this->address() != null ? new AddressResource($this->address()) : null,
            'email'            => $this->email() != null ? $this->email()->address : null,
            'phone'            => $this->phone() != null ? $this->phone()->number : null,
        ];
    }
}
