<?php

namespace App\Livewire\Forms;

use App\Helpers\AppHelper;
use App\Models\Plan\Plan;
use Livewire\Attributes\Validate;
use Livewire\Form;

class PlanModalForm extends Form
{
    public ?Plan $object;

    #[Validate('required|min:3', as: 'titulo')]
    public ?string $title = null;

    #[Validate('required', as: 'dias')]
    public ?string $days = null;

    #[Validate('required', as: 'fretes')]
    public ?string $freights = null;

    #[Validate('required', as: 'valor')]
    public ?string $value = null;

    #[Validate('nullable', as: 'gratis')]
    public ?bool $free = null;

    #[Validate('nullable', as: 'ativo')]
    public ?bool $active = true;

    public function init()
    {
        $this->reset();
    }

    public function setObject(Plan $object)
    {
        $this->object   = $object;
        $this->title    = $object->title;
        $this->days     = $object->days;
        $this->freights = $object->freights;
        $this->free     = $object->free   == 'Y' ? true : false;
        $this->active   = $object->active == 'Y' ? true : false;
        $this->value    = AppHelper::formatCurrency($object->value);
    }

    public function store()
    {
        $this->withValidator(function ($validator) {
            $validator->after(function ($validator) {
                if ($this->free and !Plan::uniqueFree($this->object->id)) {
                    $validator->errors()->add('free', 'Já existe um plano marcado como grátis');
                }
            });
        });

        $data = $this->validate();

        $data['value']  = AppHelper::formatDouble($data['value']);
        $data['free']   = $data['free'] ? 'Y' : 'N';
        $data['active'] = $data['active'] ? 'Y' : 'N';

        if (empty($this->object->id)) {
            Plan::create($data);
        } else {
            $this->object->update($data);
        }

        $this->reset();
    }
}
